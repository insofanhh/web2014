<!-- Vòng lặp while: lặp lại 1 khối lệnh nếu 
thỏa mãn điều kiện 
Cú pháp:
    while(<điều kiện lặp>){
        // Khối code
    }
-->
<?php
    $i = 1;
    while($i <= 10){
        echo $i." ";
        // Sau khi in ra giá trị của i thì i tăng lên 1
        // rồi tiếp tục kiểm tra điều kiện ...
        $i++;
    }
?>
<hr>
<!-- Vòng lặp do ... while: giống while nhưng khối code (công việc)
trong vòng lặp được thực thi trước rồi mới xét điều kiện lặp sau -->
<!-- Cú pháp:
    do{
        // Khối code
    }while(điều kiện)
 -->
 <?php
    $i = 0;
    $n = 9;
    do {
        echo $i." ";
        $i++;
    }while($i <= $n);
    // VD khác
    echo "<br>";
    $x = 10;
    do {
        echo $x." ";
        $x++;
    }while($x <=5);
 ?>