<html>
	<body>
		<form name="myform" action="#" method="post">
			<table border="0">
				<tr>
					<th>ID</th>
					<th>F-Name</th>
					<th>L-Name</th>
					<th>Phone</th>
					<th>Course</th>
					<th>Semester</th>
				</tr>
				<?php
					include('connection.php');
					$sql="SELECT * FROM student";
					$result=mysqli_query($con, $sql);
					if($result)
					{
						while($row=mysqli_fetch_row($result))
						{
				?>
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
						<input type="text" name="phone" value=<?php echo $row[3]; ?>>
					</td>
					<td>
						<input type="text" name="course" value=<?php echo $row[4]; ?>>
					</td>
					<td>
						<input type="text" name="semester" value=<?php echo $row[5]; ?>>
					</td>
				</tr>
				<?php
					
						}
					}		
				?>
			</table>
		</form>
	</body>
</html>
