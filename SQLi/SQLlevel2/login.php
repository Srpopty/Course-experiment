<?php
	header("Content-Type:text/html;charset=utf-8");
	error_reporting(E_ERROR);
	define ('PATH_WEB', dirname(__FILE__).'/');
	require_once(dirname(__FILE__).'/include/conf.php');
	require_once(dirname(__FILE__).'/include/fiter.php');
	#var_dump($_SESSION);
	if($_SESSION['flag'] === 1){
		header("location:./admin/");exit;
	}
	#echo $_POST['username'].'````'.$_POST['password'];
	
	if($_POST['username'] && $_POST['password']){
		$obj = new fiter();
		$username = $obj->sql_clean($_POST['username']);
		$password = $_POST['password'];
		$query="SELECT * FROM admin WHERE username='".$username."'";
		$result=mysql_query($query);
		#var_dump($result);
		if ($row = mysql_fetch_array($result)){
			#print_r($row);echo "\n\r<br/>";
            if ($row['password']===$password){
				$_SESSION['flag'] = 1;
				#echo $_SESSION['flag'];
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
