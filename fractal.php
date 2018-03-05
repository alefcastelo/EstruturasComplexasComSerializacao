<?php

require_once 'vendor/autoload.php';

use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use PHPSerializer\LeagueFractal\Entity\Pet;
use PHPSerializer\LeagueFractal\Entity\Person;
use PHPSerializer\LeagueFractal\Transformer\PersonTransformer;

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

$resource = new Item($person, new PersonTransformer());
$manager = new Manager();
$output = $manager->createData($resource)->toJson(JSON_PRETTY_PRINT);
print $output . PHP_EOL;
