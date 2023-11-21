<?php

require_once "POO - Exercises/Exercise6/Abstract/Animal.php";

class Dog extends Animal
{
    private string $name;
    private string $color;
    
    /**
     * @param string $name
     * @param string $color
     */
    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function makeSound(): void
    {
        echo "Woof woof woof woof";
    }
}