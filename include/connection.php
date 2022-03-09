<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "jobify";


$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_errno) {
	echo "connection failed!". $connection->connect_error;
	die();
}

?>