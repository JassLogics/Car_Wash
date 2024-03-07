<?php
// created: 2024-03-07 04:52:01
$dictionary["cwms_vendor_cwms_customer"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cwms_vendor_cwms_customer' => 
    array (
      'lhs_module' => 'CWMS_vendor',
      'lhs_table' => 'cwms_vendor',
      'lhs_key' => 'id',
      'rhs_module' => 'CWMS_customer',
      'rhs_table' => 'cwms_customer',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cwms_vendor_cwms_customer_c',
      'join_key_lhs' => 'cwms_vendor_cwms_customercwms_vendor_ida',
      'join_key_rhs' => 'cwms_vendor_cwms_customercwms_customer_idb',
    ),
  ),
  'table' => 'cwms_vendor_cwms_customer_c',
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
      'name' => 'cwms_vendor_cwms_customercwms_vendor_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cwms_vendor_cwms_customercwms_customer_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cwms_vendor_cwms_customerspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cwms_vendor_cwms_customer_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cwms_vendor_cwms_customercwms_vendor_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cwms_vendor_cwms_customer_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cwms_vendor_cwms_customercwms_customer_idb',
      ),
    ),
  ),
);