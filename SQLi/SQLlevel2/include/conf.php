<?php
$host = "localhost";
$user = "tester";
$pass = "password";
$db = "SQLlevel2";
$connect = @mysql_connect($host, $user, $pass) or die("Unable to connect");
mysql_select_db($db) or die("Unable to select database");
session_start();
