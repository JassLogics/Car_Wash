<?php
$dashletData['CWMS_CustomersDashlet']['searchFields'] = array (
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
  'description' => 
  array (
    'default' => '',
  ),
  'image' => 
  array (
    'default' => '',
  ),
  'business_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['CWMS_CustomersDashlet']['columns'] = array (
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
  'image' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_IMAGE',
    'default' => true,
    'name' => 'image',
  ),
  'business_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BUSINESS_NAME',
    'id' => 'BUSINESS_ID',
    'width' => '10%',
    'default' => false,
  ),
);
