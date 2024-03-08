<?php
$module_name = 'JL_Car_Payments';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
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
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
      'bankdetails' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_BANKDETAILS',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'bankdetails',
      ),
      'paymentdate' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_PAYMENTDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'paymentdate',
      ),
      'invoicenumber' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_INVOICENUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'invoicenumber',
      ),
    ),
    'advanced_search' => 
    array (
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
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
      'bankdetails' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_BANKDETAILS',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'bankdetails',
      ),
      'paymentdate' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_PAYMENTDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'paymentdate',
      ),
      'invoicenumber' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_INVOICENUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'invoicenumber',
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
