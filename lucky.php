<?php

$con=mysqli_connect('localhost','root','','himanshu');

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Gender=$_POST['Gender'];
$DOB=$_POST['DOB'];
$MobNo=$_POST['MobNo'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Cpassword=$_POST['Cpassword'];

$query="INSERT INTO `sanu`(`FirstName`, `LastName`, `Gender`, `DOB`, `MobNo`, `Email`, `Password`, `Cpassword`) VALUES ('$FirstName','$LastName','$Gender','$DOB','$MobNo','$Email','$Password','$Cpassword')";

$result=mysqli_query($con,$query);

if($result)
{
	echo '<script type="text/javascript">alert("Registration Successfully..!!!")</script>';
	header("refresh: 2, url = projlogin.php");
}

else
{
	echo '<script type="text/javascript">alert("Not Registered!!!")</script>';
}

?>