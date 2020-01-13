<?php

namespace animals;
use collectables\BaseCollectableContainer;

abstract class BaseAnimal
{
    protected $id;
    /** @var BaseCollectableContainer */
    protected $collectable;
    abstract public static function title();
    abstract public function produceCollectable();
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return BaseCollectableContainer
     */
    public function getCollectable() {
        return $this->collectable;
    }
    public function getId() {
        return $this->id;
    }
}