<?php

namespace Exercise3;

include "POO - Exercises/Exercise1/Person.php";

use Exception;
use Exercise1\Person;

class Collaborator extends Person
{
    private float $salary;

    function __construct(string $name, int $age, string $gender, float $salary)
    {
        parent::__construct($name, $age, $gender);
        $this->salary = $salary;
    }

    /**
     * @param float $salary
     * @throws Exception
     */
    public function setSalary(float $salary): void
    {
        if ($salary < 0) {
            throw new Exception("Salary cannot be negative.");
        }

        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getFormattedSalary(): string
    {
        return number_format($this->salary, 2, ",", ".");
    }
}