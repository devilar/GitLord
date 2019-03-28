<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 12:08:23
         compiled from "/home/c/cl36655/public_html/wa-apps/blog/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:17301100715c8777078eeea5-93938101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '292293c332ec3a851673982fa8bd0b1b3c4b16ac' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/blog/themes/default/my.nav.html',
      1 => 1458026806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17301100715c8777078eeea5-93938101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8777078f6484_92407147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8777078f6484_92407147')) {function content_5c8777078f6484_92407147($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="blog <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/my');?>
">Мой профиль</a>
    </li>
<?php }?>
<?php }} ?>