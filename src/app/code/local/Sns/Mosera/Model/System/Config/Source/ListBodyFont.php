<?php
class Sns_Mosera_Model_System_Config_Source_ListBodyFont
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'arial', 'label'=>Mage::helper('mosera')->__('Arial')),
			array('value'=>'arial-black', 'label'=>Mage::helper('mosera')->__('Arial black')),
			array('value'=>'courier new', 'label'=>Mage::helper('mosera')->__('courier New')),
			array('value'=>'georgia', 'label'=>Mage::helper('mosera')->__('Georgia')),
			array('value'=>'impact', 'label'=>Mage::helper('mosera')->__('Impact')),
			array('value'=>'lucida-console', 'label'=>Mage::helper('mosera')->__('Lucida Console')),
			array('value'=>'lucida-grande', 'label'=>Mage::helper('mosera')->__('Lucida-grande')),
			array('value'=>'palatino', 'label'=>Mage::helper('mosera')->__('Palatino')),
			array('value'=>'tahoma', 'label'=>Mage::helper('mosera')->__('Tahoma')),
			array('value'=>'times new roman', 'label'=>Mage::helper('mosera')->__('Times')),
			array('value'=>'Open Sans', 'label'=>Mage::helper('mosera')->__('Open Sans')),
			array('value'=>'Trebuchet', 'label'=>Mage::helper('mosera')->__('Trebuchet')),
			array('value'=>'Verdana', 'label'=>Mage::helper('mosera')->__('Verdana')),
			array('value'=>'segoe ui', 'label'=>Mage::helper('mosera')->__('Segoe UI'))
		);
	}
}
