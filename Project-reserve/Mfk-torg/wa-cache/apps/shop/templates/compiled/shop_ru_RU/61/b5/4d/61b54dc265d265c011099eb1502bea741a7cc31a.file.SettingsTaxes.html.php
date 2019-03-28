<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:07
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsTaxes.html" */ ?>
<?php /*%%SmartyHeaderCode:18428725145c9ccef354bf30-64336314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b54dc265d265c011099eb1502bea741a7cc31a' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsTaxes.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18428725145c9ccef354bf30-64336314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'taxes' => 0,
    't' => 0,
    'tax' => 0,
    'billing_address_required' => 0,
    'tax_countries' => 0,
    'countries' => 0,
    'c' => 0,
    'tax_zip_codes' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9ccef35c1281_43353078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9ccef35c1281_43353078')) {function content_5c9ccef35c1281_43353078($_smarty_tpl) {?>
<div class="sidebar left200px">
    <div class="s-inner-sidebar">
        <ul class="menu-v stack with-icons">
            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                <li><a href="#/taxes/<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
"><i class="icon16 percent"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            <?php } ?>
            <li class="top-padded">
                <a href="#/taxes/new" class="small">
                    <i class="icon10 add"></i>Новое правило налогов
                </a>
            </li>
        </ul>
        <div class="block double-padded hr align-center hint">
            <p><?php echo sprintf('Изменить список стран и регионов можно в разделе <a href="%s">Страны и регионы</a>.','#/regions/');?>
</p>
        </div>
    </div>
</div>

<div class="content left200px s-settings-form blank bordered-left">
    <div class="block double-padded">
        <form id="s-tax-form" action="?module=settings&action=taxes">
            <?php if ($_smarty_tpl->tpl_vars['tax']->value['id']){?>
                <div class="float-right">
                    <ul class="menu-h">
                        <li><a href="javascript:void(0)" id="s-delete-tax-link"><i class="icon16 delete"></i>Удалить правило</a></li>
                    </ul>
                </div>
                <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
            <?php }else{ ?>
                <h1>Новое правило налогов</h1>
                <input type="hidden" name="id" value="new">
            <?php }?>

            <div class="fields width100px form">
                <div class="field">
                    <div class="name">
                        Название налога
                    </div>
                    <div class="value">
                        <input type="text" name="tax[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </div>
                </div>
                <div class="field">
                    <div class="name">
                        Тип налога
                    </div>
                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="tax[included]" value=""<?php if (!$_smarty_tpl->tpl_vars['tax']->value['included']){?> checked<?php }?>> Налог не включен в цены товаров<br />
                            <p class="hint">Обычно используется в качестве налога с продаж. Налог добавляется к итоговой сумме заказа, после того как покупатель введет адрес доставки во время оформления заказа.</p>
                        </label>
                    </div>
                    <div class="value">
                        <label>
                            <input type="radio" name="tax[included]" value="1"<?php if ($_smarty_tpl->tpl_vars['tax']->value['included']){?> checked<?php }?>> Налог включен в цены товаров<br />
                            <p class="hint">Обычно используется в качестве НДС. Налог не добавляется к итоговой сумме заказа, а вычисляется на ее основе и отображается в счете на оплату.</p>
                        </label>
                    </div>
                </div>
                <div class="field">
                    <div class="name">
                        Адрес
                    </div>
                    <div class="value no-shift">
                        Вычислять налоги на основании
                        <select name="tax[address_type]">
                            <option value="shipping"<?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type']=='shipping'){?> selected<?php }?>>Адрес доставки</option>
                            <option value="billing"<?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type']=='billing'){?> selected<?php }?>>Адрес плательщика</option>
                        </select>
                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['billing_address_required']->value){?>
                        <div class="value no-shift billing-address-warning" <?php if ($_smarty_tpl->tpl_vars['tax']->value['address_type']!='billing'){?>style="display:none;"<?php }?>><p class="small errormsg">Процесс оформления заказа настроен таким образом, что адрес плательщика не запрашивается у покупателя на этапе ввода контактной информации. Расчет налога по адресу плательщика не будет работать для заказов, при оформлении которых адрес плательщика не был задан.</p></div>
                    <?php }?>
                </div>
                <div class="field">
                    <div class="name">
                        Налоговые ставки
                    </div>
                    <div class="value no-shift">

                        <table id="s-tax-regions-table" class="zebra"><thead>
                            <tr>
                                <th colspan="2" class="nowrap">Территория <i class="icon10 uarr"></i></th>
                                <th>Ставка</th>
                                <th class="min-width"></th>
                            </tr>
                        </thead><tbody>

                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tax_countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                <?php echo $_smarty_tpl->getSubTemplate ("templates/actions/settings/SettingsTaxesCountry.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                            <?php } ?>

                            <tr class="empty-row<?php if ($_smarty_tpl->tpl_vars['tax_countries']->value){?> hidden<?php }?>">
                                <td colspan="4">
                                    <em class="grey">Ввести налоговые ставки по странами регионам.</em>
                                </td>
                            </tr>

                            <tr class="white">
                                <td colspan="4"></td>
                            </tr>
                            <tr class="white">
                                <td class="min-width"></td>
                                <td colspan="3">
                                    <select id="s-add-new-tax-country">
                                        <option selected value="">Добавить страну</option>
                                        <option disabled>--</option>
                                        <option value="%AL"<?php if (!empty($_smarty_tpl->tpl_vars['tax_countries']->value)){?> disabled<?php }?>>Все страны</option>
                                        <option value="%EU"<?php if (!empty($_smarty_tpl->tpl_vars['tax_countries']->value["%EU"])){?> disabled<?php }?>>Все европейские страны</option>
                                        <option value="%RW"<?php if (!empty($_smarty_tpl->tpl_vars['tax_countries']->value["%RW"])){?> disabled<?php }?>>Все остальные страны</option>
                                        <option disabled>--</option>
                                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['iso3letter'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['tax_countries']->value[$_smarty_tpl->tpl_vars['c']->value['iso3letter']])){?> disabled<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>

                        </tbody></table>
                    </div>
                </div>
                <div class="field">
                    <div class="value">
                        <input type="submit" class="button green" value="Сохранить">
                    </div>
                </div>
                <div class="field">
                    <div class="name">
                        Местные налоги
                    </div>
                    <div class="value no-shift">

                        <p>Если ваше законодательство требует взимания дополнительных местных налогов, добавьте налоговые ставки для отдельных почтовых индексов. В качестве маски используйте символ звездочки (*). Например, маска 12* обозначает все почтовые индексы, начинающиеся с цифр 12: 123654, 12963, 12AB7, 12 QN93 и т. д. (маска действует для цифр и букв). Правила для почтовых индексов обрабатываются в заданном порядке. Применяется первое правило, соответствующее почтовому индексу покупателя (применяется только одно, первое, правило). Правила расчета местных налогов имеют более высокий приоритет, чем правила налогов регионов (в случае срабатывания обоих правил местный налог используется вместо налога региона во время оформления заказа); это означает, что следует указывать объединенные местные налоговые ставки.</p>

                        <table id="s-tax-zip-codes-table" class="zebra"><thead>
                            <tr>
                                <th colspan="2" class="nowrap">Маска почтового индекса</th>
                                <th>Ставка</th>
                                <th class="min-width"></th>
                            </tr>
                        </thead><tbody>

                            <tr class="empty-row<?php if ($_smarty_tpl->tpl_vars['tax_zip_codes']->value){?> hidden<?php }?>">
                                <td colspan="4">
                                    <em class="grey">Местные налоги не определены.</em>
                                </td>
                            </tr>

                            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tax_zip_codes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                                <tr class="zip-row">
                                    <td class="min-width"><i class="icon16 sort"></i></td>
                                    <td><input class="code-input" type="text" name="tax_zip_codes[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['zip_expr'], ENT_QUOTES, 'UTF-8', true);?>
"></td>
                                    <td>
                                        <span class="rate-input"><input type="text" class="short numerical" name="tax_zip_rates[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['tax_value'], ENT_QUOTES, 'UTF-8', true);?>
">%</span>
                                        <em class="small commit-delete-message">Нажмите на кнопку «Сохранить» ниже, чтобы подтвердить удаление.</em>
                                    </td>
                                    <td class="min-width"><a href="javascript:void(0)"><i class="icon16 delete"></i></a></td>
                                </tr>
                            <?php } ?>

                            
                            <tr class="just-added hidden highlighted white template">
                                <td class="min-width"><i class="icon16 sort"></i></td>
                                <td><input type="text" name="tax_zip_codes[]" value="" placeholder="Маска почтового индекса"></td>
                                <td>
                                    <input type="text" name="tax_zip_rates[]" class="short numerical" value="" placeholder="0">%
                                </td>
                                <td class="min-width"><a href="javascript:void(0)"><i class="icon16 delete"></i></a></td>
                            </tr>

                            <tr class="buttons">
                                <td class="min-width"></td>
                                <td colspan="3"><a href="javascript:void(0)" id="s-add-zip-code-link" class="inline-link"><i class="icon16 add"></i><b><i>Добавить почтовый индекс</i></b></a></td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
                <div class="field">
                    <div class="value">
                        <input type="submit" class="button green" value="Сохранить">
                    </div>
                </div>
            </div>
        </form>
        <div class="clear-both"></div>
    </div>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/taxes.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script>(function() { "use strict";
    document.title = "Налоги — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    $.settings.taxesInitForm(<?php echo ifempty($_smarty_tpl->tpl_vars['tax']->value['id'],'null');?>
);

    <?php if ($_smarty_tpl->tpl_vars['tax']->value['id']){?>
        var settings_content = $('#s-settings-content');
        var form = $('#s-tax-form');

        // Link to delete rule
        $('#s-delete-tax-link').click(function() {
            if (!confirm("Вы уверены?")) {
                return false;
            }
            settings_content.find('.s-inner-sidebar a[href="#/taxes/<?php echo $_smarty_tpl->tpl_vars['tax']->value['id'];?>
"]').parents('li').remove();
            settings_content.find('.s-settings-form > .block').html('<p class="gray">'+"Налог удален"+'</p><div class="clear-both"></div>');

            $.settings.stopDispatch(1);
            window.location.hash = '#/taxes/';
            $.post(form.attr('action'), { 'delete': 1, id: <?php echo $_smarty_tpl->tpl_vars['tax']->value['id'];?>
 });
            return false;
        });
    <?php }?>
    
    <?php if (!$_smarty_tpl->tpl_vars['billing_address_required']->value){?>
        form.find('[name="tax[address_type]"]').change(function() {
            if ($(this).val() == 'billing') {
                form.find('.billing-address-warning').show();
            } else {
                form.find('.billing-address-warning').hide();
            }
        });
    <?php }?>
    
})();</script>
<?php }} ?>