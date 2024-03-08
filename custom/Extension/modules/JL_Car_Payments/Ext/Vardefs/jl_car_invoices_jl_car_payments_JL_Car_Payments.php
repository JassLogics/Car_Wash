<?php
// created: 2024-03-07 14:17:25
$dictionary["JL_Car_Payments"]["fields"]["jl_car_invoices_jl_car_payments"] = array (
  'name' => 'jl_car_invoices_jl_car_payments',
  'type' => 'link',
  'relationship' => 'jl_car_invoices_jl_car_payments',
  'source' => 'non-db',
  'module' => 'JL_Car_Invoices',
  'bean_name' => 'JL_Car_Invoices',
  'vname' => 'LBL_JL_CAR_INVOICES_JL_CAR_PAYMENTS_FROM_JL_CAR_INVOICES_TITLE',
  'id_name' => 'jl_car_invoices_jl_car_paymentsjl_car_invoices_ida',
);
$dictionary["JL_Car_Payments"]["fields"]["jl_car_invoices_jl_car_payments_name"] = array (
  'name' => 'jl_car_invoices_jl_car_payments_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JL_CAR_INVOICES_JL_CAR_PAYMENTS_FROM_JL_CAR_INVOICES_TITLE',
  'save' => true,
  'id_name' => 'jl_car_invoices_jl_car_paymentsjl_car_invoices_ida',
  'link' => 'jl_car_invoices_jl_car_payments',
  'table' => 'jl_car_invoices',
  'module' => 'JL_Car_Invoices',
  'rname' => 'name',
);
$dictionary["JL_Car_Payments"]["fields"]["jl_car_invoices_jl_car_paymentsjl_car_invoices_ida"] = array (
  'name' => 'jl_car_invoices_jl_car_paymentsjl_car_invoices_ida',
  'type' => 'link',
  'relationship' => 'jl_car_invoices_jl_car_payments',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_JL_CAR_INVOICES_JL_CAR_PAYMENTS_FROM_JL_CAR_INVOICES_TITLE',
);
