<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:52
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\addons\image_zoom\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf92c958816_62273958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '106ce4c4d597fa46ca001e6d5e24647b98824027' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\addons\\image_zoom\\hooks\\index\\scripts.post.tpl',
      1 => 1702623380,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf92c958816_62273958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/addons/image_zoom/lib/easyzoom.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/image_zoom/index.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function (_, $) {
        $.ceEvent('on', 'ce.commoninit', function (context) {
            if (!Modernizr.touchevents) {
                var positionId = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position'], ENT_QUOTES, 'UTF-8');?>
;
                if ('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
' === 'rtl') {
                    positionId = $.ceImageZoom('translateFlyoutPositionToRtl', positionId);
                }

                $('.cm-previewer:not(.cm-previewer-only)', context).each(function (i, elm) {
                    $.ceImageZoom('init', $(elm), positionId);
                });
            }
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/image_zoom/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/image_zoom/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/addons/image_zoom/lib/easyzoom.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/image_zoom/index.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
>
    (function (_, $) {
        $.ceEvent('on', 'ce.commoninit', function (context) {
            if (!Modernizr.touchevents) {
                var positionId = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addons']->value['image_zoom']['cz_zoom_position'], ENT_QUOTES, 'UTF-8');?>
;
                if ('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
' === 'rtl') {
                    positionId = $.ceImageZoom('translateFlyoutPositionToRtl', positionId);
                }

                $('.cm-previewer:not(.cm-previewer-only)', context).each(function (i, elm) {
                    $.ceImageZoom('init', $(elm), positionId);
                });
            }
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}
}
