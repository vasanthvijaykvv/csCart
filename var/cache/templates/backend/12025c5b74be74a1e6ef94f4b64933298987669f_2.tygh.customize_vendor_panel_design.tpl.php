<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:07
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\onboarding_guide\steps\customize_vendor_panel_design.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf8ffdecc42_46141148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12025c5b74be74a1e6ef94f4b64933298987669f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\customize_vendor_panel_design.tpl',
      1 => 1702617286,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf8ffdecc42_46141148 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.edit_vendor_panel_style','onboarding_guide.edit_colors','onboarding_guide.edit_structure'));
?>
<div class="onboarding_content_margin--bottom">
  <span class="onboarding_section__progress_text"><?php echo $_smarty_tpl->__("onboarding_guide.edit_vendor_panel_style");?>
</span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom">
  <a href="<?php ob_start();
echo htmlspecialchars((string) urlencode("customization.update_mode&?type=theme_editor&status=enable&return_url=index"), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
echo htmlspecialchars((string) fn_url("onboarding_guide.open_vendor_panel?redirect=".$_prefixVariable5), ENT_QUOTES, 'UTF-8');?>
" class="og-action button button-primary" data-og-action="edit_style" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.edit_colors");?>
 ↗</a>
  <a href="<?php ob_start();
echo htmlspecialchars((string) urlencode("customization.update_mode&?type=block_manager&status=enable&return_url=index"), ENT_QUOTES, 'UTF-8');
$_prefixVariable6=ob_get_clean();
echo htmlspecialchars((string) fn_url("onboarding_guide.open_vendor_panel?redirect=".$_prefixVariable6), ENT_QUOTES, 'UTF-8');?>
" class="og-action button button-secondary" data-og-action="edit_structure" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.edit_structure");?>
 ↗</a>
</div><?php }
}
