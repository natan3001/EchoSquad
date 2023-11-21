<?php

require_once "POO - Exercises/Exercise4/Interface/GeometricForm.php";

class Circle implements GeometricForm
{
    private float $radius;

    /**
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return pi() * pow($this->radius, 2);
    }

    /**
     * @return float
     */
    public function calculatePerimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
}