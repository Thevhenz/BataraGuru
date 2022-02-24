<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BataraGuru</title>
</head>
<body>
    <?php
        $tUang = "1.895.250,-";
        $uang = 1895250;

        $t1 = "Jumlah Uang = 100.000 ";
        $u1 = $uang % 100000;
        $j1 = ($uang - $u1) / 100000;

        $t2 = "Jumlah Uang = 50.000 ";
        $u2 = $uang % 50000;
        $j2 = ($uang - $u2) / 50000;

        $t3 = "Jumlah Uang = 20.000 ";
        $u3 = $uang % 20000;
        $j3 = ($uang - $u3) / 20000;

        $t4 = "Jumlah Uang = 5000 ";
        $u4 = $uang % 5000;
        $j4 = ($uang - $u4) / 5000;

        $t5 = "Jumlah Uang = 1000 ";
        $u5 = $uang % 1000;
        $j5 = ($uang - $u5) / 1000;

        $t6 = "Jumlah Uang = 50 ";
        $u6 = $uang % 50;
        $j6 = ($uang - $u6) / 50;
    ?>
    <p>Total Uang : <?= $tUang; ?></p>
    <p><?= $t1; ?> - <?= $j1; ?> lembar</p>
    <br>
    <p><?= $t2; ?> - <?= $j2; ?> lembar</p>
    <br>
    <p><?= $t3; ?> - <?= $j3; ?> lembar</p>
    <br>
    <p><?= $t4; ?> - <?= $j4; ?> lembar</p>
    <br>
    <p><?= $t5; ?> - <?= $j5; ?> lembar</p>
    <br>
    <p><?= $t6; ?> - <?= $j6; ?> lembar</p>
</body>
</html>