<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:06
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\addons\onboarding_guide\components\progress.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf8fec74b15_37079318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '243712176e3375e6eeeb31051798e0996d341e53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\addons\\onboarding_guide\\components\\progress.tpl',
      1 => 1702617287,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf8fec74b15_37079318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.completed_steps_progress'));
$_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['onboarding_guide_progress']->value['total_steps']);
$_smarty_tpl->_assignInScope('completed', $_smarty_tpl->tpl_vars['onboarding_guide_progress']->value['completed_steps']);
$_smarty_tpl->_assignInScope('percentage', $_smarty_tpl->tpl_vars['onboarding_guide_progress']->value['percentage']);?>

<div class="onboarding_section__progress" id="og-progress-container">
  <div class="onboarding_section__progress_header">
    <span class="onboarding_section__progress_text" id="og-progress-text"><?php echo $_smarty_tpl->__("onboarding_guide.completed_steps_progress",array("[completed]"=>$_smarty_tpl->tpl_vars['completed']->value,"[total]"=>$_smarty_tpl->tpl_vars['total']->value));?>
</span>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"onboarding_guide:progress_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"onboarding_guide:progress_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="btn-group dropleft">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="dropdown-icon icon-ellipsis-vertical icon-large more-btn"></span>
      </a>
      <ul class="dropdown-menu">
          <li>
            <a href="" id="og-dismiss-button"><?php echo $_smarty_tpl->__('onboarding_guide.dismiss');?>
</a>
          </li>
          <?php if ($_smarty_tpl->tpl_vars['onboarding_guide_progress']->value['completed_steps']) {?>
            <li>
                <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.restart"), ENT_QUOTES, 'UTF-8');?>
" id="og-reset-button"><?php echo $_smarty_tpl->__('onboarding_guide.reset');?>
</a>
            </li>
          <?php }?>
      </ul>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"onboarding_guide:progress_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
  </div>
  <div class="onboarding_section__progress_bar">
    <div class="onboarding_section__progress_bar_line" id="og-progressbar" style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['percentage']->value, ENT_QUOTES, 'UTF-8');?>
%"></div>
  </div>
<!--og-progress-container--></div><?php }
}
