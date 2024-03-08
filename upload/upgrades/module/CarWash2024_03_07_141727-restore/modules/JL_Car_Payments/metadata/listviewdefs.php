<?php
$module_name = 'JL_Car_Payments';
$listViewDefs [$module_name] = 
array (
  'PAYMENTNUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PAYMENTNUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENTMETHOD' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTMETHOD',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENTCURRENCY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PAYMENTCURRENCY',
    'width' => '10%',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'BANKDETAILS' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_BANKDETAILS',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENTDATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_PAYMENTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'INVOICENUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_INVOICENUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
