<?php
    require_once "../config/conn_db.php";
    require_once "../config/session.php";
    no_session_login();
	include_once "../header.php";
?>
	<div class="container-fluid">
        <div class="row" style="padding: 20px;">
               <img class="icn-20" src="../asset/icons/icons8_Dashboard_50px.png"> <h5>Dashboard</h5>
        </div>
		<div class="row text-right font-weight-bold">
                <div class="col">
                    <div class="card bg-danger text-light" style="padding: 10px">
                        <div class="card-header"><h4>Jumlah Pegawai</h4> 
                            <div class="row">
                        <div class="col text-left">
                            <div class="font-weight-normal">Total <br></div>
                             
                         <?php
                        // GET JUMLAH PEGAWAI
                        $selectPegawai = "SELECT id_pegawai FROM pegawai ";
                        $res = mysqli_query($conn, $selectPegawai);
                        $jumlah = mysqli_num_rows($res);
                        echo "$jumlah Orang"
                        ?> 
                        </div>
                        <div class="col">
                            <img src="../asset/icons/icons8_Customer_50px_1.png">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
                <div class="col ">
                    <div class="card bg-primary text-light" style="padding: 10px"> 
                        <div class="card-header">

                            <h4>Waktu</h4>
                        <div class="row">
                            <div class="col">
                                <?php
                                include "date.html";
                                 ?>
                            </div>
                            <div class="col">
                                <img src="../asset/icons/icons8_Clock_50px.png">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col"> 
                     <div class="card bg-success text-light" style="padding: 10px"> 
                        <div class="card-header"><h4>Jam Lembur Terlama</h4>
                            <div class="row">
                                <div class="col text-left">
                             <?php
                        // GET JUMLAH PEGAWAI
                         $max = 'max';
                        $selectPegawai = "SELECT nama_pegawai,jumlah_jam_lembur FROM pegawai JOIN lembur WHERE pegawai.id_pegawai = lembur.id_pegawai AND lembur.jumlah_jam_lembur = (SELECT max(jumlah_jam_lembur) FROM lembur)";
                        $res = mysqli_query($conn, $selectPegawai);
                        while ($fetchlembur = mysqli_fetch_array($res)) { ?>
                            <tr>   
                                <td><div class="small"><?= $fetchlembur["nama_pegawai"]?></div></td>
                            </tr>
                                <td><?= $fetchlembur["jumlah_jam_lembur"] ?> Jam </td>
                        <?php }?>
                    </div>
                    <div class="col">
                        <img src="../asset/icons/icons8_account_48px.png">
                    </div>
                    </div>
                        </div>
                    </div>           
                </div>
            </div>
            <hr>
            <div class="container-fluid">
            <div class="row">
                <div class="col col-sm-4">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link text-secondary " data-toggle="collapse" href="#collapseOne">
                          Ganti Password
                        </a>
                      </div>
                      <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <form action="../config/ganti_pass.php" method="POST">
                                <div class="form-group">
                                    <label for="password"> Password Lama : </label>
                                    <input type="password" name="pass_lama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password"> Password Baru : </label>
                                    <input type="password" name="pass_baru" class="form-control">
                                </div>
                                <center>
                                <input type="submit" name="btn_ganti_pass" class="btn btn-rounded btn-primary">
                                 <input type="reset" class="btn btn-rounded btn-secondary">   
                                </center>
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
                <div class="col">
                 <!-- FUNGSI CHART -->
                        <?php
                            $sqlJabatan1 = "SELECT jabatan.id_jabatan,COUNT(*) as jumlah FROM pegawai JOIN jabatan WHERE jabatan.id_jabatan=pegawai.id_jabatan AND jabatan.id_jabatan = 'J1' GROUP BY pegawai.id_jabatan";
                            $sqlJabatan2 = "SELECT jabatan.id_jabatan,COUNT(*) as jumlah FROM pegawai JOIN jabatan WHERE jabatan.id_jabatan=pegawai.id_jabatan AND jabatan.id_jabatan = 'J2' GROUP BY pegawai.id_jabatan";
                            $sqlJabatan3 = "SELECT jabatan.id_jabatan,COUNT(*) as jumlah FROM pegawai JOIN jabatan WHERE jabatan.id_jabatan=pegawai.id_jabatan AND jabatan.id_jabatan = 'J3' GROUP BY pegawai.id_jabatan";
                            $sqlJabatan4 = "SELECT jabatan.id_jabatan,COUNT(*) as jumlah FROM pegawai JOIN jabatan WHERE jabatan.id_jabatan=pegawai.id_jabatan AND jabatan.id_jabatan = 'J4' GROUP BY pegawai.id_jabatan";
                            $sqlJabatan5 = "SELECT jabatan.id_jabatan,COUNT(*) as jumlah FROM pegawai JOIN jabatan WHERE jabatan.id_jabatan=pegawai.id_jabatan AND jabatan.id_jabatan = 'J5' GROUP BY pegawai.id_jabatan";
                            $sqlJabatan6 = "SELECT jabatan.id_jabatan,COUNT(*) as jumlah FROM pegawai JOIN jabatan WHERE jabatan.id_jabatan=pegawai.id_jabatan AND jabatan.id_jabatan = 'J6' GROUP BY pegawai.id_jabatan";
                            $res1 = mysqli_query($conn, $sqlJabatan1);
                            $res2 = mysqli_query($conn, $sqlJabatan2);
                            $res3 = mysqli_query($conn, $sqlJabatan3);
                            $res4 = mysqli_query($conn, $sqlJabatan4);
                            $res5 = mysqli_query($conn, $sqlJabatan5);
                            $res6 = mysqli_query($conn, $sqlJabatan6);
                            $getJabatan1=mysqli_fetch_array($res1);
                            $getJabatan2=mysqli_fetch_array($res2);
                            $getJabatan3=mysqli_fetch_array($res3);
                            $getJabatan4=mysqli_fetch_array($res4);
                            $getJabatan5=mysqli_fetch_array($res5);
                            $getJabatan6=mysqli_fetch_array($res6);
                            
                            ?> 
                    <script type="text/javascript">
                        window.onload = function () {
                        var jabatan1 = <?php echo $getJabatan1['jumlah']; ?>;
                        var jabatan2 = <?php echo $getJabatan2['jumlah']; ?>;
                        var jabatan3 = <?php echo $getJabatan3['jumlah']; ?>;
                        var jabatan4 = <?php echo $getJabatan4['jumlah']; ?>;
                        var jabatan5 = <?php echo $getJabatan5['jumlah']; ?>;
                        var jabatan6 = <?php echo $getJabatan6['jumlah']; ?>;
                        var chart = new CanvasJS.Chart("chartContainer", {
                            theme: "light2", // "light2", "dark1", "dark2"
                            animationEnabled: true, // change to true      
                            title:{
                                text: "Jumlah Pegawai Berdasarkan Jabatan"
                            },
                            data: [
                            {
                                /* Change type to "bar", "area", "spline", "pie",etc.
                                */
                                type: "splineArea",
                                dataPoints: [
                                    { label: "CEO",  y: jabatan1},
                                    { label: "Director", y: jabatan2 },
                                    { label: "Store Manager", y: jabatan3  },
                                    { label: "Asisten Manager",  y: jabatan4  },
                                    { label: "Supervisor",  y: jabatan5 },
                                    { label: "Staff",  y: jabatan6  }
                                ]
                            }
                            ]
                        });
                        chart.render();

                        }
                    </script>
                    <div class="card">
                    <div id="chartContainer" style="height: 250px; width: 100%;"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>	
<?php
	include_once "../footer.php";
?>