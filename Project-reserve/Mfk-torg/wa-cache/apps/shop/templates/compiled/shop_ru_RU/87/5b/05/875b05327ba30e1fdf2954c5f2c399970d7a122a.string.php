<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:18:45
         compiled from "875b05327ba30e1fdf2954c5f2c399970d7a122a" */ ?>
<?php /*%%SmartyHeaderCode:16057188085c8f4655076128-09557478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '875b05327ba30e1fdf2954c5f2c399970d7a122a' => 
    array (
      0 => '875b05327ba30e1fdf2954c5f2c399970d7a122a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '16057188085c8f4655076128-09557478',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customer' => 0,
    'order' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4655083726_37569035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4655083726_37569035')) {function content_5c8f4655083726_37569035($_smarty_tpl) {?><p>Здравствуйте, <?php echo $_smarty_tpl->tpl_vars['customer']->value->get("name","html");?>
!</p>

<p>Ваш заказ <?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
 подтвержден и принят в обработку.</p>

<p>Спасибо за покупку в магазине «<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings("name");?>
»!</p>

<p>--<br>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings("name");?>
<br>
<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings("email");?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings("email");?>
</a><br>
<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->settings("phone");?>
<br></p><?php }} ?>