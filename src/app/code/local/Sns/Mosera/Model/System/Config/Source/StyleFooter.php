<?php

class Sns_Mosera_Model_System_Config_Source_StyleFooter
{
    public function toOptionArray()
    {
        return array(
            array('value'=>'style1', 'label'=>Mage::helper('mosera')->__('Footer 1')),
            array('value'=>'style2', 'label'=>Mage::helper('mosera')->__('Footer 2')),
            array('value'=>'style3', 'label'=>Mage::helper('mosera')->__('Footer 3'))
        );
    }
}