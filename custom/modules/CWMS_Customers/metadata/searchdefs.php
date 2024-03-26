<?php
$module_name = 'CWMS_Customers';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email',
      ),
      'phone_no' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_NO',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_no',
      ),
      'address' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS',
        'width' => '10%',
        'default' => true,
        'name' => 'address',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'business_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_BUSINESS_NAME',
        'id' => 'BUSINESS_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'business_name',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email',
      ),
      'phone_no' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_NO',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_no',
      ),
      'address' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS',
        'width' => '10%',
        'default' => true,
        'name' => 'address',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'business_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_BUSINESS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'BUSINESS_ID',
        'name' => 'business_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
