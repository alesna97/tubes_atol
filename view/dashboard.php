<?php
    require_once "../config/conn_db.php";
    require_once "../config/session.php";
    no_session_login();
	include_once "../header.php";
?>
	<div class="container-fluid">
        <div class="row" style="padding: 20px;">
               <img class="icn-20" src="../asset/icons/icons8_Dashboard_50px.png"> <h5>Dashboard</h5>
        </div>
		<div class="row">
                <div class="col">
                    <div class="card bg-danger text-light" style="padding: 10px"> 
                        <div class="card-header"><h4>Jumlah Pegawai</h4> 10 orang</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-primary text-success" style="padding: 10px"> 
                        <div class="card-header">
                            <h4 class="text-light">Clock<h4>
                         <?php
                                include "date.html";
                         ?>
                        </div>
                    </div>
                </div>
                <div class="col"> 
                     <div class="card bg-success text-light" style="padding: 10px"> 
                        <div class="card-header"><h4>Informasi</h4> Blablabla</div>
                    </div>           
                </div>
            </div>
    </div>
	
<?php
	include_once "../footer.php";
?>