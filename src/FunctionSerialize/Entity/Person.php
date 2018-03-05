<?php

namespace PHPSerializer\FunctionSerialize\Entity;

class Person
{
    private $name;
    protected $email;
    public $phoneNumber;

    public function __construct($name, $email, $phoneNumber)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
    }
}
