<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:25
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\common\styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf91152b528_44916671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7522c563c7a4a992024fc2a3c8d48a1fa36fe8af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\common\\styles.tpl',
      1 => 1702618489,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf91152b528_44916671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\block.styles.php','function'=>'smarty_block_styles',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),3=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('styles', array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value));
$_block_repeat=true;
echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:styles"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
    <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/supports.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/responsive.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>


        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/design_mode.css"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/wysiwyg.less"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/theme_editor.css"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/components/block_manager.less"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
        <?php echo smarty_function_style(array('src'=>"tygh/rtl.less"),$_smarty_tpl);?>

    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:styles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/styles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/styles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('styles', array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value));
$_block_repeat=true;
echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:styles"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
    <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/supports.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/responsive.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>


        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/design_mode.css"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/wysiwyg.less"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/theme_editor.css"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/components/block_manager.less"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
        <?php echo smarty_function_style(array('src'=>"tygh/rtl.less"),$_smarty_tpl);?>

    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:styles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
