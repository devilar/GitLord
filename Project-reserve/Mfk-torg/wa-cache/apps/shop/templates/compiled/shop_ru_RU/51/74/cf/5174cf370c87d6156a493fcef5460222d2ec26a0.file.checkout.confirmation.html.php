<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 17:47:18
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.confirmation.html" */ ?>
<?php /*%%SmartyHeaderCode:9557672665c7be8f609dbb5-08170834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5174cf370c87d6156a493fcef5460222d2ec26a0' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.confirmation.html',
      1 => 1431678452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9557672665c7be8f609dbb5-08170834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'wa' => 0,
    'contact' => 0,
    'shipping_address' => 0,
    'billing_address' => 0,
    'tax' => 0,
    'items' => 0,
    'item' => 0,
    'colspan' => 0,
    'subtotal' => 0,
    'discount' => 0,
    'params' => 0,
    'shipping' => 0,
    'total' => 0,
    'terms' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7be8f610f727_98244119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7be8f610f727_98244119')) {function content_5c7be8f610f727_98244119($_smarty_tpl) {?><div class="checkout-content" data-step-id="confirmation">

    <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>    
        <div class="checkout-result error">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            <br><br>
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/checkout');?>
">Начать заново</a>
        </div>
    <?php }else{ ?>
    
        <h3>Получатель</h3>
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br>
        <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value['value'];?>
</p>
    
        <?php if ($_smarty_tpl->tpl_vars['billing_address']->value){?>
            <h3>Плательщик</h3>
            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br>
            <?php echo $_smarty_tpl->tpl_vars['billing_address']->value['value'];?>
</p>
        <?php }?>
    
        <table class="table">
            <tr>
                <th></th>
                <th class="align-right"><span class="non-mobile-only">Количество</span></th>
                <?php if ($_smarty_tpl->tpl_vars['tax']->value>0){?>
                    <th class="align-right">Налог</th>
                <?php }?>
                <th class="align-right">Итого</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr<?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='service'){?> class="service"<?php }?>>
                <td><?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='service'){?>+ <?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td class="align-right nowrap"><span class="gray"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['item']->value['currency']);?>
 &times;</span> <?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['tax']->value>0){?> 
                    <td class="align-right nowrap"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['tax'])){?><?php echo shop_currency_html($_smarty_tpl->tpl_vars['item']->value['tax'],true);?>
<?php }else{ ?>&ndash;<?php }?></td>
                <?php }?>
                <td class="align-right nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['item']->value['price']*$_smarty_tpl->tpl_vars['item']->value['quantity'],$_smarty_tpl->tpl_vars['item']->value['currency']);?>
</td>
            </tr>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['tax']->value>0){?><?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(3, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable(2, null, 0);?><?php }?>
            <tr class="no-border thin">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right">Подытог</td>
                <td class="align-right nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['subtotal']->value,true);?>
</td>
            </tr>
            <tr class="no-border thin">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right">Скидка</td>
                <td class="align-right nowrap">&minus; <?php echo shop_currency_html($_smarty_tpl->tpl_vars['discount']->value,true);?>
</td>
            </tr>
            <tr class="no-border thin">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right">Доставка<?php if (!empty($_smarty_tpl->tpl_vars['params']->value['shipping_name'])){?> &mdash; <strong><?php echo $_smarty_tpl->tpl_vars['params']->value['shipping_name'];?>
</strong><?php }?></td>
                <td class="align-right nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['shipping']->value,true);?>
</td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['tax']->value>0){?>
            <tr class="no-border thin">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right">Налог</td>
                <td class="align-right nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['tax']->value,true);?>
</td>
            </tr>
            <?php }?>
            <tr class="no-border thin large">
                <td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
" class="align-right"><b>Итого</b></td>
                <td class="align-right nowrap"><strong class="large"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['total']->value,true);?>
</strong></td>
            </tr>
        </table>
        
        Комментарий<br>
        <textarea class="comment" name="comment"><?php echo htmlspecialchars(waRequest::post('comment','','string'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
    
        <?php if (!empty($_smarty_tpl->tpl_vars['terms']->value)){?>
        <br>
        <?php if (waRequest::method()=='post'&&!$_smarty_tpl->tpl_vars['wa']->value->post('terms')){?>
            <p class="error">Вы должны прочитать и принять Условия предоставления услуг для того, чтобы оформить заказ.</p>
        <?php }?>
        <label><input type="checkbox" name="terms" value="1"> <?php echo sprintf('Я принимаю <a href="%s" target="_blank">Условия предоставления услуг</a>',($_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/checkout',array('step'=>'confirmation'))).('?terms=1'));?>
</label>
        <?php }?>
    
    <?php }?>

    <!-- plugin hook: 'frontend_checkout' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

</div><?php }} ?>