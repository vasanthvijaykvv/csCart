<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:18
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\views\index\components\analytics_section\analytics_data\data_1_2_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf9826d20e5_03784407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3afdf4484dfd0ce35e20d2f08b74cdcea17819d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_data\\data_1_2_products.tpl',
      1 => 1702617262,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf9826d20e5_03784407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.active_products','dashboard.analytics_card.view_products','dashboard.analytics_card.products_details','dashboard.analytics_card.out_of_stock'));
if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['products'])) {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ObjectStatuses::ACTIVE"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProductTracking::TRACK"), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("ProductTracking::TRACK"), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('data_1_2_products', array('id'=>"analytics_card_products",'title'=>$_smarty_tpl->__("dashboard.analytics_card.active_products"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_products"),'href'=>"products.manage&status=".$_prefixVariable3),'number'=>number_format($_smarty_tpl->tpl_vars['general_stats']->value['products']['total_products']),'resource_list'=>array('id'=>"analytics_card_products_resource_list",'title'=>$_smarty_tpl->__("dashboard.analytics_card.products_details"),'content'=>array(array('id'=>"analytics_card_products_out_of_stock",'name'=>$_smarty_tpl->__("dashboard.analytics_card.out_of_stock"),'href'=>"products.manage?amount_from=&amount_to=0&tracking[0]=".$_prefixVariable4,'value'=>number_format($_smarty_tpl->tpl_vars['general_stats']->value['products']['out_of_stock_products']),'value_href'=>"products.manage?amount_from=&amount_to=0&tracking[0]=".$_prefixVariable5)))));
$_smarty_tpl->_assignInScope('data_1_2_products', $_smarty_tpl->tpl_vars['data_1_2_products']->value ,false ,2);
}
}
}
