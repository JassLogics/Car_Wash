<?php
// created: 2024-03-07 13:11:29
$dictionary["cwms_customers_jl_subscriptions_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cwms_customers_jl_subscriptions_1' => 
    array (
      'lhs_module' => 'CWMS_Customers',
      'lhs_table' => 'cwms_customers',
      'lhs_key' => 'id',
      'rhs_module' => 'JL_Subscriptions',
      'rhs_table' => 'jl_subscriptions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cwms_customers_jl_subscriptions_1_c',
      'join_key_lhs' => 'cwms_customers_jl_subscriptions_1cwms_customers_ida',
      'join_key_rhs' => 'cwms_customers_jl_subscriptions_1jl_subscriptions_idb',
    ),
  ),
  'table' => 'cwms_customers_jl_subscriptions_1_c',
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
      'name' => 'cwms_customers_jl_subscriptions_1cwms_customers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cwms_customers_jl_subscriptions_1jl_subscriptions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cwms_customers_jl_subscriptions_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cwms_customers_jl_subscriptions_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cwms_customers_jl_subscriptions_1cwms_customers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cwms_customers_jl_subscriptions_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cwms_customers_jl_subscriptions_1jl_subscriptions_idb',
      ),
    ),
  ),
);