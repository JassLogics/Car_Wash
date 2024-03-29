<?php
$module_name = 'JL_Car_Invoices';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
