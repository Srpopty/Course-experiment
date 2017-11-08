<?php
if( isset($_POST['nickname']) && $_POST['pass'] === 'H4ck3d'){
	$nick = trim($_POST['nickname']);
	$fp = fopen('_n1ckn4m3.txt','a');
	$fw = fwrite($fp," , $nick");
	fclose($fp);
	header('Location: index.php');
} else {
	echo "Nothing here!";
}

?>