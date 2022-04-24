<!DOCTYPE html>
<html lang = "en">
    <head>
	<title>Administrator Login</title>
        <!--CSS-->
        <link rel="stylesheet" type="text/css" charset="utf-8" href=inventory_fp_css.css>
	<!--Google Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    </head>
    <body>
	<!--Ask user for login info -->
	<div class = "block">
            <center>
		<h1>Administrator Login</h1>
                <form name="adminLogin" action="adminLoginAction.php">
                    <p>
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required><br>
                    </p>
		    <p>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required><br>
                    </p>	
                    <p><a href="forgotPasswordUsernamePrompt.html">Forgot Password? Click Here!</a></p>
                    <!--Submit button-->
                    <input type="submit" class = "submitbutton" value="SUBMIT">
                    <!--Back Button-->
                    <a class = "submitbutton" href = "index.html">BACK</a>
		</form>	
            </center>
	</div>
    </body>
</html>
