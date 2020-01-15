<?php include_once "header.php";
//var_dump($_SESSION);
?>

<div class="container-fluid">
    <div class="row m-3 "  > <div></div>

        <!-- заголовок -->
        <div class="row w-100 bg-dark p-2 mx-auto text-white "  >
            <div class="col text-center font-weight-bold"><b>Your personal cabinet</b></div>
        </div>

        <div class="row w-100  mx-auto ">
            <div class="col w-100 h-70 border border-dark">
                <div class="col ">
                    <div class="card mt-4 mb-4 " style="background-color: #DBDBDB; border: none">

                        <!-- начало карточки -->
                        <div class="card-body ">
                        <div class="row">
                            <!-- left block-->
                            <div class="col-6">
                                <div style="color: dimgray; text-align: center"><b>Nickname</b><br></div>
                                <div class="col-6 mt-3 mb-4 p-2 text-wrap text-secondary rounded bg-light mx-auto">
                                    <?=$_SESSION['nickname']?> </div>

                                <div style="color: dimgray; text-align: center"><b>Name</b><br></div>
                                <div class="col-6 mt-3 mb-4 p-2 text-wrap text-secondary rounded bg-light mx-auto">
                                    <?=$_SESSION['name']?> </div>

                                    <div style="color: dimgray; text-align: center"><b>Surname</b><br></div>
                                <div class="col-6 mt-3 mb-4 p-2 text-wrap text-secondary rounded bg-light mx-auto">
                                    <?=$_SESSION['surname']?> </div>

                                <div style="color: dimgray; text-align: center"> <b>Email</b><br></div>
                                <div class="col-6 mt-3 mb-4 p-2 text-wrap text-secondary rounded bg-light mx-auto">
                                    <?=$_SESSION['email']?> </div>
                            </div>

                            <!-- right block -->
                            <div class="col-6">
                                <div class="col-6 mt-3 mx-auto mb-4 p-5">
                                    <img src="<?=$_SESSION['userpic']?>" alt="<userpic>" class="rounded-circle shadow float-right"
                                         style="max-height: 200px; max-width: 200px; align-content: center">
                                </div>
                                <div class="col-6 mt-3 mx-auto mb-4 p-2 rounded" style="font-size: 80%; color: dimgray">
                                    User role "<?=$_SESSION['role']?>"
                                </div>
                                <div class="col-6 mt-3 mx-auto mb-4 p-2 rounded" style="font-size: 80%; color: dimgray">
                                    User id #<?=$_SESSION['userid']?>
                                </div>
                            </div>
                        </div>

                            <div class="row mt-2"></div>

                            <!-- BUTTONS -->
                            <div class="row mt-5">
                                <div class="col-2"></div>
                                <div class="col-2 ">
                                    <button class="btn btn-dark btn-lg btn-block d-inline mx-auto d-block"> Edit my profile </button>
                                    <label><a style="color: #808080"> Edit personal user info </a></label>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-2">
                                    <button class="btn btn-primary btn-lg btn-block d-inline mx-auto d-block" disabled> View my recent posts </button>
                                    <label><a style="color: #808080"> Show gallery of your recent posts.  </a>
                                        <a class="text-danger">Disabled temporary</a> </label>
                                </div>
                                <div class="col-2"></div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-2"></div>
                                <div class="col-2">
                                    <button class="btn btn-dark btn-lg btn-block d-inline mx-auto d-block" disabled> Delete my account </button>
                                    <label><a style="color: #808080">  Delete account without way back. </a>
                                        <a class="text-danger">Disabled temporary</a>  </label>
                                </div>
                                <div class="col-2"></div>
                                <div class="col-2"></div>
                                <div class="col-2">
                                    <?php $arg = strval($_SESSION['AUTH']);?>
                                    <form action="http://test.com/user/exit/<?=$arg?>" method="post">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block d-inline mx-auto d-block"> EXIT </button>
                                    <label><a style="color: #808080">End authorized session</a></label>
                                    </form>
                                </div>
                                <div class="col-2"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




                <!-- подключаем футер -->
<?php include_once "footer.php" ?>