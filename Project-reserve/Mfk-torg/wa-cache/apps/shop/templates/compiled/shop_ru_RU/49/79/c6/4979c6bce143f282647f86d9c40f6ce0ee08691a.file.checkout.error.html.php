<?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 09:16:58
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.error.html" */ ?>
<?php /*%%SmartyHeaderCode:18400088735c7cc2da775fa9-97921034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4979c6bce143f282647f86d9c40f6ce0ee08691a' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.error.html',
      1 => 1431678452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18400088735c7cc2da775fa9-97921034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'wa_app_url' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7cc2da7af950_61269444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7cc2da7af950_61269444')) {function content_5c7cc2da7af950_61269444($_smarty_tpl) {?><div class="checkout-result">
    <h1>Ошибка!</h1>
    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
        <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
    <?php }else{ ?>
        <p>При обработке платежа произошла ошибка.</p>
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
    
</div>

<?php }} ?>