<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 12:08:30
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsCurrencies.html" */ ?>
<?php /*%%SmartyHeaderCode:2632082245c87770ed93907-33407400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c078f3031611ca0610b0d38bc9df9f7d70adf3bd' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsCurrencies.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2632082245c87770ed93907-33407400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'currencies' => 0,
    'currency' => 0,
    'primary' => 0,
    'rounding_options' => 0,
    'o_value' => 0,
    'o_label' => 0,
    'rest_system_currencies' => 0,
    'system_currencies' => 0,
    'code' => 0,
    'round_services' => 0,
    'round_discounts' => 0,
    'round_shipping' => 0,
    'use_product_currency' => 0,
    'convert_text' => 0,
    'product_count' => 0,
    'template_content' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c87770ee44556_13558703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c87770ee44556_13558703')) {function content_5c87770ee44556_13558703($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tmpl.min.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/inline.editable.widget.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/currencies.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<div class="blank s-settings-form" id="s-settings-currencies">
    <div class="block double-padded">
        <div class="float-right">
            <ul class="menu-h with-icons">
                <li><a href="#" id="s-settings-change-primary-currency"><i class="icon16 dollar"></i>Изменить основную валюту</a></li>
            </ul>
        </div>
        <h1>Валюты</h1>
        <div class="fields form">

              <div class="field-group">
                <div class="field">
                    <div class="name">
                        Валюты
                    </div>
                    <div class="value no-shift">
                        <table class="zebra s-settings-currencies">
                            <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                <tr data-code="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" class="s-settings-currency">
                                    <td class="min-width">
                                        <i class="icon16 sort"></i>
                                        <input type="hidden" name="currency[<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
">
                                    </td>
                                    <td class="nowrap"><strong><?php echo $_smarty_tpl->tpl_vars['currency']->value['title'];?>
</strong> <span class="hint"><?php echo $_smarty_tpl->tpl_vars['currency']->value['sign'];?>
</span></td>
                                    <td class="s-rate editable<?php if ($_smarty_tpl->tpl_vars['currency']->value['code']==$_smarty_tpl->tpl_vars['primary']->value){?> primary<?php }?>">
                                        <?php if ($_smarty_tpl->tpl_vars['currency']->value['code']==$_smarty_tpl->tpl_vars['primary']->value){?>
                                            <span class="gray italic">Основная валюта</span>
                                        <?php }else{ ?>
                                            1 <?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
 = <span id="s-rate-<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value['rate'];?>
</span>
                                            <input type="text" name="rate[<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
]" value="<?php echo (float)$_smarty_tpl->tpl_vars['currency']->value['rate'];?>
" id="s-rate-<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
-input" style="display:none;" class="numerical short">
                                            <?php echo $_smarty_tpl->tpl_vars['primary']->value;?>

                                        <?php }?>

                                        <div class="rounding-readonly float-right" style="display:none;">
                                            <span class="rounding-value"></span>
                                            <span class="rounding-up-only-enabled">(только вверх)</span>
                                        </div>
                                        <div class="rounding" style="display: none">
                                            <select name="rounding[<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
]">
                                                <?php  $_smarty_tpl->tpl_vars['o_label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o_label']->_loop = false;
 $_smarty_tpl->tpl_vars['o_value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rounding_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o_label']->key => $_smarty_tpl->tpl_vars['o_label']->value){
$_smarty_tpl->tpl_vars['o_label']->_loop = true;
 $_smarty_tpl->tpl_vars['o_value']->value = $_smarty_tpl->tpl_vars['o_label']->key;
?>
                                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o_value']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (empty($_smarty_tpl->tpl_vars['o_value']->value)&&!empty($_smarty_tpl->tpl_vars['currency']->value['precision'])){?> disabled<?php }elseif(ifempty($_smarty_tpl->tpl_vars['currency']->value['rounding'])==$_smarty_tpl->tpl_vars['o_value']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o_label']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php } ?>
                                            </select>
                                            <input type="hidden" name="round_up_only[<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
]" value="">
                                            <label><input type="checkbox" name="round_up_only[<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
]" value="1"<?php if (!empty($_smarty_tpl->tpl_vars['currency']->value['round_up_only'])){?> checked<?php }?>> Округлять только вверх</label>
                                        </div>

                                        </td>
                                    <td class="s-actions">
                                        <a href="javascript:void(0);"><i class="icon16 settings"></i></a>
                                        <?php if ($_smarty_tpl->tpl_vars['currency']->value['code']!=$_smarty_tpl->tpl_vars['primary']->value){?>
                                            <a href="javascript:void(0);"><i class="icon16 delete"></i></a>
                                        <?php }?>
                                        <input type="button" class="save" value="Сохранить">
                                    </td>
                                </tr>
                            <?php } ?>
                            <?php $_smarty_tpl->_capture_stack[0][] = array("template-new-currency", null, null); ob_start(); ?>
                            <tr data-code="{%#o.code%}" class="s-settings-currency new" style="display: none;">
                                <td class="min-width">
                                    <i class="icon16 sort"></i>
                                    <input type="hidden" name="currency[{%#o.code%}]" value="{%#o.code%}">
                                </td>
                                <td width="26%"><strong class="s-settings-name">{%#o.title%}</strong> <span class="hint">{%#o.sign%}</span></td>
                                <td class="s-rate editable">
                                    1 {%#o.code%}  = <span id="s-rate-{%#o.code%}">1</span>
                                    <input type="text" name="rate[{%#o.code%}]" value="1" id="s-rate-{%#o.code%}-input" style="display:none;" class="numerical short">
                                    <?php echo $_smarty_tpl->tpl_vars['primary']->value;?>



                                    <div class="rounding-readonly float-right" style="display:none;">
                                        <span class="rounding-value"></span>
                                        <span class="rounding-up-only-enabled">(только вверх)</span>
                                    </div>
                                    <div class="rounding">
                                        <select name="rounding[{%#o.code%}]">
                                            <?php  $_smarty_tpl->tpl_vars['o_label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o_label']->_loop = false;
 $_smarty_tpl->tpl_vars['o_value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rounding_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o_label']->key => $_smarty_tpl->tpl_vars['o_label']->value){
$_smarty_tpl->tpl_vars['o_label']->_loop = true;
 $_smarty_tpl->tpl_vars['o_value']->value = $_smarty_tpl->tpl_vars['o_label']->key;
?>
                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o_value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                                                        <?php if (empty($_smarty_tpl->tpl_vars['o_value']->value)){?>
                                                            {% if(o.precision){ %} disabled {% } %}
                                                        <?php }else{ ?>
                                                            {% if(o.precision='<?php echo $_smarty_tpl->tpl_vars['o_value']->value;?>
'){ %} selected {% } %}
                                                        <?php }?>
                                                ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o_label']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                            <?php } ?>
                                        </select>

                                        <input type="hidden" name="round_up_only[{%#o.code%}]" value="">
                                        <label><input type="checkbox" name="round_up_only[{%#o.code%}]" value="1" checked> Округлять только вверх</label>
                                    </div>
                                </td>
                                <td class="s-actions">
                                    <a href="javascript:void(0);"><i class="icon16 settings"></i></a>
                                    <a href="javascript:void(0);"><i class="icon16 delete"></i></a>
                                    <input type="button" class="save" value="Сохранить">
                                </td>
                            </tr>
                            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['rest_system_currencies']->value)){?>
                            <tr class="white">
                                <td class="min-width"></td>
                                <td colspan="4">
                                    <select class="add-new-currency">
                                        <option value="0">Добавить валюту...</option>
                                    <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system_currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['currency']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" <?php if (!isset($_smarty_tpl->tpl_vars['rest_system_currencies']->value[$_smarty_tpl->tpl_vars['code']->value])){?>disabled="disabled" style="display:none;"<?php }?> data-sign="<?php echo $_smarty_tpl->tpl_vars['currency']->value['sign'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['currency']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['currency']->value['title'];?>
</option>
                                    <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <?php }?>
                        </table>
                        <p class="hint">Максимальная доступная точность округления — до 0,01.<br>
                        Вариант «Не округлять» по умолчанию недоступен, если не активирован в пользовательской конфигурации.</p>
                    </div>
                </div>
              </div>

              <form method="POST" action="?module=settings&action=currenciesSave">
              <div class="field-group">
                <div class="field">
                    <div class="name">
                        Округление
                    </div>
                    <div class="value no-shift"><label>
                        <input type="checkbox" checked disabled>
                        Для цен товаров
                        <br><span class="hint">
                            Округление всегда применяется при конвертации цены товара в валюту витрины, если для этой валюты настроено округление.
                        </span>
                    </label></div>
                    <div class="value no-shift"><label>
                            <input type="checkbox" name="round_services" value="1"<?php if (!empty($_smarty_tpl->tpl_vars['round_services']->value)){?> checked<?php }?>>
                            Для стоимости услуг
                            <br><span class="hint">
                            Включите, чтобы округлять стоимость услуг в новых заказах в соответствии с настройками валют.
                        </span>
                        </label></div>
                    <div class="value no-shift"><label>
                        <input type="checkbox" name="round_discounts" value="1"<?php if (!empty($_smarty_tpl->tpl_vars['round_discounts']->value)){?> checked<?php }?>>
                        Для итогового размера скидки
                        <br><span class="hint">
                            Включите, чтобы итоговый размер скидки в новых заказах округлялся в соответствии с настройками валюты заказа.
                        </span>
                    </label></div>
                    <div class="value no-shift"><label>
                        <input type="checkbox" name="round_shipping" value="1"<?php if (!empty($_smarty_tpl->tpl_vars['round_shipping']->value)){?> checked<?php }?>>
                        Для стоимости доставки
                        <br><span class="hint">
                            Включите, чтобы стоимость доставки в новых заказах округлялась в соответствии с настройками валюты заказа.
                        </span>
                    </label></div>
                </div>
              </div>
              <div class="field-group">
                <div class="field">
                    <div class="name">
                        Ввод цен товаров
                    </div>
                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="use_product_currency" value="0" <?php if (!$_smarty_tpl->tpl_vars['use_product_currency']->value){?>checked<?php }?>> Я буду вводить все цены в основной валюте
                        </label>
                    </div>
                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="use_product_currency" value="1" <?php if ($_smarty_tpl->tpl_vars['use_product_currency']->value){?>checked<?php }?>> Я буду вводить цены в разных валютах для разных товаров
                        </label>
                    </div>
                </div>
              </div>
              <div class="field-group">
                <div class="field">
                    <div class="value no-shift submit" style="display: none">
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                        <input type="submit" class="button green" value="Сохранить">
                    </div>
                </div>

              </div>
              </form>
        </div>
        <div class="clear-both"></div>
    </div>
</div>



<?php $_smarty_tpl->tpl_vars['convert_text'] = new Smarty_variable("Конвертировать цены товаров (%d) в новую основную валюту (%s) по текущему курсу (%s)", null, 0);?>
<?php $_smarty_tpl->tpl_vars['convert_text'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['convert_text']->value,"%d",$_smarty_tpl->tpl_vars['product_count']->value), null, 0);?>
<div class="dialog width600px <?php if ($_smarty_tpl->tpl_vars['product_count']->value>0){?>height250px<?php }else{ ?>height200px<?php }?>" id="s-settings-change-primary-currency-dialog">
    <div class="dialog-background"></div>
    <form method="post" action="?module=settings&action=currencyChange">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Изменить основную валюту <span>(<?php echo $_smarty_tpl->tpl_vars['primary']->value;?>
)</span></h1>
                <div class="fields form">
                    <div class="field">
                        <div class="name">Новая основная валюта</div>
                        <div class="value no-shift">
                            <select name="code" data-primary="<?php echo $_smarty_tpl->tpl_vars['primary']->value;?>
">
                                <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['currency']->value['code']!=$_smarty_tpl->tpl_vars['primary']->value){?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" <?php if ($_smarty_tpl->tpl_vars['currency']->value['code']==$_smarty_tpl->tpl_vars['primary']->value){?>checked="checked"<?php }?> data-rate="<?php echo (float)$_smarty_tpl->tpl_vars['currency']->value['rate'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
</option>
                                    <?php }?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['product_count']->value>0){?>
                    <div class="field">
                        <div class="name">Конвертировать цены</div>
                        <div class="value no-shift">
                            <label><input type="radio" name="convert" value="1" checked="checked">
                                <span class="s-convert-text"><?php echo $_smarty_tpl->tpl_vars['convert_text']->value;?>
</span>
                            </label>
                        </div>
                        <div class="value no-shift">
                            <label><input type="radio" name="convert" value="0"> Не конвертировать, оставить все цены без изменений</label>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button blue" type="submit" value="Изменить основную валюту">
                <i class="icon16 loading" style="display:none;"></i>
                или <a class="cancel" href="javascript:void(0);">отмена</a>
            </div>
        </div>
    </div>
    </form>
</div>


<?php  $_smarty_tpl->tpl_vars['template_content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template_content']->_loop = false;
 $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template_content']->key => $_smarty_tpl->tpl_vars['template_content']->value){
$_smarty_tpl->tpl_vars['template_content']->_loop = true;
 $_smarty_tpl->tpl_vars['template']->value = $_smarty_tpl->tpl_vars['template_content']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['template_content']->value&&(strpos($_smarty_tpl->tpl_vars['template']->value,'template-')===0)){?>
    <script id="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" type="text/html">
        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_content']->value,'</','<\/');?>

    </script>
<?php }?>
<?php } ?>

<script type="text/javascript">
    document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Валюты").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
    $.settings.currenciesInit({
        primary: '<?php echo $_smarty_tpl->tpl_vars['primary']->value;?>
',
        remove_text: 'Нажмите на кнопку «Сохранить» ниже, чтобы подтвердить удаление.',
        convert_text: '<?php echo $_smarty_tpl->tpl_vars['convert_text']->value;?>
',
        system_currencies: <?php echo json_encode($_smarty_tpl->tpl_vars['system_currencies']->value);?>

    });
</script>
<?php }} ?>