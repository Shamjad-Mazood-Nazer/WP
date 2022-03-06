<html>
	<head>
		<title>Covaxin Register</title>
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
		<h2><u><b>REGISTRATION FORM</b></u></h2>
		<table align="center" border="1" bordercolor="#00FFFF" cellpadding="20">
			<form action="#" name="myForm" method="POST">
				<tr>
					<th>Name</th>
						<td><input type="text" name="name" size="20" /></td>
				</tr>
				<tr>
					<th>Address</th>
						<td><input type="text" name="address" /></td>
				</tr>
				<tr>
					<th>Phone</th>
						<td><input type="number" name="number" size="20" /></td>
				</tr>
				<tr>
					<th>age</th>
						<td><input type="number" name="age" size="20" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input style="height:50px; width:100px" type="submit" name="submit"  value="INSERT" /></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><a href="details.php"><button type="button" style="height:50px; width:120px">VIEW DETAILS</td>
				</tr>
			</form>
		</table>
	</body>
</html>
					
<?php
	include 'connect.php';
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$address = $_POST['address'];
		$phone= $_POST['number'];
		$age = $_POST['age'];
		$sql = "INSERT INTO tbl_user(uid, name, address, phone, age) VALUES ('','$name','$address','$phone','$age')";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo "Table Record Added";
		}
		else
		{
			echo "Couldn't Connect to the Database".mysqli_error($con);
		}
	}
?>