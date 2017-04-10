<?php

class Sns_Mosera_Model_System_Config_Source_CustomMainMenu
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'all', 'label'=>Mage::helper('mosera')->__('Show all')),
			array('value'=>'custom', 'label'=>Mage::helper('mosera')->__('Only show custom menu items')),
			array('value'=>'menu', 'label'=>Mage::helper('mosera')->__('Only show navigation menu items'))
		);
	}
}
