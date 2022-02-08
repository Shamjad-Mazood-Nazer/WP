<?php
	session_start();
	include 'connect.php';
	
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['email']) && !empty($_POST['password']))
		{
			$sql = "SELECT * from tbl_user";
			$result = mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				$id=$row['uid'];
				$email=$row['email'];
				$password=$row['password'];
				if($_POST['email']==$email && $_POST['password']==$password)
				{
					$_SESSION['sid'] = $row['uid'];
					header("location:user.php");
				}
			}
		}
	}
?>

<html>
	<head>
		<script type="text/javascript" language="javascript">
			function ValidateEmail(inputText)
			{
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(inputText.value.match(mailformat))
				{
					alert("Valid email address!");
					document.form1.text1.focus();
					return true;
				}
				else
				{
					alert("You have entered an invalid email address!");
					document.form1.text1.focus();
					return false;
				}
			}
		</script>
		<title>DiGi Locker</title>
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
				margin-top:25px;
			}
			h2
			{
				text-align:center;
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
				margin-top:5px;
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
			#btn
			{
				width:100%;
				box-sizing:border-box;
				padding:10px 0;
				margin-top:5px;
				outline:none;
				border:none;
				background:green;
				opacity:0.7;
				border-radius:20px;
				font-size:20px;
				color:white;
			}
			#btn:hover
			{
				background:#000000;
				opacity:0.7;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<h2>LOGIN HERE</h2>
			<form action="#"  method="POST">
				<fieldset>
					<legend>Email</legend>
					<input type ="text" name="email" placeholder="mail@email.co" required />
				</fieldset><br>
				<fieldset>
					<legend>Password</legend>
					<input type ="password" name="password" placeholder="6 digit password" required />
				</fieldset>
				<input type="submit" name="submit" value="Login"/> <br><br>
				<a href="signup.php"><input type="button" name="reset" value="New? Join Here"/></a><br><br>
				<a href="passwordreset.php"><input type="button" id="btn" name="reset" value="Forgot Password?" /></a><br><br>
				By signing in, you agree to our<br><a href="#" style="color:yellow";>Terms</a> and <a href="#" style="color:yellow";>Conditions </a>
			</form>
		</div>
	</body>
</html>