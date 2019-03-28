<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:40:57
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsSearch.html" */ ?>
<?php /*%%SmartyHeaderCode:12063673805c9ccee98f9cb8-49759302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '769d7b08b2040d1a99842e8db6ceba5db98e6758' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsSearch.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12063673805c9ccee98f9cb8-49759302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smart' => 0,
    'fields' => 0,
    'field_name' => 0,
    'field' => 0,
    'weights' => 0,
    'default_weights' => 0,
    'ignore' => 0,
    'by_part' => 0,
    '_by_part_char_count' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9ccee9956bc9_06239322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9ccee9956bc9_06239322')) {function content_5c9ccee9956bc9_06239322($_smarty_tpl) {?><div class="block double-padded blank s-settings-form">
    <h1 style="margin-bottom: 0.75em;">Поиск товаров</h1>

    <div class="fields form">
        <div class="field">
            <div class="name">Алгоритм поиска</div>
            <div class="value no-shift s-ibutton-checkbox">
                <ul class="menu-h">
                    <li><span<?php if (!empty($_smarty_tpl->tpl_vars['smart']->value)){?> class="gray"<?php }?> id="s-toggle-disabled-label">Простой</span></li>
                    <li>
                        <input type="checkbox" id="s-toggle-status" name="enabled" value="1"<?php if (!empty($_smarty_tpl->tpl_vars['smart']->value)){?> checked<?php }?>>
                    </li>
                    <li><span<?php if (empty($_smarty_tpl->tpl_vars['smart']->value)){?> class="gray"<?php }?> id="s-toggle-enabled-label">Умный</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="smart-disabled"<?php if (!empty($_smarty_tpl->tpl_vars['smart']->value)){?> style="display: none;"<?php }?>>
        <p>Поиск товаров будет производится по названию товаров и артикулов.</p>
    </div>

    <div id="smart-enabled"<?php if (empty($_smarty_tpl->tpl_vars['smart']->value)){?> style="display: none;"<?php }?>>
        <p>Поиск товаров осуществляется по многим параметрам, таким как наименование, описания, теги, значения характеристик и т. п. Во время заполнения поискового индекса (базы данных для осуществления поиска) эти параметры учитываются с разными приоритетами (весами), которые вы можете регулировать ниже. Настройте оптимальные значения приоритетов для параметров товаров в зависимости от типа продукции, предлагаемой в вашем интернет-магазина (100 — наибольший приоритет, 0 — наименьший).</p>
        <div id="s-settings-block">
            <form action="?module=settings&action=searchSave" method="post" id="s-settings-form">
                <div class="fields form">
                    <div class="field-group">

                        <?php  $_smarty_tpl->tpl_vars['field_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_name']->_loop = false;
 $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->key => $_smarty_tpl->tpl_vars['field_name']->value){
$_smarty_tpl->tpl_vars['field_name']->_loop = true;
 $_smarty_tpl->tpl_vars['field']->value = $_smarty_tpl->tpl_vars['field_name']->key;
?>
                            <div class="field">
                                <div class="name"><?php echo $_smarty_tpl->tpl_vars['field_name']->value;?>
</div>
                                <div class="value">
                                    <input type="text" name="weights[<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
]" value="<?php echo ifset($_smarty_tpl->tpl_vars['weights']->value[$_smarty_tpl->tpl_vars['field']->value]);?>
">
                                    <div class="s-search-weight-value">
                                        <strong class="weight-value"></strong>
                                        <?php if (isset($_smarty_tpl->tpl_vars['default_weights']->value[$_smarty_tpl->tpl_vars['field']->value])){?>
                                            <span class="hint default-weight" style="display:none;"><?php echo sprintf('Значение по умолчанию: %d',$_smarty_tpl->tpl_vars['default_weights']->value[$_smarty_tpl->tpl_vars['field']->value]);?>
</span>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (isset($_smarty_tpl->tpl_vars['weights']->value['other'])){?>
                        <input type="hidden" name="weights[other]" value="<?php echo $_smarty_tpl->tpl_vars['weights']->value['other'];?>
">
                        <?php }?>
                    </div>

                    <div class="field-group">

                        <div class="field">
                            <div class="name">Стоп-символы</div>
                            <div class="value">
                                <input type="text" name="ignore" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ignore']->value, ENT_QUOTES, 'UTF-8', true);?>
"><br>
                                <p class="hint">Стоп-символы будут автоматически удалены из поискового запроса пользователя. Пример: если название одного из товаров содержит «V-112» и вы хотите, чтобы этот товар находился по поисковой фразе «v112», добавьте - (дефис) в список стоп-символов.</p>
                            </div>
                        </div>

                        <div class="field">
                            <div class="name">Искать по части слова</div>
                            <div class="value no-shift">
                                <label>
                                    <input id="search_by_part" type="checkbox"<?php if ($_smarty_tpl->tpl_vars['by_part']->value){?> checked<?php }?>> Искать по части слова
                                </label>
                                <p class="hint">Включение этой настройки позволит находить такие слова как «трансформер» и «трансформатор» с помощью поискового запроса «транс». Рекомендуется включить эту настройку, если большинство товаров вашего интернет-магазина содержат длинные или сложные в написании слова.</p>
                            </div>
                            <div class="value small" id="search_by_part_div"<?php if (!$_smarty_tpl->tpl_vars['by_part']->value){?> style="display:none"<?php }?>>
                                <?php $_smarty_tpl->tpl_vars['_by_part_char_count'] = new Smarty_variable('', null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['by_part']->value){?><?php $_smarty_tpl->tpl_vars['_by_part_char_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['by_part']->value, null, 0);?><?php }?>
                                <?php echo sprintf('Только если длина поискового запроса не менее %s символов',(('<input class="short" type="text" name="by_part" value="').($_smarty_tpl->tpl_vars['_by_part_char_count']->value)).('">'));?>

                            </div>
                        </div>
                        <div class="field">
                            <div class="value submit">
                                <input type="submit" name="save" class="button green" value="Сохранить">
                                <span class="hidden s-msg-after-button"><i class="icon16 yes after-submit"></i></span>
                            </div>
                            <div class="value no-shift" style="display:none;" id="submit-message">
                                <p class="small"><em class="highlighted">Обновленные настройки поиска будут применены только для новых и редактируемых товаров, информация о которых обновлена после сохранения настроек поиска. Чтобы применить обновленные настройки к уже существующим товарам, запустите процесс обновления индексной базы для всех товаров.</em></p>
                            </div>
                        </div>
                        <div class="field">
                            <div class="value">
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <div></div>
                            <div class="value">
                                <a class="inline-link" href="#" id="s-reindex">Обновить индексную базу для всех товаров</a><br>
                                <span class="hint">Полностью обновить поисковую индексную базу данных для всех товаров вашего интернет-магазина.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

            </form>
        </div>
    </div>
</div>
        


<div class="dialog width600px height300px" id="s-reindex-dialog">
    <div class="dialog-background"></div>
    <form method="post" action="?module=settings&action=searchReindex">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Обновить индексную базу для всех товаров</h1>
                <p>Процесс переиндексации информации о товарах позволяет полностью обновить индексную базу интернет-магазина с использованием обновленных настроек поиска товаров. В зависимости от количества товаров в вашем интернет-магазине процесс может занять от нескольких секунд до нескольких минут или даже часов в случае очень большого количества товаров.</p>
                <div id="s-reindex-progressbar" style="display:none; margin-top: 20px;">
                    
                    <div class="progressbar blue float-left" style="display: none; width: 70%;">
                        <div class="progressbar-outer">
                            <div class="progressbar-inner" style="width: 0%;"></div>
                        </div>
                    </div>
                    <img style="float:left; margin-top:8px;" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif" />
                    <div class="clear"></div>
                    <span class="progressbar-description">0.000%</span>
                    <em class="hint">Пожалуйста, не закрывайте окно браузера, пока процесс переиндексации не будет завершен.</em>
                    <br clear="left" />
                    <em class="errormsg"></em>
                </div>
                
                <div id="s-reindex-report" style="display: none; margin-top: 20px;"></div>
                
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button green" type="submit" value="Запустить процесс переиндексации">
                или <a class="cancel" href="javascript:void(0);">отмена</a>
                
            </div>
        </div>
    </div>
    </form>
</div>
                
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.slider.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/search.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Поиск товаров").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
if(typeof($)!='undefined') {
    $.settings.searchInit();
}
</script><?php }} ?>