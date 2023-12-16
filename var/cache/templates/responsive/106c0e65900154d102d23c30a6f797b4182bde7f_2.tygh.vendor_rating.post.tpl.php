<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:38
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\addons\vendor_rating\hooks\companies\vendor_rating.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf91e82d0e6_90923487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '106c0e65900154d102d23c30a6f797b4182bde7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\addons\\vendor_rating\\hooks\\companies\\vendor_rating.post.tpl',
      1 => 1702623380,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_rating/components/relative_vendor_rating.tpl' => 2,
  ),
),false)) {
function content_657bf91e82d0e6_90923487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['show_vendor_rating']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_rating/components/relative_vendor_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['company']->value['relative_vendor_rating']), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_rating/hooks/companies/vendor_rating.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_rating/hooks/companies/vendor_rating.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['show_vendor_rating']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_rating/components/relative_vendor_rating.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating'=>$_smarty_tpl->tpl_vars['company']->value['relative_vendor_rating']), 0, true);
}
}
}
}
