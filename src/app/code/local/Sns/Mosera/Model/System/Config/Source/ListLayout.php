<?php

class Sns_Mosera_Model_System_Config_Source_ListLayout
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'1', 'label'=>Mage::helper('mosera')->__('Full width')),
			array('value'=>'2', 'label'=>Mage::helper('mosera')->__('Boxed')),
		);
	}
}
