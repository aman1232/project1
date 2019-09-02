<?php
$id=$_GET['id'];
$server="localhost";
$username="root";
$password="";
$dbname="register";
$conn=mysqli_connect($server,$username,$password,$dbname);

$sql="DELETE FROM reg_1 Where id='$id'";
$query=mysqli_query($conn,$sql);
if($query){
	header("location:admin.php");
}
else{
	die("error");
}
?>