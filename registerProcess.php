<?php

require('./includes/db.inc.php');
if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$program=$_POST['select'];
	$percentage=$_POST['per'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$qualification=$_POST['qual'];
	$pervious=$_POST['prev'];


	$sql = "INSERT into reg_1(firstname,lastname,mail,phone_no,qualification,program,gpa,address,preclz,sex) values ('$fname','$lname','$email','$phone','$qualification','$program','$percentage','$address','$pervious','$gender')";
	$result = $conn->query($sql);
	// die($sql);
	if($result)
	{
		header("location:scholar.php");
	}
	else
	{
		die(errror);
	}
	
}
?>