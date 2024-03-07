<?php
 // created: 2024-03-07 04:52:01
$layout_defs["CWMS_Owner"]["subpanel_setup"]['cwms_owner_cwms_vendor'] = array (
  'order' => 100,
  'module' => 'CWMS_vendor',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CWMS_OWNER_CWMS_VENDOR_FROM_CWMS_VENDOR_TITLE',
  'get_subpanel_data' => 'cwms_owner_cwms_vendor',
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
