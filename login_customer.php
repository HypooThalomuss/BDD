<!DOCTYPE html>
<html lang = "en">
	<head>
		<!--name of page (may change idk)-->
		<title>BDD Inventory Management System</title>
		<!--CSS-->
		<link rel="stylesheet" type="text/css" charset="utf-8" href=inventory_fp_css.css>
		<!--Google Font-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	</head>
	<body>
		<center>
			<div class = "block">
			<h1>BDD Inventory</h1>
			<h2>Login as Customer:</h2>
			
			<div class = "bigolblock">
			</div>
			
			<!--login form-->
			<form action = "customer_loginAction.php" method = "GET">
				<div class = "loginfield">
				<!--username-->
				<label for = "username">Username: </label>
				<input type = "text" name = "username" id = "entered_name" class = "login_field" placeholder = "Username" required>
				</div>
				<div class = "loginfield">
				<!--password-->
				<label for = "password">Password: </label>
				<input type = "password" name = "password" id = "entered_password" class = "login_field" placeholder = "Password" required>
				</div>
                            <!--Submit button-->
			<input type="submit" class = "submitbutton" value="SUBMIT">
			<!--<a class = "submitbutton" href = "employee_product_list.html">SUBMIT</a>-->
			<!--Back Button-->
			<a class = "submitbutton" href = "https://hypoothalomuss.github.io/BDD/">BACK</a>
			</form>
                        <?php
                        //checks if url has error code
                        if (isset($_GET["error"])) {
                            //displays output is error code for invalid username/password is generated
                            if ($_GET["error"] == "123") {
                                echo "<p>Invalid username/password</p>";
                            }
                        }
                        ?>
			<div class = "bigolblock">
				<p></p>
			</div>
			<!--Forgot Password-->
			<p><a href="forgotPasswordUsernamePrompt.html">Forgot Password? Click Here!</a></p>
			<!--Submit button-->
                        
			</div> 
		</center>

	</body>   
</html>
