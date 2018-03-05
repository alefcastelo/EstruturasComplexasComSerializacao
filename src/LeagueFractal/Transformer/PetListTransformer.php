<?php

namespace PHPSerializer\LeagueFractal\Transformer;

use League\Fractal\TransformerAbstract;
use PHPSerializer\LeagueFractal\Entity\Pet;

class PetListTransformer extends TransformerAbstract
{
    public function transform(Pet $pet)
    {
        return [
            'id' => $pet->getId(),
            'name' => $pet->getName()
        ];
    }
}
