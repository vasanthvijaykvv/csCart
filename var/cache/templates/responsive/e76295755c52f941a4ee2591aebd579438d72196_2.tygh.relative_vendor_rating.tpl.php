<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:38
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\addons\vendor_rating\components\relative_vendor_rating.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf91e926c48_71819879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e76295755c52f941a4ee2591aebd579438d72196' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\addons\\vendor_rating\\components\\relative_vendor_rating.tpl',
      1 => 1702623380,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf91e926c48_71819879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_icon', true);
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit'] === $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] === $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit'] && $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit'] === "0") {?>
    <?php $_smarty_tpl->_assignInScope('show_icon', false);
}
if ($_smarty_tpl->tpl_vars['show_icon']->value) {?>
    <span class="ty-vendor-rating">
        <?php if ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit'] && $_smarty_tpl->tpl_vars['rating']->value < $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable18=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--bronze",'title'=>$_prefixVariable18.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->tpl_vars['rating']->value < $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable19=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--silver",'title'=>$_prefixVariable19.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable20=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--gold",'title'=>$_prefixVariable20.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php }?>
    </span>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_rating/components/relative_vendor_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_rating/components/relative_vendor_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_icon', true);
if ($_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit'] === $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] === $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit'] && $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit'] === "0") {?>
    <?php $_smarty_tpl->_assignInScope('show_icon', false);
}
if ($_smarty_tpl->tpl_vars['show_icon']->value) {?>
    <span class="ty-vendor-rating">
        <?php if ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['bronze_rating_lower_limit'] && $_smarty_tpl->tpl_vars['rating']->value < $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable21=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--bronze",'title'=>$_prefixVariable21.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['silver_rating_lower_limit'] && $_smarty_tpl->tpl_vars['rating']->value < $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable22=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--silver",'title'=>$_prefixVariable22.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php } elseif ($_smarty_tpl->tpl_vars['rating']->value >= $_smarty_tpl->tpl_vars['addons']->value['vendor_rating']['gold_rating_lower_limit']) {?>
            <?php ob_start();
echo $_smarty_tpl->__('vendor_rating.vendor_rating');
$_prefixVariable23=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-vendor-rating-icon ty-vendor-rating-icon--gold",'title'=>$_prefixVariable23.": ".((string)$_smarty_tpl->tpl_vars['rating']->value)."%"),$_smarty_tpl);?>

        <?php }?>
    </span>
<?php }
}
}
}
