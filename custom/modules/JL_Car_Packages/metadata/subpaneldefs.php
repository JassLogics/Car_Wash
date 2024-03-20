<?php
$module_name = 'JL_Car_Packages';
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


    $layout_defs[$module_name]['subpanel_setup']['package_subscription'] = array(
    'order' => 1,
    'sort_by' => 'date_entered',
    'sort_order' => 'desc',
        'module' => 'JL_Subscriptions', 
        'subpanel_name' => 'default',
        'title_key' => 'LBL_JL_SUBSCRIPTIONS_SUBPANEL_TITLE',
        'get_subpanel_data' => 'package_subscription',
    );
    