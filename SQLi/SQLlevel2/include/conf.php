<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sqllevel2";
if(!$connect = new mysqli($host,$user ,$pass, $db))die('Connect eror!');
session_start();
