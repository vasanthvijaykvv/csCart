<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:18
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\vendor_debt_payout\hooks\index\analytics_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf982aa9087_03878517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c92c1a75d8dbd140aae0a0db03dedb85b61b599' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\vendor_debt_payout\\hooks\\index\\analytics_data.post.tpl',
      1 => 1702617282,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 1,
    'tygh:addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl' => 1,
  ),
),false)) {
function content_657bf982aa9087_03878517 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('vendor_debt_payout.dashboard.analytics_card.enter_an_amount','vendor_debt_payout.dashboard.analytics_card.refill_balance','vendor_debt_payout.dashboard.analytics_card.suspended_vendors'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "refill_balance", null, null);?><form id="vendor_debt_payout_refill_balance" name="refill_balance" method="post" action="<?php echo htmlspecialchars((string) fn_url("debt.refill_balance"), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php $_smarty_tpl->_assignInScope('amount', '');
if ($_smarty_tpl->tpl_vars['current_balance']->value < 0) {
$_smarty_tpl->_assignInScope('amount', abs($_smarty_tpl->tpl_vars['current_balance']->value));
}?><div id="vendor_debt_payout_refill_amount" class="control-group hidden cm-refill-balance-block"><label class="control-label cm-refill-balance-label" for="elm_vendor_debt_payout_refill_balance"><?php echo $_smarty_tpl->__("vendor_debt_payout.dashboard.analytics_card.enter_an_amount");?>
:</label><div class="controls"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_id'=>"elm_vendor_debt_payout_refill_balance",'input_name'=>"refill_amount",'view'=>"input",'class'=>"input-full cm-refill-balance-amount",'value'=>$_smarty_tpl->tpl_vars['amount']->value), 0, false);
?></div><?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_debt_payout/views/vendor_debt_payout/components/refill_balance_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div><a id="on_vendor_debt_payout_refill_amount" class="btn btn-primary cm-combination"><?php echo $_smarty_tpl->__("vendor_debt_payout.dashboard.analytics_card.refill_balance");?>
</a></form><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_data']->value, 'analytics_column', false, 'analytics_column_key');
$_smarty_tpl->tpl_vars['analytics_column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['analytics_column_key']->value => $_smarty_tpl->tpl_vars['analytics_column']->value) {
$_smarty_tpl->tpl_vars['analytics_column']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['analytics_column']->value, 'analytics_card', false, 'analytics_card_key');
$_smarty_tpl->tpl_vars['analytics_card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['analytics_card_key']->value => $_smarty_tpl->tpl_vars['analytics_card']->value) {
$_smarty_tpl->tpl_vars['analytics_card']->do_else = false;
if ($_smarty_tpl->tpl_vars['analytics_card']->value['id'] === "analytics_card_vendor_current_balance") {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['analytics_column_key']->value][$_smarty_tpl->tpl_vars['analytics_card_key']->value]['content'][] = $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'refill_balance');
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['analytics_column_key']->value][$_smarty_tpl->tpl_vars['analytics_card_key']->value]['scripts'][] = "js/addons/vendor_debt_payout/func.js";
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['analytics_card']->value['id'] === "analytics_card_vendors_with_sales") {
$_tmp_array = isset($_smarty_tpl->tpl_vars['analytics_data']) ? $_smarty_tpl->tpl_vars['analytics_data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['analytics_column_key']->value][$_smarty_tpl->tpl_vars['analytics_card_key']->value]['resource_list']['content'][] = array('id'=>"vendor_debt_payout_analytics_card_vendors_with_sales_suspended_vendors",'name'=>$_smarty_tpl->__("vendor_debt_payout.dashboard.analytics_card.suspended_vendors"),'href'=>"companies.manage?time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&get_suspended=Y",'value'=>$_smarty_tpl->tpl_vars['dashboard_vendors_activity']->value['suspended_vendors'],'value_href'=>"companies.manage?time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value)."&get_suspended=Y");
$_smarty_tpl->_assignInScope('analytics_data', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('analytics_data', $_smarty_tpl->tpl_vars['analytics_data']->value ,false ,2);
}
}
