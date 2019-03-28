<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 20:37:16
         compiled from "/home/c/cl36655/public_html/wa-data/public/site/themes/default/forgotpassword.html" */ ?>
<?php /*%%SmartyHeaderCode:10773919535c7c10ccc5d058-43273916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9c707ad856d5d42794fc973dda6c10d72686b9f' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/site/themes/default/forgotpassword.html',
      1 => 1431678453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10773919535c7c10ccc5d058-43273916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'set_password' => 0,
    'login' => 0,
    'error' => 0,
    'wa' => 0,
    'sent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7c10ccc8df21_90732118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7c10ccc8df21_90732118')) {function content_5c7c10ccc8df21_90732118($_smarty_tpl) {?><div id="page" role="main">
    <?php if (!empty($_smarty_tpl->tpl_vars['set_password']->value)){?>
        <h1>Восстановление пароля для <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h1>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->setPasswordForm($_smarty_tpl->tpl_vars['error']->value);?>

    <?php }else{ ?>
        <h1>Восстановление пароля</h1>
        <?php if (!empty($_smarty_tpl->tpl_vars['sent']->value)){?>
            <p>Инструкции по восстановлению пароля были отправлены на ваш электронный адрес.</p>
            <br /><br />
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Вернуться на страницу входа</a>
        <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->forgotPasswordForm($_smarty_tpl->tpl_vars['error']->value);?>

        <?php }?>
    <?php }?>
</div>
<?php }} ?>