<?php

namespace Exercise1;

class Person
{
    private string $name;
    private int $age;
    private string $gender;

    /**
     * @param string $name
     * @param int $age
     * @param string $gender
     */
    public function __construct(string $name, int $age, string $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }
}