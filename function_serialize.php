<?php

require_once 'vendor/autoload.php';

use PHPSerializer\FunctionSerialize\Entity\Person;

$person = new Person(
    'Alef',
    'alefaraujocastelo@gmail.com',
    '(99) 99999-9999'
);

print serialize($person) . PHP_EOL;
