<?php
    $diem = 9;
    if($diem >=8.5 && $diem <=10){
        echo "A";
    }elseif($diem <=8.4 && $diem >= 7.0){
        echo "B";
    }elseif($diem <=6.9 && $diem >=5.5){
        echo "C";
    }elseif($diem <5.5 && $diem >=0){
        echo "D";
    }else {
        echo "Điểm nhập không hợp";
    }
?>
<!-- BT2 -->
<?php
    $so = 9;
    if($so == 0){
        echo "Số này bằng 0";
    }elseif($so >0){
        echo "Số này là số dương";
    }else{
        echo "Số này là số âm";
    }
?>