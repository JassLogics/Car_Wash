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
          0 => 
          array (
            'name' => 'invoicenumber',
            'label' => 'LBL_INVOICENUMBER',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'services',
            'label' => 'LBL_SERVICES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'paymentinformation',
            'label' => 'LBL_PAYMENTINFORMATION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'invoicedate',
            'label' => 'LBL_INVOICEDATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'taxamount',
            'label' => 'LBL_TAXAMOUNT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'discount',
            'label' => 'LBL_DISCOUNT',
          ),
          1 => 
          array (
            'name' => 'totalamount',
            'label' => 'LBL_TOTALAMOUNT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'jl_car_invoices_jl_car_payment_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
