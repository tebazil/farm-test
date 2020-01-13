<?php

namespace collectables;

abstract class BaseCollectableContainer
{
    protected $qty = 0;
    abstract public static function title();
    abstract protected function getInflectedUnit();

    public function add( int $qty) {
        $this->qty+=$qty;
    }

    public function addFromContainer(BaseCollectableContainer $container)
    {
        if(get_class($this) !== get_class($container)) {
            throw new \Exception("Content can be moved only between containers of the same class");
        }
        $this->add($container->qty);
        $container->reset();
    }

    public function reset()
    {
        $this->qty = 0;
    }

    public function getSummary()
    {
        return $this->qty.' '.$this->getInflectedUnit();
    }
}