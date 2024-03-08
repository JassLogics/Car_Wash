<?php
$module_name = 'JL_Car_Payments';
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
          0 => 
          array (
            'name' => 'paymentnumber',
            'label' => 'LBL_PAYMENTNUMBER',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'paymentcurrency',
            'studio' => 'visible',
            'label' => 'LBL_PAYMENTCURRENCY',
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
            'name' => 'bankdetails',
            'studio' => 'visible',
            'label' => 'LBL_BANKDETAILS',
          ),
          1 => 
          array (
            'name' => 'paymentdate',
            'label' => 'LBL_PAYMENTDATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'jl_car_invoices_jl_car_payments_name',
          ),
          1 => 
          array (
            'name' => 'jl_car_packages_jl_car_payments_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
