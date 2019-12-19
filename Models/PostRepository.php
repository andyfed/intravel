<?php

namespace Models;
use DB\DbConnect;
/* Объект класса postRepository создается относительно фиксированного времени первичного запроса
 * переход на следующую страницу галереи не учитывает записи, добавленные после времени
 * первичного запроса. Возврат на 1-ю страницу обновит время первичного запроса.
 *
 * ПОРЯДОК ВЫЗОВА НАРУШЕН!
 *
 */
class PostRepository {
    private $listOfPosts = [];      //массив постов, главное возвращаемое значение //function getListOfPosts($pageNumber)

    private $currentMoment;         //первичное время запроса
    private $lastId = 0;            //int определяется динамически
    private $lastIdList = [];       //int[] определяется динамически, зависит от $lastId

    private $pageNumber = 1;        // нужен/ позже приходит в параметре запроса
    private $picsOnPage = 20;       //количество изображений на 1 странице


    //сделать метод-генератор ссылок миниатюры из

    public function createRepo(){
        $this->setCurrentMoment();
        $this->getLastId();
        $this->createLastIdList();
        //$this->createListOfPosts(1);
    }

    function __construct() {
        $this->createRepo();
    }

    //фиксируем время первичного запроса
    public function setCurrentMoment(): void {
        $this->currentMoment = time();
    }

    //берем крайний postId в таблице на время первичного запроса
    private function getLastId(): void {
        global $lastId;

        //include_once "\DB\DbConnect.php";               //НАСТРОИТЬ КОННЕКТ с БД этот файд не находит
        $lastId = 'SELECT 1 id FROM Posts WHERE date <= '.$this->currentMoment;
    }

    //возвращает массив из #id последних 20-ти  постов              //НИГДЕ НЕТ!
    function createLastIdList() {

        if ($this->pageNumber > 1) {
            $this->lastId = $this->lastIdList[19]; // для 2-й страницы и следующих - переопределяем $lastId (берем из существующего списка)

            include_once "../DB/DbConnect.php";

            $query = 'SELECT id FROM Posts WHERE id < '.$this->lastId.' LIMIT '.$this->picsOnPage;
            //получает массив последних postId меньших чем текущий $lastId ()
            $this->lastIdList = mysql_getcolumn($query, TRUE);

        } else {
            //заполнение списка последних 20-ти id постов начиная с $lastId (включительно)
            $query = 'SELECT id FROM Posts WHERE id <= '.$this->lastId.' LIMIT '.$this->picsOnPage;
            $this->lastIdList = mysql_getcolumn($query, TRUE);
        }
    }

    public function getLastIdList(){  //не факт, что будет возвращать корректные значения
        return $this->lastIdList;                                  //НИГДЕ НЕТ!
    }

    //заполняет массив значениями по мере запроса следующих страниц
    private function createListOfPosts($pageNumber) {

        for ($i = ($pageNumber-1)* $this->picsOnPage +1; $i <= $pageNumber*$this->picsOnPage; $i++) {
            // помещаем в ассоциативный массив объекты класса Post созданные по id из списка последних
            $this->listOfPosts[$this->lastIdList[$i]] = new Post($this->lastIdList[$i]);
        }
    }

    //главный метод класса, возвращает итоговое значение, инициирует дозаполнение массива $listOfPosts по мере запросов
    //генерирует на лету, чтобы не хранить постоянно большой массив объектов в памяти
    public function getListOfPosts($pageNumber): array {
        $this->pageNumber = $pageNumber;
        $this->createListOfPosts($this->pageNumber);
        return $this->listOfPosts;
    }
}