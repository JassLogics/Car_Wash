<?php
$popupMeta = array (
    'moduleMain' => 'JL_Car_Packages',
    'varName' => 'JL_Car_Packages',
    'orderBy' => 'jl_car_packages.name',
    'whereClauses' => array (
  'name' => 'jl_car_packages.name',
  'duration' => 'jl_car_packages.duration',
  'description' => 'jl_car_packages.description',
  'price' => 'jl_car_packages.price',
  'discount' => 'jl_car_packages.discount',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'duration',
  5 => 'description',
  6 => 'price',
  7 => 'discount',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'duration' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DURATION',
    'width' => '10%',
    'name' => 'duration',
  ),
  'description' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'name' => 'description',
  ),
  'price' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => '10%',
    'name' => 'price',
  ),
  'discount' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DISCOUNT',
    'width' => '10%',
    'name' => 'discount',
  ),
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
),
);
