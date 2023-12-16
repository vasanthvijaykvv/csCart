<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:07
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\onboarding_guide\steps\customize_storefront_design.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf8ffc4ecd0_29505582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43f5869d6904b441663571b63c22cf9dcf91b9fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\customize_storefront_design.tpl',
      1 => 1702617286,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf8ffc4ecd0_29505582 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.sb_make_changes_on_the_fly_description','onboarding_guide.make_changes_on_the_fly_description','onboarding_guide.modify_colors_fonts_backgrounds','onboarding_guide.edit_texts','onboarding_guide.edit_blocks'));
?>
<div class="onboarding_content_margin--bottom_x2">
  <span class="onboarding_section__progress_text">
    <?php if ((!empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>
      <?php echo $_smarty_tpl->__("onboarding_guide.sb_make_changes_on_the_fly_description");?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->__("onboarding_guide.make_changes_on_the_fly_description");?>

    <?php }?>
  </span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
  <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.customize_storefront?type=theme_editor"), ENT_QUOTES, 'UTF-8');?>
" class="button button-primary og-action" data-og-action="edit_style" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.modify_colors_fonts_backgrounds");?>
 ↗</a>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
  <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.customize_storefront?type=live_editor"), ENT_QUOTES, 'UTF-8');?>
" class="button button-primary og-action" data-og-action="edit_texts" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.edit_texts");?>
 ↗</a>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
  <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.customize_storefront?type=block_manager"), ENT_QUOTES, 'UTF-8');?>
" class="button button-primary og-action" data-og-action="edit_blocks" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.edit_blocks");?>
 ↗</a>
</div>
<?php }
}
