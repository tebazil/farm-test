<?php

use animals\Chicken;
use animals\Cow;
use other\Barn;

require_once "vendor/autoload.php";
const COW_QTY = 10;
const CHICKEN_QTY = 20;

$barn = new Barn();
for($i=1; $i<=COW_QTY; $i++) {
    $barn->addAnimal(new Cow('cow-'.$i));
}

for($i=1; $i<=CHICKEN_QTY; $i++) {
    $barn->addAnimal(new Chicken('chicken-'.$i));
}

$barn->produceCollectables();
$barn->moveCollectablesToContainers();

foreach($barn->getContainers() as $container) {
    echo $container::title().' : '.$container->getSummary().PHP_EOL;
}

