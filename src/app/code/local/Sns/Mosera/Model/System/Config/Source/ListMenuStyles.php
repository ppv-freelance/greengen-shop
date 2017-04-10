<?php

class Sns_Mosera_Model_System_Config_Source_ListMenuStyles
{
	public function toOptionArray()
	{
		return array(
			//array('value'=>'base', 'label'=>Mage::helper('mosera')->__('Base')),
			array('value'=>'mega', 'label'=>Mage::helper('mosera')->__('Mega'))
		);
	}
}
