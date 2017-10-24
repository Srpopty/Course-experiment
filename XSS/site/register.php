<?php
require_once 'config.php';
$user = new User();

if (!empty($_POST['username'])){
    $data = array(
        'username' => $_POST['username'],
        'password' => $_POST['pwd'],
    );
    $userID = $user->insertUser($data);
    if ($userID==0) {
        echo 'User has registered!';
    }
    else {
        echo 'User registered successful.';
    }
}
?>
<html>
    <head lang="zh-cn">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" />
                username: <input type="text" name="username" /><br /><br />
                password: <input type="password" name="pwd" /><br /><br />
                <input type="hidden" name="csrftoken" value="<?php echo $csrftoken; ?>"/>
                <input type="submit" value="Register" />
            </form>
            <a href="./">back</a>
        </p>
    </body>
</html>