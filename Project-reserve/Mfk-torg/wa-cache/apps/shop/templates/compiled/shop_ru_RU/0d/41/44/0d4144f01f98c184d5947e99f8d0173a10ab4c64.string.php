<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:19:17
         compiled from "0d4144f01f98c184d5947e99f8d0173a10ab4c64" */ ?>
<?php /*%%SmartyHeaderCode:912325015c8f4675c6ccb2-90686574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d4144f01f98c184d5947e99f8d0173a10ab4c64' => 
    array (
      0 => '0d4144f01f98c184d5947e99f8d0173a10ab4c64',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '912325015c8f4675c6ccb2-90686574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
    'login_url' => 0,
    'email' => 0,
    'password' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4675c96a17_61806459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4675c96a17_61806459')) {function content_5c8f4675c96a17_61806459($_smarty_tpl) {?><p>Поздравляем!</p>
<p>Вы зарегистрировались на сайте <?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
.</p>
<p>Входите в <a href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
">личный кабинет</a> со своим email-адресом <strong><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</strong>.</p>
<?php if ($_smarty_tpl->tpl_vars['password']->value){?><p>Ваш пароль: <strong><?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</strong></p><?php }?>
<p>--<br>
<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</p><?php }} ?>