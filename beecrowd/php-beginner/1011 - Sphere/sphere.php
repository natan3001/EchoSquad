<?php
$pi = 3.14159;
$radius = fgets(STDIN);

$volume = (4/3) * $pi * pow($radius, 3);

echo "VOLUME = ".number_format($volume, 3, '.', '')."\n";
?>