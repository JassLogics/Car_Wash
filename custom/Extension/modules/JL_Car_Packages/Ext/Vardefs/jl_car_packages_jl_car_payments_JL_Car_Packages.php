<?php
// created: 2024-03-07 14:17:26
$dictionary["JL_Car_Packages"]["fields"]["jl_car_packages_jl_car_payments"] = array (
  'name' => 'jl_car_packages_jl_car_payments',
  'type' => 'link',
  'relationship' => 'jl_car_packages_jl_car_payments',
  'source' => 'non-db',
  'module' => 'JL_Car_Payments',
  'bean_name' => 'JL_Car_Payments',
  'vname' => 'LBL_JL_CAR_PACKAGES_JL_CAR_PAYMENTS_FROM_JL_CAR_PAYMENTS_TITLE',
  'id_name' => 'jl_car_packages_jl_car_paymentsjl_car_payments_idb',
);
$dictionary["JL_Car_Packages"]["fields"]["jl_car_packages_jl_car_payments_name"] = array (
  'name' => 'jl_car_packages_jl_car_payments_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JL_CAR_PACKAGES_JL_CAR_PAYMENTS_FROM_JL_CAR_PAYMENTS_TITLE',
  'save' => true,
  'id_name' => 'jl_car_packages_jl_car_paymentsjl_car_payments_idb',
  'link' => 'jl_car_packages_jl_car_payments',
  'table' => 'jl_car_payments',
  'module' => 'JL_Car_Payments',
  'rname' => 'name',
);
$dictionary["JL_Car_Packages"]["fields"]["jl_car_packages_jl_car_paymentsjl_car_payments_idb"] = array (
  'name' => 'jl_car_packages_jl_car_paymentsjl_car_payments_idb',
  'type' => 'link',
  'relationship' => 'jl_car_packages_jl_car_payments',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_JL_CAR_PACKAGES_JL_CAR_PAYMENTS_FROM_JL_CAR_PAYMENTS_TITLE',
);
