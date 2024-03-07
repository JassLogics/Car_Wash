<?php
// created: 2024-03-07 10:35:51
$dictionary["cwms_businesses_cwms_customers"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cwms_businesses_cwms_customers' => 
    array (
      'lhs_module' => 'CWMS_Businesses',
      'lhs_table' => 'cwms_businesses',
      'lhs_key' => 'id',
      'rhs_module' => 'CWMS_Customers',
      'rhs_table' => 'cwms_customers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cwms_businesses_cwms_customers_c',
      'join_key_lhs' => 'cwms_businesses_cwms_customerscwms_businesses_ida',
      'join_key_rhs' => 'cwms_businesses_cwms_customerscwms_customers_idb',
    ),
  ),
  'table' => 'cwms_businesses_cwms_customers_c',
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
      'name' => 'cwms_businesses_cwms_customerscwms_businesses_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cwms_businesses_cwms_customerscwms_customers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cwms_businesses_cwms_customersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cwms_businesses_cwms_customers_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cwms_businesses_cwms_customerscwms_businesses_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cwms_businesses_cwms_customers_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cwms_businesses_cwms_customerscwms_customers_idb',
      ),
    ),
  ),
);