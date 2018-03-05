<?php

namespace PHPSerializer\FunctionJsonEncode\Entity;

class Person implements \JsonSerializable
{
    private $name;
    protected $email;
    private $pets;
    public $phoneNumber;

    public function __construct($name, $email, $phoneNumber)
    {
        $this->pets = [];
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    public function addPet(Pet $pet)
    {
        $this->pets[] = $pet;
    }

    public function jsonSerialize()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phoneNumber,
            'pets' => $this->pets,
        ];
    }
}
