<?php
    require_once "../config/conn_db.php";
    require_once "../config/session.php";
    no_session_login();
	include_once "../header.php";
?>
	<div class="container-fluid">
        <div class="row" style="padding: 20px;">
            <div class="col">
                <h4>Dashboard</h4>
            </div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
		<div class="row">
                <div class="col-md-4 col-xs-4 col-sm-12">
                    <div class="card bg-light text-primary" style="padding: 10px"> 
                        <div class="card-header"><h4>Jumlah Pegawai</h4> 10 orang</div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-12">
                    <div class="card bg-light text-success" style="padding: 10px"> 
                        <div class="card-header"><h4>Informasi</h4> Blablabla</div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-12"> 
                     <div class="card bg-light text-danger" style="padding: 10px"> 
                        <div class="card-header"><h4>Informasi</h4> Blablabla</div>
                    </div>           
                </div>
            </div>
    </div>
	
<?php
	include_once "../footer.php";
?>