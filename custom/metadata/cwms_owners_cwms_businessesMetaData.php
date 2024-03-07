<?php
// created: 2024-03-07 10:35:52
$dictionary["cwms_owners_cwms_businesses"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cwms_owners_cwms_businesses' => 
    array (
      'lhs_module' => 'CWMS_Owners',
      'lhs_table' => 'cwms_owners',
      'lhs_key' => 'id',
      'rhs_module' => 'CWMS_Businesses',
      'rhs_table' => 'cwms_businesses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cwms_owners_cwms_businesses_c',
      'join_key_lhs' => 'cwms_owners_cwms_businessescwms_owners_ida',
      'join_key_rhs' => 'cwms_owners_cwms_businessescwms_businesses_idb',
    ),
  ),
  'table' => 'cwms_owners_cwms_businesses_c',
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
      'name' => 'cwms_owners_cwms_businessescwms_owners_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cwms_owners_cwms_businessescwms_businesses_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cwms_owners_cwms_businessesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cwms_owners_cwms_businesses_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cwms_owners_cwms_businessescwms_owners_ida',
        1 => 'cwms_owners_cwms_businessescwms_businesses_idb',
      ),
    ),
  ),
);