<?php
    require_once "../config/session.php";
    no_session_login();
    require "../config/conn_db.php";
    include "../header.php";
?>

<div class="container-fluid">
            <div class="row" style="padding: 15px;">
                <dic class="col">
                   <img class="icn-20" src="../asset/icons/icons8_Administrative_Tools_50px.png">/ Data Jabatan
                </dic>
                <div class="col">
                        
                </div>
                <div class="col">
                    <div class=" text-right">
                    <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#addData">
                            <div class="small"><img src="../asset/icons/icons8_Plus_Math_26px.png" class="icn-10"> Tambah</div></button>
                        </button></div>
                            <!-- ADD DATA -->
                                    <div class="modal fade" id="addData">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"> Tambah Data Jabatan </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" name="" method="POST">
                                                    <div class="form-group">
                                                        <label for="nama">ID :</label>
                                                        <input type="text" name="id" class="form-control" id="id">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Jabatan :</label>
                                                        <select name="jabatan" class="custom-select">
                                                                <option> dummy </option>
                                                                <option> dummy </option>
                                                                <option> dummy </option>
                                                                <option> dummy </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Gaji :</label>
                                                        <input type="text" name="gaji" class="form-control" id="alamat">
                                                    </div>
                                                    <button type="submit" class="btn btn-rounded btn-primary btn-block" name="btn_tambah_jabatan">Submit</button>
                                                    <button type="reset" class="btn btn-secondary btn-rounded btn-primary btn-block" >Reset</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-block btn-rounded btn-danger" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
        <div class="row">
            <table class="table table-striped">
            	<thead class="bg-light" >
            		<tr>
            			<th>ID</th>
            			<th>Jabatan </th>
            			<th>Gaji</th>
                        <th>Aksi</th>
            		</tr>
            		<tbody>
            			<tr>
            			<td>00129</td>
            			<td>Dummy</td>
            			<td>Dummy</td>
                        <td><a href="#"> Ubah </a>
                            <a href="#"> Hapus </a>
                        </td>
                        </tr>
                        
            		</tbody>
            	</thead>
            	
            </table>
        </div>
    </div>

<?php
    include"../footer.php";
?>