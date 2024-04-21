<!-- POST thuong dung cho du lieu quan trong can bao mat nhu thong tin: dang ky, dang nhap, thanh toan
    - POST nhap duoc thong qua phuong thuc http -->
<html>
<form action="" method="POST">
    <p>Username</p>
    <input type="text" name="username" id=""><br>
    <p>Password</p>
    <input type="password" name="password" id=""><br>
    <button type="submit">Sign in</button>
</form>
<p>Username vua nhap:</p><?php
    if (isset($_POST["username"])) {
        echo $_POST["username"];
    }?>
<p>Password vua nhap:</p><?php
    if (isset($_POST["password"])) {
        echo $_POST["password"];
    }?>

</html>