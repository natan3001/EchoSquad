<?php

require_once "POO - Exercises/Exercise4/Interface/GeometricForm.php";

class Rectangle implements GeometricForm
{
    private float $length;
    private float $width;

    /**
     * @param float $lenght
     * @param float $width
     */
    public function __construct(float $lenght, float $width)
    {
        $this->length = $lenght;
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function calculateArea(): float
    {
        return $this->length * $this->width;
    }

    /**
     * @return float
     */
    public function calculatePerimeter(): float
    {
        return ($this->length + $this->width) * 2;
    }
}