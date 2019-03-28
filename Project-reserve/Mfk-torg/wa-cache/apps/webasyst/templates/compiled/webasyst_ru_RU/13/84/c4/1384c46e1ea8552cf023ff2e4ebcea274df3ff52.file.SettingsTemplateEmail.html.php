<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:05
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsTemplateEmail.html" */ ?>
<?php /*%%SmartyHeaderCode:3411620425c7ac3795365f1-95693727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1384c46e1ea8552cf023ff2e4ebcea274df3ff52' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsTemplateEmail.html',
      1 => 1541667629,
      2 => 'file',
    ),
    'cff2d21dd45031871dd44494e154bce5a6c06cf0' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/sidebar/SidebarEmail.html',
      1 => 1541667629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3411620425c7ac3795365f1-95693727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'channel' => 0,
    'template_id' => 0,
    'templates_list' => 0,
    'template' => 0,
    'wa_backend_url' => 0,
    'channels' => 0,
    'user' => 0,
    '_cheat_sheet_name' => 0,
    'default_template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac37959aef9_17481379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac37959aef9_17481379')) {function content_5c7ac37959aef9_17481379($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_cheat_sheet_name'] = new Smarty_variable("wa-settings-email-templates", null, 0);?>

<div class="s-email-templates-page" id="s-email-templates-page">
    <div class="s-layout">
        
        <div class="s-column sidebar left250px">
            <?php /*  Call merged included template "./sidebar/SidebarEmail.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./sidebar/SidebarEmail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3411620425c7ac3795365f1-95693727');
content_5c7ac3795449c5_05488635($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./sidebar/SidebarEmail.html" */?>
        </div>
        
        <div class="s-column content bordered-left" id="s-email-template-wrapper">
            <?php if ($_smarty_tpl->tpl_vars['channel']->value->getId()){?>
            <form class="s-template-form" action="?module=settingsTemplateEmailSave&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getId(), ENT_QUOTES, 'UTF-8', true);?>
">
                <?php $_smarty_tpl->tpl_vars['_template'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['channel']->value->getParams('template'))===null||$tmp==='' ? array() : $tmp), null, 0);?>
                <div class="s-email-templates">
                    <div class="blank block double-padded">
                        <h1 class="s-template-name"><?php echo $_smarty_tpl->tpl_vars['templates_list']->value[$_smarty_tpl->tpl_vars['template_id']->value];?>
</h1>
                        <div class="field-group">
                            <div class="field">
                                <div class="name">Отправитель</div>
                                <div class="value">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getAddress(), ENT_QUOTES, 'UTF-8', true);?>

                                    <div class="hint"><?php echo sprintf('<a class="%s" href="javascript:void(0);">Измените адрес отправителя </a> <i class="icon10 settings"></i> для всей группы шаблонов','js-inline-settings-link');?>
</div>
                                </div>
                            </div>
                        </div>
                        <div class="field-group">
                            
                            <div class="field">
                                <div class="name">Тема письма</div>
                                <div class="value">
                                    <input class="js-subject" type="text" name="data[subject]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value['subject'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                </div>
                            </div>
                            
                            <div class="field">
                                <div class="name">
                                    Текст письма
                                    <div class="hint">HTML + Smarty</div>
                                </div>
                                <div class="value">
                                    <textarea class="js-template-text" name="data[text]"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="data[template]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
                    </div>

                    
                    <div class="s-form-buttons blank">
                        <div class="s-footer-actions block double-padded js-footer-actions">
                            <div class="fixed">
                                
                                <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                                
                                <span class="c-hidden">
                                    <span style="margin: 0 4px;">или</span>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/email/template/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getId(), ENT_QUOTES, 'UTF-8', true);?>
/<?php echo $_smarty_tpl->tpl_vars['template_id']->value;?>
/" class="js-cancel">отмена</a>
                                </span>
                                <i class="icon16 loading s-loading" style="display: none;"></i>
                                
                                <input class="button js-check-button" type="button" style="margin-left: 10px;" value="Проверить отправку">
                                
                                <div class="s-cheat-sheet-wrapper js-cheat-sheet-wrapper"></div>
                                
                                <div class="s-channel-actions">
                                    <a href="javascript:void(0);" class="inline-link js-reset" title="Восстановить текст по умолчанию">
                                        <i class="icon16 broom"></i>
                                        <b class="hide-on-small-screens"><i>Сбросить</i></b>
                                    </a>
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


