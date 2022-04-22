<?php

    //get the form data
    $userName = $_GET["username"];
    $passWord = $_GET["password"];

    //connect to the database
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

    echo "$userName $passWord ";
    //generate an SQL statement and send it to the database
    $sql = "SELECT Username FROM users WHERE Username = '$userName' AND Password = '$passWord'";
    $result = $conn->query($sql);
    $type = gettype($result);
    echo "$type ";

    //check if credentials are correct and link to appropriate page
    if ($result->num_rows == 0) {
        // username and password are incorrect
        header("Location: adminLogin.html");
    }
    else {
        //username and password are correct
     
        //store the first row of results
        $row = $result->fetch_assoc();
        if ($row['Type'] == 'Administrator') {
            //account user type is correct
            header("Location: admin_FunctionSelect.html");
        }
        else {
            //account user type is incorrect
            header("Location: adminLogin.html");
        }
    }
    $conn->close();
?>
