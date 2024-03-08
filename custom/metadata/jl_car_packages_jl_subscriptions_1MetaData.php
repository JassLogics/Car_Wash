<?php
// created: 2024-03-08 06:37:29
$dictionary["jl_car_packages_jl_subscriptions_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'jl_car_packages_jl_subscriptions_1' => 
    array (
      'lhs_module' => 'JL_Car_Packages',
      'lhs_table' => 'jl_car_packages',
      'lhs_key' => 'id',
      'rhs_module' => 'JL_Subscriptions',
      'rhs_table' => 'jl_subscriptions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'jl_car_packages_jl_subscriptions_1_c',
      'join_key_lhs' => 'jl_car_packages_jl_subscriptions_1jl_car_packages_ida',
      'join_key_rhs' => 'jl_car_packages_jl_subscriptions_1jl_subscriptions_idb',
    ),
  ),
  'table' => 'jl_car_packages_jl_subscriptions_1_c',
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
      'name' => 'jl_car_packages_jl_subscriptions_1jl_car_packages_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'jl_car_packages_jl_subscriptions_1jl_subscriptions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'jl_car_packages_jl_subscriptions_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'jl_car_packages_jl_subscriptions_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'jl_car_packages_jl_subscriptions_1jl_car_packages_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'jl_car_packages_jl_subscriptions_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'jl_car_packages_jl_subscriptions_1jl_subscriptions_idb',
      ),
    ),
  ),
);