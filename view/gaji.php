<?php
    require_once "../config/session.php";
    no_session_login();
    require "../config/conn_db.php";
    include "../header.php";
?>

<div class="container-fluid">
            <div class="row" style="padding: 15px;">
                <div class="col">
                  <img class="icn-20" src="../asset/icons/icons8_Administrative_Tools_50px.png">/ Data Gaji
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
            			<th>Jabatan</th>
                        <th>Total Gaji</th>
            		</tr>
                </thead>
            		<tbody>
                        <?php 
                            $selectGaji = "SELECT * FROM gaji, pegawai, jabatan, cuti, lembur WHERE gaji.id_pegawai=pegawai.id_pegawai AND gaji.id_jabatan=jabatan.id_jabatan AND cuti.id_pegawai=pegawai.id_pegawai AND lembur.id_pegawai=pegawai.id_pegawai";
                            $getGaji = mysqli_query($conn, $selectGaji);
                            while ($fetchGaji = mysqli_fetch_array($getGaji)) { ?>
                            <tr>
                                <td><?= $fetchGaji["nama_pegawai"] ?></td>
                                <td><?= $fetchGaji["nama_jabatan"] ?></td>
                                <td><?php 
                                $bonus_cuti = $fetchGaji["kuota_cuti"] * 25000;
                                $bonus_lembur = $fetchGaji["jumlah_jam_lembur"] * 5000;
                                $total_gaji = $fetchGaji["gaji_jabatan"] + $bonus_lembur + $bonus_cuti;

                                $id_gaji = $fetchGaji["id_gaji"];
                                $updateGaji = "UPDATE gaji SET total_gaji=$total_gaji WHERE id_gaji = $id_gaji";
                                if ($conn->query($updateGaji) === TRUE) {
                                    
                                } else {
                                    echo "Error: ".$sql."<br>".$conn->error;
                                }

                                echo "Rp. " . number_format($total_gaji,2,',','.'); 
                                ?></td>
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