<?php

$seller = fgets(STDIN);
$fixedSalary = fgets(STDIN);
$totalSales = fgets(STDIN);

$salary = $fixedSalary + ($totalSales * 0.15);

echo "TOTAL = R$ ".number_format($salary, 2, '.', '')."\n";
?>