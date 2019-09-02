<?php

require('./includes/db.inc.php');
if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email=$_POST['email'];
	$comment=$_POST['comment'];
	

	$sql = "INSERT into contact(Firstname,Lastname,email,comment)values('$fname','$lname','$email','$comment')";
	$result = $conn->query($sql);
	// die($sql);
	if($result)
	{
		header("location:admin.php");
	}
	else
	{
		header("locaion:contact.php");
	}
	
}
?>