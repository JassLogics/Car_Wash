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
      'business_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_BUSINESS_NAME',
        'id' => 'BUSINESS_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'business_name',
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
      'business_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_BUSINESS_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'BUSINESS_ID',
        'name' => 'business_name',
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
