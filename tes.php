<!DOCTYPE html>
<html>
<body>

<?php
// $aaa = 7 + (rand(0,10)) / 100 ."%";
$rrr = 0.0001 . " BTC.";
$aaa = 3 + (rand(0,50)) / 100;
echo "Saldo anda: " . $rrr ."<br>";
echo "Penghasilan hari ini: " . $aaa . "% <br>";
echo "Total Saldo: ";
echo $aaa / 1000000 + $rrr;
?>

</body>
</html>