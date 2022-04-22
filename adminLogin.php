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
        <form name="adminLogin" action="adminLoginAction.php" method="POST">
          <p>
			      <label for="username">Username:</label>
			      <input type="text" id="username" name="username" required><br>
          </p>
		      <p>
			      <label for="password">Password:</label>
			      <input type="password" id="password" name="password" required><br>
          </p>          
          <?php
            //checks if url has error code
            if (isset($_GET["error"])) {
              //displays output is error code for invalid username/password is generated
              if ($_GET["error"] == "123") {
                echo "<p>Invalid username and/or password</p>";
              }
              if (($_GET["error"]) == "userType") {
                echo "<p>Not an administrator account</p>";
              }
            }
          ?>
				
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
