<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bai 3</title>
</head>

<body>
    <h1>PHP 1 - Bai 3</h1>
    <h2>So sanh 2 so a = 25 va b = 36</h2>
    <?php
    $a = 25;
    $b = 36;
    if ($a > $b) {
        echo "Gia tri cua a lon hon b";
    }elseif($a == $b){
        echo "Gia tri cua a bang b";
    }else{
        echo "Gia tri cua a nho hon b";
    }
    ?>
    <hr>
    <?php
    for($i = 1; $i <= 6; $i++){
        echo "<h".$i.">"."Bai".$i."</h".$i.">";
    }
    ?>
</body>

</html>