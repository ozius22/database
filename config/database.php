<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

//connection creation
$conn = new mysqli($servername, $username, $password, $dbname);

//connection verification
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
} 