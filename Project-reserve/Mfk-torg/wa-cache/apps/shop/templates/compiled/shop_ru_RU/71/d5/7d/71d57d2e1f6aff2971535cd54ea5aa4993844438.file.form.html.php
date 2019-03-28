<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 20:37:16
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/forgotpassword/frontend/form.html" */ ?>
<?php /*%%SmartyHeaderCode:8821851275c7c10ccccc796-34318240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d57d2e1f6aff2971535cd54ea5aa4993844438' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/forgotpassword/frontend/form.html',
      1 => 1549545515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8821851275c7c10ccccc796-34318240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'forgotpassword_url' => 0,
    'show_title' => 0,
    'renderer' => 0,
    'login_caption' => 0,
    'errors' => 0,
    'data' => 0,
    '_value' => 0,
    'login_placeholder' => 0,
    'auth_config' => 0,
    'is_email_channel_available' => 0,
    'is_sms_channel_available' => 0,
    'login_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7c10cccedea8_51124028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7c10cccedea8_51124028')) {function content_5c7c10cccedea8_51124028($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['forgotpassword_url']->value;?>
" method="post">

    <?php if (!empty($_smarty_tpl->tpl_vars['show_title']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderTitle();?>

    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderMessages();?>


    <section class="wa-forgotpassword-form-fields js-forgotpassword-form-fields">
        <div class="wa-field wa-field-login" data-field-id="login">
            <div class="wa-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login_caption']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
            <div class="wa-value">
                <?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['errors']->value['login'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['_value'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['data']->value['login'])===null||$tmp==='' ? '' : $tmp), null, 0);?>
                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['renderer']->value->getInputName('login');?>
"
                       value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                       autocomplete="off"
                       placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login_placeholder']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                <div class="wa-forgotpassword-button">
                    <input class="gray" type="submit" value="<?php if ($_smarty_tpl->tpl_vars['auth_config']->value['auth_type']===waAuthConfig::AUTH_TYPE_GENERATE_PASSWORD){?>Сбросить пароль<?php }else{ ?>Восстановить пароль<?php }?>">
                </div>
                <div class="wa-edit-login-link-wrapper" style="display: none;">
                    <a href="javascript:void(0);" class="wa-edit-login-link">
                        <i class="wa-edit-login-link-icon"></i>
                        Изменить
                    </a>
                </div>
            </div>
        </div>

        <div class="wa-field wa-field-confirmation-code" style="display: none;" data-field-id="confirmation_code">
            <div class="wa-name">
                Проверочный код

                
                <?php if ($_smarty_tpl->tpl_vars['is_email_channel_available']->value&&$_smarty_tpl->tpl_vars['is_sms_channel_available']->value){?>
                    <span class="wa-code-transport-message"></span>
                <?php }?>

            </div>
            <div class="wa-value">
                <input class="wa-confirmation-code" name="<?php echo $_smarty_tpl->tpl_vars['renderer']->value->getInputName('confirmation_code');?>
" type="text">
                <div class="wa-confirmation-code-input-message"></div>
                <div class="wa-send-again-confirmation-code-link-wrapper" style="display: none">
                    <a href="javascript:void(0);" class="wa-send-again-confirmation-code-link">Выслать еще раз</a>
                    <i class="wa-send-again-confirmation-code-link-loading icon16 loading" style="display: none;"></i>
                </div>
            </div>

            <div class="wa-value wa-confirmation-code-input-submit-wrapper">
                <button class="blue wa-confirmation-code-input-submit">Подтвердить и сменить пароль</button>
                <i class="icon16 loading wa-loading wa-confirmation-code-input-submit-loading" style="display: none;"></i>
            </div>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCaptcha();?>

    </section>

    <section class="wa-forgotpassword-form-actions js-forgotpassword-form-actions">
        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderUncaughtErrors();?>


        <div class="wa-login-url">
            Вспомнили пароль? <a href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
" data-type="login">Вход</a>
        </div>
    </section>

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCsrf();?>

</form>
<?php }} ?>