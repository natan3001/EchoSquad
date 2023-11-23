<?php

require_once 'POO - Exercises/Exercise9/Abstract/Employe.php';

class Manager extends Employe
{
    private int $extraHours = 0;

    /**
     * @param string $name
     * @param string $rg
     * @param float $baseSalary
     */
    public function __construct(string $name, string $rg, float $baseSalary)
    {
        parent::__construct($name, $rg, $baseSalary);
    }

    /**
     * @param int $extraHours
     */
    public function addExtraHours(int $extraHours): void
    {
        if ($extraHours <= 0) {
            throw new Exception('The extra hours value must be greater than zero');
        }

        $this->extraHours += $extraHours;
    }

    /**
     * @return float
     */
    public function receiveSalary(): float
    {
        $salaryToReceive = $this->baseSalary + (($this->baseSalary / 100) * $this->extraHours);
            
        $this->extraHours = 0;

        return $salaryToReceive;
    }
}