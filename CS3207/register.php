<?php
include("config.php");
if(isset($_GET['submit']))
{
	$name = $_GET['name'];
	$gender = $_GET['ab'];
	$dob = $_GET['dob'];
	$email = $_GET['email'];
	$number = $_GET['number'];
	$password = $_GET['password'];
	$result = mysqli_query($mysqli,"insert into user values('','$name','$gender','$dob','$email','$number','$password')");
	if($result)
	{
		echo "Registration Successfully";
	}
	else{
		echo "failed:";
	}
}
?>