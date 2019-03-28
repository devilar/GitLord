<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 17:47:24
         compiled from "e49e1ff551d87b6479cbf8b1b1c677fc8fac8f68" */ ?>
<?php /*%%SmartyHeaderCode:14216645735c7be8fc334906-10758151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e49e1ff551d87b6479cbf8b1b1c677fc8fac8f68' => 
    array (
      0 => 'e49e1ff551d87b6479cbf8b1b1c677fc8fac8f68',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '14216645735c7be8fc334906-10758151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'item' => 0,
    'subtotal' => 0,
    'customer' => 0,
    'shipping_address' => 0,
    'billing_address' => 0,
    'order_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7be8fc37d560_03804405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7be8fc37d560_03804405')) {function content_5c7be8fc37d560_03804405($_smarty_tpl) {?><style>
table.table { margin-top: 25px; margin-left: -10px; width: 100%; border-spacing:0; border-collapse:collapse; }
table.table td { padding: 15px 7px 20px; border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; }
table.table td.min-width { width: 1%; }
table.table td p { margin: 0; }
table.table td input.numerical { width: 50px; margin-right: 5px; text-align: right; }
table.table tr.no-border td { border: none; }
table.table tr.thin td { padding-top: 13px; padding-bottom: 0; }
.align-right { text-align: right; }
.nowrap { white-space: nowrap; }
.gray { color: #aaa; }
pre { word-wrap: break-word; }
</style>
        
<h1><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</h1>

<table class="table">
    <tr>
        <th></th>
        <th class="align-right">Кол-во</th>
        <th class="align-right">Итого</th>
    </tr>
    <?php $_smarty_tpl->tpl_vars['subtotal'] = new Smarty_variable(0, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['sku_code'])){?> <span class="gray"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['sku_code'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['download_link'])){?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['download_link'];?>
"><strong>Скачать</strong></a><?php }?>
        </td>
        <td class="align-right nowrap">&times; <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
        <td class="align-right nowrap"><?php echo wa_currency($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
    </tr>
    <?php $_smarty_tpl->tpl_vars['subtotal'] = new Smarty_variable($_smarty_tpl->tpl_vars['subtotal']->value+$_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity'], null, 0);?>
    <?php } ?>
    <tr class="no-border thin">
        <td colspan="2" class="align-right">Подытог</td>
        <td class="align-right nowrap"><?php echo wa_currency($_smarty_tpl->tpl_vars['subtotal']->value,$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
    </tr>
    <tr class="no-border thin">
        <td colspan="2" class="align-right">Скидка</td>
        <td class="align-right nowrap"><?php echo wa_currency($_smarty_tpl->tpl_vars['order']->value['discount'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
    </tr>
    <tr class="no-border thin">
        <td colspan="2" class="align-right">Доставка</td>
        <td class="align-right nowrap"><?php echo wa_currency($_smarty_tpl->tpl_vars['order']->value['shipping'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
    </tr>
    <tr class="no-border thin">
        <td colspan="2" class="align-right">Налог</td>
        <td class="align-right nowrap"><?php echo wa_currency($_smarty_tpl->tpl_vars['order']->value['tax'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
    </tr>
    <tr class="no-border thin large">
        <td colspan="2" class="align-right"><b>Итого</b></td>
        <td class="align-right nowrap bold"><?php echo wa_currency($_smarty_tpl->tpl_vars['order']->value['total'],$_smarty_tpl->tpl_vars['order']->value['currency']);?>
</td>
    </tr>
</table>

<?php if (!empty($_smarty_tpl->tpl_vars['customer']->value['email'])||!empty($_smarty_tpl->tpl_vars['customer']->value['phone'])){?>
    <h3>Контактная информация</h3>
    <?php if (!empty($_smarty_tpl->tpl_vars['customer']->value['email'])){?>
        Email: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value->get("email","default"), ENT_QUOTES, 'UTF-8', true);?>
<br>
    <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['customer']->value['phone'])){?>
        Телефон: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value->get("phone","default"), ENT_QUOTES, 'UTF-8', true);?>
<br>
    <?php }?>
<?php }?>

<h3>Получатель<?php if (!empty($_smarty_tpl->tpl_vars['order']->value['params']['shipping_name'])){?> &mdash; <?php echo $_smarty_tpl->tpl_vars['order']->value['params']['shipping_name'];?>
<?php }?></h3>
<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br>
<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value;?>
</p>

<h3>Плательщик<?php if (!empty($_smarty_tpl->tpl_vars['order']->value['params']['payment_name'])){?> &mdash; <?php echo $_smarty_tpl->tpl_vars['order']->value['params']['payment_name'];?>
<?php }?></h3>
<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br>
<?php echo $_smarty_tpl->tpl_vars['billing_address']->value;?>
</p>

<h3>Комментарий к заказу</h3>
<pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</pre>

<p>Просмотр информации о заказе: <a href="<?php echo $_smarty_tpl->tpl_vars['order_url']->value;?>
" target="_blank"><strong><?php echo $_smarty_tpl->tpl_vars['order_url']->value;?>
</strong></a>
<?php if (!empty($_smarty_tpl->tpl_vars['order']->value['params']['auth_pin'])){?><br>PIN: <strong><?php echo $_smarty_tpl->tpl_vars['order']->value['params']['auth_pin'];?>
</strong><?php }?>
</p>

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