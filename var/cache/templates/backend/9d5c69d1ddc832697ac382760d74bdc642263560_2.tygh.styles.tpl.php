<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:01
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\views\statuses\components\styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf971a00d32_30154481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d5c69d1ddc832697ac382760d74bdc642263560' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\views\\statuses\\components\\styles.tpl',
      1 => 1702617260,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf971a00d32_30154481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),));
$_smarty_tpl->_assignInScope('statuses', fn_get_statuses($_smarty_tpl->tpl_vars['type']->value));
if ($_smarty_tpl->tpl_vars['statuses']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "styles", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuses']->value, 'status_data', false, 'status');
$_smarty_tpl->tpl_vars['status_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value => $_smarty_tpl->tpl_vars['status_data']->value) {
$_smarty_tpl->tpl_vars['status_data']->do_else = false;
?>
        .<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['type']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
-status-<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['status']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 {
            .buttonBackground(lighten(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 15%), darken(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['status_data']->value['params']['color'], ENT_QUOTES, 'UTF-8');?>
, 5%));
        }
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_function_style(array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'styles'),'type'=>"less"),$_smarty_tpl);?>

<?php }
}
}
