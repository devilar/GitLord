<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:07
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsTemplateSMS.html" */ ?>
<?php /*%%SmartyHeaderCode:5699639345c7ac37ba157b3-73451035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dfac490ddb47e2ed2326747e705546a498c5648' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsTemplateSMS.html',
      1 => 1550671075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5699639345c7ac37ba157b3-73451035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar_html' => 0,
    'channel' => 0,
    'numbers' => 0,
    '_number' => 0,
    '_adapter_name' => 0,
    'wa_backend_url' => 0,
    '_template_id' => 0,
    '_template_name' => 0,
    'channels' => 0,
    'wa' => 0,
    'user' => 0,
    '_id' => 0,
    '_cheat_sheet_name' => 0,
    'default_templates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac37ba55724_27343993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac37ba55724_27343993')) {function content_5c7ac37ba55724_27343993($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_cheat_sheet_name'] = new Smarty_variable("wa-settings-sms-templates", null, 0);?>
<div class="s-sms-templates-page" id="s-sms-templates-page">
    <div class="s-layout">
        
        <div class="s-column sidebar left250px">
            <?php echo $_smarty_tpl->tpl_vars['sidebar_html']->value;?>

        </div>
        
        <div class="s-column content bordered-left" id="s-sms-template-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['channel']->value->getId()){?>
            <form class="s-template-form" action="?module=settingsTemplateSMSSave&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getId(), ENT_QUOTES, 'UTF-8', true);?>
">
                <div class="s-sms-templates">
                    <div class="blank block double-padded">
                        <h1 class="s-template-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</h1>
                        <div class="field-group">
                            <div class="field">
                                <div class="name">Название группы шаблонов</div>
                                <div class="value">
                                    <input type="text" name="data[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">Отправитель</div>
                                <div class="value">
                                    <select name="data[address]">
                                        <?php  $_smarty_tpl->tpl_vars['_adapter_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_adapter_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_number'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['numbers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_adapter_name']->key => $_smarty_tpl->tpl_vars['_adapter_name']->value){
$_smarty_tpl->tpl_vars['_adapter_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_number']->value = $_smarty_tpl->tpl_vars['_adapter_name']->key;
?>
                                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_number']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['channel']->value->getAddress()==$_smarty_tpl->tpl_vars['_number']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_number']->value, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_adapter_name']->value, ENT_QUOTES, 'UTF-8', true);?>
)</option>
                                        <?php } ?>
                                    </select>
                                    <div class="hint"><?php echo sprintf('Список отправителей редактируется в разделе «<a class="js-disable-router" href="%s">SMS-провайдеры</a>».',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/sms/");?>
</div>
                                </div>
                            </div>
                        </div>
                        <div class="field-group">
                            <?php  $_smarty_tpl->tpl_vars['_template_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_template_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_template_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel']->value->getTemplatesList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_template_name']->key => $_smarty_tpl->tpl_vars['_template_name']->value){
$_smarty_tpl->tpl_vars['_template_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_template_id']->value = $_smarty_tpl->tpl_vars['_template_name']->key;
?>
                                <div class="field" data-template="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_template_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_template_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                    <div class="value">
                                        <textarea name="data[params][template][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_template_id']->value, ENT_QUOTES, 'UTF-8', true);?>
]" data-template="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_template_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getTemplate($_smarty_tpl->tpl_vars['_template_id']->value), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                        <div class="s-preview">
                                            <a class="s-preview-link js-preview-link hint inline-link" href="javascript:void(0);">
                                                <i class="icon16 search"></i><b><i>Предварительный просмотр</i></b>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    
                    
                    <div class="s-form-buttons js-buttons-wrapper blank">
                        <div class="s-footer-actions block double-padded js-footer-actions">
                            <div class="fixed">
                                
                                <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                                
                                <span class="c-hidden">
                                    <span style="margin: 0 4px;">или</span>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/sms/template/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getId(), ENT_QUOTES, 'UTF-8', true);?>
" class="js-cancel">отмена</a>
                                </span>
                                <i class="icon16 loading s-loading" style="display: none;"></i>
                                
                                <input class="button js-check-button" type="button" style="margin-left: 10px;" value="Проверить отправку">
                                
                                <div class="s-cheat-sheet-wrapper js-cheat-sheet-wrapper"></div>
                                
                                <div class="s-channel-actions">
                                    
                                    <a href="javascript:void(0);" class="inline-link js-reset" title="Восстановить текст по умолчанию">
                                        <i class="icon16 broom"></i>
                                        <b class="hide-on-small-screens"><i>Сбросить</i></b>
                                    </a>
                                    
                                    <a href="javascript:void(0);" class="js-duplicate" title="Дублировать шаблоны">
                                        <i class="icon16 split"></i><span class="hide-on-small-screens"> Создать дубликат</span>
                                    </a>
                                    
                                    <?php if (!$_smarty_tpl->tpl_vars['channel']->value->isSystem()){?>
                                        <a href="javascript:void(0);" class="js-delete" title="Удалить шаблоны">
                                            <i class="icon16 delete"></i><span class="hide-on-small-screens"> Удалить</span>
                                        </a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php }else{ ?>
                <div class="s-no-templates">
                    <?php if (!empty($_smarty_tpl->tpl_vars['channels']->value)){?>
                        Шаблоны не найдены
                    <?php }else{ ?>
                        Нет шаблонов
                    <?php }?>
                </div>
            <?php }?>
        </div>
    </div>
</div>


<div class="dialog" id="s-sms-delete-channel-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window">
        <form>
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1>Удалить группу шаблонов?</h1>
                </div>
                <div class="clear"></div>
            </div>

            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" class="button red js-submit-button" value="Удалить">
                    &nbsp;или&nbsp;<a href="javascript:void(0);" class="cancel">отмена</a>
                    <i class="icon16 loading s-loading" style="margin-left: 10px; margin-top: 10px; display: none;"></i>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="dialog s-sms-preview-template-dialog" id="s-sms-preview-template-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h2>Предварительный просмотр SMS-сообщения «<span class="js-template-name"></span>»</h2>
            </div>
            <div class="s-message-wrapper">
                <div class="message js-message-place"></div>
            </div>
            <div class="s-sender-wrapper">
                <img class="s-company-userpic" src="<?php echo waContact::getPhotoUrl(0,0,16);?>
" alt="">
                <span class="s-company-name"><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(true);?>
</span>
                <span class="hint s-time js-time"></span>
            </div>
            <div class="clear"></div>
        </div>

        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <a href="javascript:void(0);" class="button cancel">Закрыть</a>
            </div>
        </div>
    </div>
</div>


<div class="dialog s-sms-check-template-dialog" id="s-sms-check-template-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window">
        <form action="?module=settingsTemplateCheckSending">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h2>Проверка отправки SMS-сообщений</h2>
                    <div class="field-group">
                        
                        <div class="field s-recipient-field">
                            <div class="name">Телефон получателя</div>
                            <div class="value">
                                <input type="text" name="data[recipient]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->get('phone','default'), ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                            <div class="value">
                                <span class="hint">8XXXXXXXXXX, 7XXXXXXXXXX, +7XXXXXXXXXX</span>
                            </div>
                        </div>
                        
                        <div class="field">
                            <div class="name">Шаблоны</div>
                            <div class="value s-templates-list js-templates-list">
                                <?php  $_smarty_tpl->tpl_vars['_template_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_template_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_template_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel']->value->getTemplatesList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_template_name']->key => $_smarty_tpl->tpl_vars['_template_name']->value){
$_smarty_tpl->tpl_vars['_template_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_template_id']->value = $_smarty_tpl->tpl_vars['_template_name']->key;
?>
                                    <?php $_smarty_tpl->tpl_vars['_id'] = new Smarty_variable(uniqid("template_".((string)htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getId(), ENT_QUOTES, 'UTF-8', true))."_".((string)htmlspecialchars($_smarty_tpl->tpl_vars['_template_id']->value, ENT_QUOTES, 'UTF-8', true))), null, 0);?>
                                    <div class="s-template-item js-template-item">
                                        <input id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" class="js-template-item-checkbox" type="checkbox" name="data[template][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_template_id']->value, ENT_QUOTES, 'UTF-8', true);?>
]" checked />
                                        <label for="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_template_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</label>
                                    </div>
                                <?php }
if (!$_smarty_tpl->tpl_vars['_template_name']->_loop) {
?>
                                    <span style="color: #999;">Шаблоны не найдены</span>
                                <?php } ?>
                            </div>
                        </div>
                        <input type="hidden" name="data[channel_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getId(), ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" class="button blue js-submit-button" value="<?php echo sprintf('Отправить %s SMS',count($_smarty_tpl->tpl_vars['channel']->value->getTemplatesList()));?>
"<?php if (count($_smarty_tpl->tpl_vars['channel']->value->getTemplatesList())==0){?> disabled<?php }?>>
                    &nbsp;или&nbsp;<a href="javascript:void(0);" class="cancel">отмена</a>
                    <i class="icon16 loading s-loading" style="margin-left: 10px; margin-top: 10px; display: none;"></i>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="dialog" id="s-sms-requirement-to-save-changes-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h2>Сохраните шаблоны</h2>
                <p>Чтобы проверить отправку SMS-сообщений — необходимо сохранить внесённые вами изменения.</p>
            </div>
            <div class="clear"></div>
        </div>

        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <a href="javascript:void(0);" class="button cancel">Закрыть</a>
            </div>
        </div>
    </div>
</div>

<script>
    (function ($) {
        new WASettingsSMSTemplate({
            $wrapper: $("#s-sms-template-wrapper"),
            $delete_confirm_dialog: $("#s-sms-delete-channel-dialog"),
            $sms_preview_dialog: $("#s-sms-preview-template-dialog"),
            $sms_check_dialog: $("#s-sms-check-template-dialog"),
            $requirement_to_save: $("#s-sms-requirement-to-save-changes-dialog"),
            channel_id: <?php echo json_encode($_smarty_tpl->tpl_vars['channel']->value->getId());?>
,
            path_to_templates: "<?php echo ((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/sms/template/";?>
",
            cheat_sheet_name: <?php echo json_encode($_smarty_tpl->tpl_vars['_cheat_sheet_name']->value);?>
,
            default_templates: <?php echo json_encode($_smarty_tpl->tpl_vars['default_templates']->value);?>
,
            locales: {
                send_nan_sms: <?php echo json_encode(_ws('Send %s SMS'));?>

            }
        });
    })(jQuery);
</script>
<?php }} ?>