<?php

class Sns_Mosera_Model_System_Config_Source_ListTemplate
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'popup', 'label'=>Mage::helper('mosera')->__('Popup')),
			array('value'=>'fixed', 'label'=>Mage::helper('mosera')->__('Fixed Right')),
		);
	}
}
