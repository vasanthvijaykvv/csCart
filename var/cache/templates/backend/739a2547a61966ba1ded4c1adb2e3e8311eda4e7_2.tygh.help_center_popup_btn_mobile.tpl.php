<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:11
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\help_center\component\help_center_popup_btn_mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf97b989a74_83275171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '739a2547a61966ba1ded4c1adb2e3e8311eda4e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\help_center\\component\\help_center_popup_btn_mobile.tpl',
      1 => 1702617291,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf97b989a74_83275171 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('help_center.growth_center'));
$_smarty_tpl->_assignInScope('help_center_counter', (($tmp = $_smarty_tpl->tpl_vars['help_center_counter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<button type="button"
    class="help-center-popup-btn-mobile"
    data-ca-help-center="popupBtnMobile"
    data-ca-help-center-counter="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['help_center_counter']->value, ENT_QUOTES, 'UTF-8');?>
"
><?php echo $_smarty_tpl->__("help_center.growth_center");?>
</button>
<?php }
}
