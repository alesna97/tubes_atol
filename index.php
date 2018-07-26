<?php
    session_start();
    if(!empty($_SESSION['username'])){
        header('location:view/dashboard.php');
        }else{
		header("location:view/welcome.php");
	}
?>