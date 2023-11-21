<?php

class OrderItem
{
    private string $code;
    private string $description;
    private int $quantity;
    private int $unitPrice;

    /**
     * @param string $code
     * @param string $description
     * @param int $quantity
     * @param int $unitPrice
     */
    public function __construct(string $code, string $description, int $quantity, int $unitPrice)
    {
        $this->code = $code;
        $this->description = $description;
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getUnitPrice(): int
    {
        return $this->unitPrice;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param int $unitPrice
     */
    public function setUnitPrice(int $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }
}