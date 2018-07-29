<?php
    require_once "../config/session.php";
    no_session_login();
    include "../header.php";
?>
	<div class="container-fluid">
            <div class="row" style="padding-bottom: 10px;">
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
            <div class="row" style="padding: 15px;">
                 <div class="btn-group">
                        <button type="button" class="btn btn-secondary">
                            <img src="../asset/icons/icons8_Plus_Math_26px.png">
                        </button>
                        <button type="button" class="btn btn-secondary">
                            <img src="../asset/icons/icons8_Waste_26px.png">
                        </button>
                        <button type="button" class="btn btn-secondary" data-toggle="dropdown">
                            <img src="../asset/icons/icons8_Sort_26px.png">
                        </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Ascending</a>
                                <a class="dropdown-item" href="#">Descending</a>
                            </div>
                    </div>
            </div>
        <div class="row">
            <table class="table table-striped">
            	<thead class="bg-light" >
            		<tr>
            			<th>ID</th>
            			<th>Nama</th>
            			<th>Jabatan</th>
            			<th>Alamat</th>
                        <th>Pilih</th>
                        <th>Aksi</th>
            		</tr>
            		<tbody>
            			<td>00129</td>
            			<td>Anjas Lesmana</td>
            			<td>CEO</td>
            			<td>Pungkur</td>
                        <td>
                            <form>
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="checklist">
                                <label class="custom-control-label" for="customCheck">Checklist</label>
                                </div>
                            </form>
                        </td>
                        <td><a href="#">Edit</a></td>
                        <tr>
                        
            		</tbody>
            	</thead>
            	
            </table>
        </div>
    </div>
<?php
    include"../footer.php";
?>