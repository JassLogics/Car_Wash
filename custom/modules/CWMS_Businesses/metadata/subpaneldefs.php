<?php
$module_name = 'CWMS_Businesses';
$layout_defs[$module_name]['subpanel_setup']['securitygroups'] = array(
    'top_buttons' => array(array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'SecurityGroups', 'mode' => 'MultiSelect')),
    'order' => 900,
    'sort_by' => 'name',
    'sort_order' => 'asc',
    'module' => 'SecurityGroups',
    'refresh_page' => 1,
    'subpanel_name' => 'default',
    'get_subpanel_data' => 'SecurityGroups',
    'add_subpanel_data' => 'securitygroup_id',
    'title_key' => 'LBL_SECURITYGROUPS_SUBPANEL_TITLE',
);



$layout_defs[$module_name]['subpanel_setup']['business_customers'] = array(
    'order' => 1,
    'sort_by' => 'date_entered',
    'sort_order' => 'desc',
        'module' => 'CWMS_Customers', 
        'subpanel_name' => 'default',
        'title_key' => 'LBL_CWMS_CUSTOMERS_SUBPANEL_TITLE',
        'get_subpanel_data' => 'business_customers',
    );
    
    $layout_defs[$module_name]['subpanel_setup']['business_packages'] = array(
        'order' => 2,
        'sort_by' => 'date_entered',
        'sort_order' => 'desc',
            'module' => 'JL_Car_Packages', 
            'subpanel_name' => 'default',
            'title_key' => 'LBL_JL_CAR_PACKAGES_SUBPANEL_TITLE',
            'get_subpanel_data' => 'business_packages',
        );