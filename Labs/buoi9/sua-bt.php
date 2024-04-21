<!-- Bài 1. Viết HÀM tìm MAX, MIN, kiểm tra MAX có chia hết cho MIN không -->
<?php
    // Hàm tìm MAX trong mảng
    function findMax($numbers){
        $max = $numbers[0];
        foreach($numbers as $num){
            if($num > $max){
                $max = $num;
            }
        }
        return $max;
    }

    // Hàm tìm MIN trong mảng
    function findMin($numbers){
        $min = $numbers[0];
        foreach($numbers as $num){
            if($num < $min){
                $min = $num;
            }
        }
        return $min;
    }

    $numbers = [2,5,11,7,8,90,111, 0];
    // Tìm GTLN
    $gtln = findMax($numbers);
    // Tìm GTNN
    $gtnn = findMin($numbers);

    // Kiểm tra MAX có chia hết cho MIN?
    if($gtnn!=0 && $gtln % $gtnn == 0){
        echo "GTLN $gtln chia hết cho GTNN $gtnn<BR>";
    }else
    {
        echo "GTLN $gtln không chia hết cho GTNN $gtnn<BR>";
    }
?>
<hr>
<!-- Định dạng SĐT
- chữ số
- độ dài = 10
- index 0 là 0 -->
<?php
    function isValidPhone($phone){
        // Xóa tất cả khoảng trắng ở đầu và cuối sđt
        $trimPhone = trim($phone);
        // is_int: kiểm tra giá trị của biến có phải là kiểu số hay không
        // kiểm tra từng ký tự nó có phải là chữ số
        // Duyệt qua từng phần tử
        for($i=0;$i<strlen($trimPhone);$i++){
            // Kiểm tra ký tự có phải là chữ số k
            if(!is_numeric($trimPhone[$i])){
                return false;
            }
        }
       
        // độ dài = 10
        if(strlen($trimPhone) !==10){
            return false;
        }

        // ký tự đầu = "0"
        // Cách 1:
        // if($trimPhone[0] !== "0"){
        //     return false;
        // }

        // Cách 2:
        if(substr($trimPhone,0,1)!=="0"){
            return false;
        }

        // Tất cả ĐK trên đúng thì trả về true
        return true;
    }
    $phone1 = "0999999999";
    $phone2= "0987654321";
    $phone3 = "12376545";

    echo (isValidPhone($phone1))?"SĐT: $phone1 hợp lệ<br>":"SĐT: $phone1 không hợp lệ<br>";
    echo (isValidPhone($phone2))?"SĐT: $phone2 hợp lệ<br>":"SĐT: $phone2 không hợp lệ<br>";
    echo (isValidPhone($phone3))?"SĐT: $phone3 hợp lệ<br>":"SĐT: $phone3 không hợp lệ<br>";
?>