<?php
//const ECHO1 = "<div class=\"col-1\"> </div>";

class GalleryGenerator {
    //stores post hyperlinks
    private $postHrefs =[];
    //stores preview hyperlinks
    private $imgSrc = [];

    //with constructing fill the arrays
    function __construct($listOfPosts) { //argument array [postId - object Post]
        $this->fillArrays($listOfPosts);
    }

    //creates absolute hyperlink from $postId
    function genPostHref($postId): string {

        $postHref = "http://test.com/post/$postId.php";
        return $postHref;
    }

    function fillArrays($newPosts) {
        global $postHrefs;
        global $imgSrc;

        foreach ($newPosts as $postId=>$post) {
            $postHrefs[]=$this->genPostHref($postId);
            $imgSrc[]=$post->getMini();
        }
    }

    public function getPostHrefs(): array {
        return $this->postHrefs;
    }

    public function getImgSrc(): array {
        return $this->imgSrc;
    }

    /*
    //создает миниатюру (превью + ссылка на пост)
    function generateDiv($postHref, $imgSrc) {
        echo "<a href=$postHref> <img src=$imgSrc alt=\"picture\" class=\"img-thumbnail rounded mx-auto d-block\"> </a>";
    }


    //генератор 1 строки
    private function generateRow() {
        //global $rowNumber;
        echo ECHO1;
        for () {
            echo "<div class=\"col-sm\">";
            generateDiv();
            generateDiv();
            generateDiv();
            echo "</div>";
        }
        echo ECHO1;
        $rowNumber++;
    }




    //генератор галлереи $i*$j+1 ?поправить формулу
    public function generateGallery(){
        for ($i = 0; $i < 4; $i++) {
            $this->generateRow();
        }
    }


*/
}
