<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:05
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsAffiliate.html" */ ?>
<?php /*%%SmartyHeaderCode:14149810485c9ccef132b1d1-11479304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f019194fd868fc793ac5e42f7fb914491a89cf85' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsAffiliate.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14149810485c9ccef132b1d1-11479304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugins' => 0,
    'installer' => 0,
    'p' => 0,
    'enabled' => 0,
    'wa_url' => 0,
    'wa_backend_url' => 0,
    'conf' => 0,
    'def_cur_sym' => 0,
    'product_types' => 0,
    'pt' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9ccef139aab0_56034432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9ccef139aab0_56034432')) {function content_5c9ccef139aab0_56034432($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_format_number')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_format_number.php';
?><?php if ($_smarty_tpl->tpl_vars['plugins']->value||!empty($_smarty_tpl->tpl_vars['installer']->value)){?>
<div class="sidebar left200px s-settings-order-states">
    <div class="s-inner-sidebar" id="affiliate-plugins">

        <ul class="menu-v stack with-icons">
            <li>
                <a href="#/affiliate/"><i class="icon16 medal"></i>Бонусная программа</a>
            </li>
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <li>
                <a href="#/affiliate/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
/" data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
">
                    <span class="count s-exclamation" <?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>style="display: none;"<?php }?>><i class="icon16 exclamation" title="Отключен"></i></span>
                    <i class="icon16 <?php if (!isset($_smarty_tpl->tpl_vars['p']->value['img'])){?> plugins<?php }else{ ?>" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value['img'];?>
'); background-size: 16px 16px;<?php }?>"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </a>
            </li>
            <?php } ?>
        </ul>
        <?php if (!empty($_smarty_tpl->tpl_vars['installer']->value)){?>
        <div class="align-center hint hr block double-padded">
            <p>
                <a href="#/affiliate/plugins/" data-url="<?php echo ($_smarty_tpl->tpl_vars['wa_backend_url']->value).('installer/?module=plugins&action=view&slug=shop&filter[tag]=affiliate&return_hash=/affiliate/');?>
" class="bold">Поиск плагинов</a><br>
                Установите новые плагины из магазина Webasyst с помощью приложения «Инсталлер»
            </p>
        </div>
        <?php }?>
    </div>
</div>

<?php }?>
<div class="<?php if ($_smarty_tpl->tpl_vars['plugins']->value||!empty($_smarty_tpl->tpl_vars['installer']->value)){?>content left200px bordered-left <?php }?>blank block double-padded s-settings-form">
    <?php if ($_smarty_tpl->tpl_vars['plugins']->value||$_smarty_tpl->tpl_vars['installer']->value){?>
    <div id="affiliate-settings-plugin"></div>
    <div id="affiliate-settings" style="display: none">
    <?php }?>
    <h1 style="margin-bottom: 0.75em;">Бонусная программа</h1>
    <p>Бонусная программа позволяет стимулировать покупателей к оформлению повторных заказов за счет начисления бонусов за каждый оплаченный заказ. В зависимости от специфики работы вашего интернет-магазина вы можете предложить покупателям использовать бонусы для получения скидок на последующие заказы или же выплачивать покупателям заработанные бонусы и фиксировать выплату в истории работы с покупателем.</p>
    <form id="s-settings-affiliate-form" action="?module=settings&action=affiliate">
        <div class="fields form">
            <div class="field-group">
                <div class="field">
                    <div class="name">Бонусная программа</div>
                    <div class="value no-shift s-ibutton-checkbox">
                        <ul class="menu-h">
                            <li><span class="gray" id="s-toggle-disabled-label">Отключен</span></li>
                            <li>
                                <input type="checkbox" id="s-toggle-status" name="enabled" value="1"<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?> checked<?php }?>>
                            </li>
                            <li><span id="s-toggle-enabled-label">Включен</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="field-group"<?php if (!$_smarty_tpl->tpl_vars['enabled']->value){?> style="display:none;"<?php }?>>
                <div class="field">
                    <div class="name">Курс начисления</div>
                    <div class="value">
                        +1 балл за
                        <input type="text" class="short numerical" name="conf[affiliate_credit_rate]" value="<?php echo smarty_modifier_wa_format_number(ifset($_smarty_tpl->tpl_vars['conf']->value['affiliate_credit_rate']),false);?>
" placeholder="0"><?php echo $_smarty_tpl->tpl_vars['def_cur_sym']->value;?>
 своих заказов
                    </div>
                </div>
                <div class="field">
                    <div class="name">Начислено за</div>
                    <div class="value">
                        <label>
                            <input type="radio" name="conf[affiliate_product_types]" value=""<?php if (empty($_smarty_tpl->tpl_vars['conf']->value['affiliate_product_types'])){?> checked<?php }?>>
                            Все типы товаров
                        </label>
                    </div>
                    <div class="value">
                        <label>
                            <input type="radio" name="conf[affiliate_product_types]" value="replaced-by-js"<?php if (!empty($_smarty_tpl->tpl_vars['conf']->value['affiliate_product_types'])){?> checked<?php }?>>
                            Только выбранные
                        </label>
                        <ul class="menu-v compact" style="margin-left: 15px;">
                            <?php  $_smarty_tpl->tpl_vars['pt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pt']->key => $_smarty_tpl->tpl_vars['pt']->value){
$_smarty_tpl->tpl_vars['pt']->_loop = true;
?>
                                <li><label>
                                    <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['pt']->value['id'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['conf']->value['affiliate_product_types'][$_smarty_tpl->tpl_vars['pt']->value['id']])){?> checked<?php }?>> <i class="icon16 <?php echo $_smarty_tpl->tpl_vars['pt']->value['icon'];?>
"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pt']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                </label></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="field-group"<?php if (!$_smarty_tpl->tpl_vars['enabled']->value){?> style="display:none;"<?php }?>>
                <div class="field">
                    <div class="name">Курс использования</div>
                    <div class="value">
                        1 балл =
                        <input type="text" class="short numerical" name="conf[affiliate_usage_rate]" value="<?php echo smarty_modifier_wa_format_number(ifset($_smarty_tpl->tpl_vars['conf']->value['affiliate_usage_rate']),false);?>
" placeholder="0"><?php echo $_smarty_tpl->tpl_vars['def_cur_sym']->value;?>

                    </div>
                </div>
                <div class="field">
                    <div class="name">Максимальная скидка %</div>
                    <div class="value">
                        <input type="text" class="short numerical" name="conf[affiliate_usage_percent]" value="<?php echo ifset($_smarty_tpl->tpl_vars['conf']->value['affiliate_usage_percent']);?>
" placeholder="100">%
                        <p class="hint">Ограничение на максимальную скидку на заказ, которую можно получить, используя бонусную программу (% от суммы заказа).</p>
                    </div>
                </div>
            </div>
            <div class="field-group"<?php if (!$_smarty_tpl->tpl_vars['enabled']->value){?> style="display:none;"<?php }?>>
                <div class="field">
                    <div class="value submit">
                        <input type="submit" class="button green" value="Сохранить">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php if ($_smarty_tpl->tpl_vars['plugins']->value){?></div><?php }?>
    <div class="clear"></div>
</div>
<script type="text/javascript">(function() { "use strict";
    $('#affiliate-plugins a').click(function () {
        var $this = $(this);
        var $parent =$this.parents('li');
        if ($parent.hasClass('selected')) {
            return false;
        }
        $('#affiliate-plugins li.selected').removeClass('selected');
        $parent.addClass('selected');
        $.shop.trace('url',[$('#affiliate-settings-plugin').length,$this.data('url')]);
        if ($this.data('url')) {
            $('#affiliate-settings').hide();
            $('#affiliate-settings-plugin').html('<i class="icon16 loading"></i>').show().load($this.data('url'));
        } else {
            $('#affiliate-settings-plugin').hide();
            $('#affiliate-settings').show();
        }
    });

    var hash = window.location.hash;
    $('#affiliate-plugins a[href="' + hash + '"]').click();

    document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Бонусная программа").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';

    var form = $('#s-settings-affiliate-form');

    // Global on/off toggle for the whole form
    var ibutton = $('#s-toggle-status').iButton( { labelOn : "", labelOff : "", className: 'mini' } ).change(function() {
        var self = $(this);
        var enabled = self.is(':checked');
        if (enabled) {
            self.closest('.field-group').siblings().show(200);
        } else {
            self.closest('.field-group').siblings().hide(200);
        }
        $.post(
            '?module=settings&action=affiliateEnable',
            { enable: enabled ? '1' : '0' },
            function (r) {
                if (r.status === 'ok') {
                    if (enabled) {
                        $('.s-exclamation').hide();
                    } else {
                        $('.s-exclamation').show();
                    }
                }
            });
    });

    // Submit via XHR
    form.submit(function() {
        var self = $(this);
        form.find(':submit').after('<span class="s-msg-after-button"><i class="icon16 loading"></i></span>');
        $.post(self.attr('action'), self.serialize(), function(r) {
            $('#s-settings-content').html(r);
        });
        return false;
    });

    // Controller for program applicability
    (function() {
        var radios = $(':input:radio[name="conf[affiliate_product_types]"]');
        var radio_all = radios.first();
        var radio_selected = radios.last();
        var product_types_ul = radio_selected.parent().siblings('ul');

        // Show/hide list of product types when radios change
        radios.change(function() {
            if (radio_selected.is(':checked')) {
                product_types_ul.show();
            } else {
                product_types_ul.hide();
            }
        }).change();

        // Change value of 'Selected only' radio depending on list of checked checkboxes
        var h;
        product_types_ul.on('change', ':checkbox', h = function() {
            var val = [];
            product_types_ul.find(':checkbox').each(function() {
                var self = $(this);
                if (self.is(':checked')) {
                    val.push($(this).val());
                }
            });
            radio_selected.attr('value', val.join(','));
        });
        h();
    })();

    // "Saved successfully" message
    <?php if (waRequest::post()){?>
        form.find(':submit').after(
            $('<span class="s-msg-after-button"><i class="icon16 yes"></i></span>').animate({ opacity: 0 }, 1500, function() {
                $(this).remove();
            })
        );
    <?php }?>
})();</script>
<?php }} ?>