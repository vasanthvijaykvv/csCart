<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:04
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\vendor_panel_configurator\hooks\bottom_panel\bottom_panel_main.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf974010075_92851379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '663f6512141a505f723cf70d79d9cb7a8937a43a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\vendor_panel_configurator\\hooks\\bottom_panel\\bottom_panel_main.pre.tpl',
      1 => 1702617274,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf974010075_92851379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('is_demo_mode', (($tmp = $_smarty_tpl->tpl_vars['config']->value['demo_mode'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_theme_editor', ((defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL") && $_smarty_tpl->tpl_vars['auth']->value['act_as_area'] && $_smarty_tpl->tpl_vars['auth']->value['act_as_area'] === smarty_modifier_enum("UserTypes::VENDOR") || $_smarty_tpl->tpl_vars['is_demo_mode']->value) ,false ,2);
}
}
