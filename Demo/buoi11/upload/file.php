<!-- 1. Đọc file -->
<?php
$content = file_get_contents('../include.txt');
echo "<pre>".$content."<pre>";
?>
<hr>
<!-- 2. Ghi nội dung vào một tập tin -->
<?php
$content_2 = " 2. Ghi nội dung vào một tập tin: file_put_contents()";
file_put_contents('test.txt', $content_2);
?>
<hr>
<!-- 3.  -->
<?php
$fileExist = file_exists('a.txt');
if ($fileExist) {
    echo "Tập tin tồn tại<br>";
}else{
    echo "Tập tin không tồn tại<br>";
}

if (file_exists('test.txt')) {
    echo "Tập tin tồn tại<br>";
}else{
    echo "Tập tin không tồn tại<br>";
}
?>

<hr>
<!-- 4. Xóa file -->
<?php
unlink('b.txt');
?>

<hr>
<!-- Đọc danh sách các file -->
<?php

$ds_file = scandir('../../buoi10');
print_r($ds_file);
foreach ($ds_file as $file) {
    echo $file."<br>";
}
?>

<hr>
<!-- Di chuyển và đổi tên file -->
<?php
rename('c.txt','../newfile.txt')
?>