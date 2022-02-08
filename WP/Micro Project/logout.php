<?php
	session_destroy();
	session_start();
	$_SESSION['sid']= null;
	header("location: home.php");
?>