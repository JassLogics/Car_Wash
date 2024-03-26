<?php
$dictionary['CWMS_Customers']['fields']['business_name'] = array(
    'required' => false,
    'source' => 'non-db',
    'name' => 'business_name',
    'vname' => 'LBL_BUSINESS_NAME',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'business_id',
    'link' => 'business_customers',
    'join_name' => 'CWMS_Businesses',
    'module' => 'CWMS_Businesses',
    'table' => 'cwms_businesses',
    'isnull' => 'true',
    
);
$dictionary['CWMS_Customers']['fields']['business_id'] = array(
    'name' => 'business_id',
    'rname' => 'id',
    'vname' => 'LBL_BUSINESS_ID',
    'type' => 'id',
    'table' => 'cwms_businesses',
    'module' => 'CWMS_Businesses',
    'isnull' => 'true',
    'dbType' => 'id',
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);
$dictionary['CWMS_Customers']['fields']['business_customers'] = array(
    'name' => 'business_customers',
    'type' => 'link',
    'relationship' => 'business_customers_relate',
    'module' => 'CWMS_Businesses',
    'bean_name' => 'CWMS_Businesses',
    'source' => 'non-db',
    'vname' => 'LBL_BUSINESS_CUSTOMERS',
);
$dictionary['CWMS_Customers']['relationships'] = array(
    'business_customers_relate' => array(
        'lhs_module' => 'CWMS_Businesses',
        'lhs_table' => 'cwms_businesses',
        'lhs_key' => 'id',
        'rhs_module' => 'CWMS_Customers',
        'rhs_table' => 'cwms_customers',
        'rhs_key' => 'business_id',
        'relationship_type' => 'one-to-many',
    ),
);