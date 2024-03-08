<?php
// created: 2024-03-08 06:37:29
$dictionary["JL_Subscriptions"]["fields"]["jl_car_packages_jl_subscriptions_1"] = array (
  'name' => 'jl_car_packages_jl_subscriptions_1',
  'type' => 'link',
  'relationship' => 'jl_car_packages_jl_subscriptions_1',
  'source' => 'non-db',
  'module' => 'JL_Car_Packages',
  'bean_name' => 'JL_Car_Packages',
  'vname' => 'LBL_JL_CAR_PACKAGES_JL_SUBSCRIPTIONS_1_FROM_JL_CAR_PACKAGES_TITLE',
  'id_name' => 'jl_car_packages_jl_subscriptions_1jl_car_packages_ida',
);
$dictionary["JL_Subscriptions"]["fields"]["jl_car_packages_jl_subscriptions_1_name"] = array (
  'name' => 'jl_car_packages_jl_subscriptions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JL_CAR_PACKAGES_JL_SUBSCRIPTIONS_1_FROM_JL_CAR_PACKAGES_TITLE',
  'save' => true,
  'id_name' => 'jl_car_packages_jl_subscriptions_1jl_car_packages_ida',
  'link' => 'jl_car_packages_jl_subscriptions_1',
  'table' => 'jl_car_packages',
  'module' => 'JL_Car_Packages',
  'rname' => 'name',
);
$dictionary["JL_Subscriptions"]["fields"]["jl_car_packages_jl_subscriptions_1jl_car_packages_ida"] = array (
  'name' => 'jl_car_packages_jl_subscriptions_1jl_car_packages_ida',
  'type' => 'link',
  'relationship' => 'jl_car_packages_jl_subscriptions_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_JL_CAR_PACKAGES_JL_SUBSCRIPTIONS_1_FROM_JL_SUBSCRIPTIONS_TITLE',
);
