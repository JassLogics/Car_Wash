

<?php

$dictionary['JL_Subscriptions']['fields']['business_name'] = array(
    'required' => false,
    'source' => 'non-db',
    'name' => 'business_name',
    'vname' => 'LBL_BUSINESS_NAME',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'business_id',
    'join_name' => 'CWMS_Businesses',
    'link' => 'business_subscription',
    'table' => 'cwms_businesses',
    'isnull' => 'true',
    'module' => 'CWMS_Businesses',
);
$dictionary['JL_Subscriptions']['fields']['business_id'] = array(
    'name' => 'business_id',
    'rname' => 'id',
    'vname' => 'LBL_BUSINESS_ID',
    'type' => 'id',
    'table' => 'cwms_businesses',
    'isnull' => 'true',
    'module' => 'CWMS_Businesses',
    'dbType' => 'id',
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);
$dictionary['JL_Subscriptions']['fields']['business_subscription'] = array(
    'name' => 'business_subscription',
    'type' => 'link',
    'relationship' => 'business_subscription_relate',
    'module' => 'CWMS_Businesses',
    'bean_name' => 'CWMS_Businesses',
    'source' => 'non-db',
    'vname' => 'LBL_BUSINESS_SUBSCRIPTION',
);
$dictionary['JL_Subscriptions']['relationships'] = array(
    'business_subscription_relate' => array(
        'lhs_module' => 'CWMS_Businesses',
        'lhs_table' => 'cwms_businesses',
        'lhs_key' => 'id',
        'rhs_module' => 'JL_Subscriptions',
        'rhs_table' => 'jl_subscriptions',
        'rhs_key' => 'business_id',
        'relationship_type' => 'one-to-many',
    ),
);
