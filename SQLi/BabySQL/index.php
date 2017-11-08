<!DOCTYPE html>
<html>
<head>
    <title>SQLEXP</title>
</head>
<body>

<?php

$DB_HOST = 'localhost';
$DB_USER = 'tester';
$DB_PASS = 'password';
$DB_NAME = 'SQLitest';

if (!$link=mysqli_connect($DB_HOST, $DB_USER, $DB_PASS)) die('Connection error');
if (!mysqli_select_db($link, $DB_NAME)) die('Database error');


echo <<<EOF
<form method=GET>
<a>flag in table  fl4g<a><br></br>
    <input type=text name=id1 required placeholder="id1"  />
    <button type="submit" >Hint</button><a>NO WAF<a>
</form><br></br>
<form method=GET>
    <input type=text name=id2 required placeholder="id2"  />
    <button type="submit" >Hint</button><a>Keyword WAF</a>
</form><br></br>
<form method=GET>
    <input type=text name=id4 required placeholder="id4"  />
    <button type="submit" >Hint</button><a>Regular WAF<a>
</form><br></br>
<form method=GET>
    <input type=text name=id3 required placeholder="id3"  />
    <button type="submit" >Hint</button><a>Space WAF<a>
</form><br></br>
<form method=GET>
    <input type=text name=id5 required placeholder="id5"  />
    <button type="submit" >Hint</button><a>Waaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaagh!!!!<a>
</form><br></br>


EOF;
    if (isset($_GET['id1'])) {
        $id = $_GET['id1'];
        $q = sprintf("SELECT * FROM msgs WHERE id = '%s'", $id);
        echo $q;
        if($query = mysqli_query($link, $q, MYSQLI_USE_RESULT)){
            $result = mysqli_fetch_all($query);
            mysqli_free_result($query);
            ?>
                <p><strong><?php foreach($result as $r){echo $r[1].'<br />';}?></strong></p><?php
        }
    }
    if (isset($_GET['id2'])) {
        $id = $_GET['id2'];
        $id = str_replace('select','',$id);
        $id = str_replace('from','',$id);
        $id = str_replace('order','',$id);
        $id = str_replace('where','',$id);
        $id = str_replace('or','',$id);
        $id = str_replace('union','',$id);
        $q = sprintf("SELECT * FROM msgs WHERE id = '%s'", $id);
        echo $q;
        if($query = mysqli_query($link, $q, MYSQLI_USE_RESULT)){
            $result = mysqli_fetch_all($query);
            mysqli_free_result($query);
            ?>
                <p><strong><?php foreach($result as $r){echo $r[1].'<br />';}?></strong></p><?php
        }
    }
    if (isset($_GET['id3'])) {
        $id = $_GET['id3'];
        $id = str_replace(' ','',$id);
        $q = sprintf("SELECT * FROM msgs WHERE id = '%s'", $id);
        echo $q;
        if($query = mysqli_query($link, $q, MYSQLI_USE_RESULT)){
            $result = mysqli_fetch_all($query);
            mysqli_free_result($query);
            ?>
                <p><strong><?php foreach($result as $r){echo $r[1].'<br />';}?></strong></p><?php
        }
    }
    if (isset($_GET['id4'])) {
        $id = $_GET['id4'];

        $p1 = '/select/Ui';
        $p2 = '/from/Ui';
        $p3 = '/and/Ui';
        $p4 = '/union/Ui';
        $p5 = '/or/Ui';
        $id =  preg_replace($p1, "", $id);
        $id =  preg_replace($p2, "", $id);
        $id =  preg_replace($p3, "", $id);
        $id =  preg_replace($p4, "", $id);
        $id =  preg_replace($p5, "", $id);



        $q = sprintf("SELECT * FROM msgs WHERE id = '%s'", $id);
        echo $q;
        if($query = mysqli_query($link, $q, MYSQLI_USE_RESULT)){
            $result = mysqli_fetch_all($query);
            mysqli_free_result($query);
            ?>
                <p><strong><?php foreach($result as $r){echo $r[1].'<br />';}?></strong></p><?php
        }
    }
    if (isset($_GET['id5'])) {
        $id = $_GET['id5'];

        $p1 = '/select/Ui';
        $p2 = '/from/Ui';
        $p3 = '/and/Ui';
        $p4 = '/union/Ui';
        $p5 = '/or/Ui';
        $p6 = '/\s/Ui';
        $p7 = '/\*/';
        $p9 = '/,/';
        $id =  preg_replace($p1, "", $id);
        $id =  preg_replace($p2, "", $id);
        $id =  preg_replace($p3, "", $id);
        $id =  preg_replace($p4, "", $id);
        $id =  preg_replace($p5, "", $id);
        $id =  preg_replace($p6, "", $id);
        $id =  preg_replace($p7, "", $id);
        $id =  preg_replace($p9, "", $id);

        if(!empty($id))
        {
            $q = sprintf("SELECT * FROM msgs WHERE msg LiKE '%%%s%%';", $id);
            echo $q;
            if($query = mysqli_query($link, $q, MYSQLI_USE_RESULT)){
                $result = mysqli_fetch_all($query);
                mysqli_free_result($query);
                ?>
                    <p><strong><?php foreach($result as $r){echo $r[1].'<br />';}?></strong></p><?php
            }
        }
    }

mysqli_close($link);


?>

</body>
</html>

