<?php
/* Smarty version 4.1.1, created on 2023-12-14 23:00:11
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\views\block_manager\frontend_render\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf97b625693_20365049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa3c079187b9e27dd655d5ac4267e2dcf413f70e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\views\\block_manager\\frontend_render\\block.tpl',
      1 => 1702617267,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:views/block_manager/frontend_render/components/block_menu.tpl' => 1,
  ),
),false)) {
function content_657bf97b625693_20365049 (Smarty_Internal_Template $_smarty_tpl) {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
        <?php $_smarty_tpl->_assignInScope('tag', (($tmp = $_smarty_tpl->tpl_vars['tag']->value ?? null)===null||$tmp==='' ? "div" ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('is_clearfix_class', (($tmp = $_smarty_tpl->tpl_vars['is_clearfix']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp) ? "clearfix" : '');?>
        <<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
 class="<?php if ($_smarty_tpl->tpl_vars['block']->value['status'] === "D") {?>bm-block-manager__block--disabled<?php }?>
            bm-block-manager__block bm-block-manager__block--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['location_data']->value['dispatch'], ENT_QUOTES, 'UTF-8');?>

            <?php if ($_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                bm-block-manager__block--draggable
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}?>
            <?php if ($_smarty_tpl->tpl_vars['content_alignment']->value == "RIGHT") {?> ty-float-right
            <?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value == "LEFT") {?> ty-float-left<?php }?>"
            data-ca-block-manager-snapping-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['snapping_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php $_smarty_tpl->_subTemplateRender("backend:views/block_manager/frontend_render/components/block_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="bm-block-manager__block-content <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_clearfix_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    <?php }
}
}
}
