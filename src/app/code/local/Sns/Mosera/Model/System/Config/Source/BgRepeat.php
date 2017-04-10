<?php

class Sns_Mosera_Model_System_Config_Source_BgRepeat
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'no-repeat', 'label'=>Mage::helper('mosera')->__('no-repeat')),
			array('value'=>'repeat', 'label'=>Mage::helper('mosera')->__('repeat')),
			array('value'=>'repeat-x', 'label'=>Mage::helper('mosera')->__('repeat-x')),
			array('value'=>'repeat-y', 'label'=>Mage::helper('mosera')->__('repeat-y'))
		);
	}
}
