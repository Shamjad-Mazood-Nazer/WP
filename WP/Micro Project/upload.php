<html>
	<head>
		<title>Secure your file</title>
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
				margin-top:165px;
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
			<a href="user.php" class="button">HOME</a>
			<!--<a href="#" class="button">Need Help?</a>
			<a href="index.php" class="button">LOGOUT</a>-->
		<div class="wrap">
			<h2><u>Secure Your Documnets</u></h2>
			<form action="#" enctype="multipart/form-data" method="POST">
				<fieldset>
					<legend>Choose your file to upload</legend>
					<input type ="file" name="file" required />
				</fieldset><br>
				<input type="submit" name="submit" value="upload"/>
			</form>
		</div>
	</body>
</html>
<?php
	session_start();
	if($_SESSION['sid']==null)
	{
		header('location: home.php');
	}
	include 'connect.php';
	$sid = $_SESSION['sid'];
	if(isset($_POST["submit"]))
	{
		$p7=basename($_FILES['file']['name']);
		$insert="INSERT INTO tbl_file VALUES('','$sid','$p7')";
		$query=mysqli_query($con,$insert);
		if($query)
		{
			$path="FILE/";
			$path= $path.basename($_FILES['file']['name']);
			$upload_filename= $_FILES['file']['tmp_name']; 
			move_uploaded_file($upload_filename,$path);
			echo"<script>
				alert('File Uploaded Successfully.');
				window.location.href='upload.php';
			</script>";
		}
	}
?>