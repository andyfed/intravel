<?php include_once "header.php";
use Models\Post;

?>

    <!-- флаг для отладки. убрать из продакшна -->
это html-шаблон gallery.php

<div class="container-fluid">

    <?php foreach ($this->data as $key=>$value) ?>

    <div class="row" style="margin-top: 30px" >
        <div class="col-2" > </div>

        <!-- блоки картинок по 5 в ряд -->
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php echo $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php echo $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php echo $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php echo $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php echo $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-2" > </div>
    </div>

    <div class="row" style="margin-top: 30px" >
        <div class="col-2" > </div>

        <!-- блоки картинок по 5 в ряд -->
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-2" > </div>
    </div>

    <div class="row" style="margin-top: 30px" >
        <div class="col-2" > </div>

        <!-- блоки картинок по 5 в ряд -->
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-2" > </div>
    </div>

    <div class="row" style="margin-top: 30px" >
        <div class="col-2" > </div>

        <!-- блоки картинок по 5 в ряд -->
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="http://test.com/gallery/post/<?php echo $key ?>"><img src="<?php $value->getMini(); ?>" alt="picture" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-2" > </div>
    </div>


    <!-- подключение панели навигации по номерам страниц -->
    <?php include_once "navBar.php"?>

</div>
<br>

    <!-- подключение футера -->
<?php include_once "footer.php" ?>