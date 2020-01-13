<?php

namespace other;

use animals\Chicken;
use animals\Cow;

class Barn
{
    /** @var \animals\BaseAnimal[] */
    private $animals = [];
    private $milkContainer;
    private $eggsContainer;

    public function __construct()
    {
        $this->milkContainer = new \collectables\MilkContainer();
        $this->eggsContainer = new \collectables\EggsContainer();
    }


    public function addAnimal(\animals\BaseAnimal $animal) {
        $this->animals[] = $animal;
    }

    public function produceCollectables()
    {
        foreach($this->animals as $animal) {
            $animal->produceCollectable();
        }

    }

    public function moveCollectablesToContainers()
    {
        foreach($this->animals as $animal) {
            if($animal instanceof Cow) {
                $this->milkContainer->addFromContainer($animal->getCollectable());
            }
            elseif($animal instanceof Chicken) {
                $this->eggsContainer->addFromContainer($animal->getCollectable());
            }
        }
    }

    public function getContainers()
    {
        return [$this->milkContainer, $this->eggsContainer];
    }
}