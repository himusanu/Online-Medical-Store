<?php

$con=mysqli_connect('localhost','root','','feedback');

$Reason=$_POST['Reason'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$Description=$_POST['Description'];

$query="INSERT INTO `feed`(`Reason`, `Email`, `Mobile`, `Description`) VALUES ('$Reason','$Email','$Mobile','$Description')";

$result=mysqli_query($con,$query);

if($result)
{
	echo '<script type="text/javascript">alert("Thanks For Visiting Our Site!!!")</script>';
	header("refresh: 1, url = index.php");
}

else
{
	echo '<script type="text/javascript">alert("Please give Feedback")</script>';
}

?>