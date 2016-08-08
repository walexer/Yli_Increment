<?php

class Yli_Increment_Model_Eav_Entity_Increment_Randomnum extends Mage_Eav_Model_Entity_Increment_Abstract
{
    public function getNextId()
    {
        $last = $this->getLastId();

        if (strpos($last, $this->getPrefix()) === 0) {
            $last = (int)substr($last, strlen($this->getPrefix()));
        } else {
            $last = (int)$last;
        }
        $step = rand(1, 5);
        $next = $last+$step;

        return $this->format($next);
    }
}
