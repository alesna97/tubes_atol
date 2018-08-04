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

    if (empty($id_pegawai) || empty($nama_pegawai) || empty($id_jabatan) || empty($tgl_lahir) || empty($jk) || empty($no_hp) || empty($email) || empty($alamat)) {
        echo '<script>window.alert("Maaf, anda harus mengisi dat adengan lengkap");window.location=("../view/pegawai.php");</script>';
    } else {
        if (is_numeric($nama_pegawai)) {
            echo '<script>window.alert("Maaf, nama pegawai masih kosong");window.location=("../view/pegawai.php");</script>';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>window.alert("Maaf, email tidak valid");window.location=("../view/pegawai.php.php");</script>'; 
        } else {
            //Insert Data
            //inser juga
            $sql = "INSERT INTO pegawai 
            VALUES ('$id_pegawai', '$id_jabatan', '$nama_pegawai', '$tgl_lahir', '$jk', '$no_hp', '$email', '$alamat');";
            mysqli_query($conn, $sql);
            
            $sql = "INSERT INTO gaji 
            VALUES (DEFAULT, '$id_pegawai', '$id_jabatan', 0);";
            mysqli_query($conn, $sql);

            $sql = "INSERT INTO cuti 
            VALUES (DEFAULT, '$id_pegawai', 0, 4);";
            mysqli_query($conn, $sql);

            $sql = "INSERT INTO lembur 
            VALUES (DEFAULT, '$id_pegawai', 0);";

            if ($conn->query($sql) === TRUE) {
                //echo "<script>window.alert('Pegawai Berhasil ditambahkan.');</script>";
                header('location:../view/pegawai.php');
            } else {
                echo "Error: ".$sql."<br>".$conn->error;
            }
        }
    }
}

if (isset($_POST['btn_hapus_pegawai'])) {
    $id = $_POST['hapus_id'];
    $sql = "DELETE FROM pegawai WHERE id_pegawai='$id'";
    mysqli_query($conn, $sql);
    
    if ($conn->query($sql) === TRUE) {
        //echo "<script>window.alert('Pegawai Berhasil ditambahkan.');</script>";
        header('location:../view/pegawai.php');
    } else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
}

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

    if (empty($id_pegawai) || empty($nama_pegawai) || empty($id_jabatan) || empty($tgl_lahir) || empty($jk) || empty($no_hp) || empty($email) || empty($alamat)) {
        echo '<script>window.alert("Maaf, anda harus mengisi data adengan lengkap");window.location=("../view/pegawai.php");</script>';
    } else {
        if (is_numeric($nama_pegawai)) {
            echo '<script>window.alert("Maaf, anda harus mengisi data adengan lengkap");window.location=("../view/pegawai.php");</script>';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>window.alert("Maaf, anda harus mengisi data adengan lengkap");window.location=("../view/pegawai.php");</script>';
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
}

if (isset($_POST['btn_simpan_cuti'])) {
    $id_cuti = $_POST['ubah_id'];
    $cuti_saatini = $_POST['cuti_saatini'];
    $jumlah_cuti = $_POST['jumlah_cuti'];
    $kuota_cuti = $_POST['ubah_kuota'];

    switch ($jumlah_cuti) {
        case 0:
            $sisa_cuti = 4;
            break;
        case 1:
            $sisa_cuti = 3;
            break;
        case 2:
            $sisa_cuti = 2;
            break;
        case 3:
            $sisa_cuti = 1;
            break;
        case 4:
            $sisa_cuti = 0;
            break;
        default:
            # code...
            break;
    }

    if (!is_numeric($jumlah_cuti)) {
        echo '<script>window.alert("Maaf, anda harus mengisi data adengan lengkap");window.location=("../view/cuti.php");</script>';
    } elseif ($jumlah_cuti > 4 || $jumlah_cuti < 0) {
        die("Maaf, jumlah cuti harus sekitar angka 0 sampai 4");
        echo '<script>window.alert("Maaf, anda harus mengisi data adengan lengkap");window.location=("../view/cuti.php");</script>';
    } else {
        //Insert Data
        $sql = "UPDATE cuti 
        SET jumlah_cuti = '$jumlah_cuti', kuota_cuti = '$sisa_cuti'
        WHERE id_cuti='$id_cuti'";

        if ($conn->query($sql) === TRUE) {
            //echo "<script>window.alert('Pegawai Berhasil ditambahkan.');window.location.href='../view/pegawai.php';</script>";
            header('location:../view/cuti.php');
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
}

if (isset($_POST['btn_simpan_lembur'])) {
    $id_lembur = $_POST['ubah_id'];
    $jumlah_jam_lembur = $_POST['jumlah_jam_lembur'];

    if (!is_numeric($jumlah_jam_lembur)) {
        echo '<script>window.alert("Maaf, anda harus mengisi data adengan lengkap");window.location=("../view/lembur.php");</script>';
    } else {
        //Insert Data
        $sql = "UPDATE lembur 
        SET jumlah_jam_lembur = '$jumlah_jam_lembur'
        WHERE id_lembur='$id_lembur'";

        if ($conn->query($sql) === TRUE) {
            //echo "<script>window.alert('Pegawai Berhasil ditambahkan.');window.location.href='../view/pegawai.php';</script>";
            header('location:../view/lembur.php');
        } else {
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }
}
?>