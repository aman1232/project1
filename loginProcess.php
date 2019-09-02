<?php
require('./includes/db.inc.php');
if(isset($_POST['login']))
{
	$name = $_POST['username'];
	$pas = $_POST['password'];

	$sql = "SELECT * from admin where username ='$name' and password = '$pas'";
	$result = $conn->query($sql);
	// die($sql);
	if($result->num_rows>0)
	{
		header("location:admin.php");
	}
	else
	{
		header("locaion:index.php");
	}
	
}
?>