<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:19
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\views\index\components\analytics_section\analytics_card\resource_list_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf98322f4b5_16819931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ae76c36006146ce914d429a097f714a737ae1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_card\\resource_list_tabs.tpl',
      1 => 1702617261,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/analytics_section/analytics_card/resource_list.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
  ),
),false)) {
function content_657bf98322f4b5_16819931 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['resource_list_tabs']->value && $_smarty_tpl->tpl_vars['resource_list_tabs']->value['content']) {?><div class="analytics-card-resource-list-tabs" data-ca-analytics-card="resourceList" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['resource_list_tabs']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-resource-list-tabs__tabs" data-ca-analytics-card="resourceListTabs" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['resource_list_tabs']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource_list_tabs']->value['content'], 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
$_tmp_array = isset($_smarty_tpl->tpl_vars['resource_list_tabs']) ? $_smarty_tpl->tpl_vars['resource_list_tabs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['navigation']['tabs'][((string)$_smarty_tpl->tpl_vars['analytics_card']->value['id'])."_".((string)$_smarty_tpl->tpl_vars['resource_list_tabs']->value['id'])."_".((string)$_smarty_tpl->tpl_vars['tab']->value['id'])] = array('title'=>$_smarty_tpl->tpl_vars['tab']->value['title'],'js'=>true);
$_smarty_tpl->_assignInScope('resource_list_tabs', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['tab']) ? $_smarty_tpl->tpl_vars['tab']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = false;
$_smarty_tpl->_assignInScope('tab', $_tmp_array);?><div class="analytics-card-analytics-tabs__tab-content" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['resource_list_tabs']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_card/resource_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('resource_list'=>$_smarty_tpl->tpl_vars['tab']->value), 0, true);
?><!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['resource_list_tabs']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section'],'track'=>true,'navigation'=>$_smarty_tpl->tpl_vars['resource_list_tabs']->value['navigation'],'meta_tabs'=>"analytics-card-resource-list-tabs__tabs-navigation"), 0, false);
?></div></div><?php }
}
}
