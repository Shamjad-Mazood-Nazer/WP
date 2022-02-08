<?php
	session_start();
	include 'connect.php';
	$sid = $_SESSION['sid'];
	if(isset($_POST["submit"]))
	{
		$id=$_POST["id"];
		$fn=$_POST["fname"];
		$ln=$_POST["lname"];
		$p=$_POST["phone"];
		$c=$_POST["course"];
		$s=$_POST["semester"];
		$sql="update student set fname='$fn' lname='$ln' phone='$p' course='$c' semester='$s' where sid='2'"; 
		$edit=mysqli_query($con,$sql);
	}
	$result=mysqli_query($con, "SELECT * FROM student WHERE sid='2'");
	$row=mysqli_fetch_array($result);
?>
<html>
	<head>
		<title>My Profile</title>
		<style>
			body
			{
				background-image:url(IMG/bcloud.png);
				background-attachment:fixed;
				background-size:cover;
				font:Georgia, "Times New Roman", Times, serif;
			}
			.wrap
			{
				max-width:350px;
				border-radius:20px;
				margin:auto;
				background:rgba(0,0,0,0.8);
				box-sizing:border-box;
				padding:40px;
				color:#fff;
				margin-top:100px;
			}
			h2
			{
				text-align:center;
			}
			.button
			{
				background-color:#6600FF;
				border-radius: 10px;
				color:#FFFFFF;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
				
			}
			.button:hover
			{
				background-color: #f44336;
				color: white;
			}
			input[type=text],input[type=password]
			{
				width:100%;
				box-sizing:border-box;
				padding:12px 5px;
				background:rgba(0,0,0,0.10);
				outline:none;
				border:none;
				border-bottom:1px dotted #fff;
				color:#fff;
				border-radius:5px;
				margin:5px;
				font-weight:bold;
			}
			select
			{
				width:100%;
				box-sizing:border-box;
				padding:12px 5px;
				background:rgba(0,0,0,1);
				outline:none;
				border:none;
				border-bottom:1px dotted #fff;
				color:#fff;
				border-radius:5px;
				margin:5px;
				font-weight:bold;
			}
			
			input[type=submit]
			{
				width:100%;
				box-sizing:border-box;
				padding:10px 0;
				margin-top:30px;
				outline:none;
				border:none;
				background:red;
				opacity:0.7;
				border-radius:20px;
				font-size:20px;
				color:CYAN;
			}
			input[type=submit]:hover
			{
				background:black;
				opacity:0.7;
			}
		</style>
	</head>
	<body>
			<a href="user.php" class="button">Home</a>
			<!--<a href="signup.php" class="button">New User</a>
			<a href="home.php" class="button">LOGOUT</a>-->
		<form action="#" method="post">
			<div class="wrap">
				<h2><u>Your Profile</u> :</h2>
				<fieldset>
					<legend>Name</legend>
					<input type="text" name="name" value="<?php echo $row[0]; ?>">
				</fieldset>				<fieldset>
					<legend>Address</legend>
					<input type="text" name="address" value="<?php echo $row[0]; ?>">
				</fieldset>
				<fieldset>
					<legend>Course</legend>
					<input type="text" name="name" value="<?php echo $row[0]; ?>">
					<select name="course" value="<?php echo $row[0]; ?>">
						<option value="course">I yr MCA (INT)</option>
						<option value="course">II yr MCA (INT)</option>
						<option value="course">III yr MCA (INT)</option>
						<option value="course">IV yr MCA (INT)</option>
						<option value="course">V yr MCA (INT)</option>
						<option value="course">I yr MCA (R)</option>
						<option value="course">II yr MCA (R)</option>
					</select>
				</fieldset><br>
					<input type ="text"  name="email" value="<?php echo $row[0];?>"/>
					<input type ="password" name="password" value="<?php echo $row[0];?>"/>
					<input type ="text"  name="phone_number" value="<?php echo $row[0];?>"/>

				<input type="submit" name="submit" value="create account now"/>

				</fieldset>
			</div>
		</form>
	</body>
</html>
