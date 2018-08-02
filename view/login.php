<?php
    require_once "../config/session.php";
    session_login();
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Aplikasi Kepegawaian Almanac Store</title>
        <link rel="icon" href="../asset/images/logo.png">
        <link rel="stylesheet" href="../asset/css/bootstrap.css">
        <link rel="stylesheet" href="../asset/css/style1.css">
        <script src="../asset/js/jquery.min.js"></script>
        <script src="../asset/js/popper.min.js"></script>
        <script src="../asset/js/bootstrap.min.js"></script>

	</head>
    <body class="bg">
        <div class="navbar navbar-expand-sm bg-light navbar-light justify-content-center">
            <ul class="navbar-nav">
                <a class="navbar-brand" href="kertasdev.web.id"><img src="../asset/images/logo.png" class="logo-25"></a>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row"> 
                <div class="col-md-4 col-xs-4 col-sm-12" ></div>
                <div class="col-md-4 col-xs-4 col-sm-12">
                    <form action="../config/login_proc.php" method="POST" class="formstyle1"
                     target="_self">
                        <div class="text-center">
                            <h4 class="text-dark"> Almanac Store </h4>
                        </div>
                        <hr>
                        <div class="form-group">      
                                <label for="username"> Username :</label> 
                                <input type="text" class="form-control" name="user" placeholder="Masukan Username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="Password"> Password :</label>
                                <input type="Password" class="form-control" name="pass" id="pass" placeholder="Masukan Password" required> 
                            <div class="form-check mb-2 mr-sm-2">
                            </div>  
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-rounded" name="btn_login">Log in</button>
                        <hr>

                    </form>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-12"></div>
            </div>
        </div>       
    </body>
</html>