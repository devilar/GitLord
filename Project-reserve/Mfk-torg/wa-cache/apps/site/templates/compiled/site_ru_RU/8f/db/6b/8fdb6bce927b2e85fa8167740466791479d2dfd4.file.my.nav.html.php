<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 12:08:23
         compiled from "/home/c/cl36655/public_html/wa-data/public/site/themes/default/my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:730237445c8777078c7723-06281812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fdb6bce927b2e85fa8167740466791479d2dfd4' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/site/themes/default/my.nav.html',
      1 => 1431678454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '730237445c8777078c7723-06281812',
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
  'unifunc' => 'content_5c8777078cebe3_31654296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8777078cebe3_31654296')) {function content_5c8777078cebe3_31654296($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="site <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/myProfile');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>