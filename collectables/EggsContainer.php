<?php

namespace collectables;

class EggsContainer extends BaseCollectableContainer
{
    public static function title()
    {
        return 'Яйца';
    }

    protected function getInflectedUnit()
    {
        $lastDigit = substr($this->qty, -1);
       if($lastDigit===1) {
           return 'штука';
       }
       elseif(in_array($lastDigit, [2,3,4])) {
           return 'штуки';
       }
       else {
           return 'штук';
       }
    }
}