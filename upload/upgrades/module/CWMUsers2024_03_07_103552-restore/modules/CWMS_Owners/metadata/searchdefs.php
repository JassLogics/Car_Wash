<?php
$module_name = 'CWMS_Owners';
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
