<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:18
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\views\index\components\analytics_section\analytics_data\data_2_1_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf982718978_35467273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92185ba27a5c9a115332de00c1de2cabbad641f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_data\\data_2_1_orders.tpl',
      1 => 1702617262,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf982718978_35467273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.orders','dashboard.analytics_card.view_orders'));
if (!empty($_smarty_tpl->tpl_vars['orders_stat']->value['orders'])) {
$_smarty_tpl->_assignInScope('user_can_view_orders', fn_check_view_permissions("orders.manage",'GET'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "date_range_selected_date", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['calendar_date_format'] === "month_first") {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_from']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_to']->value,"%b %d, %Y"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_from']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');?>
 — <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['time_to']->value,"%d %b %Y"), ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['orders_stat_prev_orders_count']->value > 0) {
$_smarty_tpl->_assignInScope('orders_stat_diff_orders_percent', number_format(((smarty_modifier_count($_smarty_tpl->tpl_vars['orders_stat']->value['prev_orders'])*100)/smarty_modifier_count($_smarty_tpl->tpl_vars['orders_stat']->value['orders'])),0));
} else {
$_smarty_tpl->_assignInScope('orders_stat_diff_orders_percent', "&infin;");
}
$_smarty_tpl->_assignInScope('data_2_1_orders', array('id'=>"analytics_card_orders",'preheader'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'date_range_selected_date'),'is_selected_date'=>true,'title'=>$_smarty_tpl->__("dashboard.analytics_card.orders"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_orders"),'href'=>$_smarty_tpl->tpl_vars['user_can_view_orders']->value ? "orders.manage?is_search=Y&storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)."&period=C&time_from=".((string)$_smarty_tpl->tpl_vars['time_from']->value)."&time_to=".((string)$_smarty_tpl->tpl_vars['time_to']->value) : "orders.manage"),'number'=>smarty_modifier_count($_smarty_tpl->tpl_vars['orders_stat']->value['orders']),'number_dynamics'=>$_smarty_tpl->tpl_vars['orders_stat_diff_orders_percent']->value));
$_smarty_tpl->_assignInScope('data_2_1_orders', $_smarty_tpl->tpl_vars['data_2_1_orders']->value ,false ,2);
}
}
}
