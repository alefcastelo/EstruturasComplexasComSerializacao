<?php

require_once 'vendor/autoload.php';

use PHPSerializer\FunctionJsonEncode\Entity\Person;
use PHPSerializer\FunctionJsonEncode\Entity\Pet;

$person = new Person(
    'Alef',
    'alefaraujocastelo@gmail.com',
    '(99) 99999-9999'
);

$person->addPet(new Pet(
    'simba',
    'golden retriever',
    'big'
));

print json_encode($person, JSON_PRETTY_PRINT) . PHP_EOL;
