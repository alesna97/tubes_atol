<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="../asset/css/bootstrap.css">
        <link rel="stylesheet" href="../asset/css/style1.css">
        <script src="../asset/js/jquery.min.js"></script>
        <script src="../asset/js/popper.min.js"></script>
        <script src="../asset/js/bootstrap.min.js"></script>
	</head>
<body style="background-color: #f8f9fa;"> 
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Sistem Kepegawaian</h3>
                </div>
                <ul class="list-unstyled components">
                    <p> Admin </p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Menu Admin</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="dashboard.php">Dashbaord</a></li>
                            <li><a href="pegawai.php">Pegawai</a></li>
                            <li><a href="#">Jabatan</a></li>
                            <li><a href="#">Gaji</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Riwayat Pegawai</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Riwayat Pendidikan</a></li>
                            <li><a href="#">Riwayat Jabatan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> Tentang </a>
                    </li>
                    <li>
                        <a href="#"> Pengaturan </a>
                    </li>
                </ul>
            </nav>
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-light">
                            <i class="fas fa-align-left"></i>
                            <span>Toggle Sidebar</span>
                       </button>
                       <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item"><input type="text" class="form-control" name="search" placeholder="Cari Data" id="search"></li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cari</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Log out</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </nav>  
                    <!-- CONTENT BODY -->
                    
