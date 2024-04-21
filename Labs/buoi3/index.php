<?php
 // BT1: Kiểm tra xem giá trị của a là số chẵn hay lẻ
    // VD: a có giá trị là số chẵn
    echo "<hr>";
    if($a % 2 == 0){
        echo "a có giá trị là số chẵn";
    }else{
        echo "a có giá trị là số lẻ";
    }

    // BT2 (Buổi đầu)
    $x = 9;
    $y = 17;
    $z = 8;

    // max là giá trị lớn nhất
    $max = $x;
    if($y > $max){
        $max = $y;
    }
    if($z > $max){
        $max = $z;
    }

    print "<br>Số lớn nhất là ".$max;
    ?>