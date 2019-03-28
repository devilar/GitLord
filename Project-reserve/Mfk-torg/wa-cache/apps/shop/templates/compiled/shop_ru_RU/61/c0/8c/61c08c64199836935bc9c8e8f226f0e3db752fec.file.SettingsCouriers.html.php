<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:01
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsCouriers.html" */ ?>
<?php /*%%SmartyHeaderCode:17566012975c9cceed0f65c9-23671612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61c08c64199836935bc9c8e8f226f0e3db752fec' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsCouriers.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17566012975c9cceed0f65c9-23671612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'couriers' => 0,
    'c' => 0,
    'courier' => 0,
    'wa_backend_url' => 0,
    'courier_contact_photo_url' => 0,
    'url' => 0,
    'enabled' => 0,
    'pin_is_valid' => 0,
    'saved' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9cceed18c217_24928264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9cceed18c217_24928264')) {function content_5c9cceed18c217_24928264($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?>
<div class="sidebar left200px">
    <div class="s-inner-sidebar">
        <ul class="menu-v stack with-icons s-courier-list">
            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['couriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                <li<?php if (!$_smarty_tpl->tpl_vars['c']->value['enabled']){?> class="s-expired"<?php }?>>
                    <span class="count"><?php echo $_smarty_tpl->tpl_vars['c']->value['orders_processed'];?>
</span>
                    <a href="#/couriers/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" class="gray" data-id="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['c']->value['contact_id']){?>
                            <i class="icon16 userpic20" style="background-image: url(<?php echo waContact::getPhotoUrl($_smarty_tpl->tpl_vars['c']->value['contact_id'],$_smarty_tpl->tpl_vars['c']->value['photo'],40);?>
)"></i>
                        <?php }else{ ?>
                            <i class="icon16 ss courier"></i>
                        <?php }?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                </li>
            <?php } ?>
            <li class="top-padded">
                <a href="#/couriers/new" class="small" data-id=""><i class="icon10 add"></i>Новый курьер</a>
            </li>
        </ul>
    </div>
</div>


<div class="content left200px s-settings-form blank bordered-left">

    
    <div class="s-alert" style="border-left: 0;">
        <a href="javascript:void(0)" class="s-alert-close">&times;</a>
        Курьеры &mdash; это ваши сотрудники, ответственные за доставку заказов клиентам, а также за отслеживание и обновление статусов заказов с помощью <a href="http://www.shop-script.ru/mobile/" target="_blank">мобильного приложения Shop-Script</a>.<br><br> В отличие от обычных пользователей бекенда, курьеры не могут входить в основную часть управления магазином, а могут лишь просматривать с помощью мобильного приложения те заказы, за доставку которых они отвечают. Заказ может быть назначен на курьера при выполнении действия ОТПРАВЛЕН. <a href="https://www.shop-script.ru/help/13420/shop-script-couriers/" target="_blank">Подробнее о курьерах</a>.
    </div>

    <div class="block double-padded">
    <form action="?module=settings&action=couriers">
        <div class="fields form">
          <div class="field-group">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['courier']->value['id'];?>
">
            <div class="field">
                <div class="name">Имя курьера</div>
                <div class="value">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
contacts/#/contact/<?php echo $_smarty_tpl->tpl_vars['courier']->value['contact_id'];?>
"<?php if (!$_smarty_tpl->tpl_vars['courier']->value['contact_id']){?> style="display:none;"<?php }?>>
                        <img class="userpic" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['courier_contact_photo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" width="32" height="32" style="vertical-align:top;margin-top:-4px">
                    </a>
                    <input type="hidden" name="courier[contact_id]" value="<?php echo $_smarty_tpl->tpl_vars['courier']->value['contact_id'];?>
">
                    <input type="text" name="courier[name]" id="courier-contacts-autocomplete" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['courier']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="bold large long">
                    <br><span class="hint">Настоящее имя или псевдоним курьера. Связывать курьеров с существующими контактами необязательно.</span>
                </div>
            </div>
            <div class="field">
                <div class="name">Заметка</div>
                <div class="value">
                    <textarea name="courier[note]" placeholder="Не обязательно"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['courier']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    <br><span class="hint">Любая полезная информация о курьере, например, контактная информация, предпочтительное время и районы доставки.</span>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['courier']->value['storefronts']){?>
                <div class="field">
                    <div class="name">Витрины</div>
                    <div class="value no-shift"><label>
                        <input type="radio" name="courier[all_storefronts]" value="1"<?php if ($_smarty_tpl->tpl_vars['courier']->value['all_storefronts']){?> checked<?php }?>>
                        Все витрины
                    </label></div>
                    <div class="value no-shift"><label>
                        <input type="radio" name="courier[all_storefronts]" value="0"<?php if (!$_smarty_tpl->tpl_vars['courier']->value['all_storefronts']){?> checked<?php }?>>
                        Только выбранные
                    </label></div>
                    <?php  $_smarty_tpl->tpl_vars['enabled'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enabled']->_loop = false;
 $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['courier']->value['storefronts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enabled']->key => $_smarty_tpl->tpl_vars['enabled']->value){
$_smarty_tpl->tpl_vars['enabled']->_loop = true;
 $_smarty_tpl->tpl_vars['url']->value = $_smarty_tpl->tpl_vars['enabled']->key;
?>
                        <div class="value hide-when-all-storefronts" style="padding-left:1em;"><label>
                            <input type="checkbox" name="storefronts[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['enabled']->value||$_smarty_tpl->tpl_vars['courier']->value['all_storefronts']){?> checked<?php }?>>
                            <?php echo htmlspecialchars(waIdna::dec($_smarty_tpl->tpl_vars['url']->value), ENT_QUOTES, 'UTF-8', true);?>

                        </label></div>
                    <?php } ?>
                    <div class="value"><span class="hint">Выбор этого курьера будет доступен только для заказов, оформленных через выбранные здесь витрины.</span></div>
                </div>
            <?php }else{ ?>
                <input type="hidden" name="courier[all_storefronts]" value="1">
            <?php }?>
          </div>
          <div class="field-group">
            <div class="field">
                <div class="name">Статус</div>
                <div class="value no-shift s-ibutton-checkbox">
                    <ul class="menu-h">
                        <li><input type="checkbox" name="courier[enabled]" value="1" id="courier-enabled-checkbox" class="i-button-mini"<?php if ($_smarty_tpl->tpl_vars['courier']->value['enabled']){?> checked<?php }?>></li>
                        <li><label for="courier-enabled-checkbox">
                            <span class="hidden status-on">Работает</span>
                            <span class="hidden status-off">Не работает</span>
                        </label></li>
                    </ul>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['courier']->value['api_last_use']||$_smarty_tpl->tpl_vars['courier']->value['id']!='new'){?>
                <div class="hide-when-disabled">
                    <div class="field">
                        <div class="name">Редактирование заказов</div>
                        <div class="value">
                            <input type="checkbox" name="courier[rights_order_edit]" value='1'<?php if ($_smarty_tpl->tpl_vars['courier']->value['rights_order_edit']){?> checked<?php }?>>
                            <br>
                            <span class="hint">Включите, чтобы курьер мог редактировать в мобильном приложении состав заказа, сумму скидки и стоимость доставки.
                                <br>
                                Способы оплаты и доставки, выбранные покупателем, и значения стандартных полей адреса доставки «Страна», «Индекс», «Регион», «Город» нельзя изменить через мобильное приложение.
                                <br>
                                <em>Курьер может изменять статус заказа, адрес доставки, кроме полей «Страна», «Индекс», «Регион» и «Город», и другие параметры доставки независимо от значения этой настройки.</em></span>
                        </div>
                    </div>
                    <div class="field">
                        <div class="name">Редактирование покупателей</div>
                        <div class="value">
                            <input type="checkbox" name="courier[rights_customer_edit]" value='1' <?php if ($_smarty_tpl->tpl_vars['courier']->value['rights_customer_edit']){?> checked<?php }?>>
                            <br>
                            <span class="hint">Курьер может редактировать контактные данные покупателей в мобильном приложении.</span>
                        </div>
                    </div>
                    <div class="field">
                        <div class="name">Последний вход</div>
                        <div class="value no-shift">
                            <?php if ($_smarty_tpl->tpl_vars['courier']->value['api_last_use']){?>
                                <?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['courier']->value['api_last_use'],'humandatetime');?>

                            <?php }else{ ?>
                                Не было
                            <?php }?>
                        </div>
                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['courier']->value['id']!='new'){?>
                <div class="field hide-when-disabled">
                    <div class="name">
                        Код авторизации
                    </div>
                    <div class="value hide-when-clicked no-shift">
                        <?php $_smarty_tpl->tpl_vars['pin_is_valid'] = new Smarty_variable($_smarty_tpl->tpl_vars['courier']->value['api_pin']&&strtotime($_smarty_tpl->tpl_vars['courier']->value['api_pin_expire'])>time(), null, 0);?>
                        <strong><?php if ($_smarty_tpl->tpl_vars['pin_is_valid']->value){?>
                            <?php echo sprintf("%02d",$_smarty_tpl->tpl_vars['courier']->value['id']);?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['courier']->value['api_pin'], ENT_QUOTES, 'UTF-8', true);?>

                            <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['courier']->value['api_last_use']){?>yes<?php }else{ ?>clock<?php }?>"></i>
                        <?php }elseif($_smarty_tpl->tpl_vars['courier']->value['api_pin_expire']){?>
                            <?php if ($_smarty_tpl->tpl_vars['courier']->value['api_last_use']){?>
                                <i class="icon16 yes"></i>
                            <?php }else{ ?>
                                <span style="color: #a00;">Истек</span>
                            <?php }?>
                        <?php }else{ ?>
                            Отсутствует
                        <?php }?></strong>
                        <a href="javascript:void(0)" id="regenerate-pin-link" class="small inline-link" style="margin-left:1em;"><b><i>Обновить код</i></b></a>
                        <?php if ($_smarty_tpl->tpl_vars['pin_is_valid']->value&&!$_smarty_tpl->tpl_vars['courier']->value['api_last_use']){?>
                            <br>
                            <span class="hint">Истекает: <strong><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['courier']->value['api_pin_expire'],'humandatetime');?>
</strong></span>
                        <?php }?>
                    </div>
                    <div class="hidden value show-when-clicked">
                        <input type="hidden" name="regenerate_pin" value="1" disabled>
                        <em>Новый код авторизации будет сформирован после сохранения изменений.</em>
                    </div>
                    <div class="value">
                        <span class="small">
                            <?php if ($_smarty_tpl->tpl_vars['pin_is_valid']->value&&!$_smarty_tpl->tpl_vars['courier']->value['api_last_use']){?>
                                Курьер должен ввести код авторизации в мобильном приложении для подключения к вашему интернет-магазину. Авторизация с помощью кода необходима только один раз и более не потребуется. Если код не будет введен в течение 24 часов, его действие будет автоматически прекращено.
                            <?php }?>
                        </span>
                    </div>
                </div>
            <?php }?>
          </div>
          <div class="field-group">
            <div class="field">
                <div class="value">
                    <?php if ($_smarty_tpl->tpl_vars['courier']->value['id']!='new'){?>
                        <div class="float-right block half-padded">
                            <ul class="menu-h">
                                <li><a href="?action=orders#/orders/search/params.courier_id=<?php echo $_smarty_tpl->tpl_vars['courier']->value['id'];?>
/"><i class="icon16 ss orders-all"></i>Все заказы курьера</a></li>
                                <li><a href="javascript:void(0)" id="delete-courier-link"><i class="icon16 delete"></i>Удалить</a></li>
                            </ul>
                        </div>
                    <?php }?>
                    <input type="submit" class="button green submit" value="Сохранить">
                    <span class="s-yes" style="display: none"><i class="icon16 yes" style="margin-top: 0.5em;"></i> Сохранено</span>
                </div>
            </div>
          </div>
        </div>

    </form>
    </div>

</div>

<script>$(function() { "use strict";

    document.title = "Курьеры";
    var post_saved = <?php echo json_encode($_smarty_tpl->tpl_vars['saved']->value);?>
;
    var post_errors = <?php echo json_encode($_smarty_tpl->tpl_vars['errors']->value);?>
;
    var delete_confirm_msg = "Курьер будет полностью удален без возможности восстановления. Удалить?";
    $.settings.forceHash("#/couriers/<?php echo $_smarty_tpl->tpl_vars['courier']->value['id'];?>
");

    var $wrapper = $('#s-settings-content');
    var $sidebar = $wrapper.find('.sidebar');
    var $content = $wrapper.find('.content');
    var $form = $content.find('form');
    var $submit_button = $form.find(':submit:first');
    var is_locked = false;

    // Highlight items in both sidebars
    $sidebar.find('a[href="'+location.hash+'"]').parent().addClass('selected');

    // Form submit via XHR
    $form.submit(function() {
        if (!is_locked) {
            $submit_button.attr("disabled", true);
            is_locked = true;
            $submit_button.parent().append('<i class="icon16 loading"></i>');

            $.post($form.attr('action'), $form.serialize(), function (r) {
                $wrapper.html(r);
            }).always(function () {
                is_locked = false;
                $submit_button.attr("disabled", false);
            });

            return false;
        }
    });

    // Validation errors
    if (post_errors) {
        $.each(post_errors, function(field_id, error_msg) {
            var $field = $form.find('[name="'+field_id+'"]').addClass('error');
            if (!$field.length) {
                $field = $submit_button;
            }
            $field.parent().append($('<em class="errormsg"></em>').text(error_msg));
        });
    } else if (post_saved) {
        (function() {
            var $saved_msg = $form.find('.s-yes').show();
            setTimeout(function() {
                $saved_msg.fadeOut();
            }, 500);
        })();
    }

    // iButton
    $form.find(".i-button-mini").change(function() {
        var $div_value = $(this).closest('.value');
        var $label_off = $div_value.find('.status-off');
        var $label_on = $div_value.find('.status-on');
        var $fields_hide_when_inactive = $form.find('.hide-when-disabled');
        if (this.checked) {
            $fields_hide_when_inactive.show();
            $label_off.hide();
            $label_on.show();
        } else {
            $fields_hide_when_inactive.hide();
            $label_off.show();
            $label_on.hide();
        }
    }).change().iButton({
        classContainer: 'ibutton-container mini',
        labelOff : "",
        labelOn : ""
    });

    // Contacts autocomplete
    (function() {
        var $text_input = $('#courier-contacts-autocomplete');
        var $hidden_input = $text_input.siblings('input:hidden');
        var $img = $text_input.closest('.value').find('img');
        var $img_a = $img.parent();
        $text_input.autocomplete({
            source: '?action=autocomplete&type=contact',
            minLength: 3,
            delay: 300,
            select: function (event, ui) {
                $hidden_input.val(ui.item.id);
                $text_input.val(ui.item.name);
                $img[0].src = ui.item.photo_url;
                var hew_href = $img_a.attr('href').replace(/\/[^\/]+\/?$/, '/'+ui.item.id+'/');
                $img_a.attr('href', hew_href).show();
                return false;
            }
        }).change(function() {
            if ($text_input.val() == '') {
                $hidden_input.val('');
                $text_input.val('');
                $img[0].src = '';
                $img_a.hide();
            }
        });
    })();

    // Link to regenerate pin
    $('#regenerate-pin-link').click(function() {
        var $field = $(this).closest('.field');
        $field.find('.hide-when-clicked').hide();
        $field.find('.show-when-clicked').show();
        $field.find('[name="regenerate_pin"]').prop('disabled', false).change();
    });

    // Storefronts toggle shows/hides the checklist
    $form.on('change', '[name="courier[all_storefronts]"]', function() {
        var $checklist = $(this).closest('.field').find('.hide-when-all-storefronts');
        if (this.value == '1') {
            $checklist.hide();
        } else {
            $checklist.show();
        }
    }).find('[name="courier[all_storefronts]"]:checked').change();

    // Yellow 'Save' button when user modifies something
    (function() {
        if (post_errors) {
            $submit_button.removeClass('green').addClass('yellow');
            return;
        }
        var timeout = null;
        var initial_form_data = $form.serialize();
        $form.on('change keyup', checkAndApply);

        function checkAndApply() {
            if (timeout) {
                return;
            }
            timeout = window.setTimeout(function() {
                timeout = null;
                if (initial_form_data != $form.serialize()) {
                    $submit_button.removeClass('green').addClass('yellow');
                    $form.off('change keyup', checkAndApply);
                }
            }, 300);
        }
    })();

    // Button to delete the courier
    $('#delete-courier-link').click(function() {
        if (!confirm(delete_confirm_msg)) {
            return false;
        }
        var courier_id = $form.find('[name="id"]').val();
        $(this).find('.icon16').attr('class', 'icon16 loading');
        $.post('?module=settings&action=couriersdelete', { id: courier_id }, function() {
            $.wa.setHash('#/couriers/');
        });
    });

    // one-time help block
    (function() { "use strict";
        var $alert_block = $wrapper.find('.s-alert:first');
        if ($.storage.get('shop/couriers_alert_hidden')) {
            $alert_block.hide();
        } else {
            $alert_block.show();
            $alert_block.find('.s-alert-close').click(function() {
                $alert_block.hide();
                $.storage.set('shop/couriers_alert_hidden', 1);
                return false;
            });
        }
    })();

});</script>
<?php }} ?>