<?php
    require_once "../config/session.php";
    no_session_login();
    require "../config/conn_db.php";
    include "../header.php";
?>

<div class="container-fluid">
            <div class="row" style="padding: 15px;">
                <div class="col">
                    <img class="icn-20" src="../asset/icons/icons8_Process_50px.png">/ Data Lembur
                </div>
                <div class="col">
                        
                </div>
                <div class="col">
                    
                </div>
            </div>
        <div class="row">
            <div class="table-responsive">
            <table class="table table-striped" id="tables">
            	<thead class="bg-light" >
            		<tr>
            			<th>Nama Pegawai</th>
            			<th>Jumlah Jam Lembur</th>
                        <th>Aksi</th>
            		</tr>
                </thead>
            		<tbody>
                        <?php 
                            $selectLembur = "SELECT * FROM lembur, pegawai WHERE lembur.id_pegawai=pegawai.id_pegawai";
                            $getLembur = mysqli_query($conn, $selectLembur);
                            while ($fetchLembur = mysqli_fetch_array($getLembur)) { ?>
                            <tr>
                                <td><?= $fetchLembur["nama_pegawai"] ?></td>
                                <td><?= $fetchLembur["jumlah_jam_lembur"] ?></td>
                                <td><a data-toggle="modal" href="#ubahdata<?= $fetchLembur['id_lembur'] ?>"> Ubah </a>
                                <div class="modal fade" id="ubahdata<?= $fetchLembur['id_lembur'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"> Ubah Data Cuti </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form action="../function/function_pegawai.php" name="" method="POST">
                                                <input type="hidden" name="ubah_id" value="<?= $fetchLembur['id_lembur'] ?>">
                                                    <div class="form-group">
                                                        <label for="nama">Nama Pegawai :</label>
                                                        <input type="text" name="nama_pegawai" class="form-control" id="nama_pegawai" value="<?= $fetchLembur['nama_pegawai'] ?>" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jumlah_jam_lembur">Jumlah Jam Lembur :</label>
                                                        <input type="number" min="0" max="300" name="jumlah_jam_lembur" class="form-control" id="jumlah_jam_lembur" value="<?= $fetchLembur['jumlah_jam_lembur'] ?>">
                                                    </div>
                                                    <button type="submit" class="btn btn-rounded btn-primary btn-block" name="btn_simpan_lembur">Simpan</button>
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