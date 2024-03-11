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
  'PAYMENTNO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENT_NO',
    'width' => '10%',
    'default' => true,
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
);
;
?>
