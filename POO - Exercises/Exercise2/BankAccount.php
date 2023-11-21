<?php

namespace Exercise2;

use Exception;

class BankAccount
{
    private float $balance = 0;

    /**
     * @throws Exception
     */
    public function deposit(float $depositValue): void
    {
        if ($depositValue < 0) {
            throw new Exception("The deposit amount must be greater than zero.");
        }

        $this->balance += $depositValue;
    }

    /**
     * @throws Exception
     */
    public function withdraw(float $withdrawValue): void
    {
        if ($withdrawValue > $this->balance) {
            throw new Exception("The withdrawal amount must be less than or equal to the account balance.");
        }

        $this->balance -= $withdrawValue;
    }

    /**
     * @return string
     */
    public function getFormattedBalance(): string
    {
        return number_format($this->balance, 2, ",", ".");
    }
}