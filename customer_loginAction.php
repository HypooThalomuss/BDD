<?php

//get the form data
$userkey = $_GET["uname"];
$passkey = $_GET["pass"];

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
$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
//$result = $conn->query($sql);
//$type = gettype($result);
echo "$type ";

//check if credentials are correct and link to appropriate page
if ($count > 0) {
  // username and password are correct
  echo "at least 1 result ";
  header("Location: employee_product_list.html");
 }
 else {
  // username and/or password are incorrect
   echo "0 results ";
   header("Location: login_customer.html");
}


$conn->close();
?>
