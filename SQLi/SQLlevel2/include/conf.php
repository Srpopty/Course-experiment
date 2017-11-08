<?php
$host = "localhost";
$user = "tester";
$pass = "password";
$db = "SQLlevel2";
if(!$connect = new mysqli($host,$user ,$pass, $db))die('Connect eror!');
session_start();
