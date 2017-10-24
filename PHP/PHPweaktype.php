    <title>PHP weak type</title>
  </head>

  <body>
<?php
include('header.php');
include('config.php');

if (empty($_GET)){
	show_source(__FILE__);
}else{
	$test1=0;
	$test2=0;
	$test3=0;

	if (isset($_GET['a']))
	{
	        $aa = $_GET['a'];
			$aa == "1" ? die("You can not pass!") : NULL;
	        switch ($aa)
	        {
		        case 0:
		        case 1:
		                $test1 = 1;
		                break;
	        }
	}

	if ($test1 === 1){
		if (isset($_GET['b']) && isset($_GET['c'])){
			$bb = $_GET['b'];
			$cc = $_GET['c'];
			if ($bb === $cc){
				die("You can not pass!");
			}
			if (@md5($bb) == @md5($cc)){
				$test2 = 1;
			}
		}
	}

	if ($test2 === 1){
		if (isset($_GET['d']) && isset($_GET['e'])){
			$dd = $_GET['d'];
			$ee = $_GET['e'];
			if ($dd === $ee){
				die("You can not pass!");
			}
			if (@sha1($dd) === @sha1($ee)){
				$test3 = 1;
			}
		}
	}

	if ($test3 === 1){
		echo 'You pass it!'.'<br />';
		echo $flag1;
	}
}

include('footer.php');
?>