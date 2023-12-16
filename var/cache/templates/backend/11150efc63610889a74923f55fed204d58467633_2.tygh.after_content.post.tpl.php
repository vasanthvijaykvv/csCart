<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:12
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\vendor_panel_configurator\hooks\index\after_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf97c4454a4_21593575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11150efc63610889a74923f55fed204d58467633' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\vendor_panel_configurator\\hooks\\index\\after_content.post.tpl',
      1 => 1702617274,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/theme_editor.tpl' => 1,
  ),
),false)) {
function content_657bf97c4454a4_21593575 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/theme_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
