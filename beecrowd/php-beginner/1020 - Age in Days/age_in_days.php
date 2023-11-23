<?php
$age = fgets(STDIN);

$years = intdiv($age, 365);
$age %= 365;

$months = intdiv($age, 30);
$age %= 30;

$days = $age;

echo $years." ano(s)\n";
echo $months." mes(es)\n";
echo $days." dia(s)\n";
?>