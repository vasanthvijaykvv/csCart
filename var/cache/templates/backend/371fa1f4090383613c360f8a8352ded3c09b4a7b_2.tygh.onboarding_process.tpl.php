<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:08
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\onboarding_guide\steps\onboarding_process.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf90035e364_78986735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '371fa1f4090383613c360f8a8352ded3c09b4a7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\onboarding_process.tpl',
      1 => 1702617287,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf90035e364_78986735 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.customize_onboarding_process','onboarding_guide.walk_the_seller_path'));
?>
<div class="onboarding_content_margin--bottom">
  <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.customize_onboarding_process");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom">
  <a href="<?php echo htmlspecialchars((string) fn_url("profiles.act_as_user?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])."&area=C&redirect_url=companies.apply_for_vendor",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" class="og-step-complete button button-primary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.walk_the_seller_path");?>
 ↗</a>
</div>

<?php }
}
