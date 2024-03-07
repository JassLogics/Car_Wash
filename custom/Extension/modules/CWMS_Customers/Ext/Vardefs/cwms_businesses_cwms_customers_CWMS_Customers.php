<?php
// created: 2024-03-07 10:35:52
$dictionary["CWMS_Customers"]["fields"]["cwms_businesses_cwms_customers"] = array (
  'name' => 'cwms_businesses_cwms_customers',
  'type' => 'link',
  'relationship' => 'cwms_businesses_cwms_customers',
  'source' => 'non-db',
  'module' => 'CWMS_Businesses',
  'bean_name' => 'CWMS_Businesses',
  'vname' => 'LBL_CWMS_BUSINESSES_CWMS_CUSTOMERS_FROM_CWMS_BUSINESSES_TITLE',
  'id_name' => 'cwms_businesses_cwms_customerscwms_businesses_ida',
);
$dictionary["CWMS_Customers"]["fields"]["cwms_businesses_cwms_customers_name"] = array (
  'name' => 'cwms_businesses_cwms_customers_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CWMS_BUSINESSES_CWMS_CUSTOMERS_FROM_CWMS_BUSINESSES_TITLE',
  'save' => true,
  'id_name' => 'cwms_businesses_cwms_customerscwms_businesses_ida',
  'link' => 'cwms_businesses_cwms_customers',
  'table' => 'cwms_businesses',
  'module' => 'CWMS_Businesses',
  'rname' => 'name',
);
$dictionary["CWMS_Customers"]["fields"]["cwms_businesses_cwms_customerscwms_businesses_ida"] = array (
  'name' => 'cwms_businesses_cwms_customerscwms_businesses_ida',
  'type' => 'link',
  'relationship' => 'cwms_businesses_cwms_customers',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CWMS_BUSINESSES_CWMS_CUSTOMERS_FROM_CWMS_CUSTOMERS_TITLE',
);
