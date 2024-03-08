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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'services' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SERVICES',
        'width' => '10%',
        'default' => true,
        'name' => 'services',
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
        'default' => true,
        'name' => 'taxamount',
      ),
      'discount' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_DISCOUNT',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'discount',
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
      'invoicenumber' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_INVOICENUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'invoicenumber',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'services' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SERVICES',
        'width' => '10%',
        'default' => true,
        'name' => 'services',
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
        'default' => true,
        'name' => 'taxamount',
      ),
      'discount' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_DISCOUNT',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'discount',
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
