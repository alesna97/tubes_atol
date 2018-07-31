<?php
    require_once "../config/session.php";
    no_session_login();
    require "../config/conn_db.php";
    include "../header.php";
?>

<div class="container-fluid">
            <div class="row" style="padding: 15px;">
                <div class="col">
                    <h4>Data Lembur</h4>
                </div>
                <div class="col">
                 <div class="btn-group">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addData">
                            <img src="../asset/icons/icons8_Plus_Math_26px.png">
                        </button>
                            <!-- ADD DATA -->
                                    <div class="modal fade" id="addData">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"> Tambah Data Lembur </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" name="" method="POST">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Pegawai :</label>
                                                        <select name="nama_pegawai" class="custom-select">
                                                                <option> dummy </option>
                                                                <option> dummy </option>
                                                                <option> dummy </option>
                                                                <option> dummy </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Jumlah jam lembur :</label>
                                                        <input type="text" name="jumlah_jam_lembur" class="form-control" id="alamat">
                                                    </div>
                                                    <button type="submit" class="btn btn-rounded btn-primary btn-block" name="btn_tambah_lembur">Submit</button>
                                                    <button type="reset" class="btn btn-secondary btn-rounded btn-primary btn-block" >Reset</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-block btn-rounded btn-danger" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                <div class="col">
                </div>
            </div>
        <div class="row">
            <table class="table table-striped">
            	<thead class="bg-light" >
            		<tr>
            			<th>Nama Pegawai</th>
            			<th>Jumlah Jam Lembur</th>
                        <th>Aksi</th>
            		</tr>
            		<tbody>
                        <tr>
            			<td>00129</td>
            			<td>Dummy</td>
                        <td><a href="#"> Edit </a>
                            <a href="#"> Delete </a>
                            <a href="#"> Detil </a>
                        </td>
                        </tr>
            		</tbody>
            </table>
        </div>
    </div>

<?php
    include"../footer.php";
?>