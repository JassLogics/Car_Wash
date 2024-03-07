<?php
$popupMeta = array (
    'moduleMain' => 'CWMS_Owner',
    'varName' => 'CWMS_Owner',
    'orderBy' => 'cwms_owner.name',
    'whereClauses' => array (
  'name' => 'cwms_owner.name',
  'email' => 'cwms_owner.email',
  'phone_no' => 'cwms_owner.phone_no',
  'address' => 'cwms_owner.address',
  'picture' => 'cwms_owner.picture',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'email',
  5 => 'phone_no',
  6 => 'address',
  7 => 'picture',
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
  'picture' => 
  array (
    'type' => 'image',
    'studio' => 'visible',
    'width' => '10%',
    'label' => 'LBL_PICTURE',
    'name' => 'picture',
  ),
),
);
