<?php
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);

$average = (($a * 2) + ($b * 3) + ($c * 5)) / 10;

echo "MEDIA = ".number_format($average, 1, '.', '')."\n";
?>