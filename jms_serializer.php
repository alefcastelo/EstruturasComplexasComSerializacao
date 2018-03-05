<?php

$autoloader = require_once 'vendor/autoload.php';

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializationContext;
use PHPSerializer\JMSSerializer\Entity\Pet;
use PHPSerializer\JMSSerializer\Entity\Person;
use Doctrine\Common\Annotations\AnnotationRegistry;

AnnotationRegistry::registerLoader([$autoloader, 'loadClass']);

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

$person->addFriend(new Person(
    'Alessandro',
    'alessandro@gmail.com',
    '(99) 99999-9999'
));

$serializer = SerializerBuilder::create()->build();
$context = new SerializationContext();
$output = $serializer->serialize(
    $person,
    'json',
    $context->setSerializeNull(true)
        ->setGroups([
            'person_detail',
            'pet_list',
            'friends' => [
                'person_list'
            ]
        ])
);
print $output . PHP_EOL;
