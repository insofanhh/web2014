<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai tap</title>
</head>

<body>
    <h4>
        1. Kiểm tra xem một chuỗi có bắt đầu bằng một từ cụ thể hay không
        VD: $string = "Hello, World!";
        Kiểm tra có từ Hello không
        Kết quả: In ra màn hình:
        “Chuỗi bắt đầu bằng 'Hello'”
    </h4>
    <h5>Bai lam va ket qua:</h5>
    <?php
    $str = "Hello ba gia";
    $key = "hello";
    $check = strpos(strtolower($str), strtolower($key));
    if (isset($check) && $check !== false) {
        echo "Chuoi bat dau bang '$key'"."</br>";
    }else{
        echo "Chuoi khong bat dau bang '$key'"."</br>";
    }
    ?>

    <h4>
        2. Viết một chương trình PHP để đếm số lần xuất hiện của một từ trong chuỗi
        VD: PHP hỗ trợ nhiều cơ sở dữ liệu phổ biến như MySQL, PostgreSQL, Oracle, SQLite và nhiều hơn nữa => đáp án: Số
        lần xuất hiện của từ SQL là 3
    </h4>
    <h5>Bai lam va ket qua:</h5>
    <?php
    $str2 = "PHP hỗ trợ nhiều cơ sở dữ liệu phổ biến như MySQL, PostgreSQL, Oracle, SQLite và nhiều hơn nữa ";
    echo "So lan xuat hien cua SQL la:".substr_count($str2, 'SQL');
    ?>
</body>

</html>