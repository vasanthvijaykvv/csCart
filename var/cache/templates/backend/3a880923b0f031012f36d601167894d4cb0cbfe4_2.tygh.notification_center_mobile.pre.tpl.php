<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:11
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\help_center\hooks\menu\notification_center_mobile.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf97b8fcf48_57274598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a880923b0f031012f36d601167894d4cb0cbfe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\help_center\\hooks\\menu\\notification_center_mobile.pre.tpl',
      1 => 1702617291,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup_btn_mobile.tpl' => 1,
  ),
),false)) {
function content_657bf97b8fcf48_57274598 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <li class="dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu-mobile">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup_btn_mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </li>
<?php }
}
}
