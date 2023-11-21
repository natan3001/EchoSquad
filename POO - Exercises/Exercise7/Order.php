<?php

require_once "POO - Exercises/Exercise7/OrderItem.php";

class Order
{
    private int $orderId;
    private array $items;

    public function __construct()
    {
        $this->orderId = $this->generateRandomOrderId();
        $this->items = [];
    }

    public function addItem(OrderItem $item): void
    {
        $this->items[] = $item;
    }

    public function printOrder()
    {
        echo 'Order number: '.$this->orderId . PHP_EOL . PHP_EOL;

        echo str_pad('Code',  5, ' ') . ' | ';
        echo str_pad('Description',  40, ' ') . ' | ';
        echo str_pad('Qty',  3, ' ') . ' | ';
        echo 'Unit price' . PHP_EOL;

        foreach ($this->items as $item) {
            echo str_pad($item->getCode(),  5, ' ') . ' | ';
            echo str_pad($item->getDescription(),  40, ' ') . ' | ';
            echo str_pad($item->getQuantity(),  3, ' ') . ' | ';
            echo 'R$ ' . $this->formatAmount($item->getUnitPrice()) . PHP_EOL;
        }

        echo PHP_EOL;
        echo 'Total value: ' . $this->formatAmount($this->calculateTotalValue()) . PHP_EOL;
    }

    /**
     * @return float
     */
    private function calculateTotalValue(): float
    {
        $totalValue = 0;

        foreach ($this->items as $item) {
            $totalValue += ($item->getUnitPrice() * $item->getQuantity());
        }

        return $totalValue;
    }

    /**
     * @return string
     */
    private function formatAmount($amount): string
    {
        return number_format($amount, 2, ",", ".");
    }

    /**
     * @return int
     */
    private function generateRandomOrderId(): int
    {
        return mt_rand();
    }
}