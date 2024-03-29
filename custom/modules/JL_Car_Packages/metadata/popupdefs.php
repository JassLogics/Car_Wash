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
  'services' => 'jl_car_packages.services',
  'business_name' => 'jl_car_packages.business_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'duration',
  5 => 'description',
  6 => 'price',
  7 => 'discount',
  9 => 'services',
  10 => 'business_name',
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
  'services' => 
  array (
    'type' => 'multienum',
    'label' => 'LBL_SERVICES',
    'width' => '10%',
    'name' => 'services',
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
  'business_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BUSINESS_NAME',
    'id' => 'BUSINESS_ID',
    'width' => '10%',
    'name' => 'business_name',
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
  'SERVICES' => 
  array (
    'type' => 'multienum',
    'label' => 'LBL_SERVICES',
    'width' => '10%',
    'default' => true,
    'name' => 'services',
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
  'BUSINESS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_BUSINESS_NAME',
    'id' => 'BUSINESS_ID',
    'width' => '10%',
    'default' => true,
  ),
),
);
