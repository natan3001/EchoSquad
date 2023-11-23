<?php
$product1 = explode(' ', readline());
$product2 = explode(' ', readline());

$totalValue = $product1[1] * $product1[2];
$totalValue += $product2[1] * $product2[2];

echo "VALOR A PAGAR: R$ ".number_format($totalValue, 2, '.', '')."\n";
?>