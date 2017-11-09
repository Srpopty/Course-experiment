<?php
	require_once('../include/conf.php');
	require_once('../include/fiter.php');
	if(isset($_SESSION['flag']) && $_SESSION['flag'] === 1){
		session_destroy();
		header("location:../index.php");
		exit();
	}
?>