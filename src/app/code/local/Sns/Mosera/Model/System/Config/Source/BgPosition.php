<?php

class Sns_Mosera_Model_System_Config_Source_BgPosition
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'left top', 'label'=>Mage::helper('mosera')->__('left top')),
			array('value'=>'left center', 'label'=>Mage::helper('mosera')->__('left center')),
			array('value'=>'left bottom', 'label'=>Mage::helper('mosera')->__('left bottom')),
			array('value'=>'right top', 'label'=>Mage::helper('mosera')->__('right top')),
			array('value'=>'right center', 'label'=>Mage::helper('mosera')->__('right center')),
			array('value'=>'right bottom', 'label'=>Mage::helper('mosera')->__('right bottom')),
			array('value'=>'center top', 'label'=>Mage::helper('mosera')->__('center top')),
			array('value'=>'center center', 'label'=>Mage::helper('mosera')->__('center center')),
			array('value'=>'center bottom', 'label'=>Mage::helper('mosera')->__('center bottom'))
		);
	}
}
