<?php
$popupMeta = array (
    'moduleMain' => 'JL_Car_Invoices',
    'varName' => 'JL_Car_Invoices',
    'orderBy' => 'jl_car_invoices.name',
    'whereClauses' => array (
  'name' => 'jl_car_invoices.name',
  'services' => 'jl_car_invoices.services',
  'paymentinformation' => 'jl_car_invoices.paymentinformation',
  'invoicedate' => 'jl_car_invoices.invoicedate',
  'amount' => 'jl_car_invoices.amount',
  'taxamount' => 'jl_car_invoices.taxamount',
  'discount' => 'jl_car_invoices.discount',
  'totalamount' => 'jl_car_invoices.totalamount',
  'invoicenumber' => 'jl_car_invoices.invoicenumber',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'services',
  6 => 'paymentinformation',
  7 => 'invoicedate',
  8 => 'amount',
  9 => 'taxamount',
  10 => 'discount',
  11 => 'totalamount',
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
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'services' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICES',
    'width' => '10%',
    'name' => 'services',
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
  'taxamount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TAXAMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'taxamount',
  ),
  'discount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_DISCOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'discount',
  ),
  'totalamount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTALAMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'totalamount',
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
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'SERVICES' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICES',
    'width' => '10%',
    'default' => true,
    'name' => 'services',
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
  'TAXAMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TAXAMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'taxamount',
  ),
  'DISCOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_DISCOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'discount',
  ),
  'TOTALAMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTALAMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'totalamount',
  ),
),
);
