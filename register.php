<?php
include "db.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$password = $_POST['password'];

if(empty($name) || empty($phone) || empty($password)){
    echo "All fields required";
    exit();
}

// encrypt password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// insert
$sql = "INSERT INTO users (name, phone, password) VALUES ('$name', '$phone', '$hashedPassword')";

if($conn->query($sql)){
    echo "Registered Successfully ✅";
} else {
    echo "Phone already exists ❌";
}
?>