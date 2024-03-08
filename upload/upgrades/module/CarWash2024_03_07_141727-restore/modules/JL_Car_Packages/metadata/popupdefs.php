<?php
$popupMeta = array (
    'moduleMain' => 'JL_Car_Packages',
    'varName' => 'JL_Car_Packages',
    'orderBy' => 'jl_car_packages.name',
    'whereClauses' => array (
  'name' => 'jl_car_packages.name',
),
    'searchInputs' => array (
  0 => 'jl_car_packages_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'DURATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DURATION',
    'width' => '10%',
    'default' => true,
    'name' => 'duration',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'PRICE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'price',
  ),
  'DISCOUNT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DISCOUNT',
    'width' => '10%',
    'default' => true,
    'name' => 'discount',
  ),
  'SUBSCRIPTIONNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUBSCRIPTIONNAME',
    'width' => '10%',
    'default' => true,
    'name' => 'subscriptionname',
  ),
),
);
