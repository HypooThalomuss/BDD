<?php

    include 'DBConnect.php';

    // prepare and bind
    try {
        $sql = "INSERT INTO users (UserID, FirstName, LastName, Username, Password, Type, Question, Answer) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $conn = openConn();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $first, $last, $user, $passWord, $type, $question, $answer);

        //Get form data
        $first = $_GET["firstName"];
        $last = $_GET["lastName"];
        $user = $_GET["username"];
        $passWord = $_GET["password"];
        $passConfirm = $_GET["passwordConfirm"];
        $type = $_GET["usertype"];
        $question = $_GET["securityQuestion"];
        $answer = $_GET["securityAnswer"];
    
        if($passWord != $passConfirm){
            die("Password and Confirm Password fields do not match!");
         }

        $stmt->execute();
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo 'Exception Message: ' . $e->getMessage();
    }
?>
