<?php
$dashletData['JL_SubscriptionsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'paymentno' => 
  array (
    'default' => '',
  ),
  'currency' => 
  array (
    'default' => '',
  ),
  'amount' => 
  array (
    'default' => '',
  ),
  'vehicalno' => 
  array (
    'default' => '',
  ),
  'startdate' => 
  array (
    'default' => '',
  ),
  'expirydate' => 
  array (
    'default' => '',
  ),
);
$dashletData['JL_SubscriptionsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'paymentno' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_NO',
    'width' => '10%',
    'default' => true,
  ),
  'currency' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'vehicalno' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VEHICAL_NO',
    'width' => '10%',
    'default' => true,
  ),
  'startdate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => true,
    'name' => 'startdate',
  ),
  'expirydate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPIRYDATE',
    'width' => '10%',
    'default' => false,
    'name' => 'expirydate',
  ),
);
