<html>
<!-- GET co the nhan biet bang 2 cach
        - GET thu thap du lieu form sau khi duoc gui(submit) thong qua thuoc tinh method = "GET"
        - GET cung co the thu thap du lieu duoc gui thong qua duong dan URL tren thanh dia chi -->
<!-- Vidu1: Nhan biet gia tri qua form -->
<form action="get.php" method="GET">
    <p>Name</p>
    <input type="text" name="name" id="">
    <button type="submit">Submit</button>
    <p>Thong tin vua nhap la:</p>
</form>
<!--- get.php la tham so trong action => Trang chua code php xu ly
    - method ="GET": la thuoc tinh xac dinh phuong thuc, o day la GET
    - name ="name": la key nhan biet thanh phan duoc xu ly
    - button type ="submit": noi tao hanh dong khi nguoi dung click  -->

</html>
<!-- Xu ly nhung gia tri vua nhap -->
<!-- PHP tao mot bien toan phan la $_GET de nhap gia tri cua du lieu nhap trong form -->
<!-- Dung cau lenh if de xac dinh xem co ton tai phuong thuc GET khong, truoc khi nhan gia tri -->
<?php
    if (isset($_GET["name"])) {
        echo $_GET["name"];
    }
?>
<!-- Nhan biet gia tri qua URL -->
<html>
<a href="get.php?id=1&ten=iphone">Click de nhan thong tin</a>
<br>
Thong tin nhan duoc la: <br>
<?php
if(isset($_GET["id"]) && isset($_GET["ten"])){
    echo "ID:".$_GET["id"]."</br>"."Ten:".$_GET["ten"];
}
?>

</html>
<!-- => Khi du lieu khong can den su bao mat(du lieu khong quan trong) the hien ro tren tham so khi submit hay click tu lien ket -->