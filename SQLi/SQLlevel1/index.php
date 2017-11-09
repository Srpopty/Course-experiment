<title>Nickname</title>
<style type="text/css">
body,td,th {
	color: #FFCC00;
	font-family: Tahoma;
	font-weight: bold;
}
body {
	background-color: #333333;
}
input
{
background:#333333;
border:3px dashed #FFF;
color:Red;
font-family: "Courier New", Courier, monospace;
font-size:20px;
}
</style>
<?php

if(!isset($_COOKIE['Hint']))
	setcookie('Hint', 0);

error_reporting(0);

$fp = fopen('_n1ckn4m3.txt','r');
$fr = fread($fp,filesize('_n1ckn4m3.txt'));
$fr = strip_tags($fr);
fclose($fp);

echo "<center><font color=White size='4px'>Nickname: <br>";
echo "<font color=Red>".$fr."</font>";
echo "<br>was hacked</font></center>";
?>
<?php

if (isset($_POST['user']) && isset($_POST['pass'])) {

	if (empty($_POST['user']) || empty($_POST['pass'])) {
		echo "<h1>Please type Username - Password</h1>";exit();
	}
	if(!$connect = new mysqli('localhost','tester','tester', 'SQLlevel1'))die('Connect eror!');

	$user = $_POST['user']; 
	$pass = addslashes($_POST['pass']);

	$sqlcheckuser = "SELECT * FROM user WHERE username = '".$user."' LIMIT 0,1";

	$checkuser = $connect->query($sqlcheckuser) or die (mysqli_error().'<br>Query Error: '.$sqlcheckuser);

	$sqluserpass = "SELECT * FROM user WHERE username = '".$user."' AND password = '".$pass."' LIMIT 0,1";
	$query = $connect->query($sqluserpass)or die (mysqli_error());

	$userarray = $checkuser->fetch_array();
	$array = $query->fetch_array();

	echo "<h1>";

	if ($userarray['username'] === 'admin') {
		if ($array['password'] === $pass) {
		echo "0kie! Congratulations :) ... Thanks for join";
		$_SESSION['pass'] = true;
	?>
		<form id="logined" name="pass" method="post" action="_H4cked.php">
		  <input name="pass" type="hidden" id="pass" value="H4ck3d" />
		  Your Nickname: 
  		  <input name="nickname" type="text" id="nickname" size="40" />
  		  <input type="submit" name="submit" value="Hacked!" />
		</form>
		<?php
		} else {
			echo "Failed! ... Password is Wrong";
		}
	} else {
		echo "Username is Wrong";
	}
	echo "</h1>";
} else {
?><center><br><br><h1>
<form id="form2" name="form2" method="post" action="">
  <label>
  Username: 
  <input name="user" type="text" id="user" size="40" maxlength="50" value="admin"/>
  </label>
  <p>Password: 
    <input name="pass" type="text" id="pass" value="" size="40" maxlength="8"/>
    <br />
    <br />
    <label>
    <input type="submit" name="login" value="Login" />
    </label>
  </p>
</form></center></h1>
<?php 
}
if($_COOKIE['Hint']){?>
<!-- 
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	...
	if($user === 'admin' && $query_result['password'] === $pass)
	{
		Yeah, that's Go0d!
	}
-->
<?php 
	
} 
?>