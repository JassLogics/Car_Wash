<?php
 // created: 2024-03-07 10:35:52
$layout_defs["CWMS_Owners"]["subpanel_setup"]['cwms_owners_cwms_businesses'] = array (
  'order' => 100,
  'module' => 'CWMS_Businesses',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CWMS_OWNERS_CWMS_BUSINESSES_FROM_CWMS_BUSINESSES_TITLE',
  'get_subpanel_data' => 'cwms_owners_cwms_businesses',
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
