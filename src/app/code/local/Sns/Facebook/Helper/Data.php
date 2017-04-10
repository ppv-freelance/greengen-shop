<?php 
/* ------------------------------------------------------------------------ 
 # Copyright (c) 2014 snstheme.com. All Rights Reserved. 
 # @license - Copyrighted Commercial Software 
 # Author: snstheme.com 
 # Websites: http://snstheme.com 
------------------------------------------------------------------------- */ 

class Sns_Facebook_Helper_Data extends Mage_Core_Helper_Abstract {
	public function __construct(){
		$this->defaults = array();
	}

	function get($attributes=array()){
		$data = $this->defaults;
		$general 					= Mage::getStoreConfig("facebook_cfg/general");
		if (!is_array($attributes)) {
			$attributes = array($attributes);
		}
		if (is_array($general))					$data = array_merge($data, $general);
		return array_merge($data, $attributes);;
	}
}
?>