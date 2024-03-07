<?php
// created: 2024-03-07 13:11:29
$dictionary["JL_Subscriptions"]["fields"]["cwms_customers_jl_subscriptions_1"] = array (
  'name' => 'cwms_customers_jl_subscriptions_1',
  'type' => 'link',
  'relationship' => 'cwms_customers_jl_subscriptions_1',
  'source' => 'non-db',
  'module' => 'CWMS_Customers',
  'bean_name' => 'CWMS_Customers',
  'vname' => 'LBL_CWMS_CUSTOMERS_JL_SUBSCRIPTIONS_1_FROM_CWMS_CUSTOMERS_TITLE',
  'id_name' => 'cwms_customers_jl_subscriptions_1cwms_customers_ida',
);
$dictionary["JL_Subscriptions"]["fields"]["cwms_customers_jl_subscriptions_1_name"] = array (
  'name' => 'cwms_customers_jl_subscriptions_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CWMS_CUSTOMERS_JL_SUBSCRIPTIONS_1_FROM_CWMS_CUSTOMERS_TITLE',
  'save' => true,
  'id_name' => 'cwms_customers_jl_subscriptions_1cwms_customers_ida',
  'link' => 'cwms_customers_jl_subscriptions_1',
  'table' => 'cwms_customers',
  'module' => 'CWMS_Customers',
  'rname' => 'name',
);
$dictionary["JL_Subscriptions"]["fields"]["cwms_customers_jl_subscriptions_1cwms_customers_ida"] = array (
  'name' => 'cwms_customers_jl_subscriptions_1cwms_customers_ida',
  'type' => 'link',
  'relationship' => 'cwms_customers_jl_subscriptions_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CWMS_CUSTOMERS_JL_SUBSCRIPTIONS_1_FROM_JL_SUBSCRIPTIONS_TITLE',
);
