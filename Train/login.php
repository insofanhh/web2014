<?php
session_start();

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "ph21586" && $password = "123456") {
        $_SESSION["username"] = $username;
        header("location: index.php");
    }else {
        echo "Nhap sai!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <h2>Login</h2>
        <p>Username</p>
        <input type="text" name="username" id="">
        <p>Pass</p>
        <input type="text" name="password" id="">
        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>