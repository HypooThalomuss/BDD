<?php

// Declare connection parameters
$username = "mahadev";
$password = "mahadev";
$dbname = "bdd_inventory_management";
$server = "localhost";
        
// Connect to the database
$conn = new mysqli($server, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

