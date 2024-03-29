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
          1 => 
          array (
            'name' => 'vehicalno',
            'label' => 'LBL_VEHICAL_NO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'currency',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'package_name',
            'label' => 'LBL_PACKAGE_NAME',
          ),
          1 => 
          array (
            'name' => 'customer_name',
            'label' => 'LBL_CUSTOMER_NAME',
          ),
        ),
      ),
    ),
  ),
);
;
?>
