<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="../dist/css/bootstrap.css">
        <link rel="stylesheet" href="../dist/css/style.css">
        <script src="../dist/js/jquery.js"></script>
        <script src="../dist/js/bootstrap.js"></script>

	</head>
<body class="bg"> 
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Sistem Kepegawaian</h3>
                </div>
                <ul class="list-unstyled components">
                    <p> Dummy </p>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Home </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">MENU 1</a></li>
                            <li><a href="#">MENU 2</a></li>
                            <li><a href="#">MENU 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">MENU 1</a></li>
                            <li><a href="#">MENU 2</a></li>
                            <li><a href="#">MENU 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"> MENU </a>
                    </li>
                    <li>
                        <a href="#"> MENU </a>
                    </li>
                </ul>
            </nav>
            <div id="content">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-success">
                            <i class="fas fa-align-left"></i>
                            <span>Toggle Sidebar</span>
                       </button>
                       <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">menu</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </nav>  
            </div>
        </div>

    <!-- sidebar collapse -->
    <script src="../dist/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

</body>
</html>