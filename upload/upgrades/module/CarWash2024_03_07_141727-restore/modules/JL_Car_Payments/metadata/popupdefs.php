<?php
$popupMeta = array (
    'moduleMain' => 'JL_Car_Payment',
    'varName' => 'JL_Car_Payment',
    'orderBy' => 'jl_car_payment.name',
    'whereClauses' => array (
  'name' => 'jl_car_payment.name',
),
    'searchInputs' => array (
  0 => 'jl_car_payment_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'PAYMENTNUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENTNUMBER',
    'width' => '10%',
    'default' => true,
    'name' => 'paymentnumber',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
    'name' => 'status',
  ),
  'PAYMENTMETHOD' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTMETHOD',
    'width' => '10%',
    'default' => true,
    'name' => 'paymentmethod',
  ),
  'PAYMENTCURRENCY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTCURRENCY',
    'width' => '10%',
    'default' => true,
    'name' => 'paymentcurrency',
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'amount',
  ),
  'BANKDETAILS' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_BANKDETAILS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'bankdetails',
  ),
  'PAYMENTDATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_PAYMENTDATE',
    'width' => '10%',
    'default' => true,
    'name' => 'paymentdate',
  ),
),
);
