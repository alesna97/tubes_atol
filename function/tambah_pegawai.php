<?php
require "../config/conn_db.php";

if (isset($_POST['btn_tambah_pegawai'])) {
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $jabatan=$_POST['jabatan'];
    $alamat=$_POST['alamat'];
} else {
    die("Maaf, anda harus mengakses halaman ini dari pegawai.php");
}

if (empty($id) || empty($nama) || $jabatan=="pilih_jabatan" || empty($alamat)) {
    die("Maaf, anda harus mengisi data dengan lengkap");
} else {
    if (is_numeric($nama)) {
        die("Maaf, nama harus berupa huruf");
    } else {
        //Insert Data
        $sql = "INSERT INTO pegawai 
        VALUES ('"."$id"."',"."'"."$nama"."',"."'1997/05/10',"."'"."$alamat"."',"."'L',"."'Islam'".")";

        if ($conn->query($sql) === TRUE) {
            echo "<script>window.alert('Pegawai Berhasil ditambahkan.');</script>";
            header('location:../view/pegawai.php');
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
}
?>