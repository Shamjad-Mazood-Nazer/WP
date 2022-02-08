<?php
	include 'connect.php';
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$sql = "INSERT INTO `tbl_user`(`uid`, `name`, `email`, `password`, `gender`) VALUES (null, '$name','$email','$password','$gender')";
		$result = mysqli_query($con,$sql);
		echo "While creating your Account you need to Login again after redirected to LOGIN page";
		if($result)
		{
			header("location:home.php");
		}
		else{
		 echo mysqli_error($con);
		}
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Add New One</title>
		<style type="text/css">
			body
			{
				background-image:url(IMG/wcloud.jpg);
				background-size:cover;
				font-family:Arial, Helvetica, sans-serif;
				background-attachment:fixed;
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
				margin-top:15px;
			}
			h2
			{
				text-align:center;
			}
			h4
			{
				text-align:left;
			}
			h6
			{
				text-size:5px;
			}
			textarea
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
			input[type=text],input[type=password],input[type=email]
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
			input[type=button]
			{
				width:100%;
				box-sizing:border-box;
				padding:10px 0;
				margin-top:30px;
				outline:none;
				border:none;
				background:cyan;
				opacity:0.7;
				border-radius:20px;
				font-size:20px;
				color:RED;
			}
			input[type=button]:hover
			{
				background:black;
				opacity:0.7;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<h2>Enter Your Details</h2>
			<form action="signup.php"  method="POST">
				<fieldset>
					<legend>NAME</legend>
					<input type ="text" name="name" placeholder="Full Name.." required />
				</fieldset><br>
				
				<fieldset>
					<legend>LOGIN CREDENTIALS</legend>
					<input type ="email"  name="email" placeholder="email.." required  />
					<input type ="password" name="password" placeholder="password.." required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,15}$" oninvalid="this.setCustomValidity('Password should contain :\n\nminimum 6 characters.\nat least 1 uppercase.\natleast 1 lower case.\nat least 1 number.\nat least 1 special character-->!@#$%^&*_=+-')" oninput="this.setCustomValidity('')"/>
				</fieldset><br>
				<fieldset>
					<legend>GENDER</legend>
					<input type="radio" name="gender" value="MALE">MALE
					<input type="radio" name="gender" value="FEMALE">FEMALE
				</fieldset>
				<input type="submit" name="submit" value="create account now"/>
				<a href="passwordreset.php"><input type="button" name="reset" value="Forgot password?"/></a><br><br>
				
			</form>
		</div>
	</body>
</html>
