<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:41
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:3824126015c7ac3610b1aa9-12246612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37d2304704e9ea23e501bc77a3ec673c8abb0ffd' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/Settings.html',
      1 => 1548766579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3824126015c7ac3610b1aa9-12246612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'settings' => 0,
    'locales' => 0,
    '_locale' => 0,
    '_locale_name' => 0,
    'locale_adapter' => 0,
    'locale_adapters_list' => 0,
    '_adapter' => 0,
    '_name' => 0,
    'config' => 0,
    'version' => 0,
    'wa_app_url' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac3610fddc7_56600317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac3610fddc7_56600317')) {function content_5c7ac3610fddc7_56600317($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Общие настройки — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<div class="s-general-settings-page blank block double-padded" id="s-general-settings-page">
    <h1 class="s-page-header">Общие настройки</h1>
    <div class="s-general-settings-fields-block">
        <form action="?module=settingsGeneralSave">
            <div class="field-group">
                
                <div class="field">
                    <div class="name">
                        <label for="config-name">Название компании</label>
                    </div>
                    <div class="value">
                        <input type="text" class="large" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" id="config-name" autocomplete="off">
                        <br>
                        <span class="hint">Может отображаться на страницах сайтов и в email-уведомлениях.</span>
                        <br>
                        <span class="hint s-error js-error-place"></span>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        <label for="config-url">Адрес сайта</label>
                    </div>
                    <div class="value">
                        <input type="text" name="url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" id="config-url" autocomplete="off">
                        <br>
                        <span class="hint">Может использоваться на страницах сайтов и в email-уведомлениях.</span>
                        <br>
                        <span class="hint s-error js-error-place"></span>
                    </div>
                </div>

                
                <?php if ($_smarty_tpl->tpl_vars['locales']->value){?>
                    <div class="field">
                        <div class="name">
                            <label for="config-locale">Язык доступных для установки программных продуктов</label>
                        </div>
                        <div class="value no-shift">
                            <select name="locale" id="config-locale">
                                <?php  $_smarty_tpl->tpl_vars['_locale_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_locale_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_locale'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_locale_name']->key => $_smarty_tpl->tpl_vars['_locale_name']->value){
$_smarty_tpl->tpl_vars['_locale_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_locale']->value = $_smarty_tpl->tpl_vars['_locale_name']->key;
?>
                                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_locale']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['settings']->value['locale']==$_smarty_tpl->tpl_vars['_locale']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_locale_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                <?php }?>

                
                <?php if ($_smarty_tpl->tpl_vars['locale_adapter']->value!==false){?>
                    <div class="field">
                        <div class="name">Механизм локализации</div>
                        <div class="value no-shift">
                            <select name="locale_adapter">
                                <?php  $_smarty_tpl->tpl_vars['_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_adapter'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locale_adapters_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_name']->key => $_smarty_tpl->tpl_vars['_name']->value){
$_smarty_tpl->tpl_vars['_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_adapter']->value = $_smarty_tpl->tpl_vars['_name']->key;
?>
                                    <option<?php if ($_smarty_tpl->tpl_vars['_adapter']->value==$_smarty_tpl->tpl_vars['locale_adapter']->value){?> selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_adapter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_name']->value;?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                <?php }?>
                
                <div class="field">
                    <div class="name">Очистка кеша</div>
                    <div class="value">
                        <input type="button" class="js-clear-cache button gray" value="Очистка кеша">
                        <i class="icon16 loading js-cache-loading" style="display: none;"></i>
                        <br><br>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">Для разработчика</div>
                    <div class="value">
                        <input type="checkbox" name="config[debug]" value="1"<?php if (isset($_smarty_tpl->tpl_vars['config']->value['debug'])&&$_smarty_tpl->tpl_vars['config']->value['debug']){?> checked="checked"<?php }?> id="config-debug-checkbox">
                        <label for="config-debug-checkbox">
                            <span>Режим отладки (debug mode)</span>
                            <div class="hint">Режим отладки отключает кеширование и включает подробный вывод сообщений об ошибках. Рекомендуется при разработке приложений.</div>
                        </label>
                    </div>
                </div>

                
                <div class="field">
                    <div class="name">
                        Версия Webasyst
                    </div>
                    <div class="value no-shift"><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</div>
                </div>
            </div>

            <div class="s-form-buttons">
                <div class="s-footer-actions js-footer-actions">
                    <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                    <span class="s-hidden">
                        <span style="margin: 0 4px;">или</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
webasyst/settings" class="js-cancel">отмена</a>
                    </span>
                    <i class="icon16 loading s-loading" style="display: none;"></i>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    (function($) {
        new WASettingsGeneral({
            $wrapper: $('#s-general-settings-page')
        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script><?php }} ?>