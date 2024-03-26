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
      'vehicalno' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_VEHICAL_NO',
        'width' => '10%',
        'default' => true,
        'name' => 'vehicalno',
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
      'customer_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CUSTOMER_NAME',
        'id' => 'CUSTOMER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'customer_name',
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
      'vehicalno' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_VEHICAL_NO',
        'width' => '10%',
        'default' => true,
        'name' => 'vehicalno',
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
      'package_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_PACKAGE_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'PACKAGE_ID',
        'name' => 'package_name',
      ),
      'customer_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CUSTOMER_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'CUSTOMER_ID',
        'name' => 'customer_name',
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
