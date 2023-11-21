<?php

require_once "POO - Exercises/Exercise7/Order.php";
require_once "POO - Exercises/Exercise7/OrderItem.php";

$item1 = new OrderItem("15321", "Cartridge model 1", 2, 29.90);
$item2 = new OrderItem("87125", "100 A4 Sheets", 5, 6.90);
$item3 = new OrderItem("24482", "Printer model X", 1, 589.10);

$order = new Order();
$order->addItem($item1);
$order->addItem($item2);
$order->addItem($item3);

$order->printOrder();