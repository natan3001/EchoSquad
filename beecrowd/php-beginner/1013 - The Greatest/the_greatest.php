<?php

$values = explode(' ', readline());

$greaterAB = ($values[0] + $values[1] + abs($values[0] - $values[1])) / 2;
$greater = ($greaterAB + $values[2] + abs($greaterAB - $values[2])) / 2;

echo "$greater eh o maior\n";

?>