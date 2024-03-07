<?php
 // created: 2024-03-07 13:11:29
$layout_defs["CWMS_Customers"]["subpanel_setup"]['cwms_customers_jl_subscriptions_1'] = array (
  'order' => 100,
  'module' => 'JL_Subscriptions',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CWMS_CUSTOMERS_JL_SUBSCRIPTIONS_1_FROM_JL_SUBSCRIPTIONS_TITLE',
  'get_subpanel_data' => 'cwms_customers_jl_subscriptions_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
