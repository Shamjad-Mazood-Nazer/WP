<html>
    <body>
        <h1>Registration form</h1>
        <form action = "" method = "POST">
            <table border="1">
                <tr>
                    <td>Username : <input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Email : <input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password : <input type="text" name="pass"></td>
                </tr>
                <tr>
                    <td>Confirm password : <input type="text" name="cpass"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Register"></td>
                </tr>
                <?php
                    if (empty($_POST['username']) || empty($_POST['pass']) || empty($_POST['email']) || empty($_POST['cpass']))
                    {
                        die("Please fill all required fields!");
                    }
                    if ($_POST['pass'] != $_POST['cpass']) 
                    {
                        die ('Password and confirm password should match');
                    }
                    else
                    {
                        die("successfull");
                    }
                ?>
            </table>
	    </form>
	</body>
</html>	