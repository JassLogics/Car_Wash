<?php
$module_name = 'CWMS_Businesses';
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
      'v_email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_V_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'v_email',
      ),
      'phone' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone',
      ),
      'v_address' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_V_ADDRESS',
        'width' => '10%',
        'default' => true,
        'name' => 'v_address',
      ),
      'operation_time' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_OPERATION_TIME',
        'width' => '10%',
        'default' => true,
        'name' => 'operation_time',
      ),
      'services' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SERVICES',
        'width' => '10%',
        'default' => true,
        'name' => 'services',
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
      'v_email' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_V_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'v_email',
      ),
      'phone' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone',
      ),
      'v_address' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_V_ADDRESS',
        'width' => '10%',
        'default' => true,
        'name' => 'v_address',
      ),
      'operation_time' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_OPERATION_TIME',
        'width' => '10%',
        'default' => true,
        'name' => 'operation_time',
      ),
      'services' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_SERVICES',
        'width' => '10%',
        'default' => true,
        'name' => 'services',
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
