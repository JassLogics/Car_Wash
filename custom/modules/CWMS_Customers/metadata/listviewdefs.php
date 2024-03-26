<?php
$module_name = 'CWMS_Customers';
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'IMAGE' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_IMAGE',
    'default' => true,
  ),
  'BUSINESS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BUSINESS_NAME',
    'id' => 'BUSINESS_ID',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
