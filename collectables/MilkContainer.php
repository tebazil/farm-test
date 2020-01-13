<?php

namespace collectables;

class MilkContainer extends BaseCollectableContainer
{
    public static function title()
    {
        return 'Молоко';
    }

    protected function getInflectedUnit()
    {
        $lastDigit = substr($this->qty, -1);
       if($lastDigit===1) {
           return 'литр';
       }
       elseif(in_array($lastDigit, [2,3,4])) {
           return 'литра';
       }
       else {
           return 'литров';
       }
    }

}