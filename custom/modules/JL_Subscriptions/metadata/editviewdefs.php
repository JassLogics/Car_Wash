<?php
$module_name = 'JL_Subscriptions';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'startdate',
            'label' => 'LBL_STARTDATE',
          ),
          1 => 
          array (
            'name' => 'expirydate',
            'label' => 'LBL_EXPIRYDATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cwms_customers_jl_subscriptions_1_name',
          ),
          1 => 
          array (
            'name' => 'jl_car_packages_jl_subscriptions_1_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
