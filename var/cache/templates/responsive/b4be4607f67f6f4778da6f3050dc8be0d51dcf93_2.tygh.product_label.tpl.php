<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:46
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\views\products\components\product_label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf9266cf371_76917398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4be4607f67f6f4778da6f3050dc8be0d51dcf93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\views\\products\\components\\product_label.tpl',
      1 => 1702618491,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf9266cf371_76917398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['label_href']->value) {?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item ty-product-labels__item--link <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['label_icon']->value)." ty-product-labels__icon"),$_smarty_tpl);
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </a>
<?php } else { ?>
        <div <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['label_icon']->value)." ty-product-labels__icon"),$_smarty_tpl);
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_label.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_label.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['label_href']->value) {?>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_href']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item ty-product-labels__item--link <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['label_icon']->value)." ty-product-labels__icon"),$_smarty_tpl);
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </a>
<?php } else { ?>
        <div <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-product-labels__item <?php if ($_smarty_tpl->tpl_vars['label_mini']->value) {?>ty-product-labels__item--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_rounded']->value) {?>ty-product-labels__item--rounded<?php }?> <?php if ($_smarty_tpl->tpl_vars['label_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
        <div class="ty-product-labels__content"><?php if ($_smarty_tpl->tpl_vars['label_icon']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['label_icon']->value)." ty-product-labels__icon"),$_smarty_tpl);
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_text']->value, ENT_QUOTES, 'UTF-8');?>
</div>
    </div>
<?php }
}
}
}
