<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:44
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\common\price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf9246f0405_10393870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f57cb3b4ceb84356633e7d053948e527c73d9808' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\common\\price.tpl',
      1 => 1702618489,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf9246f0405_10393870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.format_price.php','function'=>'smarty_modifier_format_price',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['General']['alternative_currency'] == "use_selected_and_alternative") {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,false,$_smarty_tpl->tpl_vars['live_editor_name']->value,$_smarty_tpl->tpl_vars['live_editor_phrase']->value);
if ($_smarty_tpl->tpl_vars['secondary_currency']->value != $_smarty_tpl->tpl_vars['primary_currency']->value) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>(<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['is_integer']->value,$_smarty_tpl->tpl_vars['live_editor_name']->value,$_smarty_tpl->tpl_vars['live_editor_phrase']->value);
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>)<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
} else {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['live_editor_name']->value,$_smarty_tpl->tpl_vars['live_editor_phrase']->value);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/price.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/price.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['General']['alternative_currency'] == "use_selected_and_alternative") {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,false,$_smarty_tpl->tpl_vars['live_editor_name']->value,$_smarty_tpl->tpl_vars['live_editor_phrase']->value);
if ($_smarty_tpl->tpl_vars['secondary_currency']->value != $_smarty_tpl->tpl_vars['primary_currency']->value) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>(<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['is_integer']->value,$_smarty_tpl->tpl_vars['live_editor_name']->value,$_smarty_tpl->tpl_vars['live_editor_phrase']->value);
if ($_smarty_tpl->tpl_vars['class']->value) {?><span class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>)<?php if ($_smarty_tpl->tpl_vars['class']->value) {?></span><?php }
}
} else {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true,$_smarty_tpl->tpl_vars['live_editor_name']->value,$_smarty_tpl->tpl_vars['live_editor_phrase']->value);
}
}
}
}
