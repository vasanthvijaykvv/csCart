<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:01
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\vendor_panel_configurator\hooks\index\index_container.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf971532b83_93120693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aab7d1cd526b88cedab2c0048b9f1225a501cea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\vendor_panel_configurator\\hooks\\index\\index_container.pre.tpl',
      1 => 1702617274,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf971532b83_93120693 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_assignInScope('html_class', ((string)$_smarty_tpl->tpl_vars['html_class']->value)." te-theme-editor-active" ,false ,2);
}
}
}
