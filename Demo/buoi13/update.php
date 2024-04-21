<?php
// Ket noi database
require_once "../buoi12/connectdb.php";
// 1. Viet cau lenh UPDATE
$sql = "UPDATE news SET title ='Khi hay thay doi, nhieu nguoi om lam',
descrition = 'Vi thoi tiet thay doi nen dan den dich cum,...', image ='img/nha.jpg' WHERE id = 3";
// 2. Chay cau lenh vua viet voi ham exec de thay doi du lieu
$result = $conn->exec($sql);
if ($result == 1) {
    echo "Da cap nhat thanh cong<br>"; ?>
<a href='read.php'> Xem du lieu</a>;
<?php }else{
    echo "Chua cap nhat<br>";
}

// 3. Thong bao
?>