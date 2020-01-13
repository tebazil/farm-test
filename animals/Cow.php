<?php

namespace animals;
use collectables\MilkContainer;

class Cow extends BaseAnimal
{

    public static function title()
    {
        return 'Корова';
    }

    public function produceCollectable()
    {
        $milkContainer = new MilkContainer();
        $milkContainer->add(mt_rand(800,1200)/100);
        $this->collectable = $milkContainer;
    }

}