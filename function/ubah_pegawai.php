<?php
require "../config/conn_db.php";

if (isset($_POST['btn_simpan_pegawai'])) {
    $NIP = $_POST['ubah_NIP'];
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $jabatan=$_POST['jabatan'];
    $alamat=$_POST['alamat'];
    //echo $NIP;
} else {
    echo "data tidak didapatkan";
}

if (empty($id) || empty($nama) || $jabatan=="pilih_jabatan" || empty($alamat)) {
    die("Maaf, anda harus mengisi data dengan lengkap");
} else {
    if (is_numeric($nama)) {
        die("Maaf, nama harus berupa huruf");
    } else {
        //Insert Data
        $sql = "UPDATE pegawai 
        SET nama = '$nama', tanggal_lahir = '1997/05/10', alamat = '$alamat', jenis_kelamin = 'L', agama = 'Islam' 
        WHERE NIP='$id'";

        if ($conn->query($sql) === TRUE) {
            //echo "<script>window.alert('Pegawai Berhasil ditambahkan.');window.location.href='../view/pegawai.php';</script>";
            header('location:../view/pegawai.php');
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
}
?>