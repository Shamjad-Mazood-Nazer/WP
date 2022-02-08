<!DOCTYPE html>
<html>
	<head>
		<title>Login Here</title>
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
				margin-top:35px;
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
			<h2>LOGIN HERE</h2>
			<form action="user.php"  method="POST">
				<fieldset>
					<legend>Select your option</legend>
					<select name="loginID">
						<option value="email">Email</option>
						<option value="phno">Mobile Number</option>
					</select>
				</fieldset><br>
				<fieldset>
					<legend>Email / Mobile Number</legend>
					<input type ="text" name="ID" placeholder="email / phone number" required />
				</fieldset><br>
				<fieldset>
					<legend>Password</legend>
					<input type ="password" name="password" placeholder="6 digit password" required />
				</fieldset>
				<input type="submit" name="submit" value="Log in"/>
				<a href="index.php"><input type="button" name="submit" value="Cancel"/></a>		
			</form>
		</div>
	</body>
</html>
