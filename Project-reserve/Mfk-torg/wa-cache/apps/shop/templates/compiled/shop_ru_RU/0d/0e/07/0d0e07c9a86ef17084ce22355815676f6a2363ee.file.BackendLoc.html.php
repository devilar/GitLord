<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:10
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:12936622795c7ac37ebe79d7-60924263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d0e07c9a86ef17084ce22355815676f6a2363ee' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/backend/BackendLoc.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12936622795c7ac37ebe79d7-60924263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac37ebf12d4_61924993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac37ebf12d4_61924993')) {function content_5c7ac37ebf12d4_61924993($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>