<?php

$sname= "localhost";
$uname= "root";
$password = "2513";
$db_name = "users_db";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
} else{
	echo "you are connected to db_conn";
}