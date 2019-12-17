<?php include_once "header.php";

//include_once "../Controller/recentPageController.php";

?>

это html-шаблон

<div class="container-fluid">


    <!-- вставить запуск генератора сюда когда будет готов -->

    <div class="row" style="margin-top: 30px;" >
        <div class="col-2" > </div>
        <!-- блоки картинок по 5 в ряд -->
        <div class="col-sm">
            <!-- здесь заменить значение href на переменную из контроллера getPostIdLink -->
            <a href="post.php"><img src="https://picsum.photos/id/1016/150" alt="picture00" class="img-thumbnail rounded mx-auto d-block" ></a>
        </div>
        <div class="col-sm">
            <a href="post.php"><img src="https://picsum.photos/id/1018/150" alt="picture01" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="post.php"><img src="https://picsum.photos/150?random" alt="picture02" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="post.php"><img src="https://picsum.photos/150?random" alt="picture03" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="post.php"><img src="https://picsum.photos/150?random" alt="picture04" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-2" > </div>
    </div>

    <div class="row" style="margin-top: 30px" >
        <div class="col-2" > </div>
        <div class="col-sm">
            <a href="<?php $phArr[5] ?>"><img src="<?php $srcArr[5] ?>" alt="picture05" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="<?php $phArr[6] ?>"><img src="<?php $srcArr[6] ?>" alt="picture06" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="<?php $phArr[7] ?>"><img src="<?php $srcArr[7] ?>" alt="picture07" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="<?php $phArr[8] ?>"><img src="<?php $srcArr[8] ?>" alt="picture08" class="img-thumbnail rounded mx-auto d-block"></a>
        </div>
        <div class="col-sm">
            <a href="<?php $phArr[9] ?>"><img src="<?php $srcArr[9] ?>" alt="picture09" class="img-thumbnail rounded mx-auto d-block"></a>
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