<?php
//Khai bao khoi code cua header
include 'header.php';
?>
<h1>Đây là trang giới thiệu</h1>
<?php
include_once 'section2.php';
?>
<p>...</p>
<!-- include_once thứ 2 không chạy -->
<?php
include_once 'section2.php';
?>
</body>

</html>