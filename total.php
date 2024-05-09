<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Summary</title>
</head>
<body>
<?php

  $prices = [
    'fishball' => 30,
    'kikiam' => 40,
    'corndog' => 50
  ];


  $order = $_POST['order'];
  $quantity = $_POST['quantity'];
  $cash = $_POST['cash'];

  $totalCost = $prices[$order] * $quantity;


  $change = $cash - $totalCost;


  echo "<h2>Order Summary</h2>";
  echo "<p>Item: $order</p>";
  echo "<p>Quantity: $quantity</p>";
  echo "<p>Total Cost: $totalCost pesos</p>";
  echo "<p>Change: $change pesos</p>";
?>
</body>
</html>
