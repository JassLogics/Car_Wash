<?php
$dashletData['JL_Car_PaymentsDashlet']['searchFields'] = array (
  'paymentnumber' => 
  array (
    'default' => '',
  ),
  'name' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'paymentmethod' => 
  array (
    'default' => '',
  ),
  'paymentcurrency' => 
  array (
    'default' => '',
  ),
  'amount' => 
  array (
    'default' => '',
  ),
  'bankdetails' => 
  array (
    'default' => '',
  ),
  'paymentdate' => 
  array (
    'default' => '',
  ),
  'invoicenumber' => 
  array (
    'default' => '',
  ),
);
$dashletData['JL_Car_PaymentsDashlet']['columns'] = array (
  'paymentnumber' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENTNUMBER',
    'width' => '10%',
    'default' => true,
    'name' => 'paymentnumber',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
    'name' => 'status',
  ),
  'paymentmethod' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTMETHOD',
    'width' => '10%',
    'default' => true,
    'name' => 'paymentmethod',
  ),
  'paymentcurrency' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTCURRENCY',
    'width' => '10%',
    'default' => true,
    'name' => 'paymentcurrency',
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
  'paymentdate' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_PAYMENTDATE',
    'width' => '10%',
    'default' => false,
    'name' => 'paymentdate',
  ),
  'bankdetails' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_BANKDETAILS',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'bankdetails',
  ),
  'invoicenumber' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INVOICENUMBER',
    'width' => '10%',
    'default' => false,
  ),
);
