<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:44
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\addons\wishlist\hooks\products\product_name.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf9240add56_57890934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3980a7d81b39f2fefb01147bfe3afa539a400a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\products\\product_name.override.tpl',
      1 => 1702623380,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf9240add56_57890934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.live_edit.php','function'=>'smarty_function_live_edit',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {
if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];
}
$_prefixVariable32=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_prefixVariable32), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }
} elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];
}
$_prefixVariable33=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_prefixVariable33), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],44,"...",true);
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }
}
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_name.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_name.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {
if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];
}
$_prefixVariable34=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_prefixVariable34), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }
} elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['combination']) {
echo "&combination=";
echo (string)$_smarty_tpl->tpl_vars['product']->value['combination'];
}
$_prefixVariable35=ob_get_clean();
echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']).$_prefixVariable35), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product']), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],44,"...",true);
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }
}
}
}
}
}
