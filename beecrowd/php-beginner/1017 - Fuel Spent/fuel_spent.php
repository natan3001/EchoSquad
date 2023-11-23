<?php
$timeSpent = fgets(STDIN);
$averageSpeed = fgets(STDIN);

$consumptionPerKm = 12;

$fuelNeeded = ($timeSpent * $averageSpeed) / $consumptionPerKm;

echo number_format($fuelNeeded, 3, '.', '')."\n";
?>