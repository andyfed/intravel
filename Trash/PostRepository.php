<?php

namespace Models;
use DB\DB;
use PDO;
/*
 * Объект класса postRepository создается относительно фиксированного времени первичного запроса
 * переход на следующую страницу галереи не учитывает записи, добавленные после времени
 * первичного запроса. Возврат на 1-ю страницу обновит время первичного запроса.
 *
 */

class PostRepository {
    private $listOfPosts;           //массив постов, главное возвращаемое значение //function getListOfPosts($pageNumber)

    private $currentMoment;         //первичное время запроса
    private $lastId = 0;            //int определяется динамически
    private $lastIdList = [];       //int[] определяется динамически, зависит от $lastId

    private $pageNumber = 1;        // нужен/ позже приходит в параметре запроса
    private $picsOnPage = 18;       //количество изображений на 1 странице

    public function createRepo(){
        $this->setCurrentMoment();
        $this->getAbsLastId();
        $this->createLastIdList();
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
        //$pdo = new \PDO($this->dsn,'root','root');
        $pdo = DB::instance();
        $sql = 'SELECT MAX(post_id) FROM Posts';
        $query = $pdo->prepare($sql);
        $query->execute();
        $lastId = $query->fetch(PDO::FETCH_NUM);
        $this->lastId = (int)intval($lastId[0]);
    }

    //возвращает массив из #id последних 20-ти  постов
    function createLastIdList() {

        if ($this->pageNumber > 1) {
            $this->lastId = $this->lastIdList[sizeof($this->lastIdList)-1]; // для 2-й страницы и следующих - переопределяем $lastId (берем из существующего списка)

            //получает массив последних postId меньших чем текущий $lastId ()
            $pdo = DB::instance();
            $sql ='SELECT post_id FROM Posts WHERE post_id < ? ORDER BY post_id DESC LIMIT ?';
            $query = $pdo->prepare($sql);
            //$query->execute([':lastId'=>$this->lastId, ':picsOnPage'=>$this->picsOnPage]);
            $query->bindValue(1, $this->lastId, PDO::PARAM_INT);
            $query->bindValue(2, $this->picsOnPage, PDO::PARAM_INT);
            $query->execute();
            while ($row = $query->fetch()) {
                if ($row!=false)
                    $this->lastIdList[] = $row['post_id'];
            }
            //деструктор PDO сам закрывает соединение

        } else {            //заполнение списка последних 20-ти id постов начиная с $lastId (включительно)

            $pdo = DB::instance();
            $sql ='SELECT post_id FROM Posts WHERE post_id <= ? ORDER BY post_id DESC LIMIT ?';
            $query = $pdo->prepare($sql);
            $query->bindValue(1, $this->lastId, PDO::PARAM_INT);
            $query->bindValue(2, $this->picsOnPage, PDO::PARAM_INT);
            $query->execute();
            while ($row = $query->fetch()) {
                if ($row!=false)
                    $this->lastIdList[] = $row['post_id'];
            }
            //деструктор PDO сам закрывает соединение
        }
    }

    public function getLastIdList(): array {  //не факт, что будет возвращать корректные значения
        return $this->lastIdList;
    }

    //заполняет массив значениями по мере запроса следующих страниц
    private function createListOfPosts($pageNumber) {

        //for ($i = ($pageNumber-1)* $this->picsOnPage +1; $i < $pageNumber*$this->picsOnPage+1; $i++) {  //i={1..18}
        for ($i = 1; $i < $this->picsOnPage+1; $i++) {  //i={1..18}
            // помещаем в ассоциативный массив объекты класса Post созданные по id из списка последних
            $this->listOfPosts[$this->lastIdList[$i-1]] = new Post($this->lastIdList[$i-1]);  //
        }
    }

    //главный метод класса, возвращает итоговое значение, инициирует дозаполнение массива $listOfPosts по мере запросов
    //генерирует на лету, чтобы не хранить постоянно большой массив объектов в памяти
    public function getListOfPosts($pageNumber): array {
        $this->pageNumber = $pageNumber;
        $this->createListOfPosts($pageNumber);
        return $this->listOfPosts;
    }
}