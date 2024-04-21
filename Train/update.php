<?php
session_start();
include_once "connection.php";
include_once "function.php";

if (!isset($_SESSION["username"])) {
    header("location: login.php");
}

$id = $_GET['id'];
$categories = getCategories();
$product = getProduct($id); //lay ra 1 san pham
$product = $product->fetch(PDO::FETCH_ASSOC);

$error ="";
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $category = $_POST["category"];

    if (empty($name) || empty($price) || empty($category)) {
        $error = "Nhap du";
    }else {
        $sql = "UPDATE `product` SET `product_name`='$name',`price`='$price',`category`='$category' WHERE product_id = '$id'";
        $conn->exec($sql);
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them moi</title>
</head>

<body>
    <h2>Them moi</h2>
    <form action="" method="post">
        <p>Ten</p>
        <input type="text" name="name" value="<?= $product["product_name"]?>" id="">
        <span><?= $error ?></span>
        <p>Gia</p>
        <input type="text" name="price" value="<?= $product["price"]?>" id="">
        <span><?= $error ?></span>
        <p>Danh muc</p>
        <select name="category" id="">
            <option value="">--chon--</option>
            <?php foreach ($categories as $c) { ?>
            <option value="<?= $c["category_id"] ?>"
                <?php echo ($c["category_id"] === $product["category"])? "selected":""; ?>><?= $c["category_name"] ?>
            </option>
            <?php } ?>
        </select>
        <span><?= $error ?></span>
        <button type="submit" name="submit">Add</button>
    </form>
</body>

</html>