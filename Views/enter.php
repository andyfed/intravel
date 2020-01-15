<!-- подключение хэдера -->
<?php include_once "header.php";
 echo '$data$';
 var_dump($data);
 echo '$_SESSION';
 var_dump($_SESSION);
?>


<div class="container-fluid">
    <div class="row m-3 "  > <div></div>


    <div class="row w-100 bg-dark p-2 mx-auto text-white "  >
        <div class="col w-40 text-center font-weight-bold">Registration</div>
        <div class="col w-40 text-center font-weight-bold">Authorization</div>
    </div>

    <div class="row w-100  mx-auto ">
        <div class="col w-100 h-70 border border-dark">

            <!-- inner card-->
            <div class="col ">
                <div class="card mt-4 bg-secondary">
                    <div class="card-body">

                        <!-- top row with labels -->
                        <div class="row p-4 text-white">
                            <div class="col-6 p-4 text-center text-white">Input information to register a new account:</div>
                            <div class="col-6 p-4 text-center text-white"> Input information enter in existing account:</div>
                        </div>
                        <div class="row">

                            <!-- LEFT column - 'Register'-->
                            <div class="col">

                                <!-- userpic
                                <div class="row p-2 mx-auto">
                                    <div class="col w-40 text-center font-weight-bold">
                                        <img src="../Storage/UserPics/user_icon_128.png" alt="userpic">
                                    </div>
                                </div>
                                -->

                                <!-- INPUTS -->
                                <form action="http://test.com/user/registration" method="post" name="registerForm" id="register">

                                    <!-- Name, Surname -->
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault01">Name</label>
                                            <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="Mark">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault02">Surname</label>
                                            <input type="text" class="form-control" name="surname" id="validationDefault02" placeholder="Otto">
                                        </div>
                                    </div>

                                    <!-- Nickname -->
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefaultUsername">* Nickname</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                </div>
                                                <input type="text" class="form-control" name="nickname" id="validationDefaultUsername" placeholder="Mark Otto" aria-describedby="inputGroupPrepend2" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-4 text-center">Values fill signed * is required!</div>
                                    </div>

                                    <!-- Email / Password -->
                                    <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="inputEmail2">* Email</label>
                                                <input type="email" class="form-control" name="email" id="inputEmail2" placeholder="Email" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="inputPassword2">* Password</label>
                                                <input type="password" class="form-control" name="password" id="inputPassword2" placeholder="Password" required>
                                            </div>
                                    </div>

                                    <!-- Terms agree checkbox -->
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                            <label class="form-check-label" for="invalidCheck2">
                                                <div class="col text-dark text-size-80" >
                                                    I am read and agree with <u><a class="text-dark" href="https://www.termsandcondiitionssample.com/" >terms and conditions</a></u>.
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- END LEFT column -->


                            <!-- RIGHT column - 'ENTER'-->
                            <div class="col">

                                <!-- BEGIN inputs -->
                                <form action="http://test.com/user/authorize" method="post" name="loginForm" id="login">

                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label text">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="pass" id="inputPassword3" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END inputs -->

                                <?php if ($data[0]===1){
                                    echo "<div class=\"col-9 text-danger p-3 ml-5\"><b>Warning! Wrong login or password. Please, try again.</b><br><br>
                                    To get help you need to send message from your registered email to admin@test.com</div>";
                                }?>

                            </div>
                        <!-- END RIGHT column-->

                        </div>
                    </div>
                </div>
            </div>

            <!-- нижняя строка -->
            <div class="row p-3">

            <!-- кнопки -->
                <div class="col-3 mx-auto">
                    <button type="submit" class="btn btn-dark btn-lg" form="register" name="registerMeButton"><b>Register me</b></button>
                </div>

                <div class="col-3 mx-auto">
                    <button type="submit" class="btn btn-dark btn-lg" form="login" name="enterButton"><b>Enter</b></button>
                </div>
            </div>
        </div>

    </div>

</div>


<!-- подключение футера -->
<?php include_once "footer.php" ?>
