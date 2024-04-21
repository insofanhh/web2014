<?php
// Bai 1: Dem so luong phan tu chan co trong mot mang
$arr=[1,3,4,6,7,8,13,45,76];
$count = 0;
foreach ($arr as $a) {
    if ($a % 2 == 0) {
        $count++;
    }
}
echo "So luong phan tu chan la: ".$count."</br>";



//Bai 2: Tim va hien thi cac chuoi co do dai lon hon 5 trong mot mang
$arr1 =["Tao", "chuoii","cam","xoai", "mang cau"];
foreach ($arr1 as $string ) {
    if(strlen($string)>5){
        echo "Chuoi co do dai lon hon 5 la:". $string."</br>";
    }
}

//Bai 3: Kiem tra mang co chua so am hay khong?
$arr2= [1, 2, -3, -4, 5, 6, -7, -8, 9, 0];
$check = false;
 foreach($arr2 as $number){
     if($number < 0){
         $check = true;
         break;
     }
 }
 if ($check) {
     echo "Mang co so am"."</br>";
 }else{
     echo "Mang khong co so am"."</br>";
 }

 //Cach 2
 /*
 $count2 = 0;
 foreach ($arr2 as $number1) {
     if ($number1 < 0) {
         $count2++;
     }
 }
 if ($count2 < 0) {
     echo "Mang co so am";
 }else{
     echo "Mang khong co so am";
 }
 */

 // Bai 4: Tính tổng các số dương trong một mảng
 $arr3= [1, 2, -3, -4, 5, 6, -7, -8, 9, 0];
$sum = 0;
 foreach ($arr3 as $number1) {
     if ($number1 > 0) {
         $sum += $number1;
     }
 }
 echo "Tong cac so duong la:".$sum."</br>";

 //Bai 5: Tính tổng các số chẵn và trung bình cộng của chúng trong một mảng
 $arr4= [-1, 2, -3, -4, 5, 6, -7, -8, 9, 0];
 $sum2 = 0;
 $count2 = 0;
 foreach ($arr4 as $number2) {
     if ($number2 % 2 == 0) {
         $sum2 += $number2;
         $count2++;
     }
 }
 echo "Tong cac so chan la:".$sum2."</br>";
 if ($count2 > 0) {
     $average = $sum2/$count2;
     echo "Trung binh cong cua so duong la".$average;
 }else{
     echo "Khong co trung binh cong cua so duong trong mang";
 }

 //Bai 6:  Tìm và in ra các ký tự đầu tiên của mỗi chuỗi trong một mảng chuỗi
 