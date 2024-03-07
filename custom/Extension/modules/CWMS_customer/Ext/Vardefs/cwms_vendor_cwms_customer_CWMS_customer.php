<?php
// created: 2024-03-07 04:52:02
$dictionary["CWMS_customer"]["fields"]["cwms_vendor_cwms_customer"] = array (
  'name' => 'cwms_vendor_cwms_customer',
  'type' => 'link',
  'relationship' => 'cwms_vendor_cwms_customer',
  'source' => 'non-db',
  'module' => 'CWMS_vendor',
  'bean_name' => 'CWMS_vendor',
  'vname' => 'LBL_CWMS_VENDOR_CWMS_CUSTOMER_FROM_CWMS_VENDOR_TITLE',
  'id_name' => 'cwms_vendor_cwms_customercwms_vendor_ida',
);
$dictionary["CWMS_customer"]["fields"]["cwms_vendor_cwms_customer_name"] = array (
  'name' => 'cwms_vendor_cwms_customer_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CWMS_VENDOR_CWMS_CUSTOMER_FROM_CWMS_VENDOR_TITLE',
  'save' => true,
  'id_name' => 'cwms_vendor_cwms_customercwms_vendor_ida',
  'link' => 'cwms_vendor_cwms_customer',
  'table' => 'cwms_vendor',
  'module' => 'CWMS_vendor',
  'rname' => 'name',
);
$dictionary["CWMS_customer"]["fields"]["cwms_vendor_cwms_customercwms_vendor_ida"] = array (
  'name' => 'cwms_vendor_cwms_customercwms_vendor_ida',
  'type' => 'link',
  'relationship' => 'cwms_vendor_cwms_customer',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CWMS_VENDOR_CWMS_CUSTOMER_FROM_CWMS_CUSTOMER_TITLE',
);
