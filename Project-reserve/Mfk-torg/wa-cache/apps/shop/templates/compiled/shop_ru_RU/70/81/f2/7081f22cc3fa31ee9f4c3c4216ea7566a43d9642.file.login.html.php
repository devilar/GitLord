<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 22:19:29
         compiled from "/home/c/cl36655/public_html/wa-data/public/site/themes/default/login.html" */ ?>
<?php /*%%SmartyHeaderCode:3520363555c7ad7412dd606-94906111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7081f22cc3fa31ee9f4c3c4216ea7566a43d9642' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/site/themes/default/login.html',
      1 => 1431678454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3520363555c7ad7412dd606-94906111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'error' => 0,
    'without_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ad7412e3a47_68847045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ad7412e3a47_68847045')) {function content_5c7ad7412e3a47_68847045($_smarty_tpl) {?><div id="page" role="main">
    <h1>Логин</h1>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->authAdapters();?>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->loginForm($_smarty_tpl->tpl_vars['error']->value,empty($_smarty_tpl->tpl_vars['without_form']->value));?>

</div><?php }} ?>