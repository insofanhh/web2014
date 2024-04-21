<?php
    // Bắt đầu session 
    session_start();
    // Tra ve so lan truy cap trang trong mot phien(session)
    // Khai bao mot bien counter
    // Kiem tra su ton tai bang isset
if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
}else{
    $_SESSION['counter'] = 1;
}
$message = "Ban da truy cap trang nay"." ". $_SESSION['counter']." "."lan trong session nay";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thiet lap session</title>
</head>

<body>
    <?= $message; ?>
    <!-- Huy thiet lap 1 bien session don -->
    <?php
    unset($_SESSION['counter']);
    ?>
    <!-- Huy tat ca bien session -->
    <?php
    session_destroy();?>
</body>

</html>