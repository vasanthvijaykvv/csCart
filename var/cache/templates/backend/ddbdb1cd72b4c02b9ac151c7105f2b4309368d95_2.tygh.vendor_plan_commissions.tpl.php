<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:08
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\onboarding_guide\steps\vendor_plan_commissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf900297cf0_82474716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddbdb1cd72b4c02b9ac151c7105f2b4309368d95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\vendor_plan_commissions.tpl',
      1 => 1702617287,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf900297cf0_82474716 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.set_up_seller_plans_description','onboarding_guide.set_up_seller_plans','onboarding_guide.view_seller_plans_description','onboarding_guide.view_seller_plans'));
?>
<div class="onboarding_content_margin--bottom">
  <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.set_up_seller_plans_description");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
  <a href="<?php echo htmlspecialchars((string) fn_url("vendor_plans.manage"), ENT_QUOTES, 'UTF-8');?>
" class="button button-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.set_up_seller_plans");?>
</a>
</div>

<div class="onboarding_content_margin--bottom">
  <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.view_seller_plans_description");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom">
  <a href="<?php echo htmlspecialchars((string) fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C&redirect_url=companies.vendor_plans",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" class="og-step-complete button button-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.view_seller_plans");?>
 ↗</a>
</div>

<?php }
}
