<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:07
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/sidebar/SidebarSMS.html" */ ?>
<?php /*%%SmartyHeaderCode:15713752405c7ac37b9ed6f1-46434442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40db19de18bb94dd6f1e4aa8af9e727adf842d6d' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/sidebar/SidebarSMS.html',
      1 => 1541667629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15713752405c7ac37b9ed6f1-46434442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'id' => 0,
    'channels' => 0,
    'wa_backend_url' => 0,
    '_id' => 0,
    'channel' => 0,
    '_channel_url' => 0,
    '_channel' => 0,
    'numbers' => 0,
    '_number' => 0,
    '_adapter_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac37ba0f6c6_67734033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac37ba0f6c6_67734033')) {function content_5c7ac37ba0f6c6_67734033($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable("s-sms-template-sidebar-wrapper", null, 0);?><?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class']->value), null, 0);?><aside class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><a class="s-new-templates bold js-new-templates"><i class="icon16 add"></i>Новая группа шаблонов</a><ul class="menu-v stack with-icons"><?php  $_smarty_tpl->tpl_vars['_channel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_channel']->_loop = false;
 $_smarty_tpl->tpl_vars['_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_channel']->key => $_smarty_tpl->tpl_vars['_channel']->value){
$_smarty_tpl->tpl_vars['_channel']->_loop = true;
 $_smarty_tpl->tpl_vars['_id']->value = $_smarty_tpl->tpl_vars['_channel']->key;
?><?php $_smarty_tpl->tpl_vars['_channel_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/sms/template/".((string)htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true))."/", null, 0);?><li<?php if ($_smarty_tpl->tpl_vars['_id']->value==$_smarty_tpl->tpl_vars['channel']->value->getId()){?> class="selected bold"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['_channel_url']->value;?>
"><i class="icon16 mobile"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_channel']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php } ?></ul></aside><div class="dialog" id="wa-sms-new-template-dialog"><div class="dialog-background"> </div><div class="dialog-window"><form action="?module=settingsTemplateSMSNew"><div class="dialog-content"><div class="dialog-content-indent"><h1>Создание новых шаблонов</h1><span class="js-error" style="color: red;font-weight: bold;"></span><div class="fields form"><div class="field"><div class="name">Название группы шаблонов</div><div class="value"><input type="text" name="data[name]" /><div class="s-error-message-wrapper js-error-name"></div></div></div><div class="field"><div class="name">Отправитель</div><div class="value"><select name="data[address]"><?php  $_smarty_tpl->tpl_vars['_adapter_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_adapter_name']->_loop = false;
 $_smarty_tpl->tpl_vars['_number'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['numbers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_adapter_name']->key => $_smarty_tpl->tpl_vars['_adapter_name']->value){
$_smarty_tpl->tpl_vars['_adapter_name']->_loop = true;
 $_smarty_tpl->tpl_vars['_number']->value = $_smarty_tpl->tpl_vars['_adapter_name']->key;
?><option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_number']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_number']->value, ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_adapter_name']->value, ENT_QUOTES, 'UTF-8', true);?>
)</option><?php } ?></select><div class="s-error-message-wrapper js-error-address"></div></div><div class="value"><span class="hint"><?php echo sprintf('Список отправителей редактируется в разделе «<a class="js-disable-router" href="%s">SMS-провайдеры</a>».',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/sms");?>
</span></div></div></div></div><div class="clear"></div></div><div class="dialog-buttons"><div class="dialog-buttons-gradient"><input type="submit" class="button green" value="Сохранить">&nbsp;или&nbsp;<a href="javascript:void(0);" class="cancel">отмена</a><i class="icon16 loading s-loading" style="margin-left: 10px; margin-top: 10px; display: none;"></i></div></div></form></div></div>

<script>
    (function ($) {
        new WASettingsSMSTemplateSidebar({
            $wrapper: $("#<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"),
            $new_templates_group_dialog: $("#wa-sms-new-template-dialog"),
            path_to_templates: "<?php echo ((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/sms/template/";?>
"
        });
    })(jQuery);
</script><?php }} ?>