<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:10
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\common\popupbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf97aa1c764_54697232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81f4bf2f73b60f42f1513fd5f19ca471cb6838d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\common\\popupbox.tpl',
      1 => 1702617269,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_657bf97aa1c764_54697232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('edit','view','view','edit','edit','add'));
$_smarty_tpl->_assignInScope('method', (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? "POST" ?? null : $tmp));
$_smarty_tpl->_assignInScope('responsive_dialog_params', '');
if ((isset($_smarty_tpl->tpl_vars['title_start']->value)) && (isset($_smarty_tpl->tpl_vars['title_end']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('t_first', preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title_start']->value));?>
    <?php $_smarty_tpl->_assignInScope('t_second', preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title_end']->value));?>
    <?php $_smarty_tpl->_assignInScope('responsive_dialog_params', "data-ca-dialog-template=\"<span class='title__part-start mobile-hidden'>?: </span><span class='title__part-end'>?</span>\"");?>
    <?php $_smarty_tpl->_assignInScope('responsive_dialog_params', ((string)$_smarty_tpl->tpl_vars['responsive_dialog_params']->value)." data-ca-dialog-text-first=\"".((string)(htmlspecialchars((string)$_smarty_tpl->tpl_vars['t_first']->value, ENT_QUOTES, 'UTF-8', true)))."\"");?>
    <?php $_smarty_tpl->_assignInScope('responsive_dialog_params', ((string)$_smarty_tpl->tpl_vars['responsive_dialog_params']->value)." data-ca-dialog-text-second=\"".((string)(htmlspecialchars((string)$_smarty_tpl->tpl_vars['t_second']->value, ENT_QUOTES, 'UTF-8', true)))."\"");
}
$_smarty_tpl->_assignInScope('popup_params', " id=\"opener_".((string)$_smarty_tpl->tpl_vars['id']->value)."\" data-ca-target-id=\"content_".((string)$_smarty_tpl->tpl_vars['id']->value)."\"");
if (!$_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->_assignInScope('popup_params', ((string)$_smarty_tpl->tpl_vars['popup_params']->value)." ".((string)$_smarty_tpl->tpl_vars['responsive_dialog_params']->value)." data-ca-dialog-title=\"".((string)(smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'"','')))."\"");
}
if (($_smarty_tpl->tpl_vars['runtime']->value['action'] && fn_check_view_permissions($_smarty_tpl->tpl_vars['runtime']->value['action'],$_smarty_tpl->tpl_vars['method']->value)) || (!$_smarty_tpl->tpl_vars['runtime']->value['action'] && fn_check_html_view_permissions($_smarty_tpl->tpl_vars['content']->value,$_smarty_tpl->tpl_vars['method']->value))) {
if ($_smarty_tpl->tpl_vars['act']->value == "edit") {?>
    <?php $_smarty_tpl->_assignInScope('_href', fn_url((($tmp = $_smarty_tpl->tpl_vars['href']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)));?>
    <?php $_smarty_tpl->_assignInScope('default_link_text', $_smarty_tpl->__("edit"));?>
    <?php if (!fn_check_view_permissions($_smarty_tpl->tpl_vars['_href']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('_link_text', $_smarty_tpl->__("view"));?>
        <?php $_smarty_tpl->_assignInScope('default_link_text', $_smarty_tpl->__("view"));?>
    <?php }?>
    <a <?php if ($_smarty_tpl->tpl_vars['edit_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['edit_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="hand <?php if (!$_smarty_tpl->tpl_vars['no_icon_link']->value) {
if ($_smarty_tpl->tpl_vars['update_controller']->value == "addons") {?>icon-cog<?php }
if ($_smarty_tpl->tpl_vars['icon']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');
}
}?> <?php if (!$_smarty_tpl->tpl_vars['is_promo']->value) {?>cm-dialog-opener<?php }
if ($_smarty_tpl->tpl_vars['is_promo']->value) {?>cm-promo-popup<?php }?> <?php if ($_smarty_tpl->tpl_vars['_href']->value && !$_smarty_tpl->tpl_vars['is_promo']->value) {?> <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['opener_ajax_class']->value ?? null)===null||$tmp==='' ? 'cm-ajax' ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['link_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['_href']->value && !$_smarty_tpl->tpl_vars['is_promo']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_href']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['popup_params']->value;?>
 title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("edit") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['drop_left']->value) {?>data-placement="left"<?php }?>><?php if ($_smarty_tpl->tpl_vars['icon']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);
}
echo (($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_link_text']->value ?? null : $tmp);?>
</a>
<?php } elseif ($_smarty_tpl->tpl_vars['act']->value == "edit_outside") {?>
    <a <?php if ($_smarty_tpl->tpl_vars['edit_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['edit_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="hand btn cm-tooltip cm-dialog-opener <?php if ($_smarty_tpl->tpl_vars['_href']->value) {?> <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['opener_ajax_class']->value ?? null)===null||$tmp==='' ? 'cm-ajax' ?? null : $tmp), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['link_class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php if ($_smarty_tpl->tpl_vars['_href']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_href']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['popup_params']->value;?>
 title="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("edit") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['drop_left']->value) {?>data-placement="left"<?php }?>>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_link_text']->value ?? null : $tmp);?>

    </a>
<?php } elseif ($_smarty_tpl->tpl_vars['act']->value == "create") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_onclick'=>$_smarty_tpl->tpl_vars['edit_onclick']->value,'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['id']->value),'but_meta'=>"btn cm-dialog-opener ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_icon'=>$_smarty_tpl->tpl_vars['icon']->value), 0, false);
} elseif ($_smarty_tpl->tpl_vars['act']->value == "notes") {?>
    <a <?php echo $_smarty_tpl->tpl_vars['popup_params']->value;?>
 class="cm-dialog-opener <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>(($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? 'icon-question-sign' ?? null : $tmp)),$_smarty_tpl);?>
</a>
<?php } elseif ($_smarty_tpl->tpl_vars['act']->value == "general") {?>
        <div class="btn-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
">
            <a class="btn cm-dialog-opener <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');?>
 cm-tooltip" <?php echo $_smarty_tpl->tpl_vars['popup_params']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['edit_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['edit_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['icon']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
        </div>
<?php } elseif ($_smarty_tpl->tpl_vars['act']->value == "button") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->tpl_vars['link_text']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_id'=>"opener_".((string)$_smarty_tpl->tpl_vars['id']->value),'but_onclick'=>((string)$_smarty_tpl->tpl_vars['edit_onclick']->value),'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['id']->value),'but_meta'=>"btn cm-dialog-opener"), 0, true);
} elseif ($_smarty_tpl->tpl_vars['act']->value == "link") {?>
    <a class="cm-dialog-opener <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo $_smarty_tpl->tpl_vars['popup_params']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['edit_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['edit_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo (($tmp = $_smarty_tpl->tpl_vars['link_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("add") ?? null : $tmp);?>
</a>
<?php } elseif ($_smarty_tpl->tpl_vars['act']->value == "default") {?>
    <a<?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?> onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
<div class="hidden <?php if (fn_allowed_for("ULTIMATE")) {?>ufa<?php }?>" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }?>

<?php } else {
}
}
}
