//Code from the DBConnect file that Dr. Mahadev posted on Blackboard

<?php

function openConn() {

  $servername = "localhost";
  $username = "Mahadev";
  $password = "mahadev";
  $dbname = "bookstore";

// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}

?>
