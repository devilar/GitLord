<?php /* Smarty version Smarty-3.1.14, created on 2019-03-25 10:50:07
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsAnalytics.html" */ ?>
<?php /*%%SmartyHeaderCode:2560686215c98882f9cd8c7-17217173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5452353121e9d157c322927684a119c1cc1d8529' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsAnalytics.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2560686215c98882f9cd8c7-17217173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c98882fa18114_33037156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c98882fa18114_33037156')) {function content_5c98882fa18114_33037156($_smarty_tpl) {?><div class="block double-padded">
    <h1>Аналитика</h1>

    <form action="?module=settings&action=analytics" id="s-analytics-settings-form">
    <div class="fields form">
        <div class="field">
            <div class="name">Дата транзакции</div>
            <div class="value no-shift"><label>
                <input type="radio" name="settings[reports_date_type]" value="paid"<?php if (ifset($_smarty_tpl->tpl_vars['settings']->value['reports_date_type'])!='create'){?> checked<?php }?>>
                Заказ был оплачен или выполнен
            </label></div>
            <div class="value no-shift"><label>
                <input type="radio" name="settings[reports_date_type]" value="create"<?php if (ifset($_smarty_tpl->tpl_vars['settings']->value['reports_date_type'])=='create'){?> checked<?php }?>>
                Заказ был создан
            </label></div>
            <div class="value">
                <p class="hint">Выберите действие с заказом, с датой которого нужно связать сумму заказа в <a href="?action=reports">отчетах о продажах</a>.</p>
            </div>
        </div>
        <div class="field">
            <div class="value">
                <input type="submit" class="button green" value="Сохранить">
            </div>
        </div>
    </div>
    </form>

    <div class="clear"></div>
</div>

<script>(function() { "use strict";

    var $form = $('#s-analytics-settings-form');
    $form.submit(function() {
        $.post($form.attr('action'), $form.serialize(), function(r) {

            $('#s-settings-content').html(r);
            $('<span style="margin-left: 10px;"><i class="icon16 yes"></i></span>').insertAfter($('#s-analytics-settings-form :submit')).animate({
                opacity: 0
            }, 1500, function() {
                $(this).remove();
            });
        });
        return false;
    });

})();</script><?php }} ?>