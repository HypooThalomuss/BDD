<?php

    //Get form data
    $itemName = $_GET["itemName"];
    $itemLocation = $_GET["itemLocation"];
    $itemAmount = $_GET["itemAmount"];
    $itemPrice = $_GET["itemPrice"];
    
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
    $sql = "INSERT INTO products (ProductID, Name, Location, Amount, Price) VALUES ('0', '$itemName', '$itemLocation', '$itemAmount', '$itemPrice')";
    
    
    if ($conn->query($sql) === TRUE) {
        echo "New item added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
