<?php
$module_name = 'JL_Subscriptions';
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
      'paymentno' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PAYMENT_NO',
        'width' => '10%',
        'default' => true,
        'name' => 'paymentno',
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
        'default' => true,
        'name' => 'expirydate',
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
      'paymentno' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PAYMENT_NO',
        'width' => '10%',
        'default' => true,
        'name' => 'paymentno',
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
        'default' => true,
        'name' => 'expirydate',
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
