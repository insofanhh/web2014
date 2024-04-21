<?php
require_once "connectdb.php";
$sql = "INSERT INTO news(title, descrition, image)
VALUES ('Vàng tăng mạnh','Ngày hôm nay vàng tăng nhanh hơn 7.0','img/s-3123.jpg')";
//Thực thi câu lệnh SQL: $conn -> exec($sql)
// $conn là một đối tượng của PDO được tạo ra để kết nối với CSDL( ở file connectdb.php)
// Phương thức exec() dùng để thực thi câu lệnh SQL(SELECT, INSERT, DELETE)
// exec() => trả về số bản ghi đã được thêm/ cập nhật/ xóa

$result = $conn->exec($sql);
if ($result !== false) {
    echo "Đã chèn dữ liệu thành công!<br>";
} else {
    echo "Chèn dữ liệu không thành công!<br>";
}