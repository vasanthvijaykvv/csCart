<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:18
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\vendor_debt_payout\views\vendor_debt_payout\components\refill_balance_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf982b101f4_92724466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c19b43d2ec3d579880f486292dabdd9ea4e0910' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\vendor_debt_payout\\views\\vendor_debt_payout\\components\\refill_balance_button.tpl',
      1 => 1702617282,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf982b101f4_92724466 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.refill_balance'));
ob_start();
echo $_smarty_tpl->__("vendor_debt_payout.refill_balance");
$_prefixVariable24=ob_get_clean();
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"list",'class'=>"btn btn-primary cm-new-window",'form'=>"refill_balance",'dispatch'=>"dispatch[debt.refill_balance]",'text'=>$_prefixVariable24), true);
}
}
