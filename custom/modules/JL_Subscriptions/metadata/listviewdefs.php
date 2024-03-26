<?php
$module_name = 'JL_Subscriptions';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CURRENCY' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'VEHICALNO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VEHICAL_NO',
    'width' => '10%',
    'default' => true,
  ),
  'STARTDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'EXPIRYDATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPIRYDATE',
    'width' => '10%',
    'default' => true,
  ),
  'PACKAGE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PACKAGE_NAME',
    'id' => 'PACKAGE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'CUSTOMER_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUSTOMER_NAME',
    'id' => 'CUSTOMER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENTNO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_NO',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
