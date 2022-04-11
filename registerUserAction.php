<?php

    
    //Get form data
    $first = $_GET["firstName"];
    $last = $_GET["lastName"];
    $user = $_GET["username"];
    $passWord = $_GET["password"];
    $passConfirm = $_GET["passwordConfirm"];
    $type = $_GET["usertype"];
    $question = $_GET["securityQuestion"];
    $answer = $_GET["securityAnswer"];
    
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

    //Check to make sure passwords are the same
    if ($passWord != $passConfirm) {
        die("Passwords do not match!");
    }    
    
    //Create SQL Statement
    $sql = "INSERT INTO users (UserID, FirstName, LastName, Username, Password, Type, Question, Answer) VALUES ('0', '$first', '$last', '$user', '$passWord', '$type', '$question', '$answer')";
    
    
    if ($conn->query($sql) === TRUE) {
        echo "New user added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
