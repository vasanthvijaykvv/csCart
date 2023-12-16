<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:01
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf97116e4a8_78766678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '260524d0c97f8f731b930930301c3cbfc358f8d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\index.tpl',
      1 => 1702617247,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/styles.tpl' => 1,
    'tygh:buttons/helpers.tpl' => 1,
    'tygh:common/loading_box.tpl' => 2,
    'tygh:components/bottom_panel/bottom_panel.tpl' => 1,
    'tygh:common/notification.tpl' => 1,
    'tygh:menu.tpl' => 1,
    'tygh:views/setup_wizard/components/widget_content.tpl' => 1,
    'tygh:common/comet.tpl' => 1,
    'tygh:views/settings/store_mode.tpl' => 1,
    'tygh:views/settings/trial_expired.tpl' => 1,
    'tygh:views/settings/license_errors.tpl' => 1,
    'tygh:common/scripts.tpl' => 1,
  ),
),false)) {
function content_657bf97116e4a8_78766678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_panel'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:index_container"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:index_container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('pb_is_bottom_panel_open', ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") || $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR") || defined("THEMES_PANEL")) && (($tmp = $_COOKIE['pb_is_bottom_panel_open'] ?? null)===null||$tmp==='' ? "1" ?? null : $tmp));?>
<!DOCTYPE html>
<html lang="en"
    dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="<?php if ($_smarty_tpl->tpl_vars['pb_is_bottom_panel_open']->value) {?>bp-panel-active<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_class']->value, ENT_QUOTES, 'UTF-8');?>
"
>
<head>
<title><?php if ($_smarty_tpl->tpl_vars['page_title']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_title']->value, ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) {
if ($_smarty_tpl->tpl_vars['navigation']->value['selected_tab_title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['navigation']->value['selected_tab_title'], ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['navigation']->value['selected_tab']);
}
if ($_smarty_tpl->tpl_vars['navigation']->value['subsection']) {?> :: <?php if ($_smarty_tpl->tpl_vars['navigation']->value['subsection_title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['navigation']->value['subsection_title'], ENT_QUOTES, 'UTF-8');
} else {
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['navigation']->value['subsection']);
}
}?> - <?php }
echo $_smarty_tpl->__("admin_panel");
}?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/favicon-16x16.png">
<link rel="manifest" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/site.webmanifest">
<link rel="mask-icon" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/favicons/safari-pinned-tab.svg" color="#0fa4d6">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="theme-color" content="#ffffff">

<?php $_smarty_tpl->_subTemplateRender("tygh:common/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (defined("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null) == true) {
echo '<script'; ?>
 data-no-defer>
window.jsErrors = [];
/*window.onerror = function(errorMessage) {
    document.write('<div data-ca-debug="1" style="border: 2px solid red; margin: 2px;">' + errorMessage + '</div>');
}*/
<?php echo '</script'; ?>
>
<?php }?>
</head>
<?php $_smarty_tpl->_subTemplateRender("tygh:buttons/helpers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php ob_start();
if ($_COOKIE['layout_status'] == 1) {
echo "menu-toggled";
}
$_prefixVariable1=ob_get_clean();
ob_start();
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {
echo " vendor-area";
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('class', $_prefixVariable1.$_prefixVariable2);?>
<body <?php if ($_smarty_tpl->tpl_vars['class']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-scroll-to-elm-offset="120">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:body_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:body_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/loading_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['is_bottom_panel_available']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:components/bottom_panel/bottom_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logo'=>$_smarty_tpl->tpl_vars['logos']->value['theme']['image']), 0, false);
?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php ob_start();
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('content', ob_get_clean());
?>

    <div class="main-wrap <?php if ($_smarty_tpl->tpl_vars['is_bottom_panel_available']->value) {?>bp-tygh-main-container<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_container_class']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-element="mainContainer" id="main_column<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['view_mode']->value == 'simple') {?>_login<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value != "simple") {?>
        <div class="admin-content">
            <?php $_smarty_tpl->_subTemplateRender("tygh:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="admin-content-wrap">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:main_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:main_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:main_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <?php if ($_smarty_tpl->tpl_vars['is_setup_wizard_panel_available']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/setup_wizard/components/widget_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

                <?php echo (($tmp = $_smarty_tpl->tpl_vars['stats']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

            </div>
        </div>
        <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }?>

    <!--main_column<?php if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] || $_smarty_tpl->tpl_vars['view_mode']->value == 'simple') {?>_login<?php }?>--></div>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/comet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])) {?>
        <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars((string) fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'UTF-8');?>
" />
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && fn_check_permissions('settings','change_store_mode','admin','POST')) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/settings/store_mode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show'=>$_smarty_tpl->tpl_vars['show_sm_dialog']->value), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/settings/trial_expired.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show'=>$_smarty_tpl->tpl_vars['show_trial_dialog']->value), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/settings/license_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('show'=>$_smarty_tpl->tpl_vars['show_license_errors_dialog']->value), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:after_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:after_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:after_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/loading_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:body_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</body>
</html>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:index_container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
