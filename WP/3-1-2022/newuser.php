<!DOCTYPE html>
<html>
	<head>
		<title>Sign up</title>
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
				/*margin-top:100px;*/
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
			input[type=button],.btn
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
.mt-2{
margin-top:20px;
}

		</style>
	</head>
	<body>
		<div class="wrap">
			<h2>SIGN UP HERE</h2>
			<form action="user.php"  method="POST">
				<fieldset>
					<legend>NAME</legend>
					<input type ="text" name="name" placeholder="name" required />
				</fieldset><br>
				<fieldset>
					<legend>STATE</legend>
					<select name="states">
						<option value="Andhra Pradesh">Andhra Pradesh</option>
					</select>
				</fieldset><br>
				<fieldset>
					<legend>LOGIN CREDENTIALS</legend>
					<input type ="text"  name="email" placeholder="email.." required />
					<input type ="password" name="password" placeholder="password.." required />
					<input type ="text"  name="phone_number" placeholder="phone number.." required />
				</fieldset><br>
				
				<fieldset>
					<legend>GENDER</legend>
					<input type="radio" name="gender" value="MALE">MALE
					<input type="radio" name="gender" value="FEMALE">FEMALE
				</fieldset><br>
				<input type="submit" name="submit" value="create account now"/>
				<a href="index.php"><input type="button" name="submit" value="Cancel"/></a>
				
				<div class="mt-2"> By signing up, you agree to our<br><a href="#" style="color:yellow";>Terms</a> and <a href="#" style="color:yellow";>Conditions </a></div>
			</form>
		</div>
	</body>
</html>
