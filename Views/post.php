<!-- подключаем хедер -->
<?php include_once "header.php" ?>
<?php use System\View;
use Controllers\galleryController;
$post = View::$data;
?>
    <div class="container">

        <!-- общая строка -->
        <div class="row" style="margin-top: 20px">
            <!-- минимальную высоту задать здесь? -->

            <!-- левый блок -->
            <div class="col-3" style="margin-left: 20px" >

                <!-- заголовок левого блока -->
                <div class="row bg-dark ">
                    <div class="mx-auto p-3 text-white">
                        Recent comments: <?php echo $post->commentCount?> //ПЕРЕДЕЛАТЬ все свойства
                    </div>
                </div>

                <!-- основное содержание левого блока -->
                <div class="row">
                    <div class="col border border-dark">
                        <!-- СДЕЛАТЬ скролл контейнера -->
                        <div class="mx-auto bg-white shadow-lg">

                            <div class="mt-3 p-2 text-wrap rounded" style="background-color: #DBDBDB; color: dimgrey; text-align: left;">
                                <div class="p-1" style="text-align: right; font-size: 80%">21 Dec 2019 08:36 'User1':</div>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo risus ac pulvinar lobortis. Aliquam id urna ac sem scelerisque feugiat vel et ex. Suspendisse tristique faucibus diam et posuere.
                            </div>
                            <div class="mt-3 p-2 text-wrap rounded" style="background-color: #DBDBDB; color: dimgrey; text-align: left;">
                                <div class="p-1" style="text-align: right; font-size: 80%">22 Dec 2019 08:36 'User2':</div>
                            Nunc dignissim eu nibh vitae mattis. Praesent eget viverra metus, quis sagittis risus.
                            </div>

                            <div class="mt-3 p-2 text-wrap rounded" style="background-color: #DBDBDB; color: dimgrey; text-align: left;">
                                <div class="p-1" style="text-align: right; font-size: 80%">22 Dec 2019 11:36 'User3':</div>
                            Etiam leo lacus, malesuada in nunc feugiat, pulvinar vulputate magna. Nunc at tellus rutrum, luctus ipsum quis, eleifend dolor.
                            </div>
                            <br>
                            <div style="color: dimgrey; font-size: 70%; text-align: center" > This is comment examples only!</div>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>


                <!-- Back button -->
                <div class="row" style="margin-top: 10px" >
                    <div class="col">

                        <!-- ДОДЕЛАТЬ ! вставить сюда переменные из контроллера, страница галлереи, с которой был переход -->
                        <a href="../../<?php //$_SERVER[''] ?>"><button type="button" class="btn btn-dark btn-lg"><| Back to the gallery</button></a>
                    </div>
                </div>
                <!-- Back button -->


            </div>

            <!-- правый блок -->
            <div class="col-7" style="margin-left: 20px">
                <div class="row bg-dark text-white">

                    <!-- заголовок правого блока -->
                    <div class="mx-auto p-3 text-white" >

                        <!-- вставить сюда переменные !  -->
                        AUTHOR NAME, AVATAR,
                        <br>
                        <div style="color: dimgrey; text-align: right; font-size: 80%"> user id #<?php echo $post['authorId']?></div>
                    </div>
                </div>

                <!-- основное содержание правого блока -->
                <div class="row ">
                    <div class="col border border-dark">


                        <!-- строка1 -->
                        <div class="row ">
                            <div class="mx-auto mt-4" style="color: dimgrey; text-align: right; font-size: 80%">
                                <!-- вставить сюда переменные из контроллера -->
                                <?php echo date('j M Y H:i', gmdate($post['postDate']))?>
                            </div>
                        </div>

                        <!-- строка2 -->
                        <div class="row ">

                            <!-- место для фоточки -->
                            <div class="mx-auto">
                                    <!-- контейнер изображения -->
                                    <div>
                                        <img src="<?php echo $post['picLink']?>" alt="picture" class="p-4 img-thumbnail rounded mx-auto d-block" style="margin: 20px; background-color: #DBDBDB">
                                    </div>
                            </div>
                        </div>

                        <!-- строка3 -->
                        <div class="row " style="margin: 20px">

                            <!-- блок описания поста -->
                            <div class="d-flex p-2 mx-auto ">
                                <div class="p-2 pl-2 pr-2 text-wrap rounded" style="width: 25rem; background-color: #DBDBDB; color: dimgrey; text-align: center;">
                                    <!-- вставить сюда переменные из контроллера -->
                                    <?php
                                    if ($post['postDesc']!==null)
                                        echo $post['postDesc'];
                                    else
                                        echo 'No description to this post:('
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div style="color: dimgrey; text-align: right; font-size: 80%"> post id #<?php echo $post['postId']?></div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- подключаем футер -->
<?php include_once "footer.php" ?>