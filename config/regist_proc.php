<?php
	require_once "conn_db.php";

	if (isset($_POST['btn_create'])){	
		//FILTER DATA
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$username = mysqli_real_escape_string($conn,$_POST['user']);
		//ENKRIPSI PASSWORD
		$pass = md5(mysqli_real_escape_string($conn,$_POST['pass']));

		//INPUT DATABASE
		if (($email!='') && ($username!='') && ($pass!='')){
		$sql = "INSERT INTO admin (username,email,password) VALUES ('$username','$email','$pass')";
		$res = mysqli_query($conn,$sql);
		header('location:../view/login.php');
		}else{
			echo "FIELD MASIH KOSONG";
		}
	}
?>