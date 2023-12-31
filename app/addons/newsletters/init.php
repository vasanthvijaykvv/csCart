<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

if (!defined('BOOTSTRAP')) { die('Access denied'); }

// types
define('NEWSLETTER_TYPE_NEWSLETTER', 'N');
define('NEWSLETTER_TYPE_TEMPLATE', 'T');
define('NEWSLETTER_TYPE_AUTORESPONDER', 'A');

fn_register_hooks(
    'get_predefined_statuses',
    'tools_update_status_before_query',
    'settings_variants_image_verification_use_for',
    ['newsletters_update_subscriptions_post', '', 'gdpr']
);
