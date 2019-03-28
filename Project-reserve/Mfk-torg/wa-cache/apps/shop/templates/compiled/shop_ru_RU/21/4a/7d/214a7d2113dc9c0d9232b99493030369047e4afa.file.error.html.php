<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:43
         compiled from "/home/c/cl36655/public_html/wa-data/public/site/themes/default/error.html" */ ?>
<?php /*%%SmartyHeaderCode:5559049735c7ac363a44507-07851869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '214a7d2113dc9c0d9232b99493030369047e4afa' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/site/themes/default/error.html',
      1 => 1431678453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5559049735c7ac363a44507-07851869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac363a6eeb9_47610105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac363a6eeb9_47610105')) {function content_5c7ac363a6eeb9_47610105($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>