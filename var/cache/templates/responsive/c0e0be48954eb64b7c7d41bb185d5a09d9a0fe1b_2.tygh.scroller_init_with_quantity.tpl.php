<?php
/* Smarty version 4.1.1, created on 2023-12-14 22:58:48
  from 'C:\xampp\htdocs\multivendor_v4.17.2\design\themes\responsive\templates\common\scroller_init_with_quantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_657bf9284cd915_19769838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0e0be48954eb64b7c7d41bb185d5a09d9a0fe1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\multivendor_v4.17.2\\design\\themes\\responsive\\templates\\common\\scroller_init_with_quantity.tpl',
      1 => 1702618489,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_657bf9284cd915_19769838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\multivendor_v4.17.2\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next','prev_page','next'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            // default setting of carousel
            itemsDesktop = 3,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        <?php }?>

        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page'] == "Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically'] == "Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = 1000 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "N") {?>
                navigation: true,
                navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
'],
                <?php }?>
                pagination: false,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.scroller_init_with_quantity.beforeInit', [this]);
                },
            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });

            <?php } else { ?>
            });
            <?php }?>

        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scroller_init_with_quantity.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/scroller_init_with_quantity.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            // default setting of carousel
            itemsDesktop = 3,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        <?php }?>

        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page'] == "Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically'] == "Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = 1000 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
',
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "N") {?>
                navigation: true,
                navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
'],
                <?php }?>
                pagination: false,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.scroller_init_with_quantity.beforeInit', [this]);
                },
            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });

            <?php } else { ?>
            });
            <?php }?>

        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
