<?php

include 'connect.php';

$name = $_POST["name"];
$email = $_POST["email"];

$sql = "INSERT INTO karyawan (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





