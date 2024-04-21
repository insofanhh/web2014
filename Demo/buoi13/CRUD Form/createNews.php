<?php
require_once "../../buoi12/connectdb.php";
// Khai bao gia tri ban dau, neu khong co thi chua submit cau lenh insert se bao loi
$title = "";
$descrition = "";
// $targetFile= "";

// Lay gia tri POST tu form khi SUBMIT
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['title'])){
        $title = $_POST['title'];
    }

    if(isset($_POST['descrition'])){
        $descrition = $_POST['descrition'];
    }

    // Xu ly upload file hinh len CSDL va luu ve folder upload
    //B1: Chon thu muc luu tru tep tin tai len
    $targetDirectory = "upload/";
    // Duong dan day fu cua tap tin
    // Ham basename(): dung de trich xuat ten tep tin tu 1 duong dan cua tep tin
    $targetFile = $targetDirectory.basename($_FILES["image"]["name"]);
    //Kiem tra xem tep tin da ton tai trong folder upload hay chua?
    if(file_exists($targetFile)){
        echo "Tep tin da ton tai!";
    }else{
        // Di chuyen tep tin tu thu muc tam len thu muc dich
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "Tep tin".basename($_FILES["image"]["name"])."da duoc tai len thanh cong!";
        }else{
            echo "Da xay ra loi khi tai len";
        }
    }
    // Xu li insert du lieu vao bang News
    $sql = "INSERT INTO news(title, descrition, image)
    VALUES ('$title', '$descrition', '$targetFile')";
    if ($conn->exec($sql) == 1) {
        echo "Them du lieu thanh cong!<br>"; ?>
<a href="../read.php">Xem du lieu</a>
<?php } 
}?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tao tin tuc moi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container ">
        <!-- enctype="multipart/form-data": Bat buoc phai co khi upload file -->
        <form action="<?= $_SERVER["PHP_SELF"];?>" method=" POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="" class="form-label">Tieu de</label>
                <input type="text" class="form-control" id="" name="title">
            </div>
            <!--  -->
            <label for="" class="form-label">Mo ta</label>
            <div class="mb-3">
                <textarea name="descrition" id="" cols="30" rows="3"></textarea>
            </div>
            <!--  -->
            <label for="" class="form-label">Hinh anh</label>
            <div class="mb-3">
                <input type="file" class="" id="" name="image">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>

</html>