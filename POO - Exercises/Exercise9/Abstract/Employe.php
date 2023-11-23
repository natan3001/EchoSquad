<?php

abstract class Employe
{
    protected string $name;
    protected string $rg;
    protected float $baseSalary;

    public function __construct(string $name, string $rg, float $baseSalary)
    {
        $this->name = $name;
        $this->rg = $rg;
        $this->baseSalary = $baseSalary;
    }

    abstract public function receiveSalary(): float;
}