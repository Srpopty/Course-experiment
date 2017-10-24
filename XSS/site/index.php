<?php
include("config.php");
$user = new User();
if(!$user->is_loaded()){
	echo '<a href="login.php">Login</a><br /><a href="register.php">Register</a>';
	exit();
}
else{
	$manager = new MessageManager();
	$messages = $manager->all($user->get_property('username'));
?>
<html lang="zh-ch">
    <head lang="zh-cn">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Messages</title>
    </head>
    <body>
		<h1>Hello <?php echo $user->userData['username'];?></h1>
		All messages:
		<table>
		  	<thead>
				<tr>
			  	<th>From</th>
			  	<th></th>
				</tr>
		  	</thead>
		  	<tbody>
			<?php foreach($messages as $message){ ?>
			<tr>
			  <td><?php echo htmlspecialchars($message->from); ?></td>
			  <td><a href="show.php?id=<?php echo $message->id; ?>">Read</a></td>
			</tr>
			<?php } ?>
		  	</tbody>
		</table> 	
    </body>
</html>
<?php 
}
echo '<hr /><a href="send.php">Send message</a><br /><a href="login.php?logout=1">Logout</a>';
?>