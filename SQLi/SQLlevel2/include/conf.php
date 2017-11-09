<?php
$host = "localhost";
$user = "root";
$pass = "Sr19983700";
$db = "ctf";
if(!$connect = new mysqli($host,$user ,$pass, $db))die('Connect eror!');
session_start();
