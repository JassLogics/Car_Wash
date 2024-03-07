<?php
$module_name = 'CWMS_Businesses';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'V_EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_V_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'V_ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_V_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'OPERATION_TIME' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_OPERATION_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'SERVICES' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SERVICES',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
