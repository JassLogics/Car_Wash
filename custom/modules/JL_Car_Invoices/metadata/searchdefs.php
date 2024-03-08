<?php
$module_name = 'JL_Car_Invoices';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
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
      'totalamount' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_TOTALAMOUNT',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'totalamount',
      ),
    ),
    'advanced_search' => 
    array (
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
