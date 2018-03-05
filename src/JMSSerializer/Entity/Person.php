<?php

namespace PHPSerializer\JMSSerializer\Entity;

use JMS\Serializer\Annotation as Serializer;

class Person
{
    /**
     * @Serializer\Groups({
     *     "person_detail",
     *     "person_list"
     * })
     */
    private $id;

    /**
     * @Serializer\Groups({
     *     "person_detail",
     *     "person_list"
     * })
     */
    private $name;

    /**
     * @Serializer\Until("v2.1.x")
     * @Serializer\SerializedName("mail")
     * @Serializer\Groups({
     *     "person_detail"
     * })
     */
    protected $email;

    /**
     * @Serializer\Groups({
     *     "person_detail"
     * })
     */
    private $pets;

    /**
     * @Serializer\Groups({
     *     "person_detail"
     * })
     */
    public $phoneNumber;

    /**
     * @Serializer\Groups({
     *     "person_detail"
     * })
     */
    public $friends;

    public function __construct($name, $email, $phoneNumber)
    {
        $this->id = rand(1, 1000);
        $this->pets = [];
        $this->friends = [];
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

    public function getFriends()
    {
        return $this->friends;
    }

    public function setFriends(array $friends = [])
    {
        $this->friends = $friends;
    }

    public function addFriend(Person $friend)
    {
        if (in_array($friend, $this->friends)) {
            return $this;
        }

        $this->friends[] = $friend;
        return $friend->addFriend($this);
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
