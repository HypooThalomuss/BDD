<?php

    //Get form data
    $itemName = $_GET["itemName"];
    $newLoc = $_GET["newLocation"];
    $adminName = $_GET["adminName"];
    
    //Connect to the database
    $servername = "localhost";
    $username = "Mahadev";
    $password = "mahadev";
    $dbname = "bdd_inventory_management";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //Create SQL Statement
    $sql = "UPDATE products SET Location = '$newLoc' WHERE Name = '$itemName'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Item location updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $date = date("d F Y");
    $sql2 = "INSERT INTO transactions (TransactionID, TransactionType, Date, Username, ProductName) VALUES ('0', 'Location Change', '$date', '$adminName', '$itemName')";

    if ($conn->query($sql2) === TRUE) {
        echo "Transaction table updated successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
    $conn->close();
?>
