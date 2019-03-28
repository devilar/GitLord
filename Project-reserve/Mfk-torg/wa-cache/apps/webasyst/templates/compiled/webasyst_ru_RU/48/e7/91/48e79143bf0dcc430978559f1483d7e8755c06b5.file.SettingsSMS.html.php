<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:07
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsSMS.html" */ ?>
<?php /*%%SmartyHeaderCode:5595287535c7ac37b0d4366-04848392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e79143bf0dcc430978559f1483d7e8755c06b5' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsSMS.html',
      1 => 1548766579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5595287535c7ac37b0d4366-04848392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'sms_adapters' => 0,
    'i' => 0,
    'a' => 0,
    'k' => 0,
    'v' => 0,
    'wa_backend_url' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac37b117f20_93115116',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac37b117f20_93115116')) {function content_5c7ac37b117f20_93115116($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("SMS-провайдеры — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<div class="s-sms-settings-page blank block double-padded" id="s-sms-settings-page">
    <h1 class="s-page-header">SMS-провайдеры</h1>

    
    <form action="?module=settingsSMSSave">
        <div class="field-group">
            <?php if (count($_smarty_tpl->tpl_vars['sms_adapters']->value)){?>
                <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sms_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['a']->key;
?>
                    <div class="s-sms-adapter">
                        <input name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][adapter]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
">
                        <h3><i class="icon16" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['a']->value['icon'];?>
');"></i><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</h3><br>
                        <div class="field">
                            <div class="name"><?php if (isset($_smarty_tpl->tpl_vars['a']->value['controls']['from']['title'])){?><?php echo $_smarty_tpl->tpl_vars['a']->value['controls']['from']['title'];?>
<?php }else{ ?>Идентификаторы отправителя<?php }?></div>
                            <div class="value">
                                <textarea name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][from]"><?php if (!empty($_smarty_tpl->tpl_vars['a']->value['config']['from'])){?><?php echo implode("\n",$_smarty_tpl->tpl_vars['a']->value['config']['from']);?>
<?php }?></textarea>
                                <p class="hint"><?php if (isset($_smarty_tpl->tpl_vars['a']->value['controls']['from']['description'])){?><?php echo $_smarty_tpl->tpl_vars['a']->value['controls']['from']['description'];?>
<?php }else{ ?>Введите идентификаторы отправителей для этого SMS-провайдера. Идентификатор отправителя представляет собой либо номер телефона, либо строку длиной до 11 символов. Введите звездочку *, чтобы использовать идентификатор, автоматически назначенный SMS-провайдером.<?php }?></p>
                            </div>
                        </div>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a']->value['controls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['k']->value!='from'){?>
                                <div class="field">
                                    <div class="name"><?php echo _ws($_smarty_tpl->tpl_vars['v']->value['title']);?>
</div>
                                    <div class="value">
                                        <?php if (ifset($_smarty_tpl->tpl_vars['v']->value['control_type'])=='checkbox'){?>
                                            <input type="hidden" name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="">
                                            <input type="checkbox" name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="1"<?php if (!empty($_smarty_tpl->tpl_vars['a']->value['config'][$_smarty_tpl->tpl_vars['k']->value])){?> checked<?php }?>>
                                        <?php }else{ ?>
                                            <input type="<?php if (mb_strtolower(_ws($_smarty_tpl->tpl_vars['v']->value['title']))==_ws('password')){?>password<?php }else{ ?>text<?php }?>" name="sms[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php if (!empty($_smarty_tpl->tpl_vars['a']->value['config'][$_smarty_tpl->tpl_vars['k']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['config'][$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                                        <?php }?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['v']->value['description'])){?>
                                            <p class="hint"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</p>
                                        <?php }?>
                                    </div>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php }else{ ?>
                <div class="value no-shift">
                    <p>
                        <?php echo sprintf('Для отправки SMS-сообщений установите и настройте подключение к какому-либо из SMS-провайдеров.<br>Плагины для подключения к SMS-провайдерам доступны для установки <a href="%s">в «Инсталлере»</a>.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('installer/#/plugins/wa-plugins/sms/'));?>

                    </p>
                </div>
            <?php }?>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['sms_adapters']->value)){?>
        <div class="s-form-buttons">
            <div class="s-footer-actions js-footer-actions">
                <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                <span class="c-hidden">
                        <span style="margin: 0 4px;">или</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/sms/" class="js-cancel">отмена</a>
                    </span>
                <i class="icon16 loading s-loading" style="display: none;"></i>
            </div>
        </div>
        <?php }?>

    </form>
</div>
<script>
    (function ($) {
        new WASettingsSMS({
            $wrapper: $('#s-sms-settings-page')
        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script>
<?php }} ?>