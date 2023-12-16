<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:48
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\addons\discussion\blocks\testimonials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf928841363_03810886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99160effa7a9edbd418fc9cf34cc5720cfd156ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\addons\\discussion\\blocks\\testimonials.tpl',
      1 => 1702623380,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/discussion/views/discussion/components/stars.tpl' => 2,
    'tygh:common/scroller_init_with_quantity.tpl' => 2,
  ),
),false)) {
function content_657bf928841363_03810886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),4=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),5=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion(0,"E",true,$_smarty_tpl->tpl_vars['block']->value['properties']));?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != "D" && $_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

<?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div class="ty-mb-l">
    <div class="ty-scroller-discussion-list">
        <div id="scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
            <div class="ty-discussion-post__content ty-scroller-discussion-list__item">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <a href="<?php echo htmlspecialchars((string) fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])."&post_id=".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])), ENT_QUOTES, 'UTF-8');?>
#post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">

                        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "C" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
                        <div class="ty-discussion-post__message"><?php echo nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['message'],100));?>
</div>
                        <?php }?>

                        <span class="ty-caret-bottom"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>

                    </div>
                </a>

                <span class="ty-discussion-post__author"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                <span class="ty-discussion-post__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "R" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B" && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                    <div class="clearfix ty-discussion-post__rating">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                    </div>
                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init_with_quantity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0, false);
?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/blocks/testimonials.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/blocks/testimonials.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion(0,"E",true,$_smarty_tpl->tpl_vars['block']->value['properties']));?>

<?php if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != "D" && $_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>

<?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-left-open-thin"),$_smarty_tpl);?>
</div>
                <div id="owl_next_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-right-open-thin"),$_smarty_tpl);?>
</div>
            </div>
        </div>
    </div>
<?php }?>

<div class="ty-mb-l">
    <div class="ty-scroller-discussion-list">
        <div id="scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
            <div class="ty-discussion-post__content ty-scroller-discussion-list__item">
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <a href="<?php echo htmlspecialchars((string) fn_url("discussion.view?thread_id=".((string)$_smarty_tpl->tpl_vars['discussion']->value['thread_id'])."&post_id=".((string)$_smarty_tpl->tpl_vars['post']->value['post_id'])), ENT_QUOTES, 'UTF-8');?>
#post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">

                        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "C" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B") {?>
                        <div class="ty-discussion-post__message"><?php echo nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['message'],100));?>
</div>
                        <?php }?>

                        <span class="ty-caret-bottom"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>

                    </div>
                </a>

                <span class="ty-discussion-post__author"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                <span class="ty-discussion-post__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == "R" || $_smarty_tpl->tpl_vars['discussion']->value['type'] == "B" && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                    <div class="clearfix ty-discussion-post__rating">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                    </div>
                <?php }?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init_with_quantity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0, true);
?>

<?php }
}
}
}
