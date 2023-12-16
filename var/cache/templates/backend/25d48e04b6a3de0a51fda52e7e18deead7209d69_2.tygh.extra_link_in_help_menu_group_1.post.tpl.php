<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:04
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\onboarding_guide\hooks\bottom_panel\extra_link_in_help_menu_group_1.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf974777266_62732289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d48e04b6a3de0a51fda52e7e18deead7209d69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\onboarding_guide\\hooks\\bottom_panel\\extra_link_in_help_menu_group_1.post.tpl',
      1 => 1702617287,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf974777266_62732289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.reset_onboarding'));
if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && $_smarty_tpl->tpl_vars['auth']->value['is_root'] === smarty_modifier_enum("YesNo::YES") && (fn_onboarding_guide_has_progress() || fn_onboarding_guide_is_dismissed())) {?>
<a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.restart"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("onboarding_guide.reset_onboarding");?>
</a>
<?php }
}
}
