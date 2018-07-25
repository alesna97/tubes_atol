<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="../asset/css/bootstrap.css">
        <link rel="stylesheet" href="../asset/css/style.css">
        <script src="../asset/js/jquery.js"></script>
        <script src="../asset/js/bootstrap.js"></script>

	</head>
<body class="bg">
	<!-- ADD NAVBAR -->
        <?php
            include "../layout/navbar.html";
        ?>
        <!-- END NAVBAR -->
        <div class="container-fluid">
            <div class="row">  
                <div class="col-md-4 col-xs-4 col-sm-12" ></div>
                <div class="col-md-4 col-xs-4 col-sm-12">
                    <form id="formlogin" action="../config/regist_proc.php" method="POST">
                        <h2 style="text-align: center;">Buat Akun</h1>
                        	<hr>
                        <div class="form-group">
                        	<label for="email">E-mail</label>
                        	<input type="email" class="form-control" name="email" placeholder="Enter E-mail" id="email">
                        </div>
                        <div class="form-group">      
                                <label for="username"> Username </label> 
                                <input type="text" class="form-control" name="user" placeholder="Enter Username" id="username">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                                <input type="Password" class="form-control" name="pass" id="pass" placeholder="Enter Password">  
                        </div>
                        <button type="submit" class="btn btn-success btn-block " name="btn_create">Buat</button>
                        Sudah Punya Akun ? <a href="../view/login.php">Log in.</a>
                        <hr>
                    </form>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-12"></div>
            </div>
        </div>       
</body>
</html>