<?php
$a = fgets(STDIN);
$b = fgets(STDIN);

$average = (($a * 3.5) + ($b * 7.5)) / 11;

echo "MEDIA = ".number_format($average, 5, '.', '')."\n";
?>