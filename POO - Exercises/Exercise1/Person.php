<?php

class Person
{
    private $name;
    private $age;
    private $gender;

    /**
     * @param $name
     * @param $age
     * @param $gender
     */
    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }


}