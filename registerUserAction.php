<?php

    //Get form data
    $first = $_GET["firstName"];
    $last = $_GET["lastName"];
    $user = $_GET["username"];
    $passWord = $_GET["password"];
    $type = $_GET["usertype"];
    $securityQuestion = $_GET["securityQuestion"];
    $securityAnswer = $_GET["securityAnswer"];
    
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

    //Create SQL statement
    $sql = "INSERT INTO users (UserID, FirstName, LastName, Username, Password, Type, Question, Answer)
            VALUES ('0', '$first', '$last', '$user', '$passWord', '$type', '$securityQuestion', '$securityAnswer')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
?>    
