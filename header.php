<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Aplikasi Kepegawaian Almanac Store</title>
        <link rel="icon" href="../asset/images/logo.png">
        <link rel="stylesheet" href="../asset/css/bootstrap.css">
        <link rel="stylesheet" href="../asset/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../asset/css/style1.css">
        <script src="../asset/js/jquery.min.js"></script>
        <script src="../asset/js/popper.min.js"></script>
        <script src="../asset/js/bootstrap.min.js"></script>
        <script type="text/javascript">
             function updateTextInput(val) {
                document.getElementById('jumlahcuti').value=val; 
             }
        </script>
	</head>
<body class="bg"> 
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h5 align="center"><img src="../asset/images/logo.png" class="logo-25"> <br>Almanac Store</h5>
                    <hr>
                </div>
                <ul class="list-unstyled components">
                    <li style="margin-bottom: 10px"><a href="dashboard.php"><img class="icn-20" src="../asset/icons/icons8_Dashboard_50px.png"> Dashboard</a></li>
                    <li class="active" style="padding-left: 10px">
                            <img class="icn-20" src="../asset/icons/icons8_Administrative_Tools_50px.png">
                         Administrator
                        <ul class="list-unstyled components">
                            <li><a href="pegawai.php"><img class="icn-20" src="../asset/icons/icons8_Employee_50px.png"> Pegawai</a></li>
                            <li><a href="jabatan.php"><img class="icn-20" src="../asset/icons/icons8_Medal_50px.png"> Jabatan</a></li>
                            <li><a href="gaji.php"><img class="icn-20" src="../asset/icons/icons8_Stack_of_Money_50px.png"> Gaji</a></li>
                        </ul>
                    </li>
                    <li style="padding-left: 10px">
                        <img class="icn-20" src="../asset/icons/icons8_Process_50px.png"> Rekap Data Pegawai</a>
                        <ul class="list-unstyled components">
                            <li><a href="cuti.php"> <img class="icn-20" src="../asset/icons/icons8_Schedule_50px.png"> Data Cuti</a></li> 
                            <li><a href="lembur.php"><img class="icn-20" src="../asset/icons/icons8_Last_6_Hours_50px.png"> Data Lembur </a></li>
                        </ul> 
                    </li>
                </ul>
            </nav>
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                            <div class="col">
                        <button type="button" id="sidebarCollapse" class="btn btn-outline-light btn-rounded">
                            <i class="fas fa-align-left"></i>
                            <span><img class="icn-35" src="../asset/icons/icons8_Menu_50px_1.png"></span>
                       </button>
                       <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                        </div>
                        <div class="col text-center">
                            <h4 class="text-secondary"> Aplikasi Kepegawaian</h4>
                        </div> 
                        <div class="col">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal"href="#logout"><img class="icn-35" src="../asset/icons/icons8_Shutdown_50px.png"></a>
                                <form action="logout.php" method="POST">
                                    <div class="modal fade" id="logout">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-warning"> Log out </h4>
                                                </div>
                                                <div class="modal-body">
                                                    Anda yakin akan keluar ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-rounded btn-primary" name="btn_hapus_pegawai">Ya</button>
                                                    <button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                         </ul>
                       </div>
                    </div>
                </div>
            </nav>  
                    <!-- CONTENT BODY -->
                    
