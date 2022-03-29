<?php

    include 'DBConnect.php';

    // prepare and bind
    try {
        $sql = "INSERT INTO products (ProductID, Name, Location, Amount, Price,) VALUES (?, ?, ?, ?, ?)";
        $conn = openConn();
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $itemName, $itemLocation, $itemAmount, $itemPrice);

        $itemName = $_GET["itemName"];
        $itemLocation = $_GET["itemLocation"];
        $itemAmount = $_GET["itemAmount"];
        $itemPrice = $_GET["itemPrice"];

        $stmt->execute();
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo 'Exception Message: ' . $e->getMessage();
    }
?>
