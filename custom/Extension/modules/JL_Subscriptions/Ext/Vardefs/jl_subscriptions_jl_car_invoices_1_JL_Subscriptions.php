<?php
// created: 2024-03-12 07:30:20
$dictionary["JL_Subscriptions"]["fields"]["jl_subscriptions_jl_car_invoices_1"] = array (
  'name' => 'jl_subscriptions_jl_car_invoices_1',
  'type' => 'link',
  'relationship' => 'jl_subscriptions_jl_car_invoices_1',
  'source' => 'non-db',
  'module' => 'JL_Car_Invoices',
  'bean_name' => 'JL_Car_Invoices',
  'vname' => 'LBL_JL_SUBSCRIPTIONS_JL_CAR_INVOICES_1_FROM_JL_CAR_INVOICES_TITLE',
  'id_name' => 'jl_subscriptions_jl_car_invoices_1jl_car_invoices_idb',
);
$dictionary["JL_Subscriptions"]["fields"]["jl_subscriptions_jl_car_invoices_1_name"] = array (
  'name' => 'jl_subscriptions_jl_car_invoices_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JL_SUBSCRIPTIONS_JL_CAR_INVOICES_1_FROM_JL_CAR_INVOICES_TITLE',
  'save' => true,
  'id_name' => 'jl_subscriptions_jl_car_invoices_1jl_car_invoices_idb',
  'link' => 'jl_subscriptions_jl_car_invoices_1',
  'table' => 'jl_car_invoices',
  'module' => 'JL_Car_Invoices',
  'rname' => 'name',
);
$dictionary["JL_Subscriptions"]["fields"]["jl_subscriptions_jl_car_invoices_1jl_car_invoices_idb"] = array (
  'name' => 'jl_subscriptions_jl_car_invoices_1jl_car_invoices_idb',
  'type' => 'link',
  'relationship' => 'jl_subscriptions_jl_car_invoices_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_JL_SUBSCRIPTIONS_JL_CAR_INVOICES_1_FROM_JL_CAR_INVOICES_TITLE',
);
