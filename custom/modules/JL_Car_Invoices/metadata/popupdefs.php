<?php
$popupMeta = array (
    'moduleMain' => 'JL_Car_Invoices',
    'varName' => 'JL_Car_Invoices',
    'orderBy' => 'jl_car_invoices.name',
    'whereClauses' => array (
  'paymentinformation' => 'jl_car_invoices.paymentinformation',
  'invoicedate' => 'jl_car_invoices.invoicedate',
  'amount' => 'jl_car_invoices.amount',
  'invoicenumber' => 'jl_car_invoices.invoicenumber',
),
    'searchInputs' => array (
  6 => 'paymentinformation',
  7 => 'invoicedate',
  8 => 'amount',
  12 => 'invoicenumber',
),
    'searchdefs' => array (
  'invoicenumber' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INVOICENUMBER',
    'width' => '10%',
    'name' => 'invoicenumber',
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
  'INVOICENUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INVOICENUMBER',
    'width' => '10%',
    'default' => true,
    'name' => 'invoicenumber',
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
