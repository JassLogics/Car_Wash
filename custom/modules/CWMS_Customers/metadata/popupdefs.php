<?php
$popupMeta = array (
    'moduleMain' => 'CWMS_customer',
    'varName' => 'CWMS_customer',
    'orderBy' => 'cwms_customer.name',
    'whereClauses' => array (
  'name' => 'cwms_customer.name',
  'email' => 'cwms_customer.email',
  'phone_no' => 'cwms_customer.phone_no',
  'address' => 'cwms_customer.address',
  'description' => 'cwms_customer.description',
  'image' => 'cwms_customer.image',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'email',
  5 => 'phone_no',
  6 => 'address',
  7 => 'description',
  8 => 'image',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'email' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'name' => 'email',
  ),
  'phone_no' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_NO',
    'width' => '10%',
    'name' => 'phone_no',
  ),
  'address' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'name' => 'address',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
  'image' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_IMAGE',
    'name' => 'image',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => true,
    'name' => 'email',
  ),
  'PHONE_NO' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_NO',
    'width' => '10%',
    'default' => true,
    'name' => 'phone_no',
  ),
  'ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'default' => true,
    'name' => 'address',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'IMAGE' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_IMAGE',
    'default' => true,
    'name' => 'image',
  ),
),
);
