<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:45
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\blocks\products\products_multicolumns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf9253c4808_20056868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ba4d335aa89712949ed093759ef51c3571eb4bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\blocks\\products\\products_multicolumns.tpl',
      1 => 1702618488,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/grid_list.tpl' => 2,
  ),
),false)) {
function content_657bf9253c4808_20056868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'columns'=>$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'],'form_prefix'=>"block_manager",'no_sorting'=>"Y",'no_pagination'=>"Y",'no_ids'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'show_features'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/grid_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'columns'=>$_smarty_tpl->tpl_vars['block']->value['properties']['number_of_columns'],'form_prefix'=>"block_manager",'no_sorting'=>"Y",'no_pagination'=>"Y",'no_ids'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number'],'show_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_rating'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'show_features'=>true,'show_product_labels'=>true,'show_discount_label'=>true,'show_shipping_label'=>true), 0, true);
}
}
}
