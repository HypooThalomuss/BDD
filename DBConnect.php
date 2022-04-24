//Code from the DBConnect file that Dr. Mahadev posted on Blackboard

<?php
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
?>
