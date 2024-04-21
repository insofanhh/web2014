<?php
/* 1. Viết hàm tìm giá trị lớn nhất và nhỏ nhất trong một mảng số nguyên bất kỳ và kiểm tra xem giá trị lớn nhất có chia hết cho giá trị nhỏ nhất hay không */
function findMax($numbers){
    $max = $numbers[0];
    foreach ($numbers as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
    return $max;
}

function findMin($numbers){
    $min = $numbers[0];
    foreach ($numbers as $num) {
        if ($num < $min) {
            $min = $num;
        }
    }
    return $min;
}

$numbers =[7,4,5,7,80];
$maxValue = findMax($numbers);
$minValue = findMin($numbers);

if ($maxValue % $minValue == 0) {
    echo "gia tri lon nhat $maxValue chia het cho gia tri nho nhat $minValue";
}else{
    echo "gia tri lon nhat $maxValue khong chia het cho gia tri nho nhat $minValue";

}

/* 2.	Yêu cầu: Nhập vào 3 số điện thoại bất kỳ. Viết một hàm kiểm tra định dạng số điện thoại đó.
Một số điện thoại hợp lệ phải thỏa mãn các điều kiện sau: 
-	Số điện thoại chỉ chứa các chữ số (Lưu ý: các ký tự là một số nguyên, không phải giá trị)
-	Số điện thoại có độ dài chính xác 10 ký tự. 
-	Số điện thoại bắt đầu bằng "0"
*/
function isValidphone($phone){
    
}