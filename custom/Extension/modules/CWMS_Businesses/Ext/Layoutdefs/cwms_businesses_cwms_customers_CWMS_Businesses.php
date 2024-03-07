<?php
 // created: 2024-03-07 10:35:51
$layout_defs["CWMS_Businesses"]["subpanel_setup"]['cwms_businesses_cwms_customers'] = array (
  'order' => 100,
  'module' => 'CWMS_Customers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CWMS_BUSINESSES_CWMS_CUSTOMERS_FROM_CWMS_CUSTOMERS_TITLE',
  'get_subpanel_data' => 'cwms_businesses_cwms_customers',
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
