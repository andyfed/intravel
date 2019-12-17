<?php include_once "header.php";

include_once "../Controller/recentPageController.php";

?>



<div class="container-fluid">


    <!-- вставить запуск генератора сюда когда будет готов -->

    <div class="row" style="margin-top: 30px;" >
        <div class="col-2" > </div>
        <!-- блоки картинок по 5 в ряд -->
        <div class="col-sm">
            <!-- здесь заменить значение href на переменную из контроллера getPostIdLink -->
            <a href="post.php"><img src="https://picsum.photos/id/1016/150" alt="picture1" class="img-thumbnail rounded mx-auto d-block" ></a>
        </div>
        <div class="col-sm">
            <a href="post.php"><img src="https://picsum.photos/id/1018/150" alt="picture2" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="post.php"><img src="https://picsum.photos/150?random" alt="picture3" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="post.php"><img src="https://picsum.photos/150?random" alt="picture4" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="post.php"><img src="https://picsum.photos/150?random" alt="picture5" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-2" > </div>
    </div>

    <div class="row" style="margin-top: 30px" >
        <div class="col-2" > </div>
        <div class="col-sm">
            <a href="<?php$phArr[5]?>"><img src="<?php$srcArr[5]?>" alt="picture1" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="<?php$phArr[6]?>"><img src="<?php$srcArr[5]?>" alt="picture2" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="<?php$phArr[7]?>"><img src="<?php$srcArr[5]?>" alt="picture3" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="<?php$phArr[8]?>"><img src="<?php$srcArr[5]?>" alt="picture4" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="<?php$phArr[9]?>"><img src="<?php$srcArr[5]?>" alt="picture5" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-2" > </div>
    </div>

    <div class="row" style="margin-top: 30px" >
        <div class="col-2" > </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture1" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture2" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture3" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture4" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture5" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-2" > </div>
    </div>

    <div class="row" style="margin-top: 30px" >
        <div class="col-2" > </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture1" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture2" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture3" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture4" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-sm">
            <img src="https://picsum.photos/150?random" alt="picture5" class="img-thumbnail rounded mx-auto d-block">
        </div>
        <div class="col-2" > </div>
    </div>

    <!-- подключение панели навигации по номерам страниц -->
    <?php include_once "navBar.php"?>

</div>
<br>

    <!-- подключение футера -->
<?php include_once "footer.php" ?>