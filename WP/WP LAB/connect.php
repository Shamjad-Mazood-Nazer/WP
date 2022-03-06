<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "covaxin";
	//Create connection
	$con = mysqli_connect($servername,$username,$password,$database);
	//Check connection
	if($con===FALSE)
	{
		die("Connection Failed! ".$con->connect_error);
	}
?>