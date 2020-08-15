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

//    public function changeName($newFirstName, $newLastName)
//    {
//        $this->validateNewName($newFirstName, $newLastName);
//
//        $this->firstName = $newFirstName;
//        $this->lastName = $newLastName;
//    }

    public function displayFirstName()
    {
        echo $this->firstName . PHP_EOL;
    }

//    private function validateNewName($newFirstName, $newLastName)
//    {
//        if (
//            $this->firstName === $newFirstName
//            && $this->lastName === $newLastName
//        ) {
//            throw new InvalidChangeNameRequestException();
//        }
//    }

}