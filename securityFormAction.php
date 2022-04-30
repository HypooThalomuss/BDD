<?php

    include 'DBConnect.php';
    
    //get the form data
    $userName = $_GET["username"];
    $question = $_GET["securityQuestion"];
    $answer = $_GET["securityAnswer"];

    echo "$userName $question $answer ";
    //generate an SQL statement and send it to the database
    $sql = "SELECT Username, Question, Answer FROM users WHERE Username = '$userName' AND Question = '$question' AND answer='$answer'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);
    $type = gettype($result);
    echo "$type ";

    //check if credentials are correct and link to appropriate page
    if ($count == 0) {
        // username and password are incorrect
        echo "<h1>Wrong question or answer associated with this account. Try again, or contact a database administrator.</h1>";
        header("Location: wrongQuestion.html");
    }
    else {
        //username, question, and answer are correct
        header("Location: passwordForceChange.html");
        
    }
    $conn->close();
?>
