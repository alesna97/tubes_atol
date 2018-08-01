<?php
require "../config/conn_db.php";

if (isset($_POST['btn_simpan_pegawai'])) {
    $id = $_POST['ubah_id'];
    $id_pegawai=strtoupper($_POST['id_pegawai']);
    $nama_pegawai=$_POST['nama_pegawai'];
    $id_jabatan=strtoupper($_POST['id_jabatan']);
    $tgl_lahir=$_POST['tanggal_lahir'];
    $jk=$_POST['jenis_kelamin'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
} else {
    echo "data tidak didapatkan";
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
        $sql = "UPDATE pegawai 
        SET nama_pegawai = '$nama_pegawai', id_jabatan = '$id_jabatan', tanggal_lahir = '$tgl_lahir', jenis_kelamin = '$jk', no_hp = '$no_hp', email = '$email', alamat = '$alamat' 
        WHERE id_pegawai='$id_pegawai'";

        if ($conn->query($sql) === TRUE) {
            //echo "<script>window.alert('Pegawai Berhasil ditambahkan.');window.location.href='../view/pegawai.php';</script>";
            header('location:../view/pegawai.php');
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
}
?>