<?php
/* 1. Ham strpos($string, $keyword): kiem tra doan ky tu $keyword co ton tai trong chuoi $string hay khong và xuat ra man hinh vi tri (index) bat dau cua $keyword do */
$str = "Hom nay troi dep qua hehe";
//kiem tra xem "hehe" co trong chuoi khong
// tra ve vi tri bat dau cua "hehe"
echo strpos($str, "hehe" );
echo "<hr>";

/* 2. Ham substr($string, $start, $length): cat ra mot chuoi con trong chuoi $string
bat dau tu ki tu $start va chieu dai chuoi con la $length 
*/
echo substr($str, 0,3)."</br>";
echo substr($str, -4)."</br>";
// Neu $start la so duong thi vi tri bat dau se tinh tu trai sang phai va nguoc lai neu $start la so am thi tri bat dau se tu phai sang trai
echo substr($str, 4,3)."</br>";
//Neu khong co $length thi se cat den het
echo "<hr>";

/* 3. Ham strtolower($string): chuyen chuoi thanh dang chu thuong
Ham  strtoupper($string): chuyen chuoi thanh dang in hoa
*/
$str1 = "AI CHOI GAME THI HUY DIEM DANH 1";
$str2 = " ai choi game huy diem danh 2";
echo strtolower($str1)."</br>";
echo strtoupper($str2)."</br>";
echo "<hr>";

/* 4. Ham str_replace($find, $replace, $string): Thay the doan van ban trong mot chuoi
*/
echo str_replace("qua", "lam", $str);
echo "<hr>";


/* 5. Ham trim($string, charlist): dung de xoa nhung ky tu co ten trong danh sach charlist ra khoi vi tri dau va cuoi cua chuoi
*/
$str3 = "kkkSan pham ho tro suc khoekkk";
$str4 = trim($str3, "k");
echo $str3."</br>".$str4."</br>";
$str5 = trim($str3, "kSa");
echo $str5;
echo "<hr>";

//Xoa tat ca nhung ky tu k S a ra khoi vi tri dau va cuoi cua chuoi

//vidu cho var_dump
function sum($a, $b): float{
    return $a + $b;
}
var_dump(sum(1,2));