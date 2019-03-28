<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 00:52:53
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/layouts/Profile.html" */ ?>
<?php /*%%SmartyHeaderCode:20670973525c86d8b5967a07-51790217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79a56be4dead1dc3869108e98d166ad2fbd95719' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/layouts/Profile.html',
      1 => 1540900318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20670973525c86d8b5967a07-51790217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c86d8b5974534_19384098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c86d8b5974534_19384098')) {function content_5c86d8b5974534_19384098($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/profile/profile-layout.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>


    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.2.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
</head>
<body>

<div id="wa">
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>


    <div class="t-app-wrapper" id="wa-app">
        <div class="t-content-wrapper">
            <div class="t-content-block" id="t-content">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </div>
        </div>
    </div>
</div>

</body>
</html><?php }} ?>