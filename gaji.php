<?php
    $k1 = "Agus";
    $g1 = 8000000;
    $j1 = "Junior Officer";
    $r1 = "Semarang";

    $k2 = "Dina";
    $g2 = 15000000;
    $j2 = "Ass. Manager";
    $r2 = "Bandung";

    $k3 = "Joko";
    $g3 = 25000000;
    $j3 = "Manager";
    $r3 = "Jakarta";
    
    $k4 = "Ahmad";
    $g4 = 13000000;
    $j4 = "Middle Officer";
    $r4 = "Jakarta";

    $k5 = "Felicia";
    $g5 = 12500000;
    $j5 = "Middle Officer";
    $r5 = "Bandung";

    $t1 = 10/100;
    $t2 = 12/100;
    $t3 = 15/100;


// Tunjangan
    if ($g1 > 15000000) {
        $totalg1 = $g1*$t1;
    }
    elseif ($g1 < 15000000) {
        $totalg1 = $g1*$t2;
    }
    else {
        $totalg1 = $g1*$t3;
    }

    if ($g2 > 15000000) {
        $totalg2 = $g2*$t1;
    }
    elseif ($g2 < 15000000) {
        $totalg2 = $g2*$t2;
    }
    else {
        $totalg2 = $g2*$t3;
    }


    if ($g3 > 15000000) {
        $totalg3 = $g3*$t1;
    }
    elseif ($g3 < 15000000) {
        $totalg3 = $g3*$t2;
    }
    else {
        $totalg3 = $g3*$t3;
    }


    if ($g4 > 15000000) {
        $totalg4 = $g4*$t1;
    }
    elseif ($g4 < 15000000) {
        $totalg4 = $g4*$t2;
    }
    else {
        $totalg4 = $g4*$t3;
    }

    if ($g5 > 15000000) {
        $totalg5 = $g5*$t1;
    }
    elseif ($g5 < 15000000) {
        $totalg5 = $g5*$t2;
    }
    else {
        $totalg5 = $g5*$t3;
    }
// Region
    if($r1 == "Jakarta") {
        $trg1= $totalg1-2.5/100*$totalg1; 
    }
    elseif($r1 == "Bandung") {
        $trg1= $totalg1-2/100*$totalg1;
    }
    else {
        $trg1= $totalg1-1.8/100*$totalg1;
    }
    
    if($r2 == "Jakarta") {
        $trg2= $totalg2-2.5/100*$totalg2; 
    }
    elseif($r2 == "Bandung") {
        $trg2= $totalg2-2/100*$totalg2;
    }
    else {
        $trg2= $totalg2-1.8/100*$totalg2;
    }
    
    if($r3 == "Jakarta") {
        $trg3= $totalg3-2.5/100*$totalg3; 
    }
    elseif($r3 == "Bandung") {
        $trg3= $totalg3-2/100*$totalg3;
    }
    else {
        $trg3= $totalg3-1.8/100*$totalg3;
    }

    if($r4 == "Jakarta") {
        $trg4= $totalg4-2.5/100*$totalg4; 
    }
    elseif($r4 == "Bandung") {
        $trg4= $totalg4-2/100*$totalg4;
    }
    else {
        $trg4= $totalg4-1.8/100*$totalg4;
    }

    if($r5 == "Jakarta") {
        $trg5= $totalg5-2.5/100*$totalg5; 
    }
    elseif($r5 == "Bandung") {
        $trg5= $totalg5-2/100*$totalg5;
    }
    else {
        $trg5= $totalg5-1.8/100*$totalg5;
    }
// Jabatan
    if($j1 == "Manager") {
        $gajitotal1 = $trg1+250000;
    }
    elseif($j1 == "Ass. Manager") {
        $gajitotal1 = $trg1+175000;
    }
    elseif($j1 == "Senior Officer") {
        $gajitotal1 = $trg1+150000;
    }
    elseif($j1 == "Middle Officer") {
        $gajitotal1 = $trg1+125000;
    }
    else {
        $gajitotal1 = $trg1+100000;
    }

    if($j2 == "Manager") {
        $gajitotal2 = $trg2+250000;
    }
    elseif($j2 == "Ass. Manager") {
        $gajitotal2 = $trg2+175000;
    }
    elseif($j2 == "Senior Officer") {
        $gajitotal2 = $trg2+150000;
    }
    elseif($j2 == "Middle Officer") {
        $gajitotal2 = $trg2+125000;
    }
    else {
        $gajitotal2 = $trg2+100000;
    }

    if($j3 == "Manager") {
        $gajitotal3 = $trg3+250000;
    }
    elseif($j3 == "Ass. Manager") {
        $gajitotal3 = $trg3+175000;
    }
    elseif($j3 == "Senior Officer") {
        $gajitotal3 = $trg3+150000;
    }
    elseif($j3 == "Middle Officer") {
        $gajitotal3 = $trg3+125000;
    }
    else {
        $gajitotal3 = $trg3+100000;
    }

    if($j4 == "Manager") {
        $gajitotal4 = $trg4+250000;
    }
    elseif($j4 == "Ass. Manager") {
        $gajitotal4 = $trg4+175000;
    }
    elseif($j4 == "Senior Officer") {
        $gajitotal4 = $trg4+150000;
    }
    elseif($j4 == "Middle Officer") {
        $gajitotal4 = $trg4+125000;
    }
    else {
        $gajitotal4 = $trg4+100000;
    }

    if($j5 == "Manager") {
        $gajitotal5 = $trg5+250000;
    }
    elseif($j5 == "Ass. Manager") {
        $gajitotal5 = $trg5+175000;
    }
    elseif($j5 == "Senior Officer") {
        $gajitotal5 = $trg5+150000;
    }
    elseif($j5 == "Middle Officer") {
        $gajitotal5 = $trg5+125000;
    }
    else {
        $gajitotal5 = $trg5+100000;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BataraGuru</title>
    <style>
        table{
            width: 700px;
        }
        table,th,td {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Gaji(per bulan)</th>
            <th>Level Jabatan</th>
            <th>Region</th>
            <th>Total Gaji</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?= $k1; ?></td>
            <td><?= $g1; ?></td>
            <td><?= $j1; ?></td>
            <td><?= $r1; ?></td>
            <td><?= $gajitotal1; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?= $k2; ?></td>
            <td><?= $g2; ?></td>
            <td><?= $j2; ?></td>
            <td><?= $r2; ?></td>
            <td><?= $gajitotal2; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?= $k3; ?></td>
            <td><?= $g3; ?></td>
            <td><?= $j3; ?></td>
            <td><?= $r3; ?></td>
            <td><?= $gajitotal3; ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?= $k4; ?></td>
            <td><?= $g4; ?></td>
            <td><?= $j4; ?></td>
            <td><?= $r4; ?></td>
            <td><?= $gajitotal4; ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td><?= $k5; ?></td>
            <td><?= $g5; ?></td>
            <td><?= $j5; ?></td>
            <td><?= $r5; ?></td>
            <td><?= $gajitotal5; ?></td>
        </tr>
    </table>
</body>
</html>