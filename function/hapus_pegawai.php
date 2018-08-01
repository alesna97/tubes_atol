<?php
require "../config/conn_db.php";

if (isset($_POST['btn_hapus_pegawai'])) {
    $id = $_POST['hapus_id'];
    //echo $NIP;
    $sql = "DELETE FROM pegawai WHERE id_pegawai='$id'";
    mysqli_query($conn,$sql);
} else {
    echo "data tidak didapatkan";
}

header('location:../view/pegawai.php');
?>