<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8" />
		<title>XSS</title>
	</head>

	<body>
	    <fieldset>
			<legend>Easiest XSS</legend>
			<form action="XSS.php" method="GET" >
				<input type="text" name="test1" /><br />
				<input type="submit" value="Submit" />
				<?php if( !empty( $_GET['test1'] ) ){
					echo '<pre>Hello '.$_GET['test1'].'</pre>';
				}?>
			</form>
		</fieldset>
		<hr />

		<fieldset>
			<script>
				function test(){
					var str=document.getElementById("text").value;
					document.getElementById("t").innerHTML="<a href='http://"+str+"'>TestLink</a>";
				}
			</script>
			<legend>Closed <strong>quotation marks</strong> or <strong>labels</strong></legend>			
			<input type="text" id="text" value="" /><br />
			<input type="button" id="s" value="Submit" onclick="test()" />
			<div id="t"></div>
		</fieldset>
		<hr />

		<fieldset>
			<legend>Keywords filter</legend>
			<form action="XSS.php" method="GET" >
			<input type="text" name="test2" /><br />
			<input type="submit" value="Submit" />
			<?php if( !empty( $_GET['test2'] ) ){
				$test2 = str_replace( 'script', '', $_GET[ 'test2' ] );
				echo '<pre>Hello '.$test2.'</pre>';
				}?>
			</form>
		</fieldset>
		<hr />

		<fieldset>
			<legend><strong>Coding</strong> bypass</legend>
			<form action="XSS.php" method="GET" >
			<input type="text" name="test3" /><br />
			<input type="submit" value="Submit" />
			<?php if( !empty( $_GET['test3'] ) ){
				$test3 = preg_replace( '/\((.*)\)/', '', $_GET[ 'test3' ] );
				echo '<pre>Hello '.$test3.'</pre>';
				}?>
			</form>
		</fieldset>
		<hr />

		<fieldset>
			<legend><strong>GB</strong>xxxx</legend>
			<form action="XSS.php" method="GET" >
			<input type="text" name="test4" /><br />
			<input type="submit" value="Submit" />
			<?php 
			if( !empty( $_GET['test4'] ) ){
				header('Content-Type: text/html; charset=gbk');
				$test4 = addslashes($_GET["test4"]);
				echo "<br /><a href='http://".$test4."'>".$test4."</a>";
				}?>
			</form>
		</fieldset>
		<hr />
	</body>
</html>