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

        <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="../asset/css/style1.css">
        <script src="../asset/js/jquery.min.js"></script>
        <script src="../asset/js/popper.min.js"></script>
        <script src="../asset/js/bootstrap.min.js"></script>

	</head>
    <body style="background: url('../asset/images/grey.jpg'); background-repeat: no-repeat;background-size: cover;">
        <!-- ADD NAVBAR -->
        <?php
            include "../navbar.html";
        ?>
        <!-- END NAVBAR -->
        <div class="container-fluid">
            <div class="row">  
                <div class="col-md-4 col-xs-4 col-sm-12" ></div>
                <div class="col-md-4 col-xs-4 col-sm-12">
                    <form id="formlogin" action="../config/login_proc.php" method="POST" target="_SELF" style="
                    border: 1px grey solid;
                    border-radius: 25px;
                    padding:50px 80px 50px 80px;
                    margin-top: 10px;">
                        <h2 style="text-align: center;">Login</h1>
                        <hr>
                        <div class="form-group">      
                                <label for="username"> Username </label> 
                                <input type="text" class="form-control" name="user" placeholder="Enter Username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                                <input type="Password" class="form-control" name="pass" id="pass" placeholder="Enter Password" required> 
                            <div class="form-check mb-2 mr-sm-2">
                                <label class="form-check-label">
                                <input class="form-check-input "type="checkbox"> Remember me
                                </label>
                            </div>  
                        </div>
                        <button type="submit" class="btn btn-success btn-block" name="btn_login">Log in</button>
                        Didn't have an account ? <a href="../view/register.php">Create One.</a>
                        <hr>
                    </form>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-12"></div>
            </div>
        </div>       
    </body>
</html>