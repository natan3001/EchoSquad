<?php

class Car
{
    private string $brand;
    private string $model;
    private int $year;
    private float $currentVelocity;

    /**
     * @param string $brand
     * @param string $model
     * @param int $year
     * @param float $currentVelocity
     */
    public function __construct(string $brand, string $model, int $year, float $currentVelocity = 0)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->currentVelocity = $currentVelocity;
    }

    /**
     * @param float $addVelocity
     * @throws Exception
     */
    public function acelerate(float $addVelocity): void
    {
        if ($addVelocity <= 0) {
            throw new Exception("The acceleration speed must be greater than zero.");
        }

        $this->currentVelocity += $addVelocity;
    }

    public function stopCar(): void
    {
        $this->currentVelocity = 0;
    }

    /**
     * @return float
     */
    public function getCurrentVelocity(): float
    {
        return $this->currentVelocity;
    }
}