<?php

include "Person.php";

use Exercise1\Person;

$person1 = new Person("Natan", 23, "Male");
$person2 = new Person("Joao", 26, "Male");

echo "Person 1 | name: {$person1->getName()}, age: {$person1->getAge()} and gender: {$person1->getGender()}";
echo PHP_EOL;
echo "Person 2 | name: {$person2->getName()}, age: {$person2->getAge()} and gender: {$person2->getGender()}";