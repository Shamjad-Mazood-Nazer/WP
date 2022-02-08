<html>
	<head>
		<title>ADMIN</title>
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
			<a href="profile.php" class="button">My Profile</a>
			<a href="signup.php" class="button">New User</a>
			<a href="home.php" class="button">LOGOUT</a>
		<div class="wrap">
			<h2><u>Your Documnets</u> :</h2>
			<form action="#" method="post" />
			<fieldset>
				<legend>Enter Phone Number</legend>
				<input type="text" size="25" name="search_user" placeholder="Mobile Number" />
			</fieldset>
			<input type="submit" name="submit" value="Find User" /><br /><br />
			<fieldset>
				<legend>Result is listed below :</legend>
				<?php
					include('connect.php');
					$sql="SELECT file FROM tbl_files WHERE uid=''";
					$result=mysqli_query($con,$sql);
					if($result)
					{
						while($row=mysqli_fetch_row($result))
						{
							echo $row."<br>";
						}
					}
				?>					
			</fieldset>
		</div>
	</body>
</html>