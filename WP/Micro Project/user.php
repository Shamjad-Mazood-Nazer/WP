<?php
	session_start();
	include 'connect.php';
	
	if($_SESSION['sid']==null)
	{
		header('location: home.php');
	}
	
	/*function removeImage($fid, $filename)
	{
		include 'connect.php';
		$uid= $_SESSION['sid'];
		echo "console.log('The fid is : ".$fid."')";
		
		$delete = "DELETE FROM tbl_file WHERE uid=$uid AND fid=$fid";
		$result = mysqli_query($con,$delete);
		if($result)
		{
			echo "
				alert('Selected file deleted successfully.');
				window.location.href= 'user.php';
			";
		}
		else
		{
			echo "alert('Deletion failed. Please try again !!')";
		}<button class="button" onclick="<?php removeImage($fid, $filename) ?>">Remove</button>
	}*/
?>

<html>
	<head>
		<title>Welcome back</title>
		<style>
			font
			{
				color:WHITE;
				font-family:"Courier New", Courier, monospace;
			}
			body
			{
				background-image:url(IMG/bcloud.png);
				background-attachment:fixed;
				background-size:cover;
				font:"Courier New", Courier, monospace;
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
			h2
			{
				text-align:center;
				color:#FFFFFF;
				font-size:50px;
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
				width:30%;
				box-sizing:border-box;
				padding:10px 0;
				margin-top:30px;
				outline:none;
				border:none;
				background:red;
				opacity:0.7;
				border-radius:20px;
				font-size:20px;
				color:WHITE;
			}
			input[type=submit]:hover
			{
				background:black;
				opacity:0.7;
			}
			
			#all_documents_div{
				display:flex;
				flex-direction: row;
			}
			
			#all_documents_div *{
				margin-top: 10px;
				wrap ilekk display akiyalo?
				
				background-color: #fff;
				border-radius: 10px;
				padding:10px;
				text-align:center;
			}
			
			#uploaded_image{
				width: 150px;
				height: 150px;
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<a href="upload.php" class="button">UPLOAD</a>
		<a href="#" class="button">Need Help?</a>
		<a href="logout.php" class="button">LOGOUT</a>
		
		<h2><u>Your Documnets</u> :</h2>
		<div id="all_documents_div">
			<?php
				$sid = $_SESSION['sid'];
				$sql = "SELECT * FROM tbl_file WHERE uid = $sid";
				$result = mysqli_query($con,$sql);
				if(!$result)
				{
					echo "Query Does not working".mysqli_error($con);
					die;
				}
				else
				{
					while($row=mysqli_fetch_array($result))
					{
						$fid= $row['fid'];
						$filename= $row['file_name'];
					?>
						<div>
							<font>
								<img id="uploaded_image" alt="Document File" align="middle" src="FILE/<?php echo $filename; ?>">
								<p><?php echo $row['file_name'];?></p>
							</font>
						</div>
						<?php
					}
				}
			?>
		</div>
	</body>
</html>