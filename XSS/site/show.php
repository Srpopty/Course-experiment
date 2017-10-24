<?php
include("config.php");
$user = new User();
if(!$user->is_loaded()){
	header('Location: login.php' );
	exit();
}

$manager = new MessageManager();

$message = $manager->one($user->get_property('username'), $_GET['id']);

if(!$message){die("No message");}

?>

<html lang="zh-ch">
    <head lang="zh-cn">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Show Messages</title>
    </head>
    <body>
		<table>
			<thead>
				<tr>
					<th>from</th>
					<th>message</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $message->from; ?></td>
					<td><?php echo $message->msg; ?></td>
				</tr>
			</tbody>
		</table>
		<a href="./">back</a>
    </body>
</html>