<?php
$module_name = 'CWMS_Owners';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE_NO' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_NO',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'PICTURE' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_PICTURE',
    'default' => true,
  ),
);
;
?>
