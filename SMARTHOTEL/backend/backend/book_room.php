<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name=$_POST['name'];
    $email =$_POST['email'];
    $checkin=$_POST['checkin'];
    $checkout=$_POST['checkout'];
    $room_type=$_POST['room_type'];

    $sql="INSERT INTO bookings(name,email,checkin,checkout,room_type)
    VALUES ('$name,'$email,'$checkin,'$checkout,'$room_type')";

    if ($conn->query($sql)===TRUE){
        echo "<h2>bookin successfull!</h2><a href='../index.html'>Return Home</a>";
    }else{
        echo"error:" .
        $conn->error;
    }
    $conn->close();
}
?>