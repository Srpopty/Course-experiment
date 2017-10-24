<?php 
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$publickey = 'r9Ue4';
for ($i = 0; $i < strlen($publickey); $i++) {
   $pos = strpos($chars,$publickey[$i]);
   echo $pos." ".$pos." "."0 ".(strlen($chars)-1)." ";
}

if (isset($_GET['seed'])) {
	$seed = $_GET['seed'];
	mt_srand($seed);

	$pk = '';
	$pubkey = '';

	for ($i = 0; $i < strlen($publickey); $i++) {
		$pubkey .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
	}
	echo '<br />'.'Publickey: '.$pubkey.'<br />';

	for ($i = 0; $i < strlen($publickey); $i++) {
		$pk .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
	}
	echo 'Private: '.$pk;
}
?>