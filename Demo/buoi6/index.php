<?php
//Tao so hoa don
function createbill(){
    // Dinh nghia tien to
    $tiento = "INV";
    // Su dung ham rand() de tao mot so ngau nhien 1000-9999
    $randomNumber = rand(1000,9999);
    $soHD = $tiento.$randomNumber;
    return $soHD;
}
 $hd1 = createbill();
 $hd2 = createbill();
 $hd3 = createbill();
 $hd4 = createbill();
 $hd5 = createbill();
 echo "So hoa don thu nhat la:"." ".$hd1."</br>";
 echo "So hoa don thu hai la:"." ".$hd2."</br>";
 echo "So hoa don thu ba la:"." ".$hd3."</br>";
 echo "So hoa don thu bon la:"." ".$hd4."</br>";
 echo "So hoa don thu nam la:"." ".$hd5."</br>";
 echo "<hr>";

 //Ham co tham so
 //vidu: Diem >= 70 thi thong bao: "Diem so[diem] la diem qua mon"
 //Nguoc lai <70 thong bao: "Diem so[diem] la diem khong qua mon"
 function checkMark($mark){
     //xet diem co >=70 hay khong?
     if($mark >=70){
         return "Diem $mark la diem qua mon"."</br>";
     }else{
         return "Diem $mark la diem khong qua mon"."</br>";
     }
 }
 echo checkMark(69);
 echo checkMark(90);
 echo "<hr>";

 //Dinh nghia ham tinh tong hai so
 function sum($x, $y = 9){
     return $x + $y;
 }
//Goi ham 
$tong = sum(5);
echo "Tong:"." ".$tong."</br>";
$tong2 = sum(6,8);
echo "Tong 2:"." ".$tong2."</br>";
echo"<hr>";
function myName($a, $b = 2, $c=4){
    echo "$a $b $c"."</br>";
}
echo myName(3,1);
echo "<hr>";

//Danh sach cac tham bien
function myFun(){
    $arg1 = func_get_arg(0);
    $arg2 = func_get_arg(1);
    echo "Arg 1:".$arg1."</br>";
    echo "Arg 2:".$arg2."</br>";
}
myFun("Xin chao", "cac ban");
echo "<hr>";

//Tham so bat dinh
function sum_array(...$number){
    $sum = 0;
    foreach ($number as $num) {
        $sum += $num;
    }
    return $sum;
}
echo sum_array(1,2,3)."</br>";
echo sum_array(3,4,5,6)."</br>";
echo sum_array(1,2)."</br>";
echo sum_array(1,3,5,7)."</br>";
echo "<hr>";

/*Bai tap: Tinh tong gia tien cua cac san pham trong gio hang
Thanh tien: don gia x so luong(1 loai)*/
function thanhTien($cart){
    $tong = 0;
    foreach ($cart as $item) {
        $tong = $tong + $item["don gia"]*$item["so luong"];
    }
    return $tong;
}

$gioHang =[
    ["ten"=>"Dong ho", "don gia"=>170000, "so luong"=>2],
    ["ten"=>"Ao so mi", "don gia"=>530000, "so luong"=>1],
    ["ten"=>"Giay", "don gia"=>700000, "so luong"=>1]
];
//Goi ham tinh tong gia tien
$thanhTien = thanhTien($gioHang);
echo "Tong gia tien cua gio hang la: ",$thanhTien;