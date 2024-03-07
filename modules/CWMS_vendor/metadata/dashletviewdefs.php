<?php
$dashletData['CWMS_vendorDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'v_email' => 
  array (
    'default' => '',
  ),
  'phone' => 
  array (
    'default' => '',
  ),
  'v_address' => 
  array (
    'default' => '',
  ),
  'operation_time' => 
  array (
    'default' => '',
  ),
  'services' => 
  array (
    'default' => '',
  ),
);
$dashletData['CWMS_vendorDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'v_email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_V_EMAIL',
    'width' => '10%',
    'default' => true,
  ),
  'phone' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'v_address' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_V_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'operation_time' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_OPERATION_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'services' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SERVICES',
    'width' => '10%',
    'default' => true,
  ),
);
