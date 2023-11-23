<?php
$data = explode(' ', readline());

$a = $data[0];
$b = $data[1];
$c = $data[2];

$triangleArea = ($a * $c) / 2;
$circleArea = 3.14159 * pow($c, 2);
$trapezeArea = (($a + $b) * $c) / 2;
$squareArea = $b * $b;
$rectangleArea = $a * $b;

echo "TRIANGULO: ".number_format($triangleArea, 3, '.', '')."\n";
echo "CIRCULO: ".number_format($circleArea, 3, '.', '')."\n";
echo "TRAPEZIO: ".number_format($trapezeArea, 3, '.', '')."\n";
echo "QUADRADO: ".number_format($squareArea, 3, '.', '')."\n";
echo "RETANGULO: ".number_format($rectangleArea, 3, '.', '')."\n";
?>