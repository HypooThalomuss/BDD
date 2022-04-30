<?php

    include 'DBConnect.php';

    //Get form data
    $user = $_GET["username"];
    $newPW = $_GET["newPW"];
    $newPW2 = $_GET["newPW2"];
    
    //Check to make sure passwords are the same
    if ($newPW != $newPW2) {
        die("Passwords do not match!");
    } 
    
    //Create SQL Statement
    $sql = "UPDATE users SET Password = '$newPW' WHERE Username = '$user'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
