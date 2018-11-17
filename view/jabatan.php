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
                    
                </div>
            </div>
        <div class="row">
            <div class="table-responsive">
            <table class="table table-striped" id="tables">
            	<thead class="bg-light" >
            		<tr>
            			<th>ID</th>
            			<th>Jabatan </th>
            			<th>Gaji</th>
            		</tr>
                </thead>
            		<tbody>
                        <?php 
                            $selectJabatan = "SELECT * FROM jabatan";
                            $getJabatan = mysqli_query($conn, $selectJabatan);
                            while ($fetchJabatan = mysqli_fetch_array($getJabatan)) { ?>
                            <tr>
                                <td><?= $fetchJabatan["id_jabatan"] ?></td>
                                <td><?= $fetchJabatan["nama_jabatan"] ?></td>
                                <td><?="Rp. " . number_format($fetchJabatan["gaji_jabatan"],2,',','.'); ?></td>
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