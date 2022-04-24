<?php
    include 'DBConnect.php';
    
    //Get form data
    $userName = $_GET["username"];
    $adminUser = $_GET["adminUser"];
    
    //Create SQL Statements    
    $date = date("d F Y");
    $sql = "DELETE FROM users WHERE Username = '$userName'";
    $sql2 = "INSERT INTO profileremovals (RemovalID, Date, AdminUser, Username) VALUES ('0', '$date', '$adminUser', '$userName')";
    
    //Query the database using the above SQL statements
    if ($conn->query($sql) === TRUE) {
        echo "Profile deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    if ($conn->query($sql2) === TRUE) {
        echo "Profile removal table updated successfully";
    } else {
        echo "Error: " . $sql2 . "<br>" . $conn->error;
    }

    $conn->close(); 
?>
