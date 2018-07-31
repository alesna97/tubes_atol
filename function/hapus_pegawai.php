<?php
require "../config/conn_db.php";

if (isset($_POST['btn_hapus_pegawai'])) {
    $NIP = $_POST['hapus_NIP'];
    //echo $NIP;
    $sql = "DELETE FROM pegawai WHERE NIP='$NIP'";
    mysqli_query($conn,$sql);
} else {
    echo "data tidak didapatkan";
}

header('location:../view/pegawai.php');
?>