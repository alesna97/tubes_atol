<?php
require "../config/conn_db.php";

if (isset($_GET['NIP'])) {
    $NIP = $_GET['NIP'];
    $sql = "DELETE FROM pegawai WHERE NIP='$NIP'";
    mysqli_query($conn,$sql);
} else {
    echo "data tidak didapatkan";
}

header('location:../view/pegawai.php');
?>