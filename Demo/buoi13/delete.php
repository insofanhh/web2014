<?php
include_once "../buoi12/connectdb.php";

$sql = "DELETE FROM news WHERE id= 3 ";

$result = $conn->exec($sql);

if ($result == 1) {
    echo "Xoa du lieu thanh cong<br>"; ?>
<a href="read.php">Xem du lieu</a>
<?php }else{
    echo "Chua xoa duoc<br>";
}
?>