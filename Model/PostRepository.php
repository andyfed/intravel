<?php

/* Объект класса postRepository создается относительно фиксированного времени первичного запроса
 * переход на следующую страницу галереи не учитывает записи, добавленные после времени
 * первичного запроса. Возврат на 1-ю страницу обновит время первичного запроса.
 *
 */
class PostRepository {
    private $listOfPosts = [];      //массив постов, главное возвращаемое значение
    private $picsOnPage = 20;       //количество изображений на 1 странице
    private $lastId = 0;            //int определяется динамически
    private $lastPostsIdList = [];  //int[] определяется динамически, зависит от $lastId
    private $currentMoment;         //первичное время запроса
    private $pageNumber = 1;        // нужен/ позже приходит в параметре запроса


    //сделать метод-генератор ссылок миниатюры из

    public function __construct() {
        $this->setCurrentMoment();
        $this->getLastId();
    }

    //фиксируем время первичного запроса
    public function setCurrentMoment(): void {
        $this->currentMoment = time();
    }

    //берем крайний postId в таблице на время первичного запроса
    private function getLastId(): void {
        global $lastId;

        include_once "../DB/DbConnect.php";
        $lastId = 'SELECT 1 id FROM Posts WHERE date <= '.$this->currentMoment;
    }

    //возвращает массив из #id последних 20-ти  постов
    function genLastPostsIdList() {
        global $lastPostsIdList;
        global $lastId;

        if ($this->pageNumber > 1) {
            $lastId = $lastPostsIdList[19]; // для 2-й страницы и следующих - переопределяем $lastId (берем из существующего списка)

            include_once "../DB/DbConnect.php";

            $query = 'SELECT id FROM Posts WHERE id < '.$this->lastId.' LIMIT '.$this->picsOnPage;
            //получает массив последних postId меньших чем текущий $lastId ()
            $lastPostsIdList = mysql_getcolumn($query, TRUE);

        } else {
            //заполнение списка последних 20-ти id постов начиная с $lastId (включительно)
            $query = 'SELECT id FROM Posts WHERE id <= '.$this->lastId.' LIMIT '.$this->picsOnPage;
            $lastPostsIdList = mysql_getcolumn($query, TRUE);
        }
    }

    public function getLastIdList(){  //не факт, что будет возвращать корректные значения
        return $this->lastPostsIdList;
    }

    //заполняет массив значениями по мере запроса следующих страниц
    private function createListOfPosts($pageNumber) {
        global $listOfPosts;
        global $lastPostsIdList;

        for ($i = ($pageNumber-1)* $this->picsOnPage +1; $i <= $pageNumber*$this->picsOnPage; $i++) {
            // помещаем в ассоциативный массив объекты класса Post созданные по id из списка последних
            $listOfPosts[$lastPostsIdList[$i]] = new Post($lastPostsIdList[$i]);
        }
    }

    //главный метод класса, возвращает итоговое значение, инициирует дозаполнение массива $listOfPosts по мере запросов
    public function getListOfPosts($pageNumber): array {
        global $listOfPosts;

        $this->createListOfPosts($pageNumber);
        return $listOfPosts;
    }

}