<div class="dialog s-email-check-template-dialog" id="s-email-check-template-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window">
        <form action="?module=settingsTemplateCheckSending">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h2>Проверка отправки Email сообщения</h2>
                    <div class="field-group">
                        
                        <div class="field">
                            <div class="name">Email получателя</div>
                            <div class="value">
                                <input type="email" name="data[recipient]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value->get('email','default'), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="john@example.com" />
                            </div>
                        </div>
                        <input type="hidden" name="data[channel_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getId(), ENT_QUOTES, 'UTF-8', true);?>
" />
                        <input type="hidden" name="data[template][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_id']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="on" />
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" class="button blue js-submit-button" value="Отправить">
                    &nbsp;или&nbsp;<a href="javascript:void(0);" class="cancel">отмена</a>
                    <i class="icon16 loading s-loading" style="margin-left: 10px; margin-top: 10px; display: none;"></i>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="dialog" id="s-email-requirement-to-save-changes-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h2>Сохраните ваш шаблон</h2>
                <p>Чтобы проверить отправку Email сообщение — необходимо сохранить внесённые вами изменения.</p>
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
        new WASettingsEmailTemplate({
            $wrapper: $("#s-email-template-wrapper"),
            $email_check_dialog: $("#s-email-check-template-dialog"),
            $requirement_to_save: $("#s-email-requirement-to-save-changes-dialog"),
            cheat_sheet_name: <?php echo json_encode($_smarty_tpl->tpl_vars['_cheat_sheet_name']->value);?>
,
            template_id: <?php echo json_encode($_smarty_tpl->tpl_vars['template_id']->value);?>
,
            channel_id: <?php echo json_encode($_smarty_tpl->tpl_vars['channel']->value->getId());?>
,
            default_template: <?php echo json_encode($_smarty_tpl->tpl_vars['default_template']->value);?>

        });
    })(jQuery);
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:05
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/sidebar/SidebarEmail.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7ac3795449c5_05488635')) {function content_5c7ac3795449c5_05488635($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("s-email-template-sidebar-wrapper", null, 0);?><?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class']->value), null, 0);?><aside class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><a class="s-new-templates bold js-new-templates"><i class="icon16 add"></i>Новая группа шаблонов</a><ul class="menu-v stack with-icons s-sidebar-items js-sidebar-items"><?php  $_smarty_tpl->tpl_vars['_channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_channel']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_channel']->key => $_smarty_tpl->tpl_vars['_channel']->value){
$_smarty_tpl->tpl_vars['_channel']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_channel']->key;
?><?php $_smarty_tpl->tpl_vars['_channel_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/email/template/".((string)htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true))."/", null, 0);?><li class="s-channel js-channel<?php if ($_smarty_tpl->tpl_vars['_id']->value==$_smarty_tpl->tpl_vars['channel']->value->getId()){?> bold<?php }?>"data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_channel']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"data-email="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_channel']->value['address'], ENT_QUOTES, 'UTF-8', true);?>
"data-system="<?php echo $_smarty_tpl->tpl_vars['_channel']->value['system'];?>
"><span class="js-expand-collapse"><i class="icon16 rarr js-expand-collapse-icon"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_channel']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span><i class="icon16 settings s-channel-edit js-channel-edit" title="Редактировать канал" style="display: none;"></i></li><?php  $_smarty_tpl->tpl_vars['_template_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_template_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_template_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['templates_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_template_name']->key => $_smarty_tpl->tpl_vars['_template_name']->value){
$_smarty_tpl->tpl_vars['_template_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_template_id']->value = $_smarty_tpl->tpl_vars['_template_name']->key;
?><li class="js-template<?php if ($_smarty_tpl->tpl_vars['_id']->value==$_smarty_tpl->tpl_vars['channel']->value->getId()&&$_smarty_tpl->tpl_vars['_template_id']->value==$_smarty_tpl->tpl_vars['template_id']->value){?> selected<?php }?>" data-channel-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="display: none;"><a href="<?php echo $_smarty_tpl->tpl_vars['_channel_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['_template_id']->value;?>
" class="s-template-item"><i class="icon16 email"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_template_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?><?php } ?></ul></aside><div class="dialog" id="s-email-new-template-dialog"><div class="dialog-background"> </div><div class="dialog-window"><form action="?module=settingsTemplateEmailNew"><div class="dialog-content"><div class="dialog-content-indent"><h1>Создание новых шаблонов</h1><div class="fields form"><div class="field"><div class="name">Название группы шаблонов</div><div class="value"><input type="text" name="data[name]" /><div class="s-error-message-wrapper js-error-name"></div></div></div><div class="field"><div class="name">Отправитель</div><div class="value"><select name="data[address]"><?php  $_smarty_tpl->tpl_vars['_email'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_email']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_email']->key => $_smarty_tpl->tpl_vars['_email']->value){
$_smarty_tpl->tpl_vars['_email']->_loop = true;
?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_email']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_email']->value, ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?></select><div class="s-error-message-wrapper js-error-address"></div></div><div class="value"><span class="hint"><?php echo sprintf('Список отправителей редактируется в разделе «<a class="js-disable-router" href="%s">Настройки&nbsp;email</a>».',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/email");?>
</span></div></div></div></div><div class="clear"></div></div><div class="dialog-buttons"><div class="dialog-buttons-gradient"><input type="submit" class="button green js-submit-button" value="Сохранить">&nbsp;или&nbsp;<a href="javascript:void(0);" class="cancel">отмена</a><i class="icon16 loading s-loading" style="margin-left: 10px; margin-top: 10px; display: none;"></i></div></div></form></div></div><div class="dialog s-email-edit-channel-dialog" id="s-email-edit-channel-dialog"><div class="dialog-background"> </div><div class="dialog-window"><form><div class="dialog-content"><div class="dialog-content-indent"><h1 class="js-channel-name"></h1><div class="fields form"><div class="field"><div class="name">Название группы шаблонов</div><div class="value"><div class="js-name-text" style="margin-top: 6px; display: none;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['channel']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</div><input class="js-name-input" type="text" name="data[name]" style="display: none;"/><div class="s-error-message-wrapper js-error-name"></div></div></div><div class="field"><div class="name">Отправитель</div><div class="value"><select name="data[address]" class="js-email-select"><?php  $_smarty_tpl->tpl_vars['_email'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_email']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['emails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_email']->key => $_smarty_tpl->tpl_vars['_email']->value){
$_smarty_tpl->tpl_vars['_email']->_loop = true;
?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_email']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_email']->value, ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?></select><div class="s-error-message-wrapper js-error-address"></div></div><div class="value"><span class="hint"><?php echo sprintf('Список отправителей редактируется в разделе «<a class="js-disable-router" href="%s">Настройки&nbsp;email</a>».',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/email");?>
</span></div></div></div></div><div class="clear"></div></div><div class="dialog-buttons"><div class="dialog-buttons-gradient"><input type="submit" class="button green js-submit-button" value="Сохранить">&nbsp;или&nbsp;<a href="javascript:void(0);" class="cancel">отмена</a><i class="icon16 loading s-loading" style="margin-left: 10px; margin-top: 10px; display: none;"></i><div class="s-channel-actions"><a href="javascript:void(0);" class="js-duplicate"><i class="icon16 split"></i> Создать дубликат</a><a href="javascript:void(0);" class="js-delete" style="display: none;"><i class="icon16 delete"></i> Удалить</a></div></div></div></form></div></div><div class="dialog" id="s-email-delete-channel-dialog"><div class="dialog-background"> </div><div class="dialog-window"><form><div class="dialog-content"><div class="dialog-content-indent"><h1>Удалить группу шаблонов?</h1></div><div class="clear"></div></div><div class="dialog-buttons"><div class="dialog-buttons-gradient"><input type="submit" class="button red js-submit-button" value="Удалить">&nbsp;или&nbsp;<a href="javascript:void(0);" class="cancel">отмена</a><i class="icon16 loading s-loading" style="margin-left: 10px; margin-top: 10px; display: none;"></i></div></div></form></div></div>

<script>
    (function ($) {
        new WASettingsEmailTemplateSidebar({
            $wrapper: $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"),
            $new_templates_group_dialog: $("#s-email-new-template-dialog"),
            $edit_channel_dialog: $("#s-email-edit-channel-dialog"),
            $delete_confirm_dialog: $("#s-email-delete-channel-dialog"),
            channel_id: <?php echo json_encode($_smarty_tpl->tpl_vars['channel']->value->getId());?>
,
            path_to_templates: "<?php echo ((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/email/template/";?>
"
        });
    })(jQuery);
</script><?php }} ?>