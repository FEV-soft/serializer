<?php

namespace FEV\Test;

class Person
{
    public string $firstName;
    public string $lastName;
    public int $age;
    public string $gender;

    public function __construct($firstName,$lastName,$age,$gender)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->gender = $gender;
    }

}
