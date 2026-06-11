<?php
include "db.php";

$phone = $_POST['phone'];
$newpass = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

$sql = "UPDATE users SET password='$newpass' WHERE phone='$phone'";

if($conn->query($sql)){
    echo "Password Updated ✅";
} else {
    echo "Error updating password";
}
?>