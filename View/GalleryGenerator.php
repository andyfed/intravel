<?php
const ECHO1 = "<div class=\"col-2\"> </div>";

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

        $postHref = "http://test.com/post/".$postId.".php";
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


    //создает миниатюру (превью + ссылка на пост)
    function generateDiv($postHref, $imgSrc) {
        echo "<a href=$postHref> <img src=$imgSrc alt=\"picture\" class=\"img-thumbnail rounded mx-auto d-block\"> </a>";
    }

    //1 row generator
    private function generateRow($rowNumber) {
        global $postHrefs;
        global $imgSrc;

        echo ECHO1;
        echo "<div class=\"col-sm\">";
        for ($i = $rowNumber*5; $i< $rowNumber+5; $i++) {
            generateDiv($postHrefs[$i], $imgSrc[$i]);
        }
        echo "</div>";
        echo ECHO1;
    }



    // All gallery generator
    public function generateGallery(){
        include_once "header.php";
        echo "<div class=\"container-fluid\">";

        for ($j = 0; $j < 4; $j++) {
            $this->generateRow($j);
        }
        echo "</div>";
        include_once "footer.php";

    }



}
