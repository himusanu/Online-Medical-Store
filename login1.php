<?php

$con=mysqli_connect('localhost','root','','himanshu');

	$FirstName=$_POST['FirstName'];
	$Password=$_POST['Password'];

	$sql="SELECT * FROM `sanu` WHERE FirstName='$FirstName' AND Password='$Password'";

	$result=mysqli_query($con,$sql);

	if($result)
	{
		echo '<script type="text/javascript">alert("Login Successfully...!!!")</script>';
		session_start();
		$_SESSION['NAME'] = $FirstName;
		header("refresh: 2, url = index.php");
	}
	else
	{
		echo '<script type="text/javascript">alert("Please enter valid Email id & Password!!")</script>';
	}

?>