<?php
    $str = "Hello, World!";
    // In chuỗi ra màn hình
    echo $str;
    // In ra ký tự đầu tiên của chuỗi
    echo "<br>Ký tự đầu của chuỗi \"$str\" là: ".$str[0];

    // In ra ký tự thứ 8 của chuỗi:
    echo "<br>Ký tự thứ 8 của chuỗi \n$str\" là: ".$str[7];

    // Đếm số ký tự - Lấy chiều dài của chuỗi: hàm strlen
    $str2 = "Xin chào các bạn, tôi là Mai Na, tôi chưa có người yêu, tôi đang sợ ế đây này!";
    $length = strlen($str2);
    echo "<br>Số ký tự có trong chuỗi 2 là: ".$length;
    $str2[0] = "H";
    echo "<br>".$str2;
    $str[strlen($str)-1] = ".";
    echo "<br>".$str;
?>