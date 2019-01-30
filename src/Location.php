<?php

namespace OOP;

class Location
{

    /**
     * Location name.
     *
     * @var string
     */
    private $name;

    /**
     * List of the persons in this place.
     *
     * @var Person[]
     */
    private $visitors = [];

    /**
     * Location constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get place name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get visitors list.
     *
     * @return Person[]
     */
    public function getVisitors(): array
    {
        return $this->visitors;
    }

    /**
     * Set list of the visitors.
     *
     * @param Person[] $visitors
     */
    public function setVisitors(array $visitors): void
    {
        $this->visitors = $visitors;
    }

    /**
     * Add visitor to the place.
     *
     * @param Person $visitor
     */
    public function addVisitor(Person $visitor): void
    {
        if (DISPLAY_METHODS_INFO) {
            sprintf('ADD VISITOR %s TO %s.', $visitor->getName(), $this->name);
        }

        $this->visitors[$visitor->getUuid()] = $visitor;
    }

    /**
     * Remove person from this place.
     *
     * @param Person $visitor
     */
    public function removeVisitor(Person $visitor): void
    {
        if (DISPLAY_METHODS_INFO) {
            sprintf('REMOVE VISITOR %s FROM %s.', $visitor->getName(), $this->name);
        }

        if (isset($this->visitors[$visitor->getUuid()])) {
            unset($this->visitors[$visitor->getUuid()]);
        }
    }
}