<?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 14:25:55
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/setpassword/frontend/form.html" */ ?>
<?php /*%%SmartyHeaderCode:5085109305c7d0b4385ca69-03989762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c75e3f25aea3701f23be1878ed758f6693bd2fd4' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/setpassword/frontend/form.html',
      1 => 1549545515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5085109305c7d0b4385ca69-03989762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'forgotpassword_url' => 0,
    'show_title' => 0,
    'renderer' => 0,
    'login_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7d0b43891749_44652133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7d0b43891749_44652133')) {function content_5c7d0b43891749_44652133($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['forgotpassword_url']->value;?>
" method="post">

    <?php if (!empty($_smarty_tpl->tpl_vars['show_title']->value)){?>
        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderTitle();?>

    <?php }?>

    <section class="wa-set-password-form-fields js-set-password-form-fields">

        <div class="wa-field">
            <div class="wa-name wa-field-password">Новый пароль</div>
            <div class="wa-value">
                <input name="<?php echo $_smarty_tpl->tpl_vars['renderer']->value->getInputName('password');?>
" type="password">
            </div>
        </div>
        <div class="wa-field wa-field-password">
            <div class="wa-name">Повторите новый пароль</div>
            <div class="wa-value">
                <input name="<?php echo $_smarty_tpl->tpl_vars['renderer']->value->getInputName('password_confirm');?>
" type="password">
            </div>
        </div>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCaptcha();?>


    </section>

    <section class="wa-set-password-form-actions js-set-password-form-actions">

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderUncaughtErrors();?>


        <div class="wa-value wa-buttons-wrapper">
            <input type="submit" value="Сохранить и войти">
        </div>

        <div class="wa-value wa-login-url">
            Вспомнили пароль? <a href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
" data-type="login">Вход</a>
        </div>

    </section>

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCsrf();?>


</form>
<?php }} ?>