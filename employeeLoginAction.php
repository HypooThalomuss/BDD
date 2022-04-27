<?php

//get the form data
$userkey = $_POST["uname"];
$passkey = $_POST["pass"];

//connect to the database
$servername = "localhost";
$username = "mahadev";
$password = "mahadev";
$dbname = "bdd inventory management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "$userkey $passkey ";
//generate an SQL statement and send it to the database
$sql = "SELECT Type FROM users WHERE Username = '$userkey' AND Password = '$passkey'";
$result = $conn->query($sql);
$type = gettype($result);
echo "$type ";



//check if credentials are correct and link to appropriate page
if ($result->num_rows == 0) {
     // username and password are incorrect
     header("Location: employeeLogin.php?error=123");
 }
 else {
     //username and password are correct
     
     //store the first row of results
     $row = $result->fetch_assoc();
     if ($row['Type'] == 'employee') {
         //account user type is correct
         header("Location: employee_function_select.html");
     }
     else {
         //account user type is incorrect
         header("Location: employeeLogin.php?error=userType");
     }
}


$conn->close();
?>

