<?php

    include 'DBConnect.php';
    
    //get the form data
    $userName = $_GET["username"];
    $passWord = $_GET["password"];

    echo "$userName $passWord ";
    //generate an SQL statement and send it to the database
    $sql = "SELECT Username, Password, Type FROM users WHERE Username = '$userName' AND Password = '$passWord'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    $type = gettype($result);
    echo "$type ";

    //check if credentials are correct and link to appropriate page
    if ($count == 0) {
        // username and password are incorrect
        echo "<h1>Invalid Username/Password!</h1>";
        header("Location: invalidCredentials.html");
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
            echo "<h1>You do not have administrator priveleges!</h1>";
            header("Location: noAdminPrivileges.html");
        }
    }
    $conn->close();
?>
