<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:49
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\addons\gdpr\componentes\agreement_checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf92929dbc9_47866684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51e23c4d1cba91a8eb641a5481828c0ab19950b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\addons\\gdpr\\componentes\\agreement_checkbox.tpl',
      1 => 1702623380,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
  ),
),false)) {
function content_657bf92929dbc9_47866684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('gdpr.full_agreement','gdpr.full_agreement'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->isNeeded($_smarty_tpl->tpl_vars['type']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('show_agreement', true ,false ,2);?>
    <?php if (!$_smarty_tpl->tpl_vars['tooltip_only']->value) {?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['suffix']->value) {
echo "_";
echo (string)$_smarty_tpl->tpl_vars['suffix']->value;
}
$_prefixVariable40=ob_get_clean();
$_smarty_tpl->_assignInScope('input_id', (($tmp = $_smarty_tpl->tpl_vars['input_id']->value ?? null)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->tpl_vars['type']->value).$_prefixVariable40 ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('gdpr_target_elem', ((string)$_smarty_tpl->tpl_vars['input_id']->value)."_label");?>

        <div class="ty-gdpr-agreement <?php if ($_smarty_tpl->tpl_vars['hidden']->value) {?>hidden<?php }?>" data-ca-gdpr-agreement="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <label
                for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_label"
                class="cm-gdpr-agreement-label <?php if ($_smarty_tpl->tpl_vars['agreement_required']->value) {?>cm-gdpr-check-agreement <?php }?>checkbox ty-gdpr-agreement--label"
                <?php if ($_smarty_tpl->tpl_vars['target_node']->value) {?>data-ca-gdpr-target-elem="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_node']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            >
                <input
                    type="checkbox"
                    id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->tpl_vars['type']->value)."]" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['input_value']->value ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-agreement checkbox<?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
                    <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?>
                    data-ca-error-message-target-node="#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_error_wrapper"
                />
            </label>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content_for_popup", null, null);?>
                <div class="ty-gdpr-popup" id="gdpr_popup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gdpr_target_elem']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-gdpr-popup-content">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"gdpr:popup_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"gdpr:popup_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getFullAgreement($_smarty_tpl->tpl_vars['type']->value);?>

                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"gdpr:popup_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("gdpr.full_agreement"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content_for_popup'),'link_text'=>$_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getShortAgreement($_smarty_tpl->tpl_vars['type']->value),'link_meta'=>$_smarty_tpl->tpl_vars['link_popup_class']->value,'id'=>"gdpr_popup_".((string)$_smarty_tpl->tpl_vars['input_id']->value)."_label"), 0, false);
?>
            <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_error_wrapper"></div>
        </div>

        <?php echo '<script'; ?>
>
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-gdpr-check-agreement',
                    message: '<?php echo strtr((string)$_smarty_tpl->__('gdpr.agreement_required_error'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });

                $.ceEvent('on', 'ce.commoninit', function(context) {
                    $(context).find('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('change', function (e) {
                        var $item = $(e.target);
                        $.ceEvent('trigger', 'ce.gdpr_agreement_accepted', [$item, context]);
                    });
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/gdpr/componentes/agreement_checkbox.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/gdpr/componentes/agreement_checkbox.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['type']->value && $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->isNeeded($_smarty_tpl->tpl_vars['type']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('show_agreement', true ,false ,2);?>
    <?php if (!$_smarty_tpl->tpl_vars['tooltip_only']->value) {?>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['suffix']->value) {
echo "_";
echo (string)$_smarty_tpl->tpl_vars['suffix']->value;
}
$_prefixVariable41=ob_get_clean();
$_smarty_tpl->_assignInScope('input_id', (($tmp = $_smarty_tpl->tpl_vars['input_id']->value ?? null)===null||$tmp==='' ? "gdpr_agreements_".((string)$_smarty_tpl->tpl_vars['type']->value).$_prefixVariable41 ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('gdpr_target_elem', ((string)$_smarty_tpl->tpl_vars['input_id']->value)."_label");?>

        <div class="ty-gdpr-agreement <?php if ($_smarty_tpl->tpl_vars['hidden']->value) {?>hidden<?php }?>" data-ca-gdpr-agreement="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <label
                for="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_label"
                class="cm-gdpr-agreement-label <?php if ($_smarty_tpl->tpl_vars['agreement_required']->value) {?>cm-gdpr-check-agreement <?php }?>checkbox ty-gdpr-agreement--label"
                <?php if ($_smarty_tpl->tpl_vars['target_node']->value) {?>data-ca-gdpr-target-elem="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_node']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            >
                <input
                    type="checkbox"
                    id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "gdpr_agreements[".((string)$_smarty_tpl->tpl_vars['type']->value)."]" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['input_value']->value ?? null)===null||$tmp==='' ? "Y" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-agreement checkbox<?php if ($_smarty_tpl->tpl_vars['meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?>"
                    <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
"<?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['checked']->value) {?>checked="checked"<?php }?>
                    data-ca-error-message-target-node="#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_error_wrapper"
                />
            </label>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content_for_popup", null, null);?>
                <div class="ty-gdpr-popup" id="gdpr_popup_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['gdpr_target_elem']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-gdpr-popup-content">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"gdpr:popup_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"gdpr:popup_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php echo $_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getFullAgreement($_smarty_tpl->tpl_vars['type']->value);?>

                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"gdpr:popup_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </div>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->__("gdpr.full_agreement"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content_for_popup'),'link_text'=>$_smarty_tpl->tpl_vars['app']->value["addons.gdpr.service"]->getShortAgreement($_smarty_tpl->tpl_vars['type']->value),'link_meta'=>$_smarty_tpl->tpl_vars['link_popup_class']->value,'id'=>"gdpr_popup_".((string)$_smarty_tpl->tpl_vars['input_id']->value)."_label"), 0, true);
?>
            <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
_error_wrapper"></div>
        </div>

        <?php echo '<script'; ?>
>
            (function(_, $) {
                $.ceFormValidator('registerValidator', {
                    class_name: 'cm-gdpr-check-agreement',
                    message: '<?php echo strtr((string)$_smarty_tpl->__('gdpr.agreement_required_error'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                    func: function(id) {
                        return $('#' + id).prop('checked');
                    }
                });

                $.ceEvent('on', 'ce.commoninit', function(context) {
                    $(context).find('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('change', function (e) {
                        var $item = $(e.target);
                        $.ceEvent('trigger', 'ce.gdpr_agreement_accepted', [$item, context]);
                    });
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
>
    <?php }
}
}
}
}
