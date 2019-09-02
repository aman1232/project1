<?php
$name=$_POST['name'];
$msg=$_POST['message']; 

$email=$_POST['email'];
$to="sunway212@gmail.com";
$subject="Message from Website";
if(mail($to,$subject,$msg))
{
	echo"mail sent"; 
}
else die("NOT sent");
?>