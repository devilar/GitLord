<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:03
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsCheckout.html" */ ?>
<?php /*%%SmartyHeaderCode:10670489995c9cceef88ab67-39490084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '718ebdeff0eeb5f7db3116f4f7edd5a2060ce848' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsCheckout.html',
      1 => 1545053990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10670489995c9cceef88ab67-39490084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkout_sidebar' => 0,
    'redirect_hash' => 0,
    'old_storefronts' => 0,
    'wa_app_url' => 0,
    'steps' => 0,
    'step' => 0,
    'step_id' => 0,
    'shipping_plugins' => 0,
    'payment_plugins' => 0,
    'guest_checkout' => 0,
    'auth_alert' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9cceef8c5b13_06083953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9cceef8c5b13_06083953')) {function content_5c9cceef8c5b13_06083953($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['checkout_sidebar']->value;?>

<?php if ($_smarty_tpl->tpl_vars['redirect_hash']->value){?>
    <script>location.hash='<?php echo $_smarty_tpl->tpl_vars['redirect_hash']->value;?>
';</script>
<?php }?>
<div class="s-settings-checkout-content content blank left200px">
    <div class="block double-padded s-settings-form">
        <?php if (empty($_smarty_tpl->tpl_vars['old_storefronts']->value)){?>
            <div style="margin: 80px auto; text-align: center;">
                <?php echo sprintf('Нет витрин с пошаговым оформлением заказа. Перейти в <a href="%s">настройки</a>.','?action=storefronts#/design/action=settings');?>

            </div>
        <?php }else{ ?>
        <h1>Настройка пошагового оформления заказа</h1>

        <div>Общие настройки для всех витрин с пошаговым оформлением заказа.</div>
        <div style="margin: 1em 0 0; color: #888;"><?php echo sprintf('В <a href="%s" target="_blank">настройках витрины <i class="icon16 new-window"></i></a> можно переключаться между <strong>пошаговым оформлением заказа</strong> и <strong>оформлением заказа в корзине</strong>.',((string)$_smarty_tpl->tpl_vars['wa_app_url']->value)."?action=storefronts#/design/action=settings");?>
</div>
        <div style="margin: 3em 0 0;">Определите порядок оформления заказа и настройки каждого шага с помощью следующей формы.</div>
        <div style="margin: 1em 0 2em;">
            <a href="javascript:void(0);" class="js-checkout-recommendations-link" style="text-decoration: none;">
                <i class="icon16 info"></i>Рекомендации по настройке оформления<i class="icon16 darr js-arrow"></i>
            </a>
        </div>
        <div class="s-alert s-checkout-recommendations js-checkout-recommendations">
            <a class="close s-alert-close" href="javascript:void(0);">×</a>
            <p>
                <strong>Для интернет-магазинов, отправляющих заказы в несколько стран и регионов:</strong><br>
                <em>1.&nbsp;Контактные данные &rarr; 2.&nbsp;Доставка &rarr; 3.&nbsp;Оплата &rarr; 4.&nbsp;Подтверждение.</em>
                <br /><br />
                <strong>Для магазинов, обычно доставляющих заказы курьером в пределах одного города:</strong><br>
                <em>1.&nbsp;Доставка &rarr; 2.&nbsp;Контактные данные &rarr; 3.&nbsp;Оплата &rarr; 4.&nbsp;Подтверждение</em>
                <br /><br />
                <strong>Для магазинов, доставляющих электронные товары только через интернет:</strong><br>
                <em>1.&nbsp;Контактные данные &rarr; 2.&nbsp;Оплата &rarr; 3.&nbsp;Подтверждение</em>
                <br /><br />
                Старайтесь максимально упростить процесс оформления заказа.
            </p>
            <p class="gray">
                <i class="icon10 exclamation"></i>
                <strong>Доставка и контакты.</strong>
                Для работы некоторых способов доставки необходимо знать адрес назначения. Если выбор способа доставки предлагается до ввода контактных данных (т. е. если покупатель еще не указал свой адрес), некоторые плагины могут неправильно рассчитывать стоимость доставки.
            </p>
            <p class="gray">
                <i class="icon10 exclamation"></i>
                <strong>Подтверждение.</strong>
                Не рекомендуется отключать шаг подтверждения заказа, если сумма заказа может быть изменена во время его оформления, например, если налог на доставку или подарки могут изменить итоговую сумму заказа. Важно, чтобы покупатели видели итоговую сумму, прежде чем заказ будет окончательно оформлен.
            </p>
        </div>
        <table id="checkout-steps" class="s-big-table">
        <?php  $_smarty_tpl->tpl_vars['step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step']->_loop = false;
 $_smarty_tpl->tpl_vars['step_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['step']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['step']->key => $_smarty_tpl->tpl_vars['step']->value){
$_smarty_tpl->tpl_vars['step']->_loop = true;
 $_smarty_tpl->tpl_vars['step_id']->value = $_smarty_tpl->tpl_vars['step']->key;
 $_smarty_tpl->tpl_vars['step']->iteration++;
?>
        <tr <?php if (!$_smarty_tpl->tpl_vars['step']->value['status']){?>class="disabled"<?php }?> id="step-<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
" data-step-id="<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
">
            <td class="min-width gray valign-top"><?php if ($_smarty_tpl->tpl_vars['step']->value['status']){?><h3 class="gray"><!--<?php echo $_smarty_tpl->tpl_vars['step']->iteration;?>
.--></h3><?php }?></td>
            <td class="min-width valign-top"><i class="icon16 sort checkout-steps-handle"></i></td>
            <td>
                <div class="float-right links">
                    <?php if ($_smarty_tpl->tpl_vars['step_id']->value==shopPluginModel::TYPE_SHIPPING&&empty($_smarty_tpl->tpl_vars['shipping_plugins']->value)){?>
                        <?php echo sprintf('<a href="%s" target="_blank">Добавьте способ доставки</a>','?action=settings#/shipping/');?>

                        <i class="icon16 new-window"></i>
                    <?php }elseif($_smarty_tpl->tpl_vars['step_id']->value==shopPluginModel::TYPE_PAYMENT&&empty($_smarty_tpl->tpl_vars['payment_plugins']->value)){?>
                        <?php echo sprintf('<a href="%s" target="_blank">Добавьте способ оплаты</a>','?action=settings#/payment/');?>

                        <i class="icon16 new-window"></i>
                    <?php }elseif($_smarty_tpl->tpl_vars['step']->value['status']){?>
                        <a href="#" class="link-options inline-link inline"><i class="icon16 settings"></i><b><i>Конфигурация</i></b></a>
                    <?php }else{ ?>
                        Отключен
                        <a href="#" class="link-enable inline-link"><b><i>Включить</i></b></a>
                    <?php }?>
                </div>
                <h3 class="name<?php if (!$_smarty_tpl->tpl_vars['step']->value['status']){?> gray<?php }?>"><?php echo $_smarty_tpl->tpl_vars['step']->value['name'];?>
</h3>
                <form id="checkout-step-<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
-form" method="post" action="?module=settingsCheckoutSave" style="display: none;">
                    <input type="hidden" name="step_id" value="<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
">
                    <?php if (!empty($_smarty_tpl->tpl_vars['step']->value['description'])){?>
                        <p style="margin-top: 10px;"><?php echo $_smarty_tpl->tpl_vars['step']->value['description'];?>
</p>
                    <?php }?>
                    <div class="fields form width100px">
                        <div class="field-group">
                            <div class="field system">
                                <div class="name">Название шага</div>
                                <div class="value">
                                    <input type="text" name="name" class="bold" value="<?php echo $_smarty_tpl->tpl_vars['step']->value['name'];?>
">
                                    <br />
                                    <span class="hint">Отображается на витрине в области навигации оформления заказа</span>
                                </div>
                            </div>
                            <div class="field system">
                                <div class="value submit">
                                    <br>
                                    <?php if ($_smarty_tpl->tpl_vars['step_id']->value!='contactinfo'){?>
                                    <div class="float-right">
                                        <ul class="menu-h with-icons">
                                            <li><a href="#" class="link-disable"><i class="icon16 no"></i>Отключить этот шаг</a></li>
                                        </ul>
                                    </div>
                                    <?php }?>
                                    <input type="submit" class="button green submit" value="Сохранить">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </td>
        </tr>
        <?php } ?>
        </table>

        <div class="fields form">
            <div class="field">
                <div class="name">Заказ без авторизации</div>
                <div class="value no-shift">
                    <label>
                        <input class="guest-checkout" type="radio" name="guest_checkout" value="" <?php if (!$_smarty_tpl->tpl_vars['guest_checkout']->value){?>checked<?php }?>>
                        Создавать новый профиль покупателя для каждого заказа
                    </label>
                </div>
                <div class="value no-shift">
                    <label>
                        <input class="guest-checkout" type="radio" name="guest_checkout" value="merge_email" <?php if ($_smarty_tpl->tpl_vars['guest_checkout']->value=='merge_email'){?>checked<?php }?>>
                        Прикреплять заказ к существующему покупателю с таким же email-адресом
                    </label>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['auth_alert']->value){?>
                <div class="guest-checkout-alert value no-shift"<?php if ($_smarty_tpl->tpl_vars['guest_checkout']->value!='merge_email'){?> style="display:none"<?php }?>>
                    <p class="small">
                        <span class="highlighted"><i class="icon10 exclamation"></i> <?php echo sprintf('Автоматическое прикрепление заказов к существующим покупателям не будет работать на следующих сайтах: <strong>%s</strong>. Из соображений конфиденциальности функциональность автоматического прикрепления заказов будет работать, только если для сайта включена настройка «Подтверждение email-адреса после регистрации» в приложении «Сайт» в разделе <em>Личный кабинет > Настройки авторизации</em>.',implode(', ',$_smarty_tpl->tpl_vars['auth_alert']->value));?>
</span>
                    </p>
                </div>
                <?php }?>
                <div class="value no-shift" style="display: none">
                    <input id="guest-checkout-save" type="button" class="button green" value="Сохранить">
                </div>
            </div>
            <script type="text/javascript">
                $('.guest-checkout').change(function () {
                    if ($('.guest-checkout:checked').val() == 'merge_email') {
                        $('.guest-checkout-alert').show();
                    } else {
                        $('.guest-checkout-alert').hide();
                    }
                    $('#guest-checkout-save').parent().show();
                });
                $('#guest-checkout-save').click(function () {
                    $.post('?module=settingsCheckoutSave&action=guest', { value: $('.guest-checkout:checked').val()}, function () {
                        $('#guest-checkout-save').parent().hide();
                    });
                    return false;
                });
            </script>
            <div style="margin-top: 20px;">
                <?php echo sprintf('Настройка проверки обязательных полей в бекенде, антиспам-фильтра для заказов и push-уведомлений доступна в разделе «<a href="%s">Общие настройки</a>».','?action=settings#/general/');?>

            </div>
        </div>
        <?php }?>
    </div>

    <div class="clear-both"></div>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/checkout.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script> 
<script type="text/javascript">
    document.title ='<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Оформление заказа").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
    $.settings.checkoutInit({
        loc: {
            field_is_required: "Это поле является обязательным.",
            saved: "Сохранено"
        }
    });
</script><?php }} ?>