<?php
$dictionary['JL_Car_Packages']['fields']['services'] = array(
    'name' => 'services',
    'vname' => 'LBL_SERVICES',
    'dbType' => 'varchar',
    'type' => 'multienum',
    'len' => '255',
    'required' => false,
    'inline_edit' => 1,
    'options' => 'car_services_list', 
);
// Packages(one) and Subscription(many) relationship
$dictionary['JL_Car_Packages']['fields']['package_subscription'] = array (
    'name' => 'package_subscription',
    'type' => 'link',
    'relationship' => 'package_subscription_relate',
    'module' => 'JL_Subscriptions',
    'bean_name' => 'JL_Subscriptions',
    'source' => 'non-db',
    'vname' => 'LBL_PACKAGE_SUBSCRIPTION',
);
//Business(one) and Packages(many) relationship
$dictionary['JL_Car_Packages']['fields']['business_name'] = array(
    'required' => false,
    'source' => 'non-db',
    'name' => 'business_name',
    'vname' => 'LBL_BUSINESS_NAME',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'business_id',
    'join_name' => 'CWMS_Businesses',
    'link' => 'business_packages',
    'table' => 'cwms_businesses',
    'isnull' => 'true',
    'module' => 'CWMS_Businesses',
);
$dictionary['JL_Car_Packages']['fields']['business_id'] = array(
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
$dictionary['JL_Car_Packages']['fields']['business_packages'] = array(
    'name' => 'business_packages',
    'type' => 'link',
    'relationship' => 'business_packages_relate',
    'module' => 'CWMS_Businesses',
    'bean_name' => 'CWMS_Businesses',
    'source' => 'non-db',
    'vname' => 'LBL_BUSINESS_PACKAGES',
);
$dictionary['JL_Car_Packages']['relationships'] = array(
    //relationship define Bussiness and packages 
    'business_packages_relate' => array(
        'lhs_module' => 'CWMS_Businesses',
        'lhs_table' => 'cwms_businesses',
        'lhs_key' => 'id',
        'rhs_module' => 'JL_Car_Packages',
        'rhs_table' => 'jl_car_packages',
        'rhs_key' => 'business_id',
        'relationship_type' => 'one-to-many',
    ),
);