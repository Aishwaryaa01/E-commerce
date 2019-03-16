<?php

	//get the value passed from the log in page
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	//echo "select * from login where username='$username' and password='$password'";
	//connect to the server and select database
	$connect=mysqli_connect('localhost','root','','stack');
	// Query the databse for login
	$result=mysqli_query($connect,"insert into login (firstname,lastname,email,password) values ('$firstname','$lastname','$email','$password')");
	echo mysqli_error($connect);

	if(!$connect)
	{
		echo("somehing went wrong");
		
	}
	else
	{
		echo("registered  as"." ".$email);
	}
	
?>