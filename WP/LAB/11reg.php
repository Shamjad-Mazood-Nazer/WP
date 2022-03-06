<?php
    include "11config.php";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql = "INSERT INTO `q11` ( `name`, `email`, `password`) VALUES ( '$name', '$email', '$password')";
        $result=$conn->query($sql);
        if($result==TRUE)
        {
            echo "new record created successfully";
        }
        else
        {
            echo "Error".$sql."<br>".$conn->error;
        }
        $conn->close();
    }
?>

<html>
    <body>
        <h2 align="center"> Registration Form </h2>
		<center>
			<form action="#" method="POST">
				<fieldset>
					<legend align="center"><h3><u> Personal Information </u></h3></legend>
					First Name:<br>
					<input type="text" name="name">
					<br><br>
					Email:
					<br><br>
					<input type="email" name="email">
					<br>
					Password:<br><br>
					<input type="password" name="password">
					<br><br>
					<input type="submit" name="submit" value="submit">
				</fieldset>
			</form>
		</center>
    </body>
</html>