<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>In Travel</title>
  </head>
  <body>
  <div class="container-fluid">
      <div class="row bg-dark p-2">

          <div class="col-sm-1 border border-light" style="color: aliceblue">
              <div class="h5 text-center"><b>InTravel</b></div>
          </div>

          <div class="col-sm-1 text-center" >
              <b><a href="http://test.com/" style="color: aliceblue;">Recent</a></b>
          </div>

          <div class="col-sm-1" >

          </div>
          <div class="col-sm-1" >

          </div>
          <div class="col-sm-1" >

          </div>
          <div class="col-sm-1" >

          </div>
          <div class="col-sm-1" >

          </div>
          <div class="col-sm-1" >

          </div>
          <div class="col-sm-1" >

          </div>
          <div class="col-sm-1" >

          </div>

          <!-- auth block-->
          <div class="col-sm-2 dy-auto" style="text-align: right">
            <?php
            // no auth
            if (!isset($_SESSION['AUTH'])) {
                echo '    <a class="text-white font-weight-bold dy-auto" href="http://test.com/user/enter/0">Log in / Register</a>';

            }
            // authenticated
            elseif ($_SESSION['AUTH']===1) {
                echo '<row>';
                //href to 'cabinet'
                echo '<a href="http://test.com/user/cabinet">';
                //login userpic
                echo '<div >';
                echo '<img src="'.$_SESSION['userpic'].'" alt="<userpic>" class="rounded-circle shadow float-right" 
                        style="max-height: 30px; max-width:30px; align-content: flex-end">';
                echo '</div>';
                // login username
                echo '<div style="color: darkgray; font-size: small; text-align: right; padding-right: 30px"><b>'.$_SESSION['nickname'].'</b></div>';
                echo '<div style="color: darkgray; font-size: x-small; text-align: right; padding-right: 30px">'.$_SESSION['role'].'</div>';
                echo '</a>';
                echo '</row>';
            }        ?>

        </div>

      </div>
  </div>