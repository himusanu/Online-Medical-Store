<?php

$con=mysqli_connect('localhost','root','','himanshu');

if(isset($_POST['Login']))
{
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];

	$sql="SELECT * FROM `sanu` WHERE Email='$Email' AND Password='$Password'";

	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)>0)
	{
		echo '<script type="text/javascript">alert("Login Succefully..!!!")</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Please enter valid Email id & Password!!!")</script>';
	}
}

?>