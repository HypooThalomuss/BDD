<?php
//start session
session_start();

//Get form data
$productID = $_SESSION["productID"];
$action = $_GET["action"];
$changeAmount = $_GET["amount"];

//Connect to the database
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
   
//Create SQL Statement
//$sql = "UPDATE products SET Price = '$newPrice' WHERE ProductID = '$itemID'";
$sql = "SELECT Amount FROM Products WHERE ProductID = '$productID'";
   
if ($conn->query($sql) == TRUE) {
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $oldAmount = $row['Amount'];
    echo "Item amount retrieved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($action == "add")
{
    $newAmount = (int)$oldAmount + (int)$changeAmount;
}
else if ($action == "subtract")
{
    $newAmount = (int)$oldAmount - (int)$changeAmount;
}
else
{
    $newAmount = (int)$changeAmount;
}

$sql = "UPDATE products SET Amount = '$newAmount' WHERE ProductID = '$productID'";

if ($conn->query($sql) === TRUE) {
    echo "Item price updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: employee_product_list.php");

?>
