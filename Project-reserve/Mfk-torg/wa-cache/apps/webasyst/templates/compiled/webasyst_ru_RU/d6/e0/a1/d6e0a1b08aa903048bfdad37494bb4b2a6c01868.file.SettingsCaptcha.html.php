<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:02
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsCaptcha.html" */ ?>
<?php /*%%SmartyHeaderCode:21042620995c7ac376347f90-68606664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6e0a1b08aa903048bfdad37494bb4b2a6c01868' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsCaptcha.html',
      1 => 1548766579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21042620995c7ac376347f90-68606664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'captcha' => 0,
    'captcha_options' => 0,
    'wa_backend_url' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac376363861_97539937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac376363861_97539937')) {function content_5c7ac376363861_97539937($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Настройки капчи — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<div class="s-captcha-settings-page blank block double-padded" id="s-captcha-settings-page">
    <h1 class="s-page-header">Настройки капчи</h1>
    <div class="s-description">Выберите тип капчи, которая будет использоваться на ваших сайтах.</div>
    <div class="s-captcha-settings-fields-block">
        <form action="?module=settingsCaptchaSave">
            <div class="field-group">
                <div class="field">
                    <div class="name">Тип капчи</div>
                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="captcha" <?php if (ifset($_smarty_tpl->tpl_vars['captcha']->value)=='waPHPCaptcha'||empty($_smarty_tpl->tpl_vars['captcha']->value)){?>checked<?php }?> value="waPHPCaptcha"> Капча Webasyst
                        </label>
                    </div>
                    <div class="value no-shift">
                        <label>
                            <input type="radio" name="captcha" <?php if (ifset($_smarty_tpl->tpl_vars['captcha']->value)=='waReCaptcha'){?>checked<?php }?> value="waReCaptcha"> Google reCAPTCHA
                            <br><br>
                            <div<?php if (ifset($_smarty_tpl->tpl_vars['captcha']->value)!='waReCaptcha'){?> style="display: none"<?php }?> class="js-captcha-adapter-settings">
                                <div class="field">
                                    <div class="name">Ключ</div>
                                    <div class="value">
                                        <input type="text" name="captcha_options[sitekey]" value="<?php echo ifset($_smarty_tpl->tpl_vars['captcha_options']->value['sitekey']);?>
">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="name">Секретный ключ</div>
                                    <div class="value">
                                        <input type="text" name="captcha_options[secret]" value="<?php echo ifset($_smarty_tpl->tpl_vars['captcha_options']->value['secret']);?>
"><br>
                                        <span class="hint"><a href="https://www.google.com/recaptcha" target="_blank">Получить значения для своего сайта</a> <i class="icon16 new-window"></i></span>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="name">
                                        <label for="invisible">Невидимый режим</label>
                                    </div>
                                    <div class="value no-shift">
                                        <label>
                                            <input id="invisible" type="checkbox" name="captcha_options[invisible]" value="true" <?php if (ifset($_smarty_tpl->tpl_vars['captcha_options']->value['invisible'])){?>checked<?php }?>>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="s-form-buttons">
                <div class="s-footer-actions js-footer-actions">
                    <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                    <span class="s-hidden">
                        <span style="margin: 0 4px;">или</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/captcha/" class="js-cancel">отмена</a>
                    </span>
                    <i class="icon16 loading s-loading" style="display: none;"></i>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    (function($) {
        new WASettingsCaptcha({
            $wrapper: $("#s-captcha-settings-page")
        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script><?php }} ?>