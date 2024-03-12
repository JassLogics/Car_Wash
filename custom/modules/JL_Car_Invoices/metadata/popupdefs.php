<?php
$popupMeta = array (
    'moduleMain' => 'JL_Car_Invoices',
    'varName' => 'JL_Car_Invoices',
    'orderBy' => 'jl_car_invoices.name',
    'whereClauses' => array (
  'paymentinformation' => 'jl_car_invoices.paymentinformation',
  'invoicedate' => 'jl_car_invoices.invoicedate',
  'amount' => 'jl_car_invoices.amount',
  'name' => 'jl_car_invoices.name',
),
    'searchInputs' => array (
  6 => 'paymentinformation',
  7 => 'invoicedate',
  8 => 'amount',
  13 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'paymentinformation' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENTINFORMATION',
    'width' => '10%',
    'name' => 'paymentinformation',
  ),
  'invoicedate' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_INVOICEDATE',
    'width' => '10%',
    'name' => 'invoicedate',
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'amount',
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
  'PAYMENTINFORMATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENTINFORMATION',
    'width' => '10%',
    'default' => true,
    'name' => 'paymentinformation',
  ),
  'INVOICEDATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_INVOICEDATE',
    'width' => '10%',
    'default' => true,
    'name' => 'invoicedate',
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
),
);
