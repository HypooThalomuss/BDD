<?php

    include 'DBConnect.php';

    // prepare and bind
    try {
        $sql = "INSERT INTO users (UserID, FirstName, LastName, Username, Password, Type, Question, Answer) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $conn = openConn();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $first, $last, $user, $passWord, $type, $question, $answer);

        //Get form data
        $first = $_POST["firstName"];
        $last = $_POST["lastName"];
        $user = $_POST["username"];
        $passWord = $_POST["password"];
        $passConfirm = $_POST["passwordConfirm"];
        $type = $_POST["usertype"];
        $question = $_POST["securityQuestion"];
        $answer = $_POST["securityAnswer"];
    
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
