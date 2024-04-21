<?php
//lay ds san pham
function getProducts(){
    global $conn;
    $sql = "SELECT * FROM `product` INNER JOIN categories WHERE category = category_id";
    return $conn->query($sql);
}

function getCategories(){
    global $conn;
    $sql = "SELECT * FROM `categories`";
    return $conn->query($sql);
}

function getProduct($id){
    global $conn;
    $sql = "SELECT * FROM `product` WHERE product_id = '$id'";
    return $conn->query($sql);
}

function confirmDel($id){
    echo"
    <h2>Xoa ?</h2>
    <p>Ban chac chu?</p>
    <a href='delete.php?id=$id&confirm=true'>Co</a>
    <a href='index.php'>Khong</a>
    ";
    if (isset($_GET['confirm'])) {
        return true;
    }
}

function delete($id){
    global $conn;
    $sql= "DELETE FROM `product` WHERE product_id= '$id'";
    return $conn->exec($sql);
}
?>