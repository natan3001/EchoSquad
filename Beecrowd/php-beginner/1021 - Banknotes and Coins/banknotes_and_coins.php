<?php

$amount = fgets(STDIN);

$bankNotes = ['100', '50', '20', '10', '5', '2'];
$coins = ['1', '0.50', '0.25', '0.10', '0.05', '0.01'];

$bankNotesQuantity = [];
$coinsQuantity = [];

foreach ($bankNotes as $note) {
  $quantity = intdiv($amount, $note);
  $amount = (($amount*1000) % ($note*1000)) / 1000;
  $bankNotesQuantity[$note] = $quantity;
}

foreach ($coins as $coin) {
  $quantity = intdiv($amount*1000, $coin*1000);
  $amount = (($amount*1000) % ($coin*1000)) / 1000;
  $coinsQuantity["$coin"] = $quantity;
}

echo "NOTAS:\n";
foreach ($bankNotesQuantity as $note => $quantity) {
  echo "$quantity nota(s) de R$ ".number_format($note, 2, '.', '')."\n";
}

echo "MOEDAS:\n";
foreach ($coinsQuantity as $note => $quantity) {
  echo "$quantity moeda(s) de R$ ".number_format($note, 2, '.', '')."\n";
}
?>