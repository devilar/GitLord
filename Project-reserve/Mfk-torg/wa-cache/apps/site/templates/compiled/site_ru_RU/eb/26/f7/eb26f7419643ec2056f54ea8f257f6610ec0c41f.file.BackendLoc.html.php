<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 12:08:21
         compiled from "/home/c/cl36655/public_html/wa-apps/site/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:6636453535c877705cca469-73173112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb26f7419643ec2056f54ea8f257f6610ec0c41f' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/site/templates/actions/backend/BackendLoc.html',
      1 => 1540900315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6636453535c877705cca469-73173112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c877705d01900_79089399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c877705d01900_79089399')) {function content_5c877705d01900_79089399($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php ob_start();?><?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
);<?php }} ?>