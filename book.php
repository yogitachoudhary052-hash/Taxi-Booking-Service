<?php
include "db.php";

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$vehicle = $_POST['vehicle'];
$pickup = $_POST['pickup_date'];
$drop = $_POST['drop_date'];

$sql = "INSERT INTO bookings 
(name, phone, email, vehicle, pickup_date, drop_date)
VALUES 
('$name','$phone','$email','$vehicle','$pickup','$drop')";

if($conn->query($sql)){
    echo "Booking Successful 🚗";
} else {
    echo "Error booking";
}
?>