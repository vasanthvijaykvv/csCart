<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:11
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\vendor_panel_configurator\hooks\menu\first_level.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf97b520c62_46620617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06595aff11725596699f6995ef6a9e82f6ab5f1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\vendor_panel_configurator\\hooks\\menu\\first_level.pre.tpl',
      1 => 1702617274,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf97b520c62_46620617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('first_level_class', smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['first_level_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"nav__menu-item--root-hidden",'') ,false ,2);
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR") && (defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null) && $_smarty_tpl->tpl_vars['m']->value['root_hidden']) {?>
    <?php $_smarty_tpl->_assignInScope('first_level_class', ((string)$_smarty_tpl->tpl_vars['first_level_class']->value)." nav__menu-item--root-hidden" ,false ,2);
}?>

<?php $_smarty_tpl->_assignInScope('first_level_class', smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['first_level_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"nav__menu-item--hidden-by-permissions",'') ,false ,2);
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR") && (defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null) && $_smarty_tpl->tpl_vars['m']->value['hidden_by_permissions']) {?>
    <?php $_smarty_tpl->_assignInScope('first_level_class', ((string)$_smarty_tpl->tpl_vars['first_level_class']->value)." nav__menu-item--hidden-by-permissions" ,false ,2);
}
}
}
