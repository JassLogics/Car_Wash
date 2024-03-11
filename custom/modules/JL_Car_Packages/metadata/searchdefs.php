<?php
$module_name = 'JL_Car_Packages';
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
      'duration' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DURATION',
        'width' => '10%',
        'default' => true,
        'name' => 'duration',
      ),
      'services' => 
      array (
        'type' => 'multienum',
        'label' => 'LBL_SERVICES',
        'width' => '10%',
        'default' => true,
        'name' => 'services',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'price' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_PRICE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'price',
      ),
      'discount' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DISCOUNT',
        'width' => '10%',
        'default' => true,
        'name' => 'discount',
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
      'duration' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DURATION',
        'width' => '10%',
        'default' => true,
        'name' => 'duration',
      ),
      'services' => 
      array (
        'type' => 'multienum',
        'label' => 'LBL_SERVICES',
        'width' => '10%',
        'default' => true,
        'name' => 'services',
      ),
      'description' => 
      array (
        'type' => 'text',
        'studio' => 'visible',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
      ),
      'price' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_PRICE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'price',
      ),
      'discount' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DISCOUNT',
        'width' => '10%',
        'default' => true,
        'name' => 'discount',
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
