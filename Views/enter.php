<!-- подключение хэдера -->
<?php include_once "header.php"; ?>


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

                        <div class="row p-4 text-white"> Input information for register a new account:</div>

                        <div class="row">

                            <!-- LEFT column -->
                            <div class="col">

                                <!-- avatar -->
                                <div class="row p-2 mx-auto">
                                    <div class="col w-40 text-center font-weight-bold">
                                        <img src="../Storage/AvatarPictures/user_icon_128.png" alt="userpic">
                                    </div>
                                </div>

                                <!-- inputs -->
                                <form name="register">

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault01">Name</label>
                                            <input type="text" class="form-control" id="validationDefault01" placeholder="Mark">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault02">Surname</label>
                                            <input type="text" class="form-control" id="validationDefault02" placeholder="Otto">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefaultUsername">* Nickname</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                </div>
                                                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Mark Otto" aria-describedby="inputGroupPrepend2" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mt-4 text-center">Values fill signed * is required!</div>
                                    </div>

                                    <div class="form-row">



                                            <div class="col-md-6 mb-3">
                                                <label for="inputEmail2">* Email</label>
                                                <input type="email" class="form-control" id="inputEmail2" placeholder="Email" required>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label for="inputPassword2">* Password</label>
                                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password" required>
                                            </div>



                                    </div>

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


                            <!-- RIGHT column 'ENTER'-->
                            <div class="col">
                                <form name="login">

                                    <!-- BEGIN inputs -->
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label text">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
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
                                    <!-- END inputs -->
                                </form>

                            </div>
                        <!-- END RIGHT column-->
                        </div>
                    </div>

                </div>



            </div>

            <div class="row p-3">
            <!-- кнопки -->
                <div class="col-3 mx-auto">
                    <button type="button" class="btn btn-dark btn-lg" form="register" formmethod="post">Register me</button>
                </div>
                <div class="col-3 mx-auto">
                    <button type="button" class="btn btn-dark btn-lg" form="login" formmethod="post">Enter</button>
                </div>
            </div>
        </div>

    </div>

</div>


<!-- подключение футера -->
<?php include_once "footer.php" ?>
