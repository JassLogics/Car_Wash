<?php
$dashletData['JL_Car_PackagesDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'duration' => 
  array (
    'default' => '',
  ),
  'services' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
  'price' => 
  array (
    'default' => '',
  ),
  'discount' => 
  array (
    'default' => '',
  ),
);
$dashletData['JL_Car_PackagesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'duration' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DURATION',
    'width' => '10%',
    'default' => true,
    'name' => 'duration',
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
  'services' => 
  array (
    'type' => 'multienum',
    'label' => 'LBL_SERVICES',
    'width' => '10%',
    'default' => true,
    'name' => 'services',
  ),
  'discount' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DISCOUNT',
    'width' => '10%',
    'default' => true,
    'name' => 'discount',
  ),
);
