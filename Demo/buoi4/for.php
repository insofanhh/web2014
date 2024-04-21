<!-- For: sử dụng để chạy 1 khối code trong
1 số lần nhất định
for(<khởi đầu>;<điều kiện lặp>;<bước nhảy>){})
- Khởi đầu: khởi tạo 1 giá trị của biến và chỉ thực hiện
1 lần duy nhất. Sau đó, nếu <điều kiện lặp> đúng 
thì thực thi các dòng lệnh trong vòng lặp.
Nếu <điều kiện lặp> sai thì kết thúc vòng lặp
- <bước nhảy>: sẽ thay đổi giá trị của biến lúc <khởi đầu>.
    Giá trị của biến này sẽ được kiểm tra lại sau mỗi lần lặp -->
<?php
    for($i = 1; $i <= 10;$i++){
        echo $i." ";
    }
    // 
    echo "<br>";
    for($i = 5; $i <= 100; $i+=7){
        echo $i." ";
    }
    // Lưu ý:
    // - Giá trị <khởi đầu> không nhất thiết lúc nào cũng là 0
    // - Bước nhảy không phải lúc nào cũng chỉ tăng lên 1
    // - Phải có điều kiện
?>