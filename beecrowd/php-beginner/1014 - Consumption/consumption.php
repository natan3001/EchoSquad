<?php

$totalDistance = fgets(STDIN);
$spentFuel = fgets(STDIN);

$average = $totalDistance / $spentFuel;

echo number_format($average, 3, '.', '')." km/l\n";
?>