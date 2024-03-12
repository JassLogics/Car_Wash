<?php
// created: 2024-03-12 07:30:20
$dictionary["jl_subscriptions_jl_car_invoices_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'jl_subscriptions_jl_car_invoices_1' => 
    array (
      'lhs_module' => 'JL_Subscriptions',
      'lhs_table' => 'jl_subscriptions',
      'lhs_key' => 'id',
      'rhs_module' => 'JL_Car_Invoices',
      'rhs_table' => 'jl_car_invoices',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'jl_subscriptions_jl_car_invoices_1_c',
      'join_key_lhs' => 'jl_subscriptions_jl_car_invoices_1jl_subscriptions_ida',
      'join_key_rhs' => 'jl_subscriptions_jl_car_invoices_1jl_car_invoices_idb',
    ),
  ),
  'table' => 'jl_subscriptions_jl_car_invoices_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'jl_subscriptions_jl_car_invoices_1jl_subscriptions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'jl_subscriptions_jl_car_invoices_1jl_car_invoices_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'jl_subscriptions_jl_car_invoices_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'jl_subscriptions_jl_car_invoices_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'jl_subscriptions_jl_car_invoices_1jl_subscriptions_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'jl_subscriptions_jl_car_invoices_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'jl_subscriptions_jl_car_invoices_1jl_car_invoices_idb',
      ),
    ),
  ),
);