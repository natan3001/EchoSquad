<?php

require "BankAccount.php";

try {
    $account = new BankAccount();

    $account->deposit(500);
    echo "Your current balance is {$account->getFormattedBalance()}";

    $account->withdraw(200);
    $account->withdraw(150);
    echo "Your current balance is {$account->getFormattedBalance()}";

    $account->withdraw(500);
} catch (Exception $exception) {
    echo $exception->getMessage();
}