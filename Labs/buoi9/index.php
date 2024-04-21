<?php
/* 1. Viết hàm tìm giá trị lớn nhất và nhỏ nhất trong một mảng số nguyên bất kỳ và kiểm tra xem giá trị lớn nhất có chia hết cho giá trị nhỏ nhất hay không */

function find_max_min($arr){
    if (empty($arr)) {
        return[null, null, false];
    }


$min = $arr[0];
$max = $arr[0];
foreach ($arr as $value) {
    if ($value > $max ) {
        $max = $value;
    }
    if($value < $min){
        $min = $value;
    }
    
}
$chia_het = ($max % $min == 0);
return [$max, $min, $chia_het];
}
$arr = [1,2,3,4,5,6,7,8,9];
[$min, $max, $chia_het] = find_max_min($arr);
echo "Gia tri lon nhat: $max"."</br>";
echo "Gia tri nho nhat: $min"."</br>";
if ($chia_het) {
    echo "Gia tri lon nhat chia het cho gia tri nho nhat"."</br>";
}else{
    echo "Gia tri lon nhat khong chia het cho gia tri nho nhat"."</br>";

}
echo"<hr>";

/* 2.	Yêu cầu: Nhập vào 3 số điện thoại bất kỳ. Viết một hàm kiểm tra định dạng số điện thoại đó.
Một số điện thoại hợp lệ phải thỏa mãn các điều kiện sau: 
-	Số điện thoại chỉ chứa các chữ số (Lưu ý: các ký tự là một số nguyên, không phải giá trị)
-	Số điện thoại có độ dài chính xác 10 ký tự. 
-	Số điện thoại bắt đầu bằng "0"
*/
function check_phone($phone_Num){
    if (strlen($phone_Num) != 10) {
        return false;
    }

    if (!preg_match('/[0-9]{10}$/',$phone_Num)) {
        return false;
    }

    // if (!preg_match('/^0[0-9]{10}$/',$phone_Num)) {
    //     return false;
    // }
    return true;

}

$phone_Num = "0328208896";
$phone_Num2 = "03282088sfsf96";
$phone_Num3 = "3328208896";

// if (isset($phone_Num1)) {
//     echo "Hop le";
// }else{
//     echo "Khong hop le";
// }

echo "So dien thoai 1:".(check_phone($phone_Num) ? "Hop le" : "Khong hop le")."</br>";
echo "So dien thoai 2:".(check_phone($phone_Num2) ? "Hop le" : "Khong hop le")."</br>";
// echo "So dien thoai 2:".(check_phone($phone_Num3) ? "Hop le" : "Khong hop le")."</br>";