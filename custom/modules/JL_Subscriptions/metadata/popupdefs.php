<?php
$popupMeta = array (
    'moduleMain' => 'JL_Subscriptions',
    'varName' => 'JL_Subscriptions',
    'orderBy' => 'jl_subscriptions.name',
    'whereClauses' => array (
  'name' => 'jl_subscriptions.name',
  'currency' => 'jl_subscriptions.currency',
  'amount' => 'jl_subscriptions.amount',
  'vehicalno' => 'jl_subscriptions.vehicalno',
  'startdate' => 'jl_subscriptions.startdate',
  'expirydate' => 'jl_subscriptions.expirydate',
  'package_name' => 'jl_subscriptions.package_name',
  'customer_name' => 'jl_subscriptions.customer_name',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'currency',
  6 => 'amount',
  7 => 'vehicalno',
  8 => 'startdate',
  9 => 'expirydate',
  10 => 'package_name',
  11 => 'customer_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'vehicalno' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VEHICAL_NO',
    'width' => '10%',
    'name' => 'vehicalno',
  ),
  'currency' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'name' => 'currency',
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'name' => 'amount',
  ),
  'startdate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'name' => 'startdate',
  ),
  'expirydate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPIRYDATE',
    'width' => '10%',
    'name' => 'expirydate',
  ),
  'package_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PACKAGE_NAME',
    'id' => 'PACKAGE_ID',
    'width' => '10%',
    'name' => 'package_name',
  ),
  'customer_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUSTOMER_NAME',
    'id' => 'CUSTOMER_ID',
    'width' => '10%',
    'name' => 'customer_name',
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
  'VEHICALNO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VEHICAL_NO',
    'width' => '10%',
    'default' => true,
    'name' => 'vehicalno',
  ),
  'CURRENCY' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
    'name' => 'currency',
  ),
  'AMOUNT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
    'name' => 'amount',
  ),
  'STARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => true,
    'name' => 'startdate',
  ),
  'EXPIRYDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPIRYDATE',
    'width' => '10%',
    'default' => true,
    'name' => 'expirydate',
  ),
  'PACKAGE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PACKAGE_NAME',
    'id' => 'PACKAGE_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'package_name',
  ),
  'CUSTOMER_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUSTOMER_NAME',
    'id' => 'CUSTOMER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'customer_name',
  ),
),
);
