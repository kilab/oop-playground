<?php

use OOP\Person;
use OOP\Person\Attribute\Sex;

require __DIR__ . '/vendor/autoload.php';

$jack = new Person;
$jack->setName('Jack');
$jack->setDateOfBirth(new DateTime('1990-10-29'));
$jack->setSex(Sex::MALE);

var_dump($jack);