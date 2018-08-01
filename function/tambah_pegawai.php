<?php
require "../config/conn_db.php";

if (isset($_POST['btn_tambah_pegawai'])) {
    $id_pegawai=strtoupper($_POST['id_pegawai']);
    $nama_pegawai=$_POST['nama_pegawai'];
    $id_jabatan=strtoupper($_POST['id_jabatan']);
    $tgl_lahir=$_POST['tanggal_lahir'];
    $jk=$_POST['jenis_kelamin'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
} else {
    die("Maaf, anda harus mengakses halaman ini dari pegawai.php");
}

if (empty($id_pegawai) || empty($nama_pegawai) || empty($id_jabatan) || empty($tgl_lahir) || empty($jk) || empty($no_hp) || empty($email) || empty($alamat)) {
    die("Maaf, anda harus mengisi data dengan lengkap");
    echo "<br><a href=../view/pegawai.php>Kembali</a>";
} else {
    if (is_numeric($nama_pegawai)) {
        die("Maaf, nama harus berupa huruf");
        echo "<br><a href=../view/pegawai.php>Kembali</a>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Maaf, email tidak valid");
        echo "<br><a href=../view/pegawai.php>Kembali</a>"; 
    } else {
        //Insert Data
        $sql = "INSERT INTO pegawai 
        VALUES ('$id_pegawai', '$id_jabatan', '$nama_pegawai', '$tgl_lahir', '$jk', '$no_hp', '$email', '$alamat')";

        if ($conn->query($sql) === TRUE) {
            //echo "<script>window.alert('Pegawai Berhasil ditambahkan.');</script>";
            header('location:../view/pegawai.php');
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
}
?>