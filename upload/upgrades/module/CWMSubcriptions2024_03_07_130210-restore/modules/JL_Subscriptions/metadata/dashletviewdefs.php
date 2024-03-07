<?php
$dashletData['JL_SubscriptionsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'startdate' => 
  array (
    'default' => '',
  ),
  'expirydate' => 
  array (
    'default' => '',
  ),
);
$dashletData['JL_SubscriptionsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'startdate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_STARTDATE',
    'width' => '10%',
    'default' => true,
  ),
  'expirydate' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXPIRYDATE',
    'width' => '10%',
    'default' => true,
  ),
);
