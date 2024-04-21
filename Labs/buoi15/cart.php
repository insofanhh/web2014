<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
</head>

<body>
    <?php
  session_start();

  // processing data from form
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    // storage
    if (!isset($_SESSION['products'])) {
      $_SESSION['products'] = [];
    }
    $_SESSION['products'][] = $name;
  }
  // delete session when click
if (isset($_GET['action']) && $_GET['action'] === 'destroy') {
  session_destroy();
  header('Location: cart.php');
}

  // get list data product from session
  $products = isset($_SESSION['products']) ? $_SESSION['products'] : [];
  ?>

    <h1>CART</h1>
    <form action="cart.php" method="post">
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" value="">
        <br>
        <br>
        <input type="submit" name="submit" value="Add to cart">
    </form>

    <h2>Product list in cart</h2>
    <?php

if (empty($products)) {
    echo '<p>Trống.</p>';
  } else {
    echo '<ul>';
    foreach ($products as $product) {
      echo "<li>$product</li>";
    }
    echo '</ul>';
  }
  ?>
    <a href="cart.php?action=destroy">Delete all session</a>

</body>

</html>