<?php
	// CEK JIKA SUDAH ADA SESSION
	function session_login(){
		session_start();
    	if(!empty($_SESSION['username'])){
        header('location:../view/dashboard.php');
        }
	}
	// CEK JIKA BELUM ADA SESSION
	function no_session_login(){
		session_start();
    	if(empty($_SESSION['username'])){
        header('location:../view/login.php');
        }
	}
?>