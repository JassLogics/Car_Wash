<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2022 SalesAgility Ltd.
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

$viewdefs ['InboundEmail'] = [
    'EditView' => [
        'templateMeta' => [
            'form' => [
                'hidden' => [
                    '<input type="hidden" name="searchField" value="">',
                    '<input type="hidden" id="origin_id" name="origin_id" value="{$smarty.request.origin_id}">',
                ],
                'buttons' => [
                    'SAVE',
                    'CANCEL',
                    [
                        'customCode' => '
                            <input title="{$MOD.LBL_TEST_BUTTON_TITLE}"
                                   type="button"
                                   class="button"
                                   id="emailTestSettings"
                                   onClick="testInboundConfiguration()"
                                   name="button" value="{$MOD.LBL_TEST_CONNECTION_SETTINGS}" />
                        ',
                    ]
                ]
            ],
            'maxColumns' => '2',
            'widths' => [
                [
                    'label' => '10',
                    'field' => '30',
                ],
                [
                    'label' => '10',
                    'field' => '30',
                ],
            ],
            'useTabs' => false,
            'tabDefs' => [
                'DEFAULT' => [
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ],
                'LBL_CONNECTION_CONFIGURATION' => [
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ],
                'LBL_OUTBOUND_CONFIGURATION' => [
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ],
                'LBL_AUTO_REPLY_CONFIGURATION' => [
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ],
                'LBL_GROUP_CONFIGURATION' => [
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ],
                'LBL_CASE_CONFIGURATION' => [
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ],
            ],
            'javascript' => '
                {sugar_getscript file="modules/InboundEmail/InboundEmail.js"}
                <script type="text/javascript">
                    {literal}var userService = function() { return { isAdmin: function() { return {/literal}{if $is_admin}true{else}false{/if}{literal};}}}();{/literal}
                    {suite_combinescripts
                        files="modules/InboundEmail/js/fields.js,
                               modules/InboundEmail/js/case_create_toggle.js,
                               modules/InboundEmail/js/distribution_toggle.js,
                               modules/InboundEmail/js/mail_folders.js,
                               modules/InboundEmail/js/ssl_port_set.js,
                               modules/InboundEmail/js/fields_toggle.js,
                               modules/InboundEmail/js/auth_type_fields_toggle.js,
                               modules/InboundEmail/js/owner_toggle.js,
                               modules/InboundEmail/js/test_configuration.js,
                               modules/InboundEmail/js/panel_toggle.js"}
                </script>
            '
        ],
        'panels' => [
            'default' => [
                [
                    'type',
                ],
                [
                    'name',
                    'status'
                ],
                [
                    'owner_name',
                ],
            ],
            'lbl_connection_configuration' => [
                [
                    'auth_type',
                    'external_oauth_connection_name',
                ],
                [
                    'server_url',
                    'email_user'
                ],
                [
                    'protocol',
                    'email_password'
                ],
                [
                    'port',
                    [
                        'name' => 'mailbox',
                        'vname' => 'LBL_MAILBOX',
                        'customCode' => '<div style="display: flex; align-items:baseline;"><input id="mailbox" name="mailbox" tabindex="90" size="30" maxlength="500" type="text" value="{$fields.mailbox.value}"/> <input type="button" id="subscribeFolderButton" class="button" onclick="openMailboxPopup()" value="{$MOD.LBL_SELECT}"/></div>',
                    ]
                ],
                [
                    'is_ssl',
                    [
                        'name' => 'trashFolder',
                        'customCode' => '<div style="display: flex; align-items:baseline;"><input name="trashFolder" id="trashFolder" tabindex="92" value="{$fields.trashFolder.value}" size=\'30\' maxlength=\'100\' type="text"/> <input type="button" id="trashFolderButton" class="button" onclick="openTrashMailboxPopup()" value="{$MOD.LBL_SELECT}"/></div>',
                    ]
                ],
                [
                    'connection_string',
                    [
                        'name' => 'sentFolder',

                        'customCode' => '<div style="display: flex; align-items:baseline;"><input id="sentFolder" name="sentFolder" tabindex="95" size="30" maxlength="100" type="text" value="{$fields.sentFolder.value}"/> <input type="button" id="sentFolderButton" class="button" onclick="openSentMailboxPopup()" value="{$MOD.LBL_SELECT}"/></div>',
                    ]
                ],
                [
                    'email_body_filtering',
                ],
            ],
            'lbl_outbound_configuration' => [
                [
                    [
                        'name' => 'outbound_email_name',
                        'displayParams' => [
                            'field_to_name_array'=> [
                                'name' => 'outbound_email_name',
                                'id' => 'outbound_email_id',
                                'smtp_from_name' => 'from_name',
                                'reply_to_name' => 'reply_to_name',
                                'smtp_from_addr' => 'from_addr',
                                'reply_to_addr' => 'reply_to_addr',
                            ]
                        ]
                    ],
                    'account_signature_id'
                ],
                [
                    'allow_outbound_group_usage',
                ],
                [
                    'from_name',
                    'reply_to_name',
                ],
                [
                    'from_addr',
                    'reply_to_addr'
                ],
            ],
            'lbl_auto_reply_configuration' => [
                [
                    'filter_domain',
                    'autoreply_email_template_name'
                ],
                [
                    'email_num_autoreplies_24_hours',
                    ''
                ],
            ],
            'lbl_group_configuration' => [
                [
                    'is_auto_import',
                    'move_messages_to_trash_after_import'
                ],
            ],
            'lbl_case_configuration' => [
                [
                    'is_create_case',
                ],
                [
                    'create_case_email_template_name',
                    'distrib_method',
                ],
                [
                    '',
                    'distribution_options'
                ],
                [
                    '',
                    'distribution_user_name'
                ]
            ],
        ],
    ],
];
