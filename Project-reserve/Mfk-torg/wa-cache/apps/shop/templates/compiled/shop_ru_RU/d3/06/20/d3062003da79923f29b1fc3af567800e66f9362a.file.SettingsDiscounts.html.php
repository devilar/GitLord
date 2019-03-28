<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:04
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsDiscounts.html" */ ?>
<?php /*%%SmartyHeaderCode:15576279405c9ccef06f3148-86430789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3062003da79923f29b1fc3af567800e66f9362a' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsDiscounts.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15576279405c9ccef06f3148-86430789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'types' => 0,
    't' => 0,
    'combiner' => 0,
    'discount_description' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9ccef0748495_28645766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9ccef0748495_28645766')) {function content_5c9ccef0748495_28645766($_smarty_tpl) {?><div class="sidebar left200px s-settings-order-states">
    <div class="s-inner-sidebar">

        <ul id="discount-types" class="menu-v stack with-icons">
            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                <li><a href="javascript:void(0)" rel="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
">
                    <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['t']->value['status']){?>status-blue-tiny<?php }else{ ?>status-gray-tiny<?php }?>"></i><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>

                </a></li>
            <?php } ?>
        </ul>

        <div class="hr"></div>
        <div class="block small">
            <p>Как должна рассчитываться скидка, если к заказу применимо более одного правила:</p>
            <p>
                <label><input type="radio" name="combiner" value="max"<?php if ($_smarty_tpl->tpl_vars['combiner']->value!='sum'){?> checked<?php }?>> максимум</label>
                <br><br>
                <label><input type="radio" name="combiner" value="sum"<?php if ($_smarty_tpl->tpl_vars['combiner']->value=='sum'){?> checked<?php }?>> сумма</label>
            </p>
            <input type="button" id="combiner-save-button" value="Сохранить" style="display:none">
        </div>


        <div class="hr"></div>
        <div class="block small">
            <p>Как сохранять описание расчета скидки:</p>
            <p>
                <label><input type="radio" name="discount_description" value="1" <?php if ($_smarty_tpl->tpl_vars['discount_description']->value){?>checked<?php }?>> для каждого товара</label>
                <br><br>
                <label><input type="radio" name="discount_description" value="0" <?php if (!$_smarty_tpl->tpl_vars['discount_description']->value){?>checked<?php }?>> для всего заказа</label>
            </p>
            <p class="gray">В зависимости от настройки магазина могут быть удобны разные варианты сохранения детализации расчета скидки.</p>
            <input type="button" id="discount-desc-save-button" value="Сохранить" style="display:none">
        </div>

        <div class="hr"></div>
        <div class="block small">
            <p class="gray">
                <?php echo sprintf_wp("Rounding of fractional discount values can be set up in %scurrency settings%s.",'<a href="#/currencies/">','</a>');?>

            </p>
        </div>

    </div>
</div>

<div id="s-discounts-content" class="content left200px s-settings-form blank bordered-left"></div>


<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?><?php echo ifempty($_smarty_tpl->tpl_vars['t']->value['html']);?>
<?php } ?>

<script>$(function() { "use strict";

    document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Скидки").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

    var types_ul = $('#discount-types');
    var discounts_content = $('#s-discounts-content');

    // Controller for sub-pages.
    // When user clicks a link in inner sidebar, or when changes a URL hash,
    // this controller triggers event 'wa.dicount.<type>' on #discount-types.
    types_ul.on('click', 'a[rel]', function() {
        var a = $(this);
        var type = a.attr('rel');
        if (!type) {
            return;
        }

        if (window.location.hash.toString() != '#/discounts/'+type+'/') {
            $.settings.stopDispatch(1);
            window.location.hash = '#/discounts/'+type+'/';
        }
        a.parent().addClass('selected').siblings('.selected').removeClass('selected');
        discounts_content.html('<div class="block double-padded"><i class="icon16 loading"></i>'+"Загрузка..."+'</div><div class="clear-left"></div>');
        types_ul.trigger('wa.discount.'+type);
    });

    // Dispatching for known discount types.
    // This code catches 'wa.dicount.<type>' events on #discount-types and loads content from content url if it is specified.
    // If a plugin does not like this behaviour for some reason, it may omit url parameter and catch this event by itself.
    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['t']->value['url'])){?>
            types_ul.bind('wa.discount.<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
', function() {
                $.get('<?php echo $_smarty_tpl->tpl_vars['t']->value['url'];?>
', function(r) {
                    discounts_content.html(r);
                });
            });
        <?php }?>
    <?php } ?>

    // Open sub-page: either take id from hash, or use the first one in sidebar list (if exists)
    (function() {
        var a, hash = window.location.hash.toString().split('/');
        while (hash.length && hash.shift() != 'discounts') {
            ;
        }
        if (hash[0]) {
            a = types_ul.find('a[rel="'+encodeURIComponent(hash[0])+'"]:first');
        }
        if (!a || !a.length) {
            a = types_ul.find('a[rel]:first');
        }
        a.click();
    })();

    // Controller for combiner radio
    (function() {
        var radios = $('input:radio[name="combiner"]');
        var button = $('#combiner-save-button');
        radios.change(function() {
            button.show();
        });
        button.click(function() {
            button.hide();
            radios.attr('disabled', true);
            $.post('?module=settings&action=discountsCombineSave', { value: radios.filter(':checked').val() }, function() {
                radios.attr('disabled', false);
            });
        });
    })();

    // Discount description radios
    (function() {
        var radios = $('input:radio[name="discount_description"]');
        var button = $('#discount-desc-save-button');
        radios.change(function() {
            button.show();
        });
        button.click(function() {
            button.hide();
            radios.attr('disabled', true);
            $.post('?module=settings&action=configSave', { discount_description: radios.filter(':checked').val() }, function() {
                radios.attr('disabled', false);
            });
        });
    })();

});</script>
<?php }} ?>