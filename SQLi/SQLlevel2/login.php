<?php
	header( "Content-Type:text/html;charset=utf-8" );
	define ( 'PATH_WEB', dirname( __FILE__ ).'/' );

	require_once( dirname( __FILE__ ).'/include/conf.php' );
	require_once( dirname( __FILE__ ).'/include/fiter.php' );
	
	if( isset( $_SESSION['flag'] ) && $_SESSION['flag'] === 1 ){
		header( "location:./admin/" );
		exit();
	}
	
	if( $_POST['uname'] && $_POST['passwd'] ){
		$obj = new fiter();
		$uname = $obj->sql_clean( $_POST['uname'] );

		$passwd = $_POST['passwd'];

		$query = "SELECT * FROM admin WHERE uname='".$uname."'";
		$result = $connect->query( $query );

		if ( $result && $row = $result->fetch_array() ){
            if ( $row['passwd'] === $passwd ){
				$_SESSION['flag'] = 1;
				header( "location:./admin/" );exit();
			}
            else{
				echo "<script> alert( 'password error!!@_@' );parent.location.href='index.php'; </script>"; exit();
            }
        }
		else{
			echo "<script> alert( 'username error!!@_@' );parent.location.href='index.php'; </script>"; exit();
		}
		
	}
	else {
		echo "<script> alert( 'username and password must have a value!!@_@' );parent.location.href='index.php'; </script>"; exit();
	}
?>
