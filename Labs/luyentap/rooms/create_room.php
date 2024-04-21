<?php

$room_code ="";
$room_type = "";
$price = "";
$status = "";
$image = "";

//Lay gia tri post tu form khi submit
if ($_SERVER("REQUEST_METHOD")== "POST") {
    if (isset($_POST['room_code'])) {
        $room_code = $_POST['room_code']
    }
    
    if (isset($_POST['room_type'])) {
        $room_type = $_POST['room_type']
    }

    if (isset($_POST['price'])) {
        $price = $_POST['price']
    }

    if (isset($_POST['status'])) {
        $price = $_POST['status']
    }

    // Validate form
    $errors =[];

    $room_code = trim($_POST["room_code"]);
    $room_type = trim($_POST["room_type"]);
    $price = trim($_POST["price"]);
    $status = trim($_POST["status"]);

    if (empty($room_code)) {
        $errors["room_code"] = "Room_code is required"
    }

    if (empty($room_type)) {
        $errors["room_type"] = "Room-type is required"
    }

    if (empty($price)) {
        $errors["price"] = "Price is require"
    }

    if (empty($status)) {
        $errors["status"] = "Status is required"
    }

}