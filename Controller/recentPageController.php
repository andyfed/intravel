<?php
/* передает в представление recent.php(view)
* ассоциативный массив [postId=>ссылка на миниатюру] из Post.php
* */

/* получает, проверяет $pageNumber (номер страницы)
* из (View)recent.php
* и передает в postRepository->getListOfPosts($pageNumber)
* */

/* показывает ЧПУ:
* post#...
* */

echo "запущен recentPageController.php ";

//получение и проверка номера страницы в галлерее
if (empty($_GET["page"]) || $_GET["page"]===1)
    $pageNumber = 1;
if (!empty($_GET["page"]) && $_GET["page"]!=1 && is_int($_GET["page"]))
    $pageNumber = $_GET["page"];
else
    $pageNumber = 1;

//перенести из контроллера все блоки ниже?
$postRepository = new PostRepository();
$listOfPosts = $postRepository->getListOfPosts($pageNumber);   //получаем массив значений (20 шт.) для конкретной страницы

$gal = new GalleryGenerator($listOfPosts);

//полученные из генератора массивы
$srcArr = $gal->getImgSrc(); //массив ссылок на превьюшки
$phArr = $gal->getPostHrefs(); //массив ссылок на посты

include_once '../View/recent.php';