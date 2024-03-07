<?php
// created: 2024-03-07 04:52:01
$dictionary["cwms_owner_cwms_vendor"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cwms_owner_cwms_vendor' => 
    array (
      'lhs_module' => 'CWMS_Owner',
      'lhs_table' => 'cwms_owner',
      'lhs_key' => 'id',
      'rhs_module' => 'CWMS_vendor',
      'rhs_table' => 'cwms_vendor',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cwms_owner_cwms_vendor_c',
      'join_key_lhs' => 'cwms_owner_cwms_vendorcwms_owner_ida',
      'join_key_rhs' => 'cwms_owner_cwms_vendorcwms_vendor_idb',
    ),
  ),
  'table' => 'cwms_owner_cwms_vendor_c',
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
      'name' => 'cwms_owner_cwms_vendorcwms_owner_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cwms_owner_cwms_vendorcwms_vendor_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cwms_owner_cwms_vendorspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cwms_owner_cwms_vendor_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cwms_owner_cwms_vendorcwms_owner_ida',
        1 => 'cwms_owner_cwms_vendorcwms_vendor_idb',
      ),
    ),
  ),
);