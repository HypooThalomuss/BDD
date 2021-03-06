<!DOCTYPE html>
<html lang = "en">
	<head>
		<!--page title-->
		<title>BDD Login</title>
		<!--css-->
		<link rel="stylesheet" type="text/css" charset="utf-8" href=inventory_fp_css.css>
		<!--Google Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	</head>
	<body>
		<!--Prompt user for username and password-->
		
		<div class = "block">
			<center>
			<h1>Employee Login</h1>
			<form action="employeeLoginAction.php" method="POST">
				<!--username text box-->
				<p>
					<label for="uname">Username:</label>
					<input type="text" id="uname" name="uname" required>
				</p>
				<!--password text box-->
				<p>
					<label for="pass">Password:</label>
					<input type="password" id="pass" name="pass" required>
				</p>
                                
                                <?php
                                    //checks if url has error code
                                    if (isset($_GET["error"])) {
                                        //displays output is error code for invalid username/password is generated
                                        if ($_GET["error"] == "123") {
                                            echo "<p>Invalid username/password</p>";
                                        }
                                        if (($_GET["error"]) == "userType") {
                                            echo "<p>Not an employee account</p>";
                                        }
                                    }
                                ?>
                                
				<!--forgot password button-->
				<p>
					<p><a href="forgotPasswordUsernamePrompt.html">Forgot Password? Click Here!</a></p>	
				</p>
				<!--Submit button-->
				<input type="submit" class = "submitbutton" value="login">
				<!--Back Button-->
				<a class = "submitbutton" href = "index.html">BACK</a>
			</form>
			</center>
		</div>
	</body>
</html>
