<?php 
/* ------------------------------------------------------------------------ 
 # Copyright (c) 2014 snstheme.com. All Rights Reserved. 
 # @license - Copyrighted Commercial Software 
 # Author: snstheme.com 
 # Websites: http://snstheme.com 
------------------------------------------------------------------------- */ 


class Sns_Facebook_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
	  $this->loadLayout();
      $this->renderLayout();
    }
}