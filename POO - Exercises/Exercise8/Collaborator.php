<?php

class Collaborator
{
    private string $name;
    private string $lastName;
    private float $salary;

    /**
     * @param string $name
     * @param string $lastName
     * @param float $salary
     */
    public function __construct(string $name, string $lastName, float $salary)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    /**
     * @param float $percentageToIncrease Percentage to increase salary
     */
    public function salaryIncrease(float $percentageToIncrease)
    {
        if ($percentageToIncrease <= 0) {
            throw new Exception("The increasing percentage must be greater than zero.");
        }

        $this->salary += $this->salary * ($percentageToIncrease / 100);
    }

    /**
     * @return float
     */
    public function getAnnualSalaryAmount()
    {
        return $this->salary * 12;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param float $salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }
}