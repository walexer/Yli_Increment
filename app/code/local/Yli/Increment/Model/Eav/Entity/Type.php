<?php 

class Yli_Increment_Model_Eav_Entity_Type extends Mage_Eav_Model_Entity_Type
{
    protected function _afterLoad()
    {
        if($this->getEntityTypeCode() == 'order'){
            $this->setIncrementModel('increment/eav_entity_increment_randomnum');
        }
        parent::_afterLoad();
    }
}