<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:49
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\blocks\safe_smarty_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf9298b7908_97721800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af096f958331e1bb8df14fa07a64ddf34779359c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\blocks\\safe_smarty_block.tpl',
      1 => 1702618488,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf9298b7908_97721800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.live_edit.php','function'=>'smarty_function_live_edit',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.safe_eval_string.php','function'=>'smarty_function_safe_eval_string',),2=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'phrase'=>$_smarty_tpl->tpl_vars['content']->value,'need_render'=>true),$_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo smarty_function_safe_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?></div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/safe_smarty_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/safe_smarty_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'phrase'=>$_smarty_tpl->tpl_vars['content']->value,'need_render'=>true),$_smarty_tpl);?>
 data-ca-live-editor-object-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-live-editor-object-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['object_type'], ENT_QUOTES, 'UTF-8');?>
"><?php }
echo smarty_function_safe_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);
if (!$_smarty_tpl->tpl_vars['no_wrap']->value) {?></div><?php }
}
}
}
