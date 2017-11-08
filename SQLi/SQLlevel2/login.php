<?php
	header("Content-Type:text/html;charset=utf-8");
	error_reporting(E_ERROR);
	define ('PATH_WEB', dirname(__FILE__).'/');
	require_once(dirname(__FILE__).'/include/conf.php');
	require_once(dirname(__FILE__).'/include/fiter.php');
	if($_SESSION['flag'] === 1){
		header("location:./admin/");exit;
	}
	
	if($_POST['username'] && $_POST['password']){
		$obj = new fiter();
		$username = $obj->sql_clean($_POST['username']);
		$password = $_POST['password'];
		$query="SELECT * FROM users WHERE username='".$username."'";
		$result=$connect->query($query);
		$row = $result->fetch_array();
		if ($row->num_rows){
            if ($row['password']===$password){
				$_SESSION['flag'] = 1;
				header("location:./admin/");exit();
			}
            else{
				echo "<script> alert('password error!!@_@');parent.location.href='index.php'; </script>"; exit();
            }
        }
		else{
			echo "<script> alert('username error!!@_@');parent.location.href='index.php'; </script>"; exit();
		}
		
	}
	else {
		echo "<script> alert('username and password must have a value!!@_@');parent.location.href='index.php'; </script>"; exit();
	}
?>
