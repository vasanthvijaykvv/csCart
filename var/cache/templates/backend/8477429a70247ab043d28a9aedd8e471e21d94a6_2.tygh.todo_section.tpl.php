<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:18
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\views\index\components\todo_section\todo_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf982027625_58289058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8477429a70247ab043d28a9aedd8e471e21d94a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\views\\index\\components\\todo_section\\todo_section.tpl',
      1 => 1702617261,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/todo_section/todo_item.tpl' => 1,
  ),
),false)) {
function content_657bf982027625_58289058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('show_todo_section', (($tmp = $_smarty_tpl->tpl_vars['show_todo_section']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_todo_section']->value && $_smarty_tpl->tpl_vars['todo_data']->value) {?><section class="todo-section"><div class="todo-section__content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todo_data']->value, 'todo_section');
$_smarty_tpl->tpl_vars['todo_section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['todo_section']->value) {
$_smarty_tpl->tpl_vars['todo_section']->do_else = false;
?><div class="todo-section__column todo-section__column--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['todo_section']->value['section'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_section']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todo_section']->value['content'], 'todo_item');
$_smarty_tpl->tpl_vars['todo_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['todo_item']->value) {
$_smarty_tpl->tpl_vars['todo_item']->do_else = false;
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/todo_section/todo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('todo_item'=>$_smarty_tpl->tpl_vars['todo_item']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['todo_section']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></section><?php }
}
}
