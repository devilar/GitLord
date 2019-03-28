<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:17:35
         compiled from "/home/c/cl36655/public_html/wa-apps/contacts/templates/actions/backend/BackendLoc.html" */ ?>
<?php /*%%SmartyHeaderCode:16218544955c8f460f4351a5-75290925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e0879f8680f59d90147a73d05e605a4d526473c' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/contacts/templates/actions/backend/BackendLoc.html',
      1 => 1452519788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16218544955c8f460f4351a5-75290925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f460f45bb23_79265596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f460f45bb23_79265596')) {function content_5c8f460f45bb23_79265596($_smarty_tpl) {?>$.wa.locale = $.extend($.wa.locale, <?php echo json_encode($_smarty_tpl->tpl_vars['strings']->value);?>
);<?php }} ?>