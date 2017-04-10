<?php

class Sns_Mosera_Model_System_Config_Source_ListColor
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'red', 'label'=>Mage::helper('mosera')->__('Red')),
			array('value'=>'brown', 'label'=>Mage::helper('mosera')->__('Brown')),
			array('value'=>'purple', 'label'=>Mage::helper('mosera')->__('Purple')),
			array('value'=>'yellow', 'label'=>Mage::helper('mosera')->__('Yellow')),
			array('value'=>'blue', 'label'=>Mage::helper('mosera')->__('Blue')),
			array('value'=>'green', 'label'=>Mage::helper('mosera')->__('Green')),
			array('value'=>'chocolate', 'label'=>Mage::helper('mosera')->__('Chocolate')),
			array('value'=>'slateblue', 'label'=>Mage::helper('mosera')->__('Slateblue')),
		);
	}
}
