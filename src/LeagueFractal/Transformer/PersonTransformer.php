<?php

namespace PHPSerializer\LeagueFractal\Transformer;

use League\Fractal\TransformerAbstract;
use PHPSerializer\LeagueFractal\Entity\Person;

class PersonTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        'pets'
    ];

    public function transform(Person $person)
    {
        return [
            'id' => $person->getId(),
            'name' => $person->getName(),
            'email' => $person->getEmail(),
            'phoneNumber' => $person->getPhoneNumber(),
        ];
    }

    public function includePets(Person $person)
    {
        $pets = $person->getPets();
        return $this->collection($pets, new PetListTransformer());
    }
}
