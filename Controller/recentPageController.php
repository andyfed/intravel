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

<?php

//получение и проверка номера страницы в галлерее
if (empty($_GET["page"]) || $_GET["page"]===1)
    $pageNumber = 1;
if (!empty($_GET["page"]) && $_GET["page"]!=1 && is_int($_GET["page"]))
    $pageNumber = $_GET["page"];
else
    $pageNumber = 1;


$page = new postRepository();         //создаем новый репозиторий постов для пользователя
$newPosts = $page->getListOfPosts($pageNumber);   //получаем массив значений (20 шт.) для конкретной страницы

//должен вызывать генератор и передавать параметром $newPosts
$gal = new GalleryGenerator($newPosts);

//полученные из генератора массивы
$srcArr = $gal->getImgSrc(); //массив ссылок на превьюшки
$phArr = $gal->getPostHrefs(); //массив ссылок на посты