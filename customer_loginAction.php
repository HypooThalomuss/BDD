<?php

//get the form data
$userkey = $_GET["username"];
$passkey = $_GET["password"];

//connect to the database
$servername = "localhost";
$username = "mahadev";
$password = "mahadev";
$dbname = "bdd_inventory_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "$userkey $passkey ";
//generate an SQL statement and send it to the database
$sql = "SELECT Username FROM users WHERE Username = '$userkey' AND Password = '$passkey'";
$result = $conn->query($sql);
$count = mysqli_num_rows($result);
$type = gettype($result);
echo "$type ";

//check if credentials are correct and link to appropriate page
if ($count > 0) {

  // username and password are correct
  //echo "Login Sucessful";
  header("Location: employee_product_list.html");
 }
 else {
  // username and/or password are incorrect
   //echo "Login failed";
   header("Location: login_customer.html");
}


$conn->close();
?>
