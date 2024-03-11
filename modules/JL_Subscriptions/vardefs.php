<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$dictionary['JL_Subscriptions'] = array(
    'table' => 'jl_subscriptions',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => false,
    'full_text_search' => 
    array (
      'boost' => 3,
    ),
    'required' => true,
    'importable' => 'required',
    'duplicate_merge' => 'enabled',
    'merge_filter' => 'selected',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '3',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'size' => '20',
  ),
  'startdate' => 
  array (
    'required' => true,
    'name' => 'startdate',
    'vname' => 'LBL_STARTDATE',
    'type' => 'date',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
    'display_default' => 'now',
  ),
  'expirydate' => 
  array (
    'required' => true,
    'name' => 'expirydate',
    'vname' => 'LBL_EXPIRYDATE',
    'type' => 'date',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
    'display_default' => '+1 month',
  ),
  'paymentno' => 
  array (
    'required' => true,
    'name' => 'paymentno',
    'vname' => 'LBL_PAYMENT_NO',
    'type' => 'varchar',
    'dbType' => 'varchar',
    'no_default' => false,
   
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'audited' => false,
    'inline_edit' => true,
    
  ),
  'currency' => array (
    'name' => 'currency',
    'vname' => 'LBL_CURRENCY',
    'dbType' => 'varchar',
    'type' => 'enum',
    'len' => '3', // Assuming currency codes are typically 3 characters
    'required' => true,
    'inline_edit' => 1,
    'options' => 'currency_list',
    'isMultiSelect' => false, // Since it's unlikely for a currency field to be multi-select
),

  'amount' => 
  array (
    'name' => 'amount',
    'vname' => 'LBL_AMOUNT',
    'dbType' => 'decimal',
    'type' => 'decimal',
    'len' => '65',
    'required' => true,
    'inline_edit' => 1,
    
  ),
  'vehicalno' => 
  array (
    'name' => 'vehicalno',
    'vname' => 'LBL_VEHICAL_NO',
    'dbType' => 'varchar',
    'type' => 'varchar',
    'len' => '255',
    'required' => true,
    'inline_edit' => 1,
    
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('JL_Subscriptions', 'JL_Subscriptions', array('basic','assignable','security_groups'));
