<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:07
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\onboarding_guide\steps\manage_sellers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf8ffd21992_60300934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '377aefd5546f29be33aec88ea56441c1b97a3a88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\manage_sellers.tpl',
      1 => 1702617287,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf8ffd21992_60300934 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.create_vendor_description','onboarding_guide.create_one_vendor','onboarding_guide.view_storefront'));
?>
<div class="onboarding_content_margin--bottom">
  <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.create_vendor_description");?>
</span>
</div>
<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
  <a href="<?php echo htmlspecialchars((string) fn_url("companies.add"), ENT_QUOTES, 'UTF-8');?>
" class="button button-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.create_one_vendor");?>
 ↗</a>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom">
  <a href="<?php echo htmlspecialchars((string) fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C&redirect_url=companies.catalog",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" class="og-step-complete button button-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.view_storefront");?>
 ↗</a>
</div><?php }
}
