<?php
 // created: 2024-03-07 04:52:01
$layout_defs["CWMS_vendor"]["subpanel_setup"]['cwms_vendor_cwms_customer'] = array (
  'order' => 100,
  'module' => 'CWMS_customer',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CWMS_VENDOR_CWMS_CUSTOMER_FROM_CWMS_CUSTOMER_TITLE',
  'get_subpanel_data' => 'cwms_vendor_cwms_customer',
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
