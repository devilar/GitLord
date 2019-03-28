<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:40:53
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsSchedule.html" */ ?>
<?php /*%%SmartyHeaderCode:13138457675c9ccee5465c23-34569573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31ac7e2494a2c0bc3033fcb702a4512be7bde066' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsSchedule.html',
      1 => 1548948065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13138457675c9ccee5465c23-34569573',
  'function' => 
  array (
    'renderExtraWorkday' => 
    array (
      'parameter' => 
      array (
        'day' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'renderWeekend' => 
    array (
      'parameter' => 
      array (
        'date' => '',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'day' => 0,
    'date' => 0,
    'class' => 0,
    'id' => 0,
    'timezones' => 0,
    'timezone_id' => 0,
    'timezone' => 0,
    'info' => 0,
    'week' => 0,
    '_day_params' => 0,
    '_work' => 0,
    '_day_id' => 0,
    'processing_time' => 0,
    'extra_workdays' => 0,
    '_day' => 0,
    'extra_weekends' => 0,
    '_date' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9ccee5548888_68457090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9ccee5548888_68457090')) {function content_5c9ccee5548888_68457090($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php if (!function_exists('smarty_template_function_renderExtraWorkday')) {
    function smarty_template_function_renderExtraWorkday($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['renderExtraWorkday']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <tr class="js-day-wrapper worked">
        <td class="min-width"></td>
        <td>
            <label>
                <input data-name="date" class="s-date js-datepicker" autocomplete="off" value="<?php echo htmlspecialchars(smarty_modifier_wa_date((($tmp = @$_smarty_tpl->tpl_vars['day']->value['date'])===null||$tmp==='' ? null : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" />
                <i class="icon16 calendar"></i>
            </label>
        </td>
        <td>
            от
            <input data-name="start_work" class="s-time" type="text" autocomplete="off" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['day']->value['start_work'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="00:00" />
            до
            <input data-name="end_work" class="s-time" type="text" autocomplete="off" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['day']->value['end_work'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="23:59" />
        </td>
        <td class="align-center">
            до
            <input data-name="end_processing" class="s-time" type="text" autocomplete="off" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['day']->value['end_processing'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="14:00" />
        </td>
        <td>
            <i class="icon16 no s-remove js-remove"></i>
        </td>
    </tr>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php if (!is_callable('smarty_modifier_wa_date')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php if (!function_exists('smarty_template_function_renderWeekend')) {
    function smarty_template_function_renderWeekend($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['renderWeekend']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <tr class="js-day-wrapper">
        <td class="min-width"></td>
        <td>
            <label>
                <input class="s-date js-datepicker js-extra-weekend" autocomplete="off" value="<?php echo htmlspecialchars(smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value), ENT_QUOTES, 'UTF-8', true);?>
" />
                <i class="icon16 calendar"></i>
            </label>
        </td>
        <td>
            <i class="icon16 no s-remove js-remove"></i>
        </td>
    </tr>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('s-settings-schedule-content', null, 0);?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class']->value), null, 0);?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 content blank" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <div class="s-settings-form">
        <form action="?module=settingsScheduleSave">
            <div class="block double-padded">
                <h1>Режим работы</h1>

                <div class="field-group">
                    <div class="field">
                        <div class="name">Часовой пояс</div>
                        <div class="value">
                            <select name="data[timezone]">
                                <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['timezone_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timezones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['timezone_id']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['timezone_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['timezone_id']->value==$_smarty_tpl->tpl_vars['timezone']->value){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <div class="name">Время приема и обработки заказов</div>
                        <div class="value js-week-wrapper">
                            <table class="zebra s-week" data-block-name="week" style="max-width: 600px; border: 1px solid #fff;">
                                <thead class="header">
                                    <tr>
                                        <th></th>
                                        <th>День недели</th>
                                        <th>Рабочий</th>
                                        <th>Часы работы</th>
                                        <th>Заказы в обработку</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['_day_params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day_params']->_loop = false;
 $_smarty_tpl->tpl_vars['_day_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['week']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_day_params']->key => $_smarty_tpl->tpl_vars['_day_params']->value){
$_smarty_tpl->tpl_vars['_day_params']->_loop = true;
 $_smarty_tpl->tpl_vars['_day_id']->value = $_smarty_tpl->tpl_vars['_day_params']->key;
?>
                                        <?php $_smarty_tpl->tpl_vars['_work'] = new Smarty_variable($_smarty_tpl->tpl_vars['_day_params']->value['work'], null, 0);?>
                                        <tr class="s-day js-day-wrapper<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> worked<?php }?>">
                                            <td></td>
                                            <td class="s-day-name"><label for="day_<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day_params']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label></td>
                                            <td class="align-center"><input id="day_<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
" class="js-work" type="checkbox" name="data[week][<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
][work]"<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> checked<?php }?>/></td>
                                            <td class="align-center">
                                                от
                                                <input class="s-time js-time" type="text" autocomplete="off" name="data[week][<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
][start_work]"<?php if (!$_smarty_tpl->tpl_vars['_work']->value){?> disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['_work']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day_params']->value['start_work'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> placeholder="00:00"<?php }?> data-placeholder="00:00" />
                                                до
                                                <input class="s-time js-time" type="text" autocomplete="off" name="data[week][<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
][end_work]"<?php if (!$_smarty_tpl->tpl_vars['_work']->value){?> disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['_work']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day_params']->value['end_work'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> placeholder="23:59"<?php }?> data-placeholder="23:59" />
                                            </td>
                                            <td class="align-center">
                                                до
                                                <input class="s-time js-time" type="text" autocomplete="off" name="data[week][<?php echo $_smarty_tpl->tpl_vars['_day_id']->value;?>
][end_processing]"<?php if (!$_smarty_tpl->tpl_vars['_work']->value){?> disabled<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['_work']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_day_params']->value['end_processing'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"<?php if ($_smarty_tpl->tpl_vars['_work']->value){?> placeholder="14:00"<?php }?> data-placeholder="14:00" />
                                            </td>
                                            <td></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <div class="hint" style="margin: 10px 0 0; max-width: 570px;"><?php echo sprintf('Значения полей «%s» и «%s» могут быть использованы для расчета сроков доставки.','Часы работы','Заказы в обработку');?>
</div>
                            <div class="hint" style="margin: 10px 0 0; max-width: 570px;"><?php echo sprintf('Значения в столбце «%s» обозначают последний час рабочего дня, до которого заказы принимаются для обработки в течение дня. Заказы, оформленные после указанного часа, обрабатываются на следующий день.','Заказы в обработку');?>
</div>
                            <div class="hint" style="margin: 10px 0 0; max-width: 570px;">Настройка используется по умолчанию на всех витринах магазина.</div>
                        </div>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <div class="name">
                            <label for="processing_time">Количество рабочих часов на обработку заказа</label>
                        </div>
                        <div class="value">
                            <input id="processing_time" class="s-time" type="text" autocomplete="off" name="data[processing_time]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processing_time']->value, ENT_QUOTES, 'UTF-8', true);?>
" />

                            <div class="hint" style="margin: 10px 0 5px; max-width: 570px;">Это значение используется для расчета сроков доставки в режиме оформления заказа в корзине и может также использоваться при пошаговом оформлении заказа, если плагин доставки учитывает время готовности заказа. Указанный период добавляется ко времени оформления заказа и учитывается при переносе обработки заказов на другой день — для заказов, оформленных в конце или после окончания текущего рабочего дня. Дополнительное время комплектации заказа можно указать в настройках отдельных способов доставки.</div>
                            <div class="hint">Настройка используется по умолчанию на всех витринах магазина.</div>
                        </div>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <div class="name">Дополнительные рабочие дни</div>
                        <div class="value js-extra-workdays-wrapper">
                            <table class="zebra" style="max-width: 494px;">
                                <thead class="header"<?php if (empty($_smarty_tpl->tpl_vars['extra_workdays']->value)){?> style="display: none;"<?php }?>>
                                <tr>
                                    <th class="min-width"></th>
                                    <th>Дата</th>
                                    <th>Часы работы</th>
                                    <th>Заказы в обработку</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="js-days-list">
                                    <?php  $_smarty_tpl->tpl_vars['_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_day']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['extra_workdays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_day']->key => $_smarty_tpl->tpl_vars['_day']->value){
$_smarty_tpl->tpl_vars['_day']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_day']->key;
?>
                                        <?php smarty_template_function_renderExtraWorkday($_smarty_tpl,array('day'=>$_smarty_tpl->tpl_vars['_day']->value));?>

                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="block">
                                <a href="javascript:void(0);" class="inline-link js-add-day" style="margin-left: 5px;">
                                    <i class="icon16 add"></i>
                                    <b><i>Добавить день</i></b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field-group">
                    <div class="field">
                        <div class="name">Дополнительные выходные дни</div>
                        <div class="value js-extra-weekends-wrapper">
                            <table class="zebra" style="max-width: 160px;">
                                <tbody class="js-days-list">
                                <?php  $_smarty_tpl->tpl_vars['_date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_date']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['extra_weekends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_date']->key => $_smarty_tpl->tpl_vars['_date']->value){
$_smarty_tpl->tpl_vars['_date']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_date']->key;
?>
                                    <?php smarty_template_function_renderWeekend($_smarty_tpl,array('date'=>$_smarty_tpl->tpl_vars['_date']->value));?>

                                <?php } ?>
                                </tbody>
                            </table>
                            <div class="block">
                                <a href="javascript:void(0);" class="inline-link js-add-day" style="margin-left: 5px;">
                                    <i class="icon16 add"></i>
                                    <b><i>Добавить день</i></b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <input class="button js-submit-button green" type="submit" name="" value="Сохранить">
                <i class="icon16 loading js-loading" style="margin: 9px 0 0 6px; display: none;"></i>
            </div>
        </form>
    </div>
    <div class="clear-both"></div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/schedule.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script>
    (function ($) {
        document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Режим работы").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
        new ShopSettingsSchedule({
            $wrapper: $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"),
            extra_workday_template: <?php ob_start();?><?php smarty_template_function_renderExtraWorkday($_smarty_tpl,array());?>
<?php echo json_encode(ob_get_clean())?>,
            extra_weekend_template: <?php ob_start();?><?php smarty_template_function_renderWeekend($_smarty_tpl,array());?>
<?php echo json_encode(ob_get_clean())?>,
            date_format: <?php echo json_encode(waDateTime::getFormatJs('date'));?>

        });
    })(jQuery);
</script><?php }} ?>