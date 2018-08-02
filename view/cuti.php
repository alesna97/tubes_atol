<?php
    require_once "../config/session.php";
    no_session_login();
    require "../config/conn_db.php";
    include "../header.php";
?>

<div class="container-fluid">
            <div class="row" style="padding: 15px;">
                <div class="col">
                    <img class="icn-20" src="../asset/icons/icons8_Process_50px.png">/ Data Cuti
                </div>
                <div class="col">
                        
                </div>
                <div class="col">
                    <div class=" text-right">
                    <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#addData">
                            <div class="small"><img src="../asset/icons/icons8_Plus_Math_24px.png" class="icn-15"> Tambah</div>
                        </button></div>
                            <!-- ADD DATA -->
                                    <div class="modal fade" id="addData">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"> Tambah Data Cuti </h4>
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
                                                        <label for="nama">Jumlah Cuti :</label>
                                                        <input type="text" name="jumlah_cuti" class="form-control" id="nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Kuota cuti :</label>
                                                        <input type="range" min="0" max="4" value="0" class="custom-range" id="jumlah_cuti" name="jumlah_cuti" onchange="updateTextInput(this.value);">
                                                        <input type="text" name="jumlah_cuti" class="form-control" id="jumlahcuti" value="0">
                                                    </div>
                                                    <button type="submit" class="btn btn-rounded btn-primary btn-block" name="btn_tambah_cuti">Submit</button>
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
            <div class="table-responsive">
            <table class="table table-striped" id="tables">
            	<thead class="bg-light" >
            		<tr>
            			<th>Nama Pegawai</th>
            			<th>Jumlah Cuti </th>
            			<th>Kuota Cuti</th>
                        <th>Aksi</th>
            		</tr>
                </thead>
            		<tbody>
                    <?php 
                            $selectCuti = "SELECT * FROM cuti, pegawai WHERE cuti.id_pegawai=pegawai.id_pegawai";
                            $getCuti = mysqli_query($conn, $selectCuti);
                            while ($fetchCuti = mysqli_fetch_array($getCuti)) { ?>
                            <tr>
                                <td><?= $fetchCuti["nama_pegawai"] ?></td>
                                <td><?= $fetchCuti["jumlah_cuti"] ?></td>
                                <td><?= $fetchCuti['kuota_cuti'] ?></td>
                                <td><a data-toggle="modal" href="#ubahdata<?= $fetchCuti['id_cuti'] ?>"> Ubah </a>
                                <div class="modal fade" id="ubahdata<?= $fetchCuti['id_cuti'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"> Ubah Data Cuti </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="../function/function_pegawai.php" name="" method="POST">
                                                <input type="hidden" name="ubah_id" value="<?= $fetchCuti['id_cuti'] ?>">
                                                <input type="hidden" name="ubah_kuota" value="<?= $fetchCuti['kuota_cuti'] ?>">
                                                <input type="hidden" name="cuti_saatini" value="<?= $fetchCuti['jumlah_cuti'] ?>">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Pegawai :</label>
                                                        <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="<?= $fetchCuti['nama_pegawai'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jumlah_cuti">Jumlah Cuti :</label>
                                                        <input type="range" min="0" max="4" class="custom-range" id="jumlah_cuti" name="jumlah_cuti" onchange="updateTextInput(this.value);">
                                                        <input type="text" name="jumlah_cuti" class="form-control" id="jumlahcuti" value="<?= $fetchCuti['jumlah_cuti'] ?> ">
                                                        <!-- SET INPUT TYPE FROM CUSTOM RANGE -->
                                                        <script type="text/javascript">
                                                             function updateTextInput(val) {
                                                                document.getElementById('jumlahcuti').value=val; 
                                                             }
                                                        </script>
                                                    </div>
                                                    <button type="submit" class="btn btn-rounded btn-primary btn-block" name="btn_simpan_cuti">Simpan</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-block btn-rounded btn-danger" data-dismiss="modal">Batal</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        <?php } ?>                    
            		</tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include"../footer.php";
?>