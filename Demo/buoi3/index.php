<?php
    $number = 10;
//If
    // Nếu điều kiện "giá trị của number lớn hơn 5" là đúng
    // Thì sẽ in ra câu: Tôi được 10 điểm PHP1
    if($number > 5){
        echo "Tôi được 10 điểm PHP1";
        echo "<br>Tôi đã qua môn quá xuất sắc ^^";
    }
// If ... else
    $a = 2;
    $b = 4;
    // Nếu a > b thì in ra: số 2 lớn hơn 4
    // Ngược lại thì in ra: 2 nhỏ hơn hoặc bằng 4
    if($a > $b){
        echo "<br>Số 2 lớn hơn 4";
    }else{
        echo "<br>Số 2 nhỏ hơn hoặc bằng 4";
    }

// if...elseif...else
    if($a == $b){
        echo "<br>2 số đã cho bằng nhau";
    }elseif($a < $b){
        echo "<br>Số a = $a nhỏ hơn số b = $b";
    }else{
        echo "<br>Số a = $a lớn hơn số b = $b";
    }

    $day = 3;
    if($day == 2){
        echo "<hr>Hôm nay là thứ Hai";
    }elseif($day == 3){
        echo "<hr>Hôm nay là thứ Ba";
    }elseif($day == 4 ){
        echo "<hr>Hôm nay là thứ Tư";
    }elseif($day == 5){
        echo "<hr>Hôm nay là thứ Năm";
    }elseif($day == 6){
        echo "<hr>Hôm nay là thứ Sáu";
    }elseif($day == 7){
        echo "<hr>Hôm nay là thứ Bảy";
    }elseif($day == 8){
        echo "<hr>Hôm nay là Chủ nhật";
    }else{
        echo "<hr>Giá trị của biến \"day\" không hợp lệ!";
    }

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