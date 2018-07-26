<?php
    require_once "../config/session.php";
    no_session_login();
    include "../header.php";
?>
	<div class="container-fluid">
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-md-4 col-xs-4 col-sm-12">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-dark">
                            Tambah
                        </button>
                        <button type="button" class="btn btn-outline-dark">
                            Hapus
                        </button>
                        <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown">
                            Urutkan
                        </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Ascending</a>
                                <a class="dropdown-item" href="#">Descending</a>
                            </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-12"></div>
                <div class="col-md-4 col-xs-4 col-sm-12"> 
                                         
                </div>
            </div>
        <div class="row">
            <table class="table">
            	<thead class="thead-dark">
            		<tr>
            			<th>ID</th>
            			<th>Nama</th>
            			<th>Jabatan</th>
            			<th>Alamat</th>
            			<th>Aksi</th>
            		</tr>
            		<tbody>
            			<th>Test</th>
            			<th>Test</th>
            			<th>Test</th>
            			<th>Test</th>
            			<th>Test</th>

            		</tbody>
            	</thead>
            	
            </table>
        </div>
    </div>
<?php
    include"../footer.php";
?>