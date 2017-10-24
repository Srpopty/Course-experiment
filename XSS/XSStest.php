<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<title>XSS Me!</title>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<p>What's your name?</p>
		<form action="" method="GET">
			<input type="text" name="name"/>
			<input type="submit"/>
		</form>
		<?php
			if (isset($_GET['name'])) {
				echo "<br />"."Hello ".$_GET['name'];
			}
		?>
	</body>
</html>