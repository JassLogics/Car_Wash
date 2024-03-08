<?php
$popupMeta = array (
    'moduleMain' => 'JL_Car_Payment',
    'varName' => 'JL_Car_Payment',
    'orderBy' => 'jl_car_payment.name',
    'whereClauses' => array (
  'name' => 'jl_car_payment.name',
  'paymentnumber' => 'jl_car_payments.paymentnumber',
  'paymentcurrency' => 'jl_car_payments.paymentcurrency',
  'amount' => 'jl_car_payments.amount',
  'bankdetails' => 'jl_car_payments.bankdetails',
  'paymentdate' => 'jl_car_payments.paymentdate',
  'invoicenumber' => 'jl_car_payments.invoicenumber',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'paymentnumber',
  5 => 'paymentcurrency',
  6 => 'amount',
  7 => 'bankdetails',
  8 => 'paymentdate',
  9 => 'invoicenumber',
),
    'searchdefs' => array (
  'paymentnumber' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENTNUMBER',
    'width' => '10%',
    'name' => 'paymentnumber',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'paymentcurrency' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTCURRENCY',
    'width' => '10%',
    'name' => 'paymentcurrency',
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'amount',
  ),
  'bankdetails' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_BANKDETAILS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'bankdetails',
  ),
  'paymentdate' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_PAYMENTDATE',
    'width' => '10%',
    'name' => 'paymentdate',
  ),
  'invoicenumber' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INVOICENUMBER',
    'width' => '10%',
    'name' => 'invoicenumber',
  ),
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
