<?php
function faktorial($x) {
    $angk = 1;
    $fkt = 1;
    while($angk <= $x) {
        $fkt = $fkt * $angk;
        $angk = $angk + 1;
    }
    return $fkt;
}

echo "Input: 4";
echo "<br>";
echo "Output : " . faktorial(4);
echo "<br>";
echo "--------------------";
echo "<br>";
echo "Input: 8";
echo "<br>";
echo "Output : " . faktorial(8);
?>