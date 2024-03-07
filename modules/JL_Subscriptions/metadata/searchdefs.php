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
