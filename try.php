<?php

	//get the value passed from the log in page
	$username=$_POST['userid'];
	$password=$_POST['password'];
	//echo "select * from login where username='$username' and password='$password'";
	//connect to the server and select database
	$connect=mysqli_connect('localhost','root','','stack');
	// Query the databse for login
	$result=mysqli_query($connect,"select * from login where email='$username' and password='$password'");
	echo mysqli_error($connect);
	$row =mysqli_fetch_array($result);
	if($row["email"]== $username && $row["password"]==$password)
	{
		echo("login successfull"." ".$row['email']);
	}
	else
	{
		echo("failed to login");
	}
	
?>