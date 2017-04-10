<?php

class Sns_Mosera_Model_System_Config_Source_ListResMenu
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'sidebar', 'label'=>Mage::helper('mosera')->__('SideBar')),
			array('value'=>'collapse', 'label'=>Mage::helper('mosera')->__('Collapse'))
		);
	}
}
