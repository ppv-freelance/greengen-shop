<?php

class Sns_Mosera_Model_System_Config_Source_ListEffectImage
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'', 'label'=>Mage::helper('mosera')->__('None')),
			array('value'=>'preserve-3d', 'label'=>Mage::helper('mosera')->__('Preserve 3D')),
			array('value'=>'translatex', 'label'=>Mage::helper('mosera')->__('Translate X')),
			array('value'=>'translatey', 'label'=>Mage::helper('mosera')->__('Translate Y')),
		);
	}
}
