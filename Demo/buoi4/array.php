<?php
    // Tạo mảng
    // Cách 1: sử dụng từ khác "array"
    $arr1 = array(1,2,3,4,5);
    var_dump($arr1);

    // Cách 2: sử dụng dấu []
    $arr2 = [6,7,8,9,10];
    echo "<br>";
    // Thêm phần tử vào mảng:
    // Gán giá trị mới cho chỉ mục của mảng $arr1[]
    $arr1[] = 6;

    // Kiểm tra kiểu dữ liệu
    var_dump($arr1);
    echo "<br>";
    // Truy xuất 1 phần tử của mảng
    echo $arr1[2];
?>