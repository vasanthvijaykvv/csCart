<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:07
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\onboarding_guide\steps\personalize_marketplace\tabs\tab_3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf8ffa98dc9_15146616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a5229269b728f28995ad163b67f6945f5423f19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\personalize_marketplace\\tabs\\tab_3.tpl',
      1 => 1702617287,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/email_templates/preview.tpl' => 1,
  ),
),false)) {
function content_657bf8ffa98dc9_15146616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.set_default_currency','onboarding_guide.manage_currencies','onboarding_guide.set_default_languages','onboarding_guide.manage_languages','onboarding_guide.sb_preview_an_email_description','onboarding_guide.preview_an_email_description','onboarding_guide.preview_an_email','onboarding_guide.back'));
?>
<div class="onboarding_content_margin--bottom_x2">
  <div class="onboarding_section__progress_title_text mb4"><?php echo $_smarty_tpl->__("onboarding_guide.set_default_currency");?>
</div>
  <a href="<?php echo htmlspecialchars((string) fn_url("currencies.manage"), ENT_QUOTES, 'UTF-8');?>
" class="button button-secondary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.manage_currencies");?>
 ↗</a>
</div>
<div class="onboarding_content_margin--bottom_x3">
  <div class="onboarding_section__progress_title_text mb4"><?php echo $_smarty_tpl->__("onboarding_guide.set_default_languages");?>
</div>
  <a href="<?php echo htmlspecialchars((string) fn_url("languages.manage"), ENT_QUOTES, 'UTF-8');?>
" class="button button-secondary" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.manage_languages");?>
 ↗</a>
</div>

<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="email_template_form" class="onboarding_content_margin--bottom_x3">
  <input type="hidden" name="result_ids" value="preview_dialog" />
  <input type="hidden" name="template_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['preview_email_template_id'], ENT_QUOTES, 'UTF-8');?>
" />
  <p class="onboarding_section__progress_text mb4">
    <?php if ((!empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>
      <?php echo $_smarty_tpl->__("onboarding_guide.sb_preview_an_email_description");?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->__("onboarding_guide.preview_an_email_description");?>

    <?php }?>
  </p>
  <a class="og-step-complete button button-primary cm-process-items cm-submit cm-ajax cm-form-dialog-opener" data-ca-target-form="email_template_form" data-ca-dispatch="dispatch[email_templates.preview]"><?php echo $_smarty_tpl->__("onboarding_guide.preview_an_email");?>
</a>
</form>

<div class="onboarding_section__action_block">
  <button data-og-tab-navigation="2" type="button" class="button button-primary tab-navigation"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-long-arrow-left"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->__("onboarding_guide.back");?>
</button>
</div>
<?php $_smarty_tpl->_subTemplateRender("tygh:views/email_templates/preview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('preview'=>array()), 0, false);
}
}
