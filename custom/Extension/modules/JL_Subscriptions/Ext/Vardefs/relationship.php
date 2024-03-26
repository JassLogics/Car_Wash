
<?php
//   package(one) and subscription(many) relationship
$dictionary['JL_Subscriptions']['fields']['package_name'] = array(
    'required' => false,
    'source' => 'non-db',
    'name' => 'package_name',
    'vname' => 'LBL_PACKAGE_NAME',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'package_id',
    'join_name' => 'JL_Car_Packages',
    'link' => 'package_subscription',
    'table' => 'jl_car_packages',
    'isnull' => 'true',
    'module' => 'JL_Car_Packages',
);
$dictionary['JL_Subscriptions']['fields']['package_id'] = array(
    'name' => 'package_id',
    'rname' => 'id',
    'vname' => 'LBL_PACKAGE_ID',
    'type' => 'id',
    'table' => 'jl_car_packages',
    'isnull' => 'true',
    'module' => 'JL_Car_Packages',
    'dbType' => 'id',
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);
$dictionary['JL_Subscriptions']['fields']['package_subscription'] = array(
    'name' => 'package_subscription',
    'type' => 'link',
    'relationship' => 'package_subscription_relate',
    'module' => 'JL_Car_Packages',
    'bean_name' => 'JL_Car_Packages',
    'source' => 'non-db',
    'vname' => 'LBL_PACKAGE_SUBSCRIPTION',
);

// customer(one) and subscription(many) relationship
$dictionary['JL_Subscriptions']['fields']['customer_name'] = array(
    'required' => false,
    'source' => 'non-db',
    'name' => 'customer_name',
    'vname' => 'LBL_CUSTOMER_NAME',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'customer_id',
    'link' => 'customer_subscriptions',
    'join_name' => 'CWMS_Customers',
    'module' => 'CWMS_Customers',
    'table' => 'cwms_customers',
    'isnull' => 'true',
    
);
$dictionary['JL_Subscriptions']['fields']['customer_id'] = array(
    'name' => 'customer_id',
    'rname' => 'id',
    'vname' => 'LBL_CUSTOMER_ID',
    'type' => 'id',
    'table' => 'cwms_customers',
    'module' => 'CWMS_Customers',
    'isnull' => 'true',
    'dbType' => 'id',
    'reportable' => false,
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
);
$dictionary['JL_Subscriptions']['fields']['customer_subscriptions'] = array(
    'name' => 'customer_subscriptions',
    'type' => 'link',
    'relationship' => 'customer_subscriptions_relate',
    'module' => 'CWMS_Customers',
    'bean_name' => 'CWMS_Customers',
    'source' => 'non-db',
    'vname' => 'LBL_CUSTOMER_SUBSCRIPTIONS',
);
$dictionary['JL_Subscriptions']['relationships'] = array(
    //relationship define package and subscription
    'package_subscription_relate' => array(
        'lhs_module' => 'JL_Car_Packages',
        'lhs_table' => 'jl_car_packages',
        'lhs_key' => 'id',
        'rhs_module' => 'JL_Subscriptions',
        'rhs_table' => 'jl_subscriptions',
        'rhs_key' => 'package_id',
        'relationship_type' => 'one-to-many',
    ),
    //  //relationship define customer and subscription
        'customer_subscriptions_relate' => array(
        'lhs_module' => 'CWMS_Customers',
        'lhs_table' => 'cwms_customers',
        'lhs_key' => 'id',
        'rhs_module' => 'JL_Subscriptions',
        'rhs_table' => 'jl_subscriptions',
        'rhs_key' => 'customer_id',
        'relationship_type' => 'one-to-many',
    ),
    
);