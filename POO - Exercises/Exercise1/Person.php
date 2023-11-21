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

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }
}