<?php
$str= "Hello ba gia";
//kiem tra xem mot chuoi co bat dau tu mot tu cu the hay khong?
// $key = "lo";
// if (strpos(strtolower($str, $key)) !== false) {
//     echo "Chuoi co chua '$key'";
// }else{
//     echo "Chuoi khong chua '$key'";
// }

//2.
$key2 = "lo";
$count = 0;
$position = 0;
while (($position= strpos(strtolower($str), strtolower($key2), $position)) !== false) {
    $count ++;
    $position ++;
}
echo "So lan lap lai cua '$key2' la: ".$count;