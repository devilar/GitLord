<?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 14:21:53
         compiled from "aae4f6fad64357965ec912380637da2bda2046e9" */ ?>
<?php /*%%SmartyHeaderCode:12803034255c7d0a513ec832-03762572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aae4f6fad64357965ec912380637da2bda2046e9' => 
    array (
      0 => 'aae4f6fad64357965ec912380637da2bda2046e9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '12803034255c7d0a513ec832-03762572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login_url' => 0,
    'recovery_url' => 0,
    'site_url' => 0,
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7d0a514145b0_13949670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7d0a514145b0_13949670')) {function content_5c7d0a514145b0_13949670($_smarty_tpl) {?><p>Здравствуйте,</p>
<p>Чтобы восстановить пароль для <a href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
">входа на сайт</a>, перейдите по ссылке:</p>
<p><a href="<?php echo $_smarty_tpl->tpl_vars['recovery_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['recovery_url']->value;?>
</a></p>
<p>Если вы не запрашивали восстановление пароля для входа на сайт <?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
, игнорируйте или удалите это сообщение.</p>
<p><strong>Храните свои пароли в безопасном месте. Используйте длинные сложные пароли, которые трудно подобрать.</strong></p>
<p>--<br>
<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</p><?php }} ?>