<?php
/* 1. Ham isset($value, $value2): Kiem tra $value, $value2 co ton tai hay khong.
No se tra ve TRUE chi khi bien ton tai(bien khong phai null) */
$a = "php co ban";
if (isset($a)) {
    echo "Bien a co ton tai";
}else{
    echo "Bien a khong ton tai";
}
echo "<hr>";
/* Ung dung cua ISSET:
- Thuong su dung trong form de kiem tra su xac dinh cua bien
- Kiem tra su xac dinh cua phan tu trong mang de xu li va xuat gia tri */

// Vidu2: Kiem tra gia tri phan tu trong mang
$arr =[
    "php",
    "Ngon ngu",
    null,
    20,
    "php co ban",
    null
];
foreach ($arr as $key) {
    if (isset($key)) {
        echo "Phan tu co ton tai"."</br>";
    }else{
        echo "Phan tu khong ton tai"."</br>";
    }
}
echo "<hr>";

/* Ham unset(): Neu 1 bien da duoc khai bao nhung sau do lai duoc loai bo boi ham unset()
thi khi kiem ra voi ham isset se tra ket qua la false */

/* 2. Ham empty($var): Kiem tra $var co phai la gia tri rong hay khong */
// Gia tri rong : 
// - "" (chuoi),
// - 0( 0 la so nguyen),
// - 0.0( so thuc),
// - null,
// - false,
// - array() - mang rong,
// - $var - bien chua khai bao, khong co gia tri
// ham empty($var) tuong duong ham !isset($var) hoac $var == false
$b = [];
if (empty($b)) {
    echo "Bien b rong"."</br>";
}else{
    echo "Bien b khong rong"."</br>";
}


// empty() su dung khi:
// - Kiem tra gia tri bien co rong hay khong
// - Chuan hoa du lieu khi thao tac den nhan gia tri tu form
echo "<hr>";

/* 3. Ham is_null($value): Kiem tra $value co phai gia tri null hay khong
no tra ve TRUE khi bien la NULL. is_null() trai nguoc isset( ) */
$c = null;
if (is_null($c)) {
    echo "Bien c la null";
}else{
    echo "Bien c khong phai la null";
}
echo "<hr>";

/* 4. Ham is_array($value): Kiem tra $value co phai la mang hay khong
ham nay tra ve TRUE khi $value la mang, tra ve FALSE khi $value khong phai mang */
$x = ["mot", "hai", "ba", "bon"];
$y = "Day la gi";
echo is_array($x)? "x la mang"."</br>" : "x khong phai mang"."</br>";
echo is_array($y)? "y la mang"."</br>" : "y khong phai mang"."</br>";
echo "<hr>";

/* 5. Ham is_string($value): Kiem tra $value co phai la chuoi hay khong */
echo is_string($x)? "x la chuoi"."</br>" : "x khong phai chuoi"."</br>";
echo is_string($y)? "y la chuoi"."</br>" : "y khong phai chuoi"."</br>";
echo "<hr>";

/* 6. Ham is_int($value)/ is_interger($value): Kiem tra $value co phai so nguyen hay khong */
foreach ($x as $value) {
    echo is_int($value)?"Phan tu nay la so nguyen"."</br>" : "Phan tu khong la so nguyen"."</br>";
}
echo "<hr>";

/* 7. Ham is_float($value): Kiem tra co phai kieu du lieu float hay khong */
var_dump(is_float(1.23));
echo "</br>";
var_dump(is_float(13));
echo "<hr>";


/* 8. Ham array_key_exists($key, $array): Kiem tra $key co trong mang $array hay khong */
$arr = ["Nam" => 2.5,
        "Hoa" => 9,
        "Hai" => 8
];
if (array_key_exists("Mai", $arr)) {
    echo "Mai co trong mang";
}else{
    echo "Mai khong co trong mang";
}
echo "<hr>";

/* 9. Ham is_numeric($value): Kiem tra $value co phai la so hay khong */
echo is_numeric($a) ? "Bien a la so"."</br>" : "Bien khong phai la so"."</br>";
echo "<hr>";

?>