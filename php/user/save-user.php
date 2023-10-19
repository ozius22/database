<?php

require $_SERVER["DOCUMENT_ROOT"] . '/database/config/database.php';

//prepare and bind
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, gender) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $first_name, $last_name, $gender);

// set parameters and execute
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?save-success=true");