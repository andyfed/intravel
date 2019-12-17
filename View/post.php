<!-- подключаем хедер -->
<?php include_once "header.php" ?>

    <div class="container">

        <!-- общая строка -->
        <div class="row" style="margin-top: 20px">
            <!-- минимальную высоту задать здесь? -->

            <!-- левый блок -->
            <div class="col-3" style="margin-left: 20px" >

                <!-- заголовок левого блока -->
                <div class="row bg-dark ">
                    <div class="mx-auto p-3 text-white">
                        Recent comments...
                    </div>
                </div>

                <!-- основное содержание левого блока -->
                <div class="row">
                    <div class="col border border-dark">
                        <div class="mx-auto bg-white shadow-lg">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            Comment field
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>

                <!-- Back button -->
                <div class="row" style="margin-top: 10px" >
                    <div class="col">

                        <!-- вставить сюда переменные из контроллера, страница галлереи, с которой был переход -->
                        <a href="recent#<?php $page ?>.php"><button type="button" class="btn btn-dark">Back to gallery</button></a>
                    </div>
                </div>
                <!-- Back button -->

            </div>

            <!-- правый блок -->
            <div class="col-7" style="margin-left: 20px">
                <div class="row bg-dark text-white">

                    <!-- заголовок правого блока -->
                    <div class="mx-auto p-3 text-white" >
                        <!-- вставить сюда переменные из контроллера -->
                        AUTHOR NAME, AVATAR, ID
                    </div>
                </div>

                <!-- основное содержание правого блока -->
                <div class="row ">
                    <div class="col border border-dark">


                        <!-- строка1 -->
                        <div class="row ">
                            <div class="mx-auto mt-2" style="color: dimgrey">
                                <!-- вставить сюда переменные из контроллера -->
                                POST DATE, TIME, ID
                            </div>
                        </div>

                        <!-- строка2 -->
                        <div class="row ">

                            <!-- место для фоточки -->
                            <div class="mx-auto">

                                    <!-- контейнер изображения -->
                                    <div>
                                        <img src="https://picsum.photos/id/1016/400" alt="picture1" class="p-4 img-thumbnail rounded mx-auto d-block" style="margin: 20px; background-color: #DBDBDB">
                                    </div>

                            </div>
                        </div>

                        <!-- строка3 -->
                        <div class="row " style="margin: 20px">

                            <!-- блок описания поста -->
                            <div class="d-flex p-2 mx-auto ">
                                <div class="p-2 pl-2 pr-2 text-wrap rounded" style="width: 25rem; background-color: #DBDBDB; color: dimgrey">
                                    <!-- вставить сюда переменные из контроллера -->
                                POST DESCRIPTION (TEXT)
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- подключаем футер -->
<?php include_once "footer.php" ?>