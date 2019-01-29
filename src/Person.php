<?php

namespace OOP;

use DateTime;
use OOP\Person\Attribute\Sex;

class Person
{

    /**
     * Date of birth our hero.
     *
     * @var DateTime
     */
    private $dateOfBirth;

    /**
     * The name of the person.
     *
     * @var string
     */
    private $name;

    /**
     * Person sex specified by Attribute Sex class constants: Sex::MALE, Sex::FEMALE.
     *
     * @var Sex
     */
    private $sex;

    /**
     * Get date of birth.
     *
     * @return DateTime
     */
    public function getDateOfBirth(): DateTime
    {
        return $this->dateOfBirth;
    }

    /**
     * Set date of birth.
     *
     * @param DateTime $dateOfBirth
     */
    public function setDateOfBirth(DateTime $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * Get person name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set person name.
     *
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get person sex.
     *
     * @return Sex
     */
    public function getSex(): Sex
    {
        return $this->sex;
    }

    /**
     * Set person sex.
     *
     * @param string $sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

}