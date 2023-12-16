<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:02
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\vendor_panel_configurator\hooks\index\body_content.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf972c50109_53791832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e96d1c91631d07be322939fb603e30bd8da4196c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\vendor_panel_configurator\\hooks\\index\\body_content.pre.tpl',
      1 => 1702617274,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf972c50109_53791832 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_assignInScope('main_container_class', ((string)$_smarty_tpl->tpl_vars['main_container_class']->value)." te-mode" ,false ,2);
}
}
}
