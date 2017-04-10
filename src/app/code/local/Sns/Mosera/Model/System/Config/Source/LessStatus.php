<?php

class Sns_Mosera_Model_System_Config_Source_LessStatus
{
	public function toOptionArray() {
		return array(
			array('value'=>'0', 'label'=>Mage::helper('mosera')->__('Only compile when don\'t have the css file')),
			array('value'=>'1', 'label'=>Mage::helper('mosera')->__('Alway compile'))
		);
	}
}
