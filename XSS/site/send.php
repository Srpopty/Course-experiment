<?php
include("config.php");
$user = new User();
if(!$user->is_loaded()){
	header('Location: login.php' );
	exit();
}

if (!empty($_POST['to'])) {
	if ($user->findUser($_POST['to'])) {
		$m = new Message($user->get_property('username'), $_POST['to'], $_POST['msg']);
		$manager = new MessageManager();
		$mid = $manager->send($m);
		echo "Message sent";
	}
	else {
		echo "User not exists!";
	}
}
?>

<html lang="zh-ch">
    <head lang="zh-cn">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Send Message</title>
    </head>
    <body>
		<h1>Send Message</h1>
		<p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" />
 				username: <input type="text" name="to" /><br /><br />
 				message: <input type="text" name="msg" /><br /><br />
 				<input type="hidden" name="csrftoken" value="<?php echo $csrftoken; ?>"/>
 				<input type="submit" value="Send" />
			</form>
			<a href="./">back</a>
		</p>
	</body>
</html>