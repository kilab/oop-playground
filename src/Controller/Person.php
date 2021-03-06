<?php

namespace OOP\Controller;

// define some places
use OOP\Location;
use OOP\Person;

$market = new Location('Market');
$church = new Location('Church');
$street = new Location('Street');

// define person object with him attributes and default location - Market
$ourPerson = new Person('Jack');
$ourPerson->setDateOfBirth(new \DateTime('1990-10-29'));
$ourPerson->setHairColor(Person\Attribute\HairColor::BROWN);
$ourPerson->setHairLength(Person\Attribute\HairLength::SHORT);
$ourPerson->setHeight(180);
$ourPerson->setWeight(80);
$ourPerson->setSex(Person\Attribute\Sex::MALE);
$ourPerson->setCurrentLocation($market);

dump($ourPerson, $market);

// move Jack's to the church
$ourPerson->goTo($church);

dump($ourPerson, $church);