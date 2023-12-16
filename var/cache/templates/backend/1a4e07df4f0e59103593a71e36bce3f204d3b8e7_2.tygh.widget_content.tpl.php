<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:11
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\views\setup_wizard\components\widget_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf97bbce702_15612500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a4e07df4f0e59103593a71e36bce3f204d3b8e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\views\\setup_wizard\\components\\widget_content.tpl',
      1 => 1702617259,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf97bbce702_15612500 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('sw.store_setup_wizard_short','sw.marketplace_setup_wizard'));
?>
<div class="hidden">
    <div class="setup-wizard-panel no-js">
        <a class="handle open cm-ajax" id="opener_sw_wizard_opener" data-ca-target-id="sw_wizard_container" data-ca-event-name="setupwizard" href="<?php echo htmlspecialchars((string) fn_url("setup_wizard.manage"), ENT_QUOTES, 'UTF-8');?>
">
            <span class="mobile-visible">
                <?php echo $_smarty_tpl->__("sw.store_setup_wizard_short");?>

            </span>
            <span class="mobile-hidden">
                <?php echo $_smarty_tpl->__("sw.marketplace_setup_wizard");?>

            </span>
        </a>

        <a class="handle close" id="sw_wizard_closer" href="#"></a>
        <div class="setup-wizard-content" id="sw_wizard_container"><!--sw_wizard_container--></div>
    </div>
</div>

<?php }
}
