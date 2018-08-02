<?php
	require_once"conn_db.php";
	
		if(isset($_POST['btn_ganti_pass'])){
			$passlama = md5(mysqli_real_escape_string($conn,$_POST['pass_lama']));
			$passbaru = md5(mysqli_real_escape_string($conn,$_POST['pass_baru']));

			$sql = "SELECT * FROM admin WHERE password = '$passlama' ";
			$res = mysqli_query($conn,$sql);
			$check = mysqli_num_rows($res);

			if ($check>0){
				$sql = "UPDATE admin SET password = '$passbaru' WHERE username = 'admin_almanac'";
				$new_res = mysqli_query($conn,$sql);
				echo "Password Berhasil di ubah";
			}else{
				//echo "GAGAL LOGIN !";
				echo "password salah";
			}
		}
?>