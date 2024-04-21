<!-- Vòng lặp foreach giúp duyệt qua các phần tử trong 1 mảng
Vòng lặp foreach chỉ làm việc trên mảng 
và lặp qua mỗi cặp key/value trong mảng.
Cú pháp:
foreach($array as $value){
    //Khối code
}
- $array là mảng cần duyệt
- $value là giá trị trong từng phần tử của mảng
 -->
<?php
// Mảng chỉ số
    $arr2 = [6,7,8,9,10];
    foreach ($arr2 as $a){
        echo "$a<br>";
    }
// Mảng kết hợp
    $sv = array("Hải"=>7,"Mai"=>9,"Tùng"=>5.6);
    foreach($sv as $name=>$mark){
        echo "$name: $mark<br>";
    }
?>