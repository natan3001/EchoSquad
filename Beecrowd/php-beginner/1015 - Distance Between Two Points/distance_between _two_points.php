<?php
$pointA = explode(' ', readline());
$pointB = explode(' ', readline());

$x1 = (float) $pointA[0];
$x2 = (float) $pointB[0];
$y1 = (float) $pointA[1];
$y2 = (float) $pointB[1];

$distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

echo number_format($distance, 4, '.', '')."\n";
?>