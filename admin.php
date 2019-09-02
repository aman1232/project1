<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body style="background-color:grey; ">
	<center><img src="logo.png"></center>
	<div>
		<h4 style="color:blue;"><b>Contact Table</b></h4>
	<table border="1" class="table table-dark">
		<thead> 
		<td><b>Fname</b></td>
		<td><b>Lname</b></td>
		<td><b>Email</b></td>
		<td><b>Comment</b></td>
</thead>

<?php
require("./includes/db.inc.php");
$sql = "SELECT * from contact";
$result = $conn->query($sql);

if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{    
		echo"<tr>";
		echo "<td>".$row['FirstName']."</td>";
		echo "<td>".$row['LastName']."</td>";
		echo "<td>".$row['email']."</td>";
		echo "<td>".$row['comment']."</td>";
		echo '<td><a href="del.php?id='.$row['id'].'">Delete</a>';;
		echo"</tr>";
	}
}

?>
</table>
</div>
<div>
		<h4 style="color:blue;"><b>Register Table</b></h4>
	<table border="1" class="table-dark">
		<thead> 
		<td><b>Fname</b></td>
		<td><b>Lname</b></td>
		<td><b>Phone_no</b></td>
		<td><b>Qulafication</b></td>
		<td><b>Sex</b></td>
		<td><b>E-mail</b></td>
		<td><b>Preclz</b></td>
		<td><b>Gpa/percent</b></td>
	    <td><b>Program</b></td>
	    <td><b>Address</b></td>



</thead>

<?php
require("./includes/db.inc.php");
$sql = "SELECT * from reg_1";
$result = $conn->query($sql);

if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{    
		echo"<tr>";
		echo "<td>".$row['firstname']."</td>";
		echo "<td>".$row['lastname']."</td>";
		echo "<td>".$row['phone_no']."</td>";
		echo "<td>".$row['qualification']."</td>";
		echo "<td>".$row['sex']."</td>";
		echo "<td>".$row['mail']."</td>";
		echo "<td>".$row['preclz']."</td>";
		echo "<td>".$row['gpa']."</td>";
		echo "<td>".$row['program']."</td>";
		echo "<td>".$row['address']."</td>";
		echo '<td><a href="del2.php?id='.$row['id'].'">Delete</a>';;

        echo"</tr>";
	}
}

?>
</table>
</div>
</body>
</html>