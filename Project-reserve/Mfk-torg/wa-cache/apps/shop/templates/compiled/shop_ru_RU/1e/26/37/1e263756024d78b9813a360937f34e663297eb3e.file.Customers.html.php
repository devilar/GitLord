<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 22:38:06
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/Customers.html" */ ?>
<?php /*%%SmartyHeaderCode:120635585c880a9e62b2c7-21122876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e263756024d78b9813a360937f34e663297eb3e' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/Customers.html',
      1 => 1545053990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120635585c880a9e62b2c7-21122876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c880a9e6627c3_58991433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c880a9e6627c3_58991433')) {function content_5c880a9e6627c3_58991433($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_action')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/function.wa_action.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/customers/customers.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/customers/orders.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<div class="sidebar left200px s-inner-sidebar" id="s-sidebar">
    <?php echo smarty_function_wa_action(array('app'=>"shop",'module'=>"customers",'action'=>"sidebar"),$_smarty_tpl);?>

</div>

<div class="content left200px blank" id="s-content">
    <div class="block triple-padded"><i class="icon16 loading"></i>Загрузка...</div>
</div>

<script>$(function() { "use strict";
    $.customers.init();
});</script>

<?php }} ?>