<html>
	<body>
		<table border="1">
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
				$sql="SELECT * FROM tbl_User";
				$result=mysqli_query($con, $sql);
				if($result)
				{
					while($row=mysqli_fetch_row($result))
					{
			?>
			<tr>
				<td>
					<?php echo $row[0]; ?>
				</td>
				<td>
					<?php echo $row[1]; ?>
				</td>
				<td>
					<?php echo $row[2]; ?>
				</td>
				<td>
					<?php echo $row[3]; ?>
				</td>
				<td>
					<?php echo $row[4]; ?>
				</td>
				<td>
					<?php echo $row[5]; ?>
				</td>
			</tr>
			<?php
				
					}
				}		
			?>
		</table>
	</body>
</html>
