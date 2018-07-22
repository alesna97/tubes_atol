<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
        <script src="../dist/js/jquery.js"></script>
        <script src="../dist/js/bootstrap.min.js"></script>
        <style type="text/css">
            .bg{
                background: #f7f7f7; 
                background-repeat: no-repeat;
                background-size: cover;
            }
            #formlogin{
                border: 1px grey solid;
                border-radius: 25px;
                padding:50px 80px 80px 80px;
                margin-top: 80px;
            }
            #btn-rounded{
                border-radius: 25px;
            }
        </style>
	</head>
    <body class="bg">
        <?php
            include "../layout/navbar.html";
        ?>
        <div class="container-fluid">
            <div class="row">  
                <div class="col-md-4 col-xs-4 col-sm-12" ></div>
                <div class="col-md-4 col-xs-4 col-sm-12">
                    <form id="formlogin" action="../config/login_proc.php" method="POST">
                        <h1 style="text-align: center;">Login</h1>
                        <div class="form-group">      
                                <label for="username"> Username </label> 
                                <input type="text" class="form-control" name="user" placeholder="Enter Username" id="username">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                                <input type="Password" class="form-control" name="pass" id="pass" placeholder="Enter Password"> 
                            <div class="form-check mb-2 mr-sm-2">
                                <label class="form-check-label">
                                <input class="form-check-input "type="checkbox"> Remember me
                                </label>
                            </div>  
                        </div>
                        <button type="submit" class="btn btn-success btn-block " id="btn-rounded" name="submit">Log in</button>
                    </form>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-12"></div>
            </div>
        </div>       
    </body>
</html>