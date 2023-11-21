<?php

require "POO - Exercises/Exercise3/Collaborator.php";

try {
    $collaborator = new Collaborator("Gabriela", 22, "female", 1560);
    echo "{$collaborator->getName()} receive \${$collaborator->getFormattedSalary()} per month. \n";

    $collaborator->setSalary(5150);
    echo "{$collaborator->getName()} receive \${$collaborator->getFormattedSalary()} per month. \n";

    $collaborator->setSalary(-500);
} catch (Exception $exception) {
    echo $exception->getMessage();
}