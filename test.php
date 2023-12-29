<?php
include "config.php";
global $conn;

$items = $_POST['items'];

foreach ($items as $item) {
    $seat_id = $item['seat_id'];
    $name = $item['name'];
    $price = $item['price'];
    $quantity = $item['quantity'];

    $sql = "INSERT INTO items (seat_id, name, price, quantity) VALUES ('$seat_id', '$name', '$price', '$quantity')";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>
  