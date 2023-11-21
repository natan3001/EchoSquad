<?php

require "POO - Exercises/Exercise6/Cat.php";
require "POO - Exercises/Exercise6/Dog.php";

$cat = new Cat("Garfield", "orange");
$cat->makeSound();

echo PHP_EOL;

$dog = new Dog("Jake", "brown");
$dog->makeSound();