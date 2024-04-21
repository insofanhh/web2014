<!DOCTYPE html>
<html>

<head>
    <title>Danh sach san pham</title>
    <meta charset="utf-8">
</head>

<form action="" method="GET">
    <p>Ma san pham</p><br>
    <input type="text" name="masp" id=""><br>
    <p>Ten san pham</p><br>
    <input type="text" name="tensp" id=""><br>
    <p>So luong</p><br>
    <input type="text" name="soluong" id=""><br>
    <button type="submit">Submit</button>
</form>

<body>

    <table border="1">
        <tr>
            <th colspan="3">THÔNG TIN</th>
        </tr>
        <tr>
            <td>Ma san pham</td>
            <td>Ten san pham</td>
            <td>So luong</td>
        </tr>
        <tr>
            <td>
                <?php
if(isset($_GET["masp"])){
    echo $_GET["masp"];
}
?>
            </td>
            <td>
                <?php
if(isset($_GET["tensp"])){
    echo $_GET["tensp"];
}
?>
            </td>
            <td>
                <?php
if(isset($_GET["soluong"])){
    echo $_GET["soluong"];
}
?>
            </td>
        </tr>

    </table>

</body>

</html>