<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:24
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\meta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf910c59939_93119154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0364b21b0b05c71a0a8c46c52cb317bf192d92f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\meta.tpl',
      1 => 1702618489,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf910c59939_93119154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:meta"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:meta"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['display_base_href']->value) {?>
<base href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/" />
<?php }?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo htmlspecialchars((string) (defined('CHARSET') ? constant('CHARSET') : null), ENT_QUOTES, 'UTF-8');?>
" data-ca-mode="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store_trigger']->value, ENT_QUOTES, 'UTF-8');?>
" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:meta_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:meta_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<meta name="description" content="<?php echo htmlspecialchars((string) html_entity_decode((($tmp = $_smarty_tpl->tpl_vars['meta_description']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] ?? null : $tmp),(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8"), ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:meta_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<meta name="keywords" content="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['meta_keywords']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_keywords'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="format-detection" content="telephone=no">
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:meta"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo $_smarty_tpl->tpl_vars['location_data']->value['custom_html'];?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="meta.tpl" id="<?php echo smarty_function_set_id(array('name'=>"meta.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:meta"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:meta"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['display_base_href']->value) {?>
<base href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_location'], ENT_QUOTES, 'UTF-8');?>
/" />
<?php }?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo htmlspecialchars((string) (defined('CHARSET') ? constant('CHARSET') : null), ENT_QUOTES, 'UTF-8');?>
" data-ca-mode="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store_trigger']->value, ENT_QUOTES, 'UTF-8');?>
" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:meta_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:meta_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<meta name="description" content="<?php echo htmlspecialchars((string) html_entity_decode((($tmp = $_smarty_tpl->tpl_vars['meta_description']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] ?? null : $tmp),(defined('ENT_COMPAT') ? constant('ENT_COMPAT') : null),"UTF-8"), ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:meta_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<meta name="keywords" content="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['meta_keywords']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_keywords'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta name="format-detection" content="telephone=no">
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:meta"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo $_smarty_tpl->tpl_vars['location_data']->value['custom_html'];?>

<?php }
}
}
