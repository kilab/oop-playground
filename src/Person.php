<?php

namespace OOP;

use DateTime;

class Person
{

    /**
     * Location there person is located in this time.
     *
     * @var Location
     */
    private $currentLocation;

    /**
     * Date of birth our hero.
     *
     * @var DateTime
     */
    private $dateOfBirth;

    /**
     * Person hair color specified by Attribute HairColor class constants.
     *
     * @var string
     */
    private $hairColor;

    /**
     * Person hair length specified by Attribute HairLength class constants.
     *
     * @var string
     */
    private $hairLength;

    /**
     * Height in CM.
     *
     * @var int
     */
    private $height;

    /**
     * The name of the person.
     *
     * @var string
     */
    private $name;

    /**
     * Person sex specified by Attribute Sex class constants: Sex::MALE, Sex::FEMALE.
     *
     * @var string
     */
    private $sex;

    /**
     * User identifier to distinguish from other people.
     *
     * @var string
     */
    private $uuid;

    /**
     * Weight in KG.
     * @var int
     */
    private $weight;

    /**
     * Person constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->uuid = uniqid('Person_');
    }

    /**
     * Get person current location.
     *
     * @return Location
     */
    public function getCurrentLocation(): Location
    {
        return $this->currentLocation;
    }

    /**
     * Get person current location.
     *
     * @param Location $currentLocation
     */
    public function setCurrentLocation(Location $currentLocation): void
    {
        $this->currentLocation = $currentLocation;
        $this->currentLocation->addVisitor($this);
    }

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
     * Get person hair color.
     *
     * @return string
     */
    public function getHairColor(): string
    {
        return $this->hairColor;
    }

    /**
     * Set person hair color (use HairColor class constants).
     *
     * @param string $hairColor
     */
    public function setHairColor(string $hairColor): void
    {
        $this->hairColor = $hairColor;
    }

    /**
     * Get person hair length.
     *
     * @return string
     */
    public function getHairLength(): string
    {
        return $this->hairLength;
    }

    /**
     * Set person hair length (use HairLength class constants).
     *
     * @param string $hairLength
     */
    public function setHairLength(string $hairLength): void
    {
        $this->hairLength = $hairLength;
    }

    /**
     * Get person weight in KG.
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set person weight.
     *
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
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
     * Get person sex.
     *
     * @return string
     */
    public function getSex(): string
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

    /**
     * Get person identifier.
     *
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }

    /**
     * Get person weight in KG.
     *
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * Set person weight.
     *
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * Go to specified location.
     *
     * @param Location $location
     * @throws \Exception
     */
    public function goTo(Location $location): void
    {
        if (DISPLAY_METHODS_INFO) {
            dump(sprintf('GO %s TO THE %s.', $this->getName(), $location->getName()));
        }

        $this->currentLocation->removeVisitor($this);
        $this->setCurrentLocation($location);
    }
}