<?php

namespace PHPSerializer\LeagueFractal\Entity;

class Person
{
    private $id;
    private $name;
    protected $email;
    private $pets;
    public $phoneNumber;

    public function __construct($name, $email, $phoneNumber)
    {
        $this->id = rand(1, 1000);
        $this->pets = [];
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getPets()
    {
        return $this->pets;
    }

    public function setPets(array $pets = [])
    {
        $this->pets = $pets;
        return $this;
    }

    public function addPet(Pet $pet)
    {
        $this->pets[] = $pet;
        return $this;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}
