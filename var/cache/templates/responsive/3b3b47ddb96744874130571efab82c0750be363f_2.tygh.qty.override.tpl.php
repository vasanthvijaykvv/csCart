<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:44
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\addons\product_variations\hooks\products\qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf924993774_52870039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b3b47ddb96744874130571efab82c0750be363f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\products\\qty.override.tpl',
      1 => 1702623380,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf924993774_52870039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_select_variations_button', (($tmp = $_smarty_tpl->tpl_vars['show_select_variations_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['has_child_variations'] && $_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    &nbsp;
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/qty.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/qty.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_select_variations_button', (($tmp = $_smarty_tpl->tpl_vars['show_select_variations_button']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if (!$_smarty_tpl->tpl_vars['details_page']->value && $_smarty_tpl->tpl_vars['product']->value['has_child_variations'] && $_smarty_tpl->tpl_vars['show_select_variations_button']->value) {?>
    &nbsp;
<?php }
}
}
}
