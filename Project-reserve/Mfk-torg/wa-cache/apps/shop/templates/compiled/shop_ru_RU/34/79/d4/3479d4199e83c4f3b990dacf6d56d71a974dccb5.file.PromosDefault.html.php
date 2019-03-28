<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:55:35
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/promos/PromosDefault.html" */ ?>
<?php /*%%SmartyHeaderCode:867611315c8f4ef771acb0-73172211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3479d4199e83c4f3b990dacf6d56d71a974dccb5' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/promos/PromosDefault.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '867611315c8f4ef771acb0-73172211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'storefronts' => 0,
    's' => 0,
    'storefront' => 0,
    'is_disabled' => 0,
    'disabled_count' => 0,
    'promos' => 0,
    'p' => 0,
    'promos_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4ef77751d7_53605355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4ef77751d7_53605355')) {function content_5c8f4ef77751d7_53605355($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><div class="block double-padded">
    <h1>Промо</h1>

    <div class="s-alert">
        <a href="#" class="s-alert-close">&times;</a>
        Промокарточки — это эффективный и очень простой способ представления акций и специальных предложений на главной странице интернет-магазина. Каждая промокарточка представляет собой изображение, заголовок и ссылку.
        <br><br>
        <i class="icon10 exclamation"></i> <em><?php echo sprintf('Если вы не видите промокарточки на витрине вашего интернет-магазина, возможно, вы используете устаревшую версию темы дизайна (шаблона home.html). Пожалуйста, <a href="%s" target="_blank">следуйте инструкции по обновлению шаблона дизайна</a> для вывода промокарточек.','http://www.shop-script.ru/help/3068/integrating-promos-to-your-shop-script-5-theme/');?>
</em>
    </div>

    <ul class="menu-h">
        <li>Витрина:</li>
        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefronts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
            <li data-storefront="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['storefront'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['s']->value['storefront']==$_smarty_tpl->tpl_vars['storefront']->value['storefront']){?> class="selected"<?php }?>>
                <a href="#/promos/storefront=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['storefront'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <span class="hint"><?php echo $_smarty_tpl->tpl_vars['s']->value['count'];?>
</span></a>
            </li>
        <?php } ?>
        <li <?php if ($_smarty_tpl->tpl_vars['is_disabled']->value){?>class="selected"<?php }?>>
            <a href="#/promos/disabled=1" class="gray">Отключен <span class="hint"><?php echo $_smarty_tpl->tpl_vars['disabled_count']->value;?>
</span></a>
        </li>
    </ul>

    <ul class="s-promos-list" id="s-promos-list">
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <li class="s-promo" data-promo-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php if (!$_smarty_tpl->tpl_vars['p']->value['enabled']){?> style="opacity: 0.5;"<?php }?>>
                <div class="s-promo-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['p']->value['image_url'];?>
'); background-color: <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['p']->value['background_color'])===null||$tmp==='' ? 'ffffff' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"></div>
                <div class="s-promo-summary">
                    <h5<?php if (empty($_smarty_tpl->tpl_vars['p']->value['title'])){?> class="gray"<?php }?>><?php echo smarty_modifier_truncate((($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['title'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '(no title)' : $tmp),55);?>
</h5>
                    <p class="small"><?php echo smarty_modifier_truncate(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['body'], ENT_QUOTES, 'UTF-8', true),90);?>
</p>
                    <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['countdown_datetime'])){?><span class="small s-promo-countdown<?php if (strtotime($_smarty_tpl->tpl_vars['p']->value['countdown_datetime'])<time()){?> over<?php }?>"><?php echo sprintf('Обратный отсчет: <strong>%s</strong>',smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['p']->value['countdown_datetime'],'humandatetime'));?>
</span><?php }?>
                </div>
            </li>
        <?php } ?>
        <?php if (!$_smarty_tpl->tpl_vars['is_disabled']->value){?>
            <li class="new-promo-placeholder">
                <div class="s-promo-dummy">
                    <h5><i class="icon16 add"></i>Новая карточка</h5>
                </div>
            </li>
        <?php }?>
    </ul>
</div>

<div id="promo-editor-dialog"></div>

<script>$(function() { "use strict";
    var promos_count = "<?php echo $_smarty_tpl->tpl_vars['promos_count']->value;?>
";
    var storefront = <?php echo json_encode($_smarty_tpl->tpl_vars['storefront']->value['storefront']);?>
;
    var $ul = $('#s-promos-list');

    // Highlight link in sidebar
    $('#s-sidebar .selected').removeClass('selected');
    $('#s-sidebar .s-promo-list').closest('li').addClass('selected').find('.count').text(promos_count);

    // one-time help block
    (function() { "use strict";
        var $alert_block = $ul.parent().find('.s-alert:first');
        if ($.storage.get('shop/promos_alert_hidden')) {
            $alert_block.hide();
        } else {
            $alert_block.show();
            $alert_block.find('.s-alert-close').click(function() {
                $alert_block.hide();
                $.storage.set('shop/promos_alert_hidden', 1);
            });
        }
    })();

    // Dialog to create new promo
    $ul.children('.new-promo-placeholder').click(function() {
        showEditor('');
        return false;
    });

    // Dialog to edit existing promo
    $ul.on('click', '> .s-promo', function() {
        showEditor($(this).data('promo-id'));
        return false;
    });

    <?php if (!$_smarty_tpl->tpl_vars['is_disabled']->value){?>
        // Drag-and-drop promos to reorder them
        $ul.sortable({
            distance: 5,
            helper: 'clone',
            items: '> li[data-promo-id]',
            opacity: 0.75,
            tolerance: 'pointer',
            update: function (event, ui) {
                var ids = $ul.children('li[data-promo-id]').map(function() {
                    return $(this).data('promo-id');
                }).get();
                $.post('?module=promos&action=sort', { ids: ids, storefront: storefront });
            }
        });
    <?php }?>

    function showEditor(id) {
        var $d = $('#promo-editor-dialog');
        $d.find('.dialog-buttons-gradient').empty();
        $d.find('.dialog-content-indent').html('<i class="icon16 loading"></i>');
        $d.waDialog({
            url: '?module=promos&action=editor&id='+id <?php if ($_smarty_tpl->tpl_vars['is_disabled']->value){?> + '&disabled=1' <?php }?>
        });
    }

});</script>
<?php }} ?>