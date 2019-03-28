<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:56
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/login/backend/form.html" */ ?>
<?php /*%%SmartyHeaderCode:16578640395c7ac3aca06b67-06577186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6b4c7e10fc393418f88bded91fce7186404b722' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/login/backend/form.html',
      1 => 1541667629,
      2 => 'file',
    ),
    'c0c6ad0ad760d24ea6e5dd0902bb11f291b4fed9' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/login/backend/onetime_password_form.inc.html',
      1 => 1542030228,
      2 => 'file',
    ),
    '50a659b5bb8761f2cc9380684279519acb7a9e54' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/login/backend/default_form.inc.html',
      1 => 1541778477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16578640395c7ac3aca06b67-06577186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_onetime_password_auth_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac3aca33ac3_93040234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac3aca33ac3_93040234')) {function content_5c7ac3aca33ac3_93040234($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?>
    <?php /*  Call merged included template "./onetime_password_form.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./onetime_password_form.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16578640395c7ac3aca06b67-06577186');
content_5c7ac3aca0a396_34234074($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./onetime_password_form.inc.html" */?>
<?php }else{ ?>
    <?php /*  Call merged included template "./default_form.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./default_form.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16578640395c7ac3aca06b67-06577186');
content_5c7ac3aca22860_52191644($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./default_form.inc.html" */?>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:56
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/login/backend/onetime_password_form.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7ac3aca0a396_34234074')) {function content_5c7ac3aca0a396_34234074($_smarty_tpl) {?><div class="wa-login-onetime-password-form">
    <form action="" method="post">

        <?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
            <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderField($_smarty_tpl->tpl_vars['field_id']->value,$_smarty_tpl->tpl_vars['params']->value);?>

        <?php } ?>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCaptcha();?>


        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderRememberMe();?>


        <div class="field wa-buttons">
            <div class="value wa-submit">

                <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderMessages();?>


                <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderUncaughtErrors();?>


                <input type="hidden" name="wa_auth_login" value="1">

                <div class="wa-request-onetime-password-button-wrapper">
                    <button class="button blue wa-request-onetime-password-button" data-href="<?php echo $_smarty_tpl->tpl_vars['onetime_password_url']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>Получить код<?php }else{ ?>Получить проверочный код<?php }?></button>
                    <?php if (!empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                        или
                        <a href="javascript:void(0);" class="wa-login-cancel gray underline">отмена</a>
                    <?php }?>
                    <i class="icon16 loading wa-request-onetime-password-button-loading" style="margin-top: -2px; display: none"></i>
                </div>

                <div class="wa-submit-button-wrapper" style="display: none;">
                    <input type="submit" value="Войти" class="button wa-login-submit">
                    <?php if (!empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                        или
                        <a href="javascript:void(0);" class="wa-login-cancel gray underline">отмена</a>
                    <?php }?>
                    <i class="icon16 loading wa-loading" style="display: none;"></i>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['forgotpassword_url']->value&&empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['forgotpassword_url']->value;?>
" class="wa-forgotpassword underline" data-type="forgotpassword">Забыли пароль?</a>
                <?php }?>
            </div>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCsrf();?>


    </form>
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:56
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/login/backend/default_form.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7ac3aca22860_52191644')) {function content_5c7ac3aca22860_52191644($_smarty_tpl) {?><div class="wa-login-default-form">
    <form action="" method="post">

        <?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['fields']->value)===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
            <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderField($_smarty_tpl->tpl_vars['field_id']->value,$_smarty_tpl->tpl_vars['params']->value);?>

        <?php } ?>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCaptcha();?>


        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderRememberMe();?>


        <div class="field wa-buttons">
            <div class="value wa-submit">

                <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderMessages();?>


                <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderUncaughtErrors();?>


                <input type="hidden" name="wa_auth_login" value="1">

                <input type="submit" value="Войти" class="button wa-login-submit">
                <?php if (!empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                    или
                    <a href="javascript:void(0);" class="wa-login-cancel gray underline">отмена</a>
                <?php }?>
                <i class="icon16 loading wa-loading" style="display: none;"></i>

                <?php if ($_smarty_tpl->tpl_vars['forgotpassword_url']->value&&empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['forgotpassword_url']->value;?>
" class="wa-forgotpassword underline" data-type="forgotpassword">Забыли пароль?</a>
                <?php }?>
            </div>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCsrf();?>


    </form>
</div>
<?php }} ?>