<?php
$dashletData['JL_SubscriptionsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'vehicalno' => 
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
  'startdate' => 
  array (
    'default' => '',
  ),
  'expirydate' => 
  array (
    'default' => '',
  ),
  'package_name' => 
  array (
    'default' => '',
  ),
  'customer_name' => 
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
  'currency' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
    'name' => 'currency',
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
    'name' => 'amount',
  ),
  'vehicalno' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VEHICAL_NO',
    'width' => '10%',
    'default' => true,
    'name' => 'vehicalno',
  ),
  'package_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PACKAGE_NAME',
    'id' => 'PACKAGE_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'package_name',
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
  'paymentno' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_NO',
    'width' => '10%',
    'default' => false,
    'name' => 'paymentno',
  ),
  'customer_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUSTOMER_NAME',
    'id' => 'CUSTOMER_ID',
    'width' => '10%',
    'default' => false,
    'name' => 'customer_name',
  ),
);
