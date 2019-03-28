<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:04
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsEmail.html" */ ?>
<?php /*%%SmartyHeaderCode:19995727165c7ac3784e0ce6-97329617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab004218897021a46b56805366a42c1907e9248' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsEmail.html',
      1 => 1548766579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19995727165c7ac3784e0ce6-97329617',
  'function' => 
  array (
    '_renderConfig' => 
    array (
      'parameter' => 
      array (
        'key' => 'key',
        'config' => 
        array (
        ),
        'is_template' => 'is_template',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa' => 0,
    'config' => 0,
    'is_template' => 0,
    'key' => 0,
    'available_transports' => 0,
    'id' => 0,
    '_transport' => 0,
    'transport' => 0,
    '_rand' => 0,
    'ssl_is_set' => 0,
    'php_version_ok' => 0,
    'php_version' => 0,
    'email' => 0,
    'sender' => 0,
    'main_configs' => 0,
    'wa_backend_url' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac37855c235_70473186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac37855c235_70473186')) {function content_5c7ac37855c235_70473186($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Настройки email — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<?php if (!function_exists('smarty_template_function__renderConfig')) {
    function smarty_template_function__renderConfig($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['_renderConfig']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['_transport'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['config']->value['type'])===null||$tmp==='' ? 'mail' : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['_rand'] = new Smarty_variable(rand(), null, 0);?>
    <div class="s-item <?php if ($_smarty_tpl->tpl_vars['is_template']->value){?>js-template<?php }else{ ?>js-item<?php }?>"><?php if ($_smarty_tpl->tpl_vars['key']->value!='default'){?><div class="s-remove js-remove"><a href="javascript:void(0);" class="inline-link"><i class="icon10 no"></i>&nbsp;<b><i>Удалить</i></b></a></div><?php }?><div class="field-group"><div class="field"><?php if ($_smarty_tpl->tpl_vars['key']->value!='default'){?><div class="name">Email или домен*</div><?php }?><div class="value"><?php if ($_smarty_tpl->tpl_vars['key']->value=='default'){?><h4>По умолчанию</h4><input class="js-key" data-name="key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="hidden"><?php }else{ ?><input class="js-key" data-name="key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text" autocomplete="off"><br><span class="hint">Введите <strong>email-адрес</strong>, чтобы настроить транспорт отдельно <em>для одного адреса отправителя</em>.<br>Введите <strong>доменное имя</strong>, чтобы настроить транспорт <em>для всех адресов отправителя на этом домене</em>.</span><?php }?></div></div><div class="field"><div class="name">Транспорт</div><div class="value"><select class="js-transport" data-name="type"><?php  $_smarty_tpl->tpl_vars['transport'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['transport']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_transports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['transport']->key => $_smarty_tpl->tpl_vars['transport']->value){
$_smarty_tpl->tpl_vars['transport']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['transport']->key;
?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['_transport']->value==$_smarty_tpl->tpl_vars['id']->value){?> selected<?php }?>><?php if (is_string($_smarty_tpl->tpl_vars['transport']->value)){?><?php echo $_smarty_tpl->tpl_vars['transport']->value;?>
<?php }else{ ?><?php echo ifset($_smarty_tpl->tpl_vars['transport']->value['name']);?>
<?php }?></option><?php } ?></select><br/><?php  $_smarty_tpl->tpl_vars['transport'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['transport']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['available_transports']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['transport']->key => $_smarty_tpl->tpl_vars['transport']->value){
$_smarty_tpl->tpl_vars['transport']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['transport']->key;
?><span class="hint js-transport-description js-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-description" style="display: <?php if ($_smarty_tpl->tpl_vars['_transport']->value==$_smarty_tpl->tpl_vars['id']->value){?>inline-block<?php }else{ ?>none<?php }?>; width: 50%;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['transport']->value['description'])===null||$tmp==='' ? null : $tmp);?>
</span><?php } ?></div></div><?php if (isset($_smarty_tpl->tpl_vars['available_transports']->value['mail'])){?><div class="s-params js-params js-mail-params"<?php if ($_smarty_tpl->tpl_vars['_transport']->value!=='mail'){?> style="display:none"<?php }?>><div class="field"><div class="name">Параметры</div><div class="value"><input type="text" placeholder="-f%s" data-name="options" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['options'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" /></div></div></div><?php }?><?php if (isset($_smarty_tpl->tpl_vars['available_transports']->value['smtp'])){?><div class="s-params js-params js-smtp-params"<?php if ($_smarty_tpl->tpl_vars['_transport']->value!='smtp'){?> style="display:none"<?php }?>><div class="field"><div class="name">Сервер</div><div class="value"><input type="text" data-name="host" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['host'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" /></div></div><div class="field"><div class="name">Порт</div><div class="value"><input type="text" placeholder="25" data-name="port" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['port'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" /></div></div><div class="field"><div class="name">Логин</div><div class="value"><input type="text" data-name="login" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['login'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" /></div></div><div class="field"><div class="name">Пароль</div><div class="value"><input type="text" data-name="password" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['password'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" /></div></div><div class="field"><div class="name">Шифрование</div><div class="value"><select data-name="encryption"><option value="">Нет</option><option<?php if ((($tmp = @$_smarty_tpl->tpl_vars['config']->value['encryption'])===null||$tmp==='' ? null : $tmp)=='ssl'){?> selected<?php }?> value="ssl">SSL/TLS</option><option<?php if ((($tmp = @$_smarty_tpl->tpl_vars['config']->value['encryption'])===null||$tmp==='' ? null : $tmp)=='tls'){?> selected<?php }?> value="tls">STARTTLS</option></select></div></div><?php if (!empty($_smarty_tpl->tpl_vars['config']->value['pop3_host'])){?><div class="field"><div class="name">Имя хоста POP3</div><div class="value"><input type="text" data-name="pop3_host" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['pop3_host'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" /></div></div><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['config']->value['pop3_port'])){?><div class="field"><div class="name">Порт POP3</div><div class="value"><input type="text" data-name="pop3_port" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['config']->value['pop3_port'])===null||$tmp==='' ? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" /></div></div><?php }?></div><?php }?><?php if (isset($_smarty_tpl->tpl_vars['available_transports']->value['sendmail'])){?><div class="s-params js-params js-sendmail-params"<?php if ($_smarty_tpl->tpl_vars['_transport']->value!='sendmail'){?> style="display:none"<?php }?>><div class="field"><div class="name">Команда</div><div class="value"><input type="text" placeholder="/usr/sbin/sendmail -bs" data-name="command" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['config']->value['command']), ENT_QUOTES, 'UTF-8', true);?>
" /></div></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['key']->value!=='default'){?><div class="s-dkim-field js-dkim-field"><div class="field"><div class="name"><label for="dkim-<?php echo $_smarty_tpl->tpl_vars['_rand']->value;?>
">DKIM</label></div><div class="value"><input type="checkbox" data-name="dkim" id="dkim-<?php echo $_smarty_tpl->tpl_vars['_rand']->value;?>
" class="js-dkim-checkbox" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['config']->value['dkim'])===null||$tmp==='' ? null : $tmp)==1){?> checked<?php }?><?php if (!$_smarty_tpl->tpl_vars['ssl_is_set']->value||!$_smarty_tpl->tpl_vars['php_version_ok']->value){?> disabled<?php }?> /><div class="hint js-dkim-error"></div><div class="hint">Добавьте DKIM-подпись для исходящих email-сообщений, чтобы подтвердить владение адресом оправителя.</div><div class="hint bold js-dkim-needs-email" style="margin-right: 50px;<?php if (mb_strlen($_smarty_tpl->tpl_vars['key']->value)!=0){?> display: none;<?php }?>">Для использования DKIM введите email-адрес в поле «Отправитель».</div><input type="hidden" data-name="dkim_pvt_key" class="js-dkim-pvt-key" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['config']->value['dkim_pvt_key']), ENT_QUOTES, 'UTF-8', true);?>
" /><input type="hidden" data-name="dkim_pub_key" class="js-dkim-pub-key" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['config']->value['dkim_pub_key']), ENT_QUOTES, 'UTF-8', true);?>
" /><input type="hidden" data-name="dkim_selector" class="js-dkim-selector" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['config']->value['dkim_selector']), ENT_QUOTES, 'UTF-8', true);?>
" /><?php if (!$_smarty_tpl->tpl_vars['ssl_is_set']->value){?><div>Вам необходимо установить расширение openssl php для использования DKIM</div><?php }?><?php if (!$_smarty_tpl->tpl_vars['php_version_ok']->value){?><div>Для использования DKIM вам потребуется PHP версии 5.3 или выше. Текущая версия: <b><?php echo $_smarty_tpl->tpl_vars['php_version']->value;?>
</b></div><?php }?></div><div class="value"><div class="js-dkim-info"<?php if (!isset($_smarty_tpl->tpl_vars['config']->value['dkim'])){?> style="display:none;"<?php }?>><div class="field"><p>Добавьте новую <b>TXT-запись</b> с данным публичным ключом DKIM в DNS-зону домена&nbsp;<span class="js-sender-domain-0" style="font-weight: bold;"><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['config']->value['domain']), ENT_QUOTES, 'UTF-8', true);?>
</span></p></div><div class="field"><div class="name">Хост</div><div class="value"><code><span class="js-dkim-host-selector"><?php echo htmlspecialchars(ifempty($_smarty_tpl->tpl_vars['config']->value['dkim_selector'],'key1'), ENT_QUOTES, 'UTF-8', true);?>
</span>._domainkey
                                            </code>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="name">Домен</div>
                                        <div class="value"><span class="js-domain"><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['config']->value['domain']), ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                                    </div>
                                    <div class="field">
                                        <div class="name">Тип записи</div>
                                        <div class="value">
                                            <code>TXT</code>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="name">Значение</div>
                                        <div class="value" style="word-wrap:break-word; width:500px;">
                                            <code>
                                                v=DKIM1; k=rsa; t=s; p=<span class="js-one-string-key"><?php echo ifset($_smarty_tpl->tpl_vars['config']->value['one_string_key']);?>
</span>
                                            </code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<div class="s-email-settings-page blank block double-padded" id="s-email-settings-page">
    <h1 class="s-page-header">Настройки email</h1>

    
    <form action="?module=settingsEmailSave">
        <div class="field-group">
            <div class="field">
                <div class="name">
                    <label for="config-email">Email-адрес для уведомлений</label>
                </div>
                <div class="value">
                    <input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="config-email" placeholder="your@email"><br>
                    <span class="hint">Основной электронный адрес администратора, на который будут отправляться системные уведомления.</span>
                    <span class="hint s-error js-error-place"></span>
                </div>
            </div>

            <div class="field">
                <div class="name">
                    <label for="config-sender">Email-адрес отправителя</label>
                </div>
                <div class="value">
                    <input type="text" name="sender" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sender']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="config-sender" placeholder="noreply@email"><br>
                    <span class="hint">Этот электронный адрес будет указан в качестве обратного адреса в системных email-уведомлениях, отправляемых Вебасистом.</span>
                    <span class="hint s-error js-error-place"></span>
                </div>
            </div>
        </div>

        
        <div class="s-description">
            Выберите, каким способом должны по умолчанию отправляться email-сообщения из вашего Вебасиста.
        </div>
        <div class="s-email-settings-fields-block">
            <div class="s-settings-items js-settings-items">
                <?php  $_smarty_tpl->tpl_vars['config'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['config']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['main_configs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['config']->key => $_smarty_tpl->tpl_vars['config']->value){
$_smarty_tpl->tpl_vars['config']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['config']->key;
?>
                    <?php smarty_template_function__renderConfig($_smarty_tpl,array('key'=>$_smarty_tpl->tpl_vars['key']->value,'config'=>$_smarty_tpl->tpl_vars['config']->value,'is_template'=>false));?>

                <?php } ?>
            </div>
            <div class="s-description">Если вы используете разные адреса отправителей в отдельных приложениях, то для них можно настроить дополнительные правила отправки сообщений. Для всех остальных адресов будет использоваться способ отправки, выбранный в секции «По умолчанию».</div>
            <a href="javascript:void(0);" class="inline-link s-add-item js-add-item">
                <i class="icon10 add"></i>
                <b><i>Добавить правило отправки email</i></b>
            </a>
            <div class="s-form-buttons">
                <div class="s-footer-actions js-footer-actions">
                    <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                    <span class="s-hidden">
                        <span style="margin: 0 4px;">или</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/email/" class="js-cancel">отмена</a>
                    </span>
                    <i class="icon16 loading s-loading" style="display: none;"></i>
                </div>
            </div>
        </div>
    </form>
    <?php smarty_template_function__renderConfig($_smarty_tpl,array('key'=>null,'is_template'=>true));?>

</div>
<script type="text/javascript">
    (function($) {
        new WASettingsEmail({
            $wrapper: $("#s-email-settings-page")
        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script><?php }} ?>