<?php

require 'POO - Exercises/Exercise8/Collaborator.php';

try {
    $collaborator = new Collaborator('Natan', 'Martins dos Santos', 2150.90);
    echo 'Name: ' . $collaborator->getName() . ' ' . $collaborator->getLastName() . PHP_EOL;
    echo 'Salary: R$ ' . number_format($collaborator->getSalary(), 2, ",", ".") . PHP_EOL;

    echo PHP_EOL;

    $collaborator->salaryIncrease(36.5);
    echo 'Name: ' . $collaborator->getName() . ' ' . $collaborator->getLastName() . PHP_EOL;
    echo 'Salary: R$ ' . number_format($collaborator->getSalary(), 2, ",", ".") . PHP_EOL;

    echo PHP_EOL;

    $collaborator->salaryIncrease(-10);
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}