<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 17:47:24
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.success.html" */ ?>
<?php /*%%SmartyHeaderCode:5889333575c7be8fc590865-55379495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d63396c92569f9e31a4db75b461b8fd5f7ead3' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.success.html',
      1 => 1431678452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5889333575c7be8fc590865-55379495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'payment' => 0,
    'payment_success' => 0,
    'wa_app_url' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7be8fc5c0933_58751289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7be8fc5c0933_58751289')) {function content_5c7be8fc5c0933_58751289($_smarty_tpl) {?><style>
    .checkout-header { display: none; }
</style>

<div class="checkout-result success">
    <div class="welcome">
        <h1>Спасибо!</h1>
        <p>Ваш заказ успешно оформлен. Мы свяжемся с вами в ближайшее время.<br />
        Номер вашего заказа  <strong><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</strong>.</p>
    </div>
    
    <?php if (!empty($_smarty_tpl->tpl_vars['payment']->value)){?>
        <div class="plugin">
            <?php echo $_smarty_tpl->tpl_vars['payment']->value;?>

        </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['payment_success']->value)){?>
        <span class="highlighted">Оплата успешно принята. Мы обработаем ваш заказ и свяжемся с вами в ближайшее время.</span>
    <?php }?>
    
    <p class="back">
        &larr; <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">Вернуться в магазин</a>
    </p>
    
    <!-- plugin hook: 'frontend_checkout' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
        
</div><?php }} ?>