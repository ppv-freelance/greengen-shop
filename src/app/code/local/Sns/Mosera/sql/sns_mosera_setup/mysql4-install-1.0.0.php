<?php
$this->startSetup();

$categoryEntityTypeId = $this->getEntityTypeId('catalog_category');

$this->removeAttribute($categoryEntityTypeId, 'mosera_menulink');
$this->addAttribute($categoryEntityTypeId, 'mosera_menulink', array(
    'group'				=> 'Mosera Menu',
    'label'				=> 'Hide link',
    'note'				=> "This field is applicable only for top-level categories.",
    'type'				=> 'varchar',
    'input'				=> 'select',
    'source'			=> 'mosera/system_config_source_category_status',
    'visible'			=> true,
    'required'			=> false,
    'backend'			=> '',
    'frontend'			=> '',
    'searchable'		=> false,
    'filterable'		=> false,
    'comparable'		=> false,
    'user_defined'		=> true,
    'visible_on_front'	=> true,
    'wysiwyg_enabled'	=> false,
    'is_html_allowed_on_front'	=> false,
    'global'			=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
 ));

$this->removeAttribute($categoryEntityTypeId, 'mosera_label');
$this->addAttribute($categoryEntityTypeId, 'mosera_label', array(
	'group'				=> 'Mosera Menu',
	'label'				=> 'Label',
    'note'				=> "This field is applicable only for top-level categories.",
	'input'         	=> 'text',
	'type'          	=> 'varchar',
	'visible'       	=> true,
	'required'      	=> false,
	'user_defined'  	=> true,
	'global'        	=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
 ));

$this->removeAttribute($categoryEntityTypeId, 'mosera_groupsubcat');
$this->addAttribute($categoryEntityTypeId, 'mosera_groupsubcat', array(
    'group'				=> 'Mosera Menu',
    'label'				=> 'Group Subcategories',
    'note'				=> "This field is applicable only for top-level categories.",
    'type'				=> 'varchar',
    'input'				=> 'select',
    'source'			=> 'mosera/system_config_source_category_status',
    'visible'			=> true,
    'required'			=> false,
    'backend'			=> '',
    'frontend'			=> '',
    'searchable'		=> false,
    'filterable'		=> false,
    'comparable'		=> false,
    'user_defined'		=> true,
    'visible_on_front'	=> true,
    'wysiwyg_enabled'	=> false,
    'is_html_allowed_on_front'	=> false,
    'global'			=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
 ));

$this->removeAttribute($categoryEntityTypeId, 'mosera_subcat_w');
$this->addAttribute($categoryEntityTypeId, 'mosera_subcat_w', array(
    'group'				=> 'Mosera Menu',
    'label'				=> 'Width for subcategories block',
    'note'				=> "This field is applicable only for top-level categories and drop with subcategories and blocks.",
    'type'				=> 'varchar',
    'input'				=> 'select',
    'source'			=> 'mosera/system_config_source_category_colWidth',
    'visible'			=> true,
    'required'			=> false,
    'backend'			=> '',
    'frontend'			=> '',
    'searchable'		=> false,
    'filterable'		=> false,
    'comparable'		=> false,
    'user_defined'		=> true,
    'visible_on_front'	=> true,
    'wysiwyg_enabled'	=> false,
    'is_html_allowed_on_front'	=> false,
    'global'			=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
 ));

$this->removeAttribute($categoryEntityTypeId, 'mosera_subcat_colw');
$this->addAttribute($categoryEntityTypeId, 'mosera_subcat_colw', array(
    'group'				=> 'Mosera Menu',
    'label'				=> 'Col width for subcategories',
    'note'				=> "This field is applicable only for top-level categories and group subcategories.",
    'type'				=> 'varchar',
    'input'				=> 'select',
    'source'			=> 'mosera/system_config_source_category_colWidth',
    'visible'			=> true,
    'required'			=> false,
    'backend'			=> '',
    'frontend'			=> '',
    'searchable'		=> false,
    'filterable'		=> false,
    'comparable'		=> false,
    'user_defined'		=> true,
    'visible_on_front'	=> true,
    'wysiwyg_enabled'	=> false,
    'is_html_allowed_on_front'	=> false,
    'global'			=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
 ));

