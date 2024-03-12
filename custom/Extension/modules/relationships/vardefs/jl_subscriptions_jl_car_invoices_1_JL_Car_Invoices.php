<?php
// created: 2024-03-12 07:30:20
$dictionary["JL_Car_Invoices"]["fields"]["jl_subscriptions_jl_car_invoices_1"] = array (
  'name' => 'jl_subscriptions_jl_car_invoices_1',
  'type' => 'link',
  'relationship' => 'jl_subscriptions_jl_car_invoices_1',
  'source' => 'non-db',
  'module' => 'JL_Subscriptions',
  'bean_name' => 'JL_Subscriptions',
  'vname' => 'LBL_JL_SUBSCRIPTIONS_JL_CAR_INVOICES_1_FROM_JL_SUBSCRIPTIONS_TITLE',
  'id_name' => 'jl_subscriptions_jl_car_invoices_1jl_subscriptions_ida',
);
$dictionary["JL_Car_Invoices"]["fields"]["jl_subscriptions_jl_car_invoices_1_name"] = array (
  'name' => 'jl_subscriptions_jl_car_invoices_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_JL_SUBSCRIPTIONS_JL_CAR_INVOICES_1_FROM_JL_SUBSCRIPTIONS_TITLE',
  'save' => true,
  'id_name' => 'jl_subscriptions_jl_car_invoices_1jl_subscriptions_ida',
  'link' => 'jl_subscriptions_jl_car_invoices_1',
  'table' => 'jl_subscriptions',
  'module' => 'JL_Subscriptions',
  'rname' => 'name',
);
$dictionary["JL_Car_Invoices"]["fields"]["jl_subscriptions_jl_car_invoices_1jl_subscriptions_ida"] = array (
  'name' => 'jl_subscriptions_jl_car_invoices_1jl_subscriptions_ida',
  'type' => 'link',
  'relationship' => 'jl_subscriptions_jl_car_invoices_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_JL_SUBSCRIPTIONS_JL_CAR_INVOICES_1_FROM_JL_SUBSCRIPTIONS_TITLE',
);
