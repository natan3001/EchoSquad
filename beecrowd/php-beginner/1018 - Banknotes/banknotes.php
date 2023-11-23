<?php
$amount = fgets(STDIN);

function getQuantities($amount)
{
  $banknotes = [100, 50, 20, 10, 5, 2, 1];
  $quantities = [];
  
  foreach ($banknotes as $note) {
    $quantity = intdiv($amount, $note);
    $amount = $amount % $note;
    $quantities[$note] = $quantity;
  }

  return $quantities;
}

$quantities = getQuantities($amount);

echo $amount;
foreach ($quantities as $note => $quantity) {
  echo "$quantity nota(s) de R$ ".number_format($note, 2, ',', '')."\n";
}
?>