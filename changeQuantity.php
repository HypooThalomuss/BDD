<?php
//start session
session_start();

//get product ID
$productID = $_GET["productID"];

//make product ID a session variable
$_SESSION["productID"] = $productID;
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
		<!--page title-->
		<title>Change Quantity</title>
		<!--css-->
		<link rel="stylesheet" type="text/css" charset="utf-8" href="inventory_fp_css.css">
		<!--Google Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    </head>
    <body>
        <div class="block">
            <h1>Change Product Quantity</h1>
            
            <form action="changeQuantityAction.php" name="quantityForm">
                <label for="action">Action:</label>
		<select name="action" id="action">
			<option value="add">Add quantity</option>
			<option value="subtract">Subtract quantity</option>
			<option value="update">Update quantity</option>
		</select>
                
		<br><br>
			
		<label for="amount">Amount:</label>
		<input type="text" id="amount" name="amount">
			
		<br><br>
			
		<input type="submit" value="submit">
            </form>
        </div>
    </body>
</html>