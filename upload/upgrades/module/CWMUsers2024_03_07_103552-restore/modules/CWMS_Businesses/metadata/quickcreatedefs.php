<?php
$module_name = 'CWMS_Businesses';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'name' => 'v_email',
            'label' => 'LBL_V_EMAIL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone',
            'label' => 'LBL_PHONE',
          ),
          1 => 
          array (
            'name' => 'v_address',
            'label' => 'LBL_V_ADDRESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'operation_time',
            'label' => 'LBL_OPERATION_TIME',
          ),
          1 => 
          array (
            'name' => 'services',
            'studio' => 'visible',
            'label' => 'LBL_SERVICES',
          ),
        ),
      ),
    ),
  ),
);
;
?>
