<?php

function openConn() {

  $servername = "localhost";
  $username = "mahadev";
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
