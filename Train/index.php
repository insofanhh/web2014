<?php
session_start();
if (isset($_SESSION["username"])) {
    echo "Chao, ".$_SESSION["username"];
}else {
    header("location: login.php");
}
require_once "connection.php";
require_once "function.php";

//lay ds
$products = getProducts();
if ($products->rowCount()===0) {
    $noPro = true;
}else {
    $noPro = false;
    $products = $products->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach</title>
</head>

<body>
    <h2>Danh sach</h2>
    <a href="create.php">Them moi</a>
    <?php
    if ($noPro) {
        echo "Ko co gi";
    }else { ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Categories</th>
            <th>Option</th>
        </tr>
        <?php foreach ($products as $p) { ?>
        <tr>
            <td><?= $p["product_id"]?></td>
            <td><?= $p["product_name"]?></td>
            <td><?= $p["price"]?></td>
            <td><?= $p["category_name"]?></td>
            <td>
                <a href="update.php?id=<?= $p["product_id"]?>">Edit</a>
                <a href="delete.php?id=<?= $p["product_id"]?>">Delete</a>

            </td>
        </tr>
        <?php  } ?>
    </table>
    <?php }
    ?>
</body>

</html>