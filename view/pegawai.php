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
                            <div class="small"><img src="../asset/icons/icons8_Plus_Math_24px.png" class="icn-15"> Tambah</div>
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
                                                        <input type="text" name="id_pegawai" class="form-control" id="id">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Nama :</label>
                                                        <input type="text" name="nama_pegawai" class="form-control" id="nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Jabatan :</label>
                                                        <select name="id_jabatan" class="custom-select">
                                                                <option value="pilih_jabatan"> Pilih Jabatan </option>
                                                                <option value="J1"> CEO </option>
                                                                <option value="J2"> Director </option>
                                                                <option value="J3"> Store Manager </option>
                                                                <option value="J4"> Asisten Manager </option>
                                                                <option value="J5"> Supervisor </option>
                                                                <option value="J6"> Staff </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama">Tanggal Lahir :</label>
                                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                                                    </div>
                                                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki - Laki" checked>Laki - Laki
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                      <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                                                      </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp">No Hp :</label>
                                                        <input type="text" name="no_hp" class="form-control" id="no_hp">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email :</label>
                                                        <input type="text" name="email" class="form-control" id="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat :</label>
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
            <div class="table-responsive">
            <table class="table table-striped" id="tables" style="width:100%;">
            	<thead class="bg-light" >
            		<tr>
            			<th>ID</th>
            			<th>Nama</th>
            			<th>Jabatan</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>No. HP</th>
            			<th>Alamat</th>
                        <th>Aksi</th>
            		</tr>
            		<tbody>
                    <?php 
                        $selectPegawai = "SELECT id_pegawai, pegawai.id_jabatan, nama_jabatan, nama_pegawai, tanggal_lahir, jenis_kelamin, no_hp, email, alamat FROM pegawai, jabatan WHERE pegawai.id_jabatan=jabatan.id_jabatan";
                        $getPegawai = mysqli_query($conn, $selectPegawai);
                        function tanggal_indo($tanggal)
                        {
                            $bulan = array (1 =>   'Januari',
                                        'Februari',
                                        'Maret',
                                        'April',
                                        'Mei',
                                        'Juni',
                                        'Juli',
                                        'Agustus',
                                        'September',
                                        'Oktober',
                                        'November',
                                        'Desember'
                                    );
                            $split = explode('-', $tanggal);
                            return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
                        }
                        while ($fetchPegawai = mysqli_fetch_array($getPegawai)) { ?>
                            <tr>
                                <td><?= $fetchPegawai["id_pegawai"] ?></td>
                                <td><?= $fetchPegawai["nama_pegawai"] ?></td>
                                <td><?= $fetchPegawai["nama_jabatan"] ?></td>
                                <td><?= tanggal_indo($fetchPegawai["tanggal_lahir"]); ?></td>
                                <td><?= $fetchPegawai["jenis_kelamin"] ?></td>
                                <td><?= $fetchPegawai["no_hp"] ?></td>
                                <td><?= $fetchPegawai["alamat"] ?></td>
                                <td><a data-toggle="modal" href="#ubahdata<?= $fetchPegawai['id_pegawai'] ?>"> Ubah </a>
                                    <div class="modal fade" id="ubahdata<?= $fetchPegawai['id_pegawai'] ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"> Ubah Data Pegawai </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="../function/ubah_pegawai.php" name="" method="POST">
                                                        <input type="hidden" name="ubah_id" value="<?= $fetchPegawai['id_pegawai'] ?>">
                                                        <div class="form-group">
                                                            <label for="nama">ID :</label>
                                                            <input type="text" name="id_pegawai" class="form-control" id="id" value="<?= $fetchPegawai['id_pegawai'] ?>" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama">Nama :</label>
                                                            <input type="text" name="nama_pegawai" class="form-control" id="nama"  value="<?= $fetchPegawai['nama_pegawai'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama">Jabatan :</label>
                                                            <select name="id_jabatan" class="custom-select">
                                                                <option value="<?= $fetchPegawai['id_jabatan'] ?>"> <?= $fetchPegawai['nama_jabatan'] ?> </option>
                                                                <option value="J1"> CEO </option>
                                                                <option value="J2"> Director </option>
                                                                <option value="J3"> Store Manager </option>
                                                                <option value="J4"> Asisten Manager </option>
                                                                <option value="J5"> Supervisor </option>
                                                                <option value="J6"> Staff </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                        <label for="nama">Tanggal Lahir :</label>
                                                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $fetchPegawai['tanggal_lahir'] ?>">
                                                        </div>
                                                        <label for="jenis_kelamin">Jenis Kelamin :</label>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                            <?php if ($fetchPegawai['jenis_kelamin'] == "Laki-Laki") {
                                                                echo '<input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki" checked>Laki - Laki';
                                                            } else {
                                                                echo '<input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-Laki">Laki - Laki';
                                                            }?>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                            <?php if ($fetchPegawai['jenis_kelamin'] == "Perempuan") {
                                                                echo '<input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" checked>Perempuan';
                                                            } else {
                                                                echo '<input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan';
                                                            }?>
                                                            </label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_hp">No Hp :</label>
                                                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $fetchPegawai['no_hp'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email :</label>
                                                            <input type="text" name="email" class="form-control" id="email" value="<?= $fetchPegawai['email'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama">Alamat :</label>
                                                            <input type="text" name="alamat" class="form-control" id="alamat"  value="<?= $fetchPegawai['alamat'] ?>">
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
                                    <a data-toggle="modal" href="#hapusdata<?= $fetchPegawai['id_pegawai'] ?>"> Hapus </a>
                                    <form action="../function/hapus_pegawai.php" method="POST">
                                    <div class="modal fade" id="hapusdata<?= $fetchPegawai['id_pegawai'] ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-warning"> Hapus Data </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="hapus_id" value="<?= $fetchPegawai['id_pegawai'] ?>">
                                                    Anda yakin akan menghapus data pegawai <br> <?= $fetchPegawai['nama_pegawai'] ?> ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-rounded btn-primary" name="btn_hapus_pegawai">Ya</button>
                                                    <button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Tidak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
            		</tbody>
            	</thead>
            </table>
        </div>
    </div>
    </div>
<?php
    include"../footer.php";
?>