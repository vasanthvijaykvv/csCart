<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:07
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\backend\templates\common\icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf8ff06dc89_69298921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e96eac80848ccf78e13f5fd5f4a895132825b377' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\backend\\templates\\common\\icon.tpl',
      1 => 1702617268,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf8ff06dc89_69298921 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['class']->value) {?><span 
        class="cs-icon <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>
        <?php if (fn_is_rtl_language()) {?>
            dir="rtl"
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'data_value', false, 'data_name');
$_smarty_tpl->tpl_vars['data_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_name']->value => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['data_value']->value) {?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    ><?php if ($_smarty_tpl->tpl_vars['icon_text']->value) {
echo $_smarty_tpl->tpl_vars['icon_text']->value;
}?></span><?php }
}
}
