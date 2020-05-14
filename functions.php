<?php
$con=mysqli_connect("localhost","root","lemalka123","sethsevanachannelling");
if (isset($_POST['login_submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from user where username='$username' and password='$password'";
	$result=mysqli_query($con,$query);
	if (mysqli_num_rows($result)==1)
	{
		header("Location:adminpanel.php");
	}
	else
	{
		echo"<script>alert('Error login')</script>";
		echo "<script>window.open('login.php','_self')</script>";
	}
	
	}










?>