$this->removeAttribute($categoryEntityTypeId, 'mosera_menutype');
$this->addAttribute($categoryEntityTypeId, 'mosera_menutype', array(
    'group'				=> 'Mosera Menu',
    'label'				=> 'Dropdown with',
    'note'				=> "This field is applicable only for top-level categories.",
    'type'				=> 'varchar',
    'input'				=> 'select',
    'source'			=> 'mosera/system_config_source_category_types',
    'visible'			=> true,
    'required'			=> false,
    'backend'			=> '',
    'frontend'			=> '',
    'searchable'		=> false,
    'filterable'		=> false,
    'comparable'		=> false,
    'user_defined'		=> true,
    'visible_on_front'	=> true,
    'wysiwyg_enabled'	=> false,
    'is_html_allowed_on_front'	=> false,
    'global'			=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
 ));

$this->removeAttribute($categoryEntityTypeId, 'mosera_block_r');
$this->addAttribute($categoryEntityTypeId, 'mosera_block_r', array(
	'group'				=> 'Mosera Menu',
	'label'				=> 'Block Right',
	'note'				=> "This field is applicable only for top-level categories.",
	'input'         	=> 'textarea',
	'type'          	=> 'text',
	'visible'       	=> true,
	'required'      	=> false,
	'user_defined'  	=> true,
	'global'        	=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
 ));

$this->removeAttribute($categoryEntityTypeId, 'mosera_block_t');
$this->addAttribute($categoryEntityTypeId, 'mosera_block_t', array(
	'group'				=> 'Mosera Menu',
	'label'				=> 'Block Top',
	'note'				=> "This field is applicable only for top-level categories.",
	'input'         	=> 'textarea',
	'type'          	=> 'text',
	'visible'       	=> true,
	'required'      	=> false,
	'user_defined'  	=> true,
	'global'        	=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
 ));

$this->removeAttribute($categoryEntityTypeId, 'mosera_block_b');
$this->addAttribute($categoryEntityTypeId, 'mosera_block_b', array(
	'group'				=> 'Mosera Menu',
	'label'				=> 'Block Bottom',
	'note'				=> "This field is applicable only for top-level categories.",
	'input'         	=> 'textarea',
	'type'          	=> 'text',
	'visible'       	=> true,
	'required'      	=> false,
	'user_defined'  	=> true,
	'global'        	=> Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
 ));


$this->removeAttribute($categoryEntityTypeId, 'mosera_custom_icon');
$this->addAttribute($categoryEntityTypeId, 'mosera_custom_icon', array(
    'type'              => 'varchar',
    'label'             => 'Icon',
    'input'             => 'text',
    'global'            => 'Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE',
    'visible'           => true,
    'required'          => false,
    'unique'            => false,
    'user_defined'      => '1',
    'group'             => 'General',
    'note'				=> 'Icon for navigation menu See more icon <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">here</a>',
 ));
$this->removeAttribute($categoryEntityTypeId, 'mosera_title_alias');
$this->addAttribute($categoryEntityTypeId, 'mosera_title_alias', array(
    'type'              => 'varchar',
    'label'             => 'Name alias',
    'input'             => 'text',
    'global'            => 'Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE',
    'visible'           => true,
    'required'          => false,
    'unique'            => false,
    'user_defined'      => '1',
    'group'             => 'General',
    'note'				=> "This field is applicable only for top-level categories.",
 ));


/*Adds WYSIWYG Support*/
$attributeSetId = $this->getDefaultAttributeSetId($categoryEntityTypeId);
$this->addAttributeToGroup($categoryEntityTypeId,$attributeSetId,'General Information','mosera_custom_icon',2);
$this->addAttributeToGroup($categoryEntityTypeId,$attributeSetId,'General Information','mosera_title_alias',2);

$this->updateAttribute($categoryEntityTypeId, 'mosera_block_l', 'is_wysiwyg_enabled', 1);
$this->updateAttribute($categoryEntityTypeId, 'mosera_block_l', 'is_html_allowed_on_front', 1);
$this->updateAttribute($categoryEntityTypeId, 'mosera_block_r', 'is_wysiwyg_enabled', 1);
$this->updateAttribute($categoryEntityTypeId, 'mosera_block_r', 'is_html_allowed_on_front', 1);
$this->updateAttribute($categoryEntityTypeId, 'mosera_block_t', 'is_wysiwyg_enabled', 1);
$this->updateAttribute($categoryEntityTypeId, 'mosera_block_t', 'is_html_allowed_on_front', 1);
$this->updateAttribute($categoryEntityTypeId, 'mosera_block_b', 'is_wysiwyg_enabled', 1);
$this->updateAttribute($categoryEntityTypeId, 'mosera_block_b', 'is_html_allowed_on_front', 1);

$this->endSetup();

?>