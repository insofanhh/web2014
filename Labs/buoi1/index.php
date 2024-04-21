<?php
/*BAI TAP VE NHA
B1: Viet mot phuong trinh co a = 5, b = 20. Tinh tong, hieu, tich, thuong. Su dung bien va in ra ket qua.
B2: Viet phuong trinh de tim so lon nhat trong 3 so duoc cung cap.
*/

// Bai 1
$a = 5;
$b = 20;

$result1 = $a + $b;
echo "Tong la: ".$result1."<br>";
$result2 = $a - $b;
echo "Hieu la: ".$result2."<br>";
$result3 = $a * $b;
echo "Tich la: ".$result3."<br>";
$result4 = $a / $b;
echo "Thuong la: ".$result4."<br>";

//Bai 2
$list_Number = array(10, 60, 100);
echo "So lon nhat la: ";
echo max($list_Number);
?>