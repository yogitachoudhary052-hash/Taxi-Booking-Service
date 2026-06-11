<?php
include "db.php";

$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE phone='$phone'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){
        echo "Login Success";
    } else {
        echo "Wrong Password ❌";
    }
} else {
    echo "User not found ❌";
}
?>