<?php
	include('connection.php');
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
		<title></title>
	</head>
	<body>
		<form action="#" method="POST">
			<table>
				<tr>
					<th>ID</th>
					<th>F-Name</th>
					<th>L-Name</th>
					<th>Phone</th>
					<th>Course</th>
					<th>Semester</th>
				</tr>
				<tr>
					<td>
						<input type="text" name="id" value=<?php echo $row[0]; ?>>
					</td>
					<td>
						<input type="text" name="fname" value=<?php echo $row[1]; ?>>
					</td>
					<td>
						<input type="text" name="lname" value=<?php echo $row[2]; ?>>
					</td>
					<td>
						<input type="tel" name="phone" value=<?php echo $row[3]; ?>>
					</td>
					<td>
						<input type="text" name="course" value=<?php echo $row[4]; ?>>
					</td>
					<td>
						<input type="text" name="semester" value=<?php echo $row[5]; ?>>
					</td>
				</tr>
				<tr>
					<td>
					<input type="submit" name="submit"></td>
				<tr>
			</table>
		</form>
	</body>
</html>
