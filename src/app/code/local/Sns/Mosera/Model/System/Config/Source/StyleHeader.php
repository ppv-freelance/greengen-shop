<?php

class Sns_Mosera_Model_System_Config_Source_StyleHeader
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'style1', 'label'=>Mage::helper('mosera')->__('Header 1')),
            array('value'=>'style2', 'label'=>Mage::helper('mosera')->__('Header 2'))
        );
    }
}