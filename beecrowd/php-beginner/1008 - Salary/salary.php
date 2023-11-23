<?php
$number = fgets(STDIN);
$workedHours = fgets(STDIN);
$receivePerHour = fgets(STDIN);

$salary = $workedHours * $receivePerHour;

echo "NUMBER = $number";
echo "SALARY = U$ ".number_format($salary, 2, '.', '')."\n";
?>