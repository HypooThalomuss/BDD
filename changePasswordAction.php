<?php

    include 'DBConnect.php';

    //Get form data
    $currentPW = $_GET["currentPW"];
    $newPW = $_GET["newPW"];
    $newPW2 = $_GET["newPW2"];
    
    //Check to make sure passwords are the same
    if ($newPW != $newPW2) {
        die("Passwords do not match!");
    } 
    
    //Create SQL Statement
    $sql = "UPDATE users SET Password = '$newPW' WHERE Password = '$currentPW'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
