<?php
$servername = "localhost";
$dbUsername = "root";
$password = "";
$dbName = "register";

$conn = new mysqli($servername, $dbUsername, $password,$dbName);

if($conn->connect_error)
{
	die("Connection Faile: ".$conn->connect_error);
}
