<?php

namespace PHPSerializer\JMSSerializer\Entity;

use JMS\Serializer\Annotation as Serializer;

class Pet
{

    /**
     * @Serializer\Groups({
     *     "pet_list"
     * })
     */
    private $id;

    /**
     * @Serializer\Groups({
     *     "pet_list"
     * })
     */
    private $name;

    protected $breed;
    public $size;

    public function __construct($name, $breed, $size)
    {
        $this->id = rand(1, 1000);
        $this->name = $name;
        $this->breed = $breed;
        $this->size = $size;
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
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
}
