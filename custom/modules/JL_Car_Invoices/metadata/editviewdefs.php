<?php
$module_name = 'JL_Car_Invoices';
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
            'name' => 'paymentinformation',
            'label' => 'LBL_PAYMENTINFORMATION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'invoicedate',
            'label' => 'LBL_INVOICEDATE',
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
            'name' => 'jl_subscriptions_jl_car_invoices_1_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
