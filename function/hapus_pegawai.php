<?php
require "../config/conn_db.php";

if (isset($_GET['NIP'])) {
    $NIP = $_GET['NIP'];
    echo "$NIP";
} else {
    echo "data tidak didapatkan";
}

$sql = "DELETE FROM pegawai WHERE NIP='$NIP'";
mysqli_query($conn,$sql);

header('location:../view/pegawai.php');
?>