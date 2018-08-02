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
                            $sql = "SELECT COUNT(*) as jumlah FROM pegawai JOIN jabatan WHERE jabatan.id_jabatan=pegawai.id_jabatan GROUP BY pegawai.id_jabatan";
                            $res = mysqli_query($conn, $sql);
                            
                            ?>
                    <script type="text/javascript">
                        window.onload = function () {
                        var chart = new CanvasJS.Chart("chartContainer", {
                            theme: "light2", // "light2", "dark1", "dark2"
                            animationEnabled: true, // change to true      
                            title:{
                                text: "Jumlah Pegawai Berdasarkan Jabatan"
                            },
                            data: [
                            {
                                /* Change type to "bar", "area", "spline", "pie",etc.
                                                    “line”
                                                    “column”
                                                    “bar”
                                                    “area”
                                                    “spline”
                                                    “splineArea”
                                                    “stepLine”
                                                    “scatter”
                                                    “bubble”
                                                    “stackedColumn”
                                                    “stackedBar”
                                                    “stackedArea”
                                                    “stackedColumn100”
                                                    “stackedBar100”
                                                    “stackedArea100”
                                                    “pie”
                                                    “doughnut”
                                */
                                type: "splineArea",
                                dataPoints: [
                                    { label: "CEO",  y: 3  },
                                    { label: "Director", y: 2  },
                                    { label: "Store Manager", y: 5  },
                                    { label: "Asisten Manager",  y: 6  },
                                    { label: "Supervisor",  y: 4 },
                                    { label: "Staff",  y: 8  }
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
	
<?php
	include_once "../footer.php";
?>