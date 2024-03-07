<?php
$dashletData['CWMS_OwnerDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'email' => 
  array (
    'default' => '',
  ),
  'phone_no' => 
  array (
    'default' => '',
  ),
  'address' => 
  array (
    'default' => '',
  ),
  'picture' => 
  array (
    'default' => '',
  ),
);
$dashletData['CWMS_OwnerDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'phone_no' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_NO',
    'width' => '10%',
    'default' => true,
  ),
  'address' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'picture' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_PICTURE',
    'default' => true,
  ),
);
