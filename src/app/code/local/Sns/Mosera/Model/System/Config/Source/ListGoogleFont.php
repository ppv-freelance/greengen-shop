<?php

class Sns_Mosera_Model_System_Config_Source_ListGoogleFont
{
	public function toOptionArray()
	{
		return array(
			array('value'=>'', 'label'=>Mage::helper('mosera')->__('No select')),
			array('value'=>'Anton', 'label'=>Mage::helper('mosera')->__('Anton')),
			array('value'=>'Roboto+Condensed', 'label'=>Mage::helper('mosera')->__('Roboto Condensed')),
			array('value'=>'Port+Lligat+Slab', 'label'=>Mage::helper('mosera')->__('Port Lligat Slab')),
			array('value'=>'Questrial', 'label'=>Mage::helper('mosera')->__('Questrial')),
			array('value'=>'Kameron', 'label'=>Mage::helper('mosera')->__('Kameron')),
			array('value'=>'Oswald', 'label'=>Mage::helper('mosera')->__('Oswald')),
			array('value'=>'Open+Sans:300,400,600,700,900', 'label'=>Mage::helper('mosera')->__('Open Sans')),
			array('value'=>'Open+Sans+Condensed:300,300italic,700', 'label'=>Mage::helper('mosera')->__('Open Sans Condensed')),
			array('value'=>'BenchNine', 'label'=>Mage::helper('mosera')->__('BenchNine')),
			array('value'=>'Droid Sans', 'label'=>Mage::helper('mosera')->__('Droid Sans')),
			array('value'=>'Droid Serif', 'label'=>Mage::helper('mosera')->__('Droid Serif')),
			array('value'=>'PT Sans', 'label'=>Mage::helper('mosera')->__('PT Sans')),
			array('value'=>'Vollkorn', 'label'=>Mage::helper('mosera')->__('Vollkorn')),
			array('value'=>'Ubuntu', 'label'=>Mage::helper('mosera')->__('Ubuntu')),
			array('value'=>'Neucha', 'label'=>Mage::helper('mosera')->__('Neucha')),
			array('value'=>'Cuprum', 'label'=>Mage::helper('mosera')->__('Cuprum')),
			array('value'=>'Passion+One:400,700', 'label'=>Mage::helper('mosera')->__('Passion One')),
			array('value'=>'Roboto+Slab:400,700', 'label'=>Mage::helper('mosera')->__('Roboto Slab')),
			array('value'=>'Raleway:400,300,700,900', 'label'=>Mage::helper('mosera')->__('Raleway')),
			array('value'=>'Titillium+Web:300,400,600,700', 'label'=>Mage::helper('mosera')->__('Titillium')),
			array('value'=>'Poppins:400,700', 'label'=>Mage::helper('mosera')->__('Poppins')),
			array('value'=>'Lato:400,700,900', 'label'=>Mage::helper('mosera')->__('Lato'))
		);
	}
}