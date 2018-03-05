<?php

namespace PHPSerializer\FunctionJsonEncode\Entity;

class Pet implements \JsonSerializable
{
    private $name;
    protected $breed;
    public $size;

    public function __construct($name, $breed, $size)
    {
        $this->name = $name;
        $this->breed = $breed;
        $this->size = $size;
    }

    public function jsonSerialize()
    {
        return [
            'name' => $this->name,
            'breed' => $this->breed,
            'size' => $this->size,
        ];
    }
}
