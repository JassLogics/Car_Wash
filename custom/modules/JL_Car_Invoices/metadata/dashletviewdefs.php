<?php
$dashletData['JL_Car_InvoicesDashlet']['searchFields'] = array (
  'invoicenumber' => 
  array (
    'default' => '',
  ),
  'paymentinformation' => 
  array (
    'default' => '',
  ),
  'invoicedate' => 
  array (
    'default' => '',
  ),
  'amount' => 
  array (
    'default' => '',
  ),
);
$dashletData['JL_Car_InvoicesDashlet']['columns'] = array (
  'invoicenumber' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INVOICENUMBER',
    'width' => '10%',
    'default' => true,
    'name' => 'invoicenumber',
  ),
  'paymentinformation' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENTINFORMATION',
    'width' => '10%',
    'default' => true,
    'name' => 'paymentinformation',
  ),
  'invoicedate' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_INVOICEDATE',
    'width' => '10%',
    'default' => true,
    'name' => 'invoicedate',
  ),
  'amount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'amount',
  ),
  'taxamount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TAXAMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'taxamount',
  ),
  'services' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SERVICES',
    'width' => '10%',
    'default' => false,
    'name' => 'services',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'jl_car_invoices_jl_car_payments_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_JL_CAR_INVOICES_JL_CAR_PAYMENTS_FROM_JL_CAR_PAYMENTS_TITLE',
    'id' => 'JL_CAR_INVOICES_JL_CAR_PAYMENTSJL_CAR_PAYMENTS_IDB',
    'width' => '10%',
    'default' => false,
    'name' => 'jl_car_invoices_jl_car_payments_name',
  ),
  'discount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_DISCOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'discount',
  ),
  'totalamount' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TOTALAMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'totalamount',
  ),
);
