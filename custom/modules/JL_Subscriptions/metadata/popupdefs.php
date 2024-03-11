<?php
$popupMeta = array (
    'moduleMain' => 'JL_Subscriptions',
    'varName' => 'JL_Subscriptions',
    'orderBy' => 'jl_subscriptions.name',
    'whereClauses' => array (
  'name' => 'jl_subscriptions.name',
  'paymentno' => 'jl_subscriptions.paymentno',
  'currency' => 'jl_subscriptions.currency',
  'amount' => 'jl_subscriptions.amount',
  'vehicalno' => 'jl_subscriptions.vehicalno',
  'startdate' => 'jl_subscriptions.startdate',
  'expirydate' => 'jl_subscriptions.expirydate',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'paymentno',
  5 => 'currency',
  6 => 'amount',
  7 => 'vehicalno',
  8 => 'startdate',
  9 => 'expirydate',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'paymentno' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_NO',
    'width' => '10%',
    'name' => 'paymentno',
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
  'vehicalno' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VEHICAL_NO',
    'width' => '10%',
    'name' => 'vehicalno',
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
),
);
