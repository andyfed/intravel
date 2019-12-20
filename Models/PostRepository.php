<?php

namespace Models;
use DB\DBconn;
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

    public $dsn = "mysql:host=localhost;dbname=DB1";

    //сделать метод-генератор ссылок миниатюры из

    public function createRepo(){
        $this->setCurrentMoment();
        $this->getAbsLastId();
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
    private function getAbsLastId(): void {
        global $lastId;

        $pdo = new \PDO($this->dsn,'root','root');
        $sql = 'SELECT MAX(post_id) FROM Posts';
        $query = $pdo->prepare($sql);
        $lastId = $query->fetch();
    }

    //возвращает массив из #id последних 20-ти  постов              FIX SQL!
    function createLastIdList() {

        if ($this->pageNumber > 1) {
            $this->lastId = $this->lastIdList[19]; // для 2-й страницы и следующих - переопределяем $lastId (берем из существующего списка)

            //получает массив последних postId меньших чем текущий $lastId ()
            $pdo = new \PDO($this->dsn,'root','root');
            $sql ='SELECT post_id FROM Posts WHERE post_id < :lastId LIMIT :picsOnPage';
            $query = $pdo->prepare($sql);
            $query->execute([':lastId'=>$this->lastId, ':picsOnPage'=>$this->picsOnPage]);
            $this->lastIdList = $query->fetchAll();
            //деструктор PDO сам закрывает соединение
        } else {
            //заполнение списка последних 20-ти id постов начиная с $lastId (включительно)
            $pdo = new \PDO($this->dsn,'root','root');
            $sql ='SELECT post_id FROM Posts WHERE post_id <= :lastId LIMIT :picsOnPage';
            $query = $pdo->prepare($sql);
            $this->lastIdList = $query->execute([':lastId'=>$this->lastId, ':picsOnPage'=>$this->picsOnPage]);
            //деструктор PDO сам закрывает соединение
        }
    }

    public function getLastIdList(){  //не факт, что будет возвращать корректные значения
        return $this->lastIdList;
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