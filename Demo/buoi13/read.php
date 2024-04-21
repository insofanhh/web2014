<?php
require "../buoi12/connectdb.php";

// 1. Viết câu lệnh SECLECT
$sql = "SELECT * FROM news";
// 2. Chạy câu lệnh vừa viết(dùng hàm query) để có dữ liệu
$result = $conn->query($sql);
// 3. Lặp qua dữ liệu để hiển thị ra màn hình
foreach ($result as $news) {?>
<!-- // 4. Định dạng -->

<h2><?= $news['title'] ?></h2> <br>
<img src="../buoi12/<?= $news['image'] ?>" alt="" width="100px"> <br>
<b>STT:</b> <b><?= $news['id'] ?></b> <br>
<b>Mo ta:</b> <b><?= $news['descrition'] ?></b>
<?php }?>