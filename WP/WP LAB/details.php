<?php
include 'connect.php';
$sql = "SELECT * FROM tbl_user";
$result = mysqli_query($con,$sql);
if($result)
{
	$row = mysqli_fetch_array($result);
}
else
{
	echo "Couldn't Connect to the Database".mysqli_error($con);
}
?>

<html>
	<head>
		<title>Covaxin Registered Users</title>
		<style type="text/css">
			body,th
			{
				background-color:#CC9933;
				font-family:Courier New, Courier, monospace;
				text-align:center;
			}
			h2
			{
				color:BLUE;
				size:10px;
			}
			
		</style>
	</head>
	<body>
		<h2><u><b>REGISTERED USERS</b></u></h2>
		<table align="center" border="1" bordercolor="#00FFFF" cellpadding="20">
			<form action="index.php" name="myForm" method="POST">
				<tr>
					<th>Name</th>
						
						<th>Address</th>
						
					<th>Phone</th>
						
					<th>age</th>
						
				</tr>
				<?php
					while($row=mysqli_fetch_array($result))
					{?>
				<tr>
					<td><input type="text" name="name" value= <?php echo $row['name']; ?> /></td>
					<td><input type="text" name="address"  value= <?php echo $row['address']; ?> /></td>
					<td><input type="number" name="number"  value= <?php echo $row['phone']; ?>  /></td>
					<td><input type="number" name="age"  value= <?php echo $row['age']; ?> /></td>
				</tr>
				<?php } ?>
					<td colspan="4" align="center"><input style="height:50px; width:100px" type="submit" name="submit"  value="HOME" /></td>
				</tr>
			</form>
		</table>
	</body>
</html>
					
