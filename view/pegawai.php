<?php
    require_once "../config/session.php";
    no_session_login();
    require "../config/conn_db.php";
    include "../header.php";
?>
	<div class="container-fluid">
            <div class="row" style="padding: 15px;">
                <div class="col">
                    <img class="icn-20" src="../asset/icons/icons8_Administrative_Tools_50px.png">/ Data Pegawai
                </div>
                <div class="col">
                        
                </div>
                <div class="col">
                    <div class="text-right">
                    <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#addData">
                            <div class="small"><img src="../asset/icons/icons8_Plus_Math_26px.png" class="icn-10"> Tambah</div>
                        </button></div>
                            <!-- ADD DATA -->
                                    <div class="modal fade" id="addData">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"> Tambah Data Pegawai </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="../function/tambah_pegawai.php" name="" method="POST">
                                                    <div class="form-group">
                                                        <label for="nama">ID :</label>
                                                        <input type="text" name="id" class="form-control" id="id">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Nama :</label>
                                                        <input type="text" name="nama" class="form-control" id="nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Jabatan :</label>
                                                        <select name="jabatan" class="custom-select">
                                                                <option value="pilih_jabatan"> Pilih Jabatan </option>
                                                                <option> dummy </option>
                                                                <option> dummy </option>
                                                                <option> dummy </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Alamat :</label>
                                                        <input type="text" name="alamat" class="form-control" id="alamat">
                                                    </div>
                                                    <button type="Submit" class="btn btn-rounded btn-primary btn-block" name="btn_tambah_pegawai">Submit</button>
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
            			<th>Nama</th>
            			<th>Jabatan</th>
            			<th>Alamat</th>
                        <th>Aksi</th>
            		</tr>
            		<tbody>
                    <?php 
                        $selectPegawai = "SELECT NIP, nama, alamat FROM pegawai";
                        $getPegawai = mysqli_query($conn, $selectPegawai);
                        while ($fetchPegawai = mysqli_fetch_array($getPegawai)) { ?>
                            <tr>
                                <td><?= $fetchPegawai["NIP"] ?></td>
                                <td><?= $fetchPegawai["nama"] ?></td>
                                <td><?= $fetchPegawai["NIP"] ?></td>
                                <td><?= $fetchPegawai["alamat"] ?></td>
                                <td><a data-toggle="modal" href="#ubahdata"> Ubah </a>
                                    <div class="modal fade" id="ubahdata">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"> Ubah Data Pegawai </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" name="" method="POST">
                                                        <div class="form-group">
                                                            <label for="nama">ID :</label>
                                                            <input type="text" name="id" class="form-control" id="id">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama">Nama :</label>
                                                            <input type="text" name="nama" class="form-control" id="nama">
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
                                                            <label for="nama">Alamat :</label>
                                                            <input type="text" name="alamat" class="form-control" id="alamat">
                                                        </div>
                                                        <button type="Submit" class="btn btn-rounded btn-primary btn-block" name="btn_simpan_pegawai">Simpan</button>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-block btn-rounded btn-danger" data-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a data-toggle="modal" href="#hapusdata"> Hapus </a>
                                    <div class="modal fade" id="hapusdata">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-warning"> Hapus Data </h4>
                                                </div>
                                                <div class="modal-body">
                                                    Anda yakin akan menghapus data ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-rounded btn-primary" name="btn_hapus_cuti">Ya</button>
                                                    <button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
            		</tbody>
            	</thead>
            	
            </table>
        </div>
    </div>
<?php
    include"../footer.php";
?>