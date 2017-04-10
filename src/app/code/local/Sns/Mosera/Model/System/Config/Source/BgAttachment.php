<?php

class Sns_Mosera_Model_System_Config_Source_BgAttachment
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'fixed', 'label'=>Mage::helper('mosera')->__('fixed')),
			array('value'=>'scroll', 'label'=>Mage::helper('mosera')->__('scroll'))
		);
	}
}
