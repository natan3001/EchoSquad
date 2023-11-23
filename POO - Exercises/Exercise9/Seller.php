<?php

require_once 'POO - Exercises/Exercise9/Abstract/Employe.php';

class Seller extends Employe
{
    private const COMMISION_PERCENTAGE = 5;

    private float $totalOfSales = 0;

    /**
     * @param string $name
     * @param string $rg
     * @param float $baseSalary
     */
    public function __construct(string $name, string $rg, float $baseSalary)
    {
        parent::__construct($name, $rg, $baseSalary);
    }


    public function addNewSale(float $saleValue): void
    {
        if ($saleValue <= 0) {
            throw new Exception('The sale value must be greater than zero');
        }

        $this->totalOfSales += $saleValue;
    }

    /**
     * @return float
     */
    public function receiveSalary(): float
    {
        $salaryToReceive = $this->baseSalary + (($this->totalOfSales * self::COMMISION_PERCENTAGE) / 100);

        $this->totalOfSales = 0;

        return $salaryToReceive;
    }
}