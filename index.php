<?php

namespace OOP;

require __DIR__ . '/vendor/autoload.php';

define('DISPLAY_METHODS_INFO', false);

// define person object with attributes
$ourPerson = new Person();
$ourPerson->setName('Jack');
$ourPerson->setDateOfBirth(new \DateTime('1990-10-29'));
$ourPerson->setHairColor(Person\Attribute\HairColor::BROWN);
$ourPerson->setHairLength(Person\Attribute\HairLength::SHORT);
$ourPerson->setHeight(180);
$ourPerson->setWeight(80);
$ourPerson->setSex(Person\Attribute\Sex::MALE);

var_dump($ourPerson);