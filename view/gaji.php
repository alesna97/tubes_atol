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
            <table class="table table-striped">
            	<thead class="bg-light" >
            		<tr>
            			<th>Nama Pegawai</th>
            			<th>Jumlah</th>
            			<th>Gaji</th>
                        <th>Aksi</th>
            		</tr>
            		<tbody>
                        <tr>
            			<td>00129</td>
            			<td>Dummy</td>
            			<td>Dummy</td>
                        <td>
                            <form method="POST" action="">
                            <a data-toggle="modal"href="#hapusdata"> Hapus </a>
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
                                                <button type="submit" class="btn btn-rounded btn-primary" name="btn_hapus_gaji">Ya</button>
                                                <button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Tidak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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