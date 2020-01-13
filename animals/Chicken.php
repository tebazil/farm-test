<?php

namespace animals;
use collectables\EggsContainer;

class Chicken extends BaseAnimal
{

    public static function title()
    {
        return 'Курица';
    }

    public function produceCollectable()
    {
        $eggsContainer = new EggsContainer();
        $eggsContainer->add(mt_rand(0,1));
        $this->collectable = $eggsContainer;
    }
}