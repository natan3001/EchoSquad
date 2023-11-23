<?php
$radius = fgets(STDIN);
$pi = 3.14159;

$area = $pi * pow($radius, 2);

echo "A=".number_format((float)$area, 4, '.', '')."\n";
?>