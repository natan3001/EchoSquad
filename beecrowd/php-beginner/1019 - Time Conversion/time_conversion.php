<?php
$duration = fgets(STDIN);

$hours = intdiv($duration, 3600);
$duration %= 3600;

$minutes = intdiv($duration, 60);
$duration %= 60;

$seconds = $duration;

echo "$hours:$minutes:$seconds\n";
?