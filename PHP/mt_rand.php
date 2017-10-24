    <title>PHP mt_rand</title>
  </head>

  <body>
<?php
include('header.php');
include('config.php');
?>
	<code><span style="color: #000000">
	<span style="color: #0000BB">&lt;?php
	<br />function&nbsp;</span><span style="color: #0000BB">GenerateKey</span><span style="color: #007700">(&nbsp;)&nbsp;{
	<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$length&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">16</span><span style="color: #007700">;
	<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$chars&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'</span><span style="color: #007700">;
	<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$password&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;
	<br />&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">$length</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++&nbsp;){
	<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$password&nbsp;</span><span style="color: #007700">.=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$chars</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$chars</span><span style="color: #007700">)&nbsp;-&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);
	<br />&nbsp;&nbsp;&nbsp;&nbsp;}
	<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$password</span><span style="color: #007700">;
	<br />}
	<br /></span><span style="color: #0000BB">$publickey&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GenerateKey</span><span style="color: #007700">();
	<br /></span><span style="color: #0000BB">$privatekey&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">GenerateKey</span><span style="color: #007700">();
	<br /></span><span style="color: #0000BB">?&gt;</span>
	</span>
	</code>
	<p>This is the public key: r9Ue4 </p>
	<form method="post" href=".">
		<p>Give me the private key which you figure out: </p>
	    <input name="pk" />
	    <input type="submit" value="submit" />
	</form>

<?php
if (isset($_POST['pk'])) {
	$pk = $_POST['pk'];
	if ($pk === 'E3v5r') {
		echo $flag2;
	}
	else {
		echo 'Try it again.';
	}
}
include('footer.php');
?>