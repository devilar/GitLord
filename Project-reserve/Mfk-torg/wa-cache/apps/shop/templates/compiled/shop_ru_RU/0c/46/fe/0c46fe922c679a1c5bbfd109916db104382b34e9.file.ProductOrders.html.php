<?php /* Smarty version Smarty-3.1.14, created on 2019-03-15 01:06:06
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductOrders.html" */ ?>
<?php /*%%SmartyHeaderCode:13495289035c8ad04e533955-37485782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c46fe922c679a1c5bbfd109916db104382b34e9' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductOrders.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13495289035c8ad04e533955-37485782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
    'view' => 0,
    'o' => 0,
    'a_params' => 0,
    'wa' => 0,
    'offset' => 0,
    'count' => 0,
    'total_count' => 0,
    'lazy' => 0,
    'product_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8ad04e5af527_29739590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8ad04e5af527_29739590')) {function content_5c8ad04e5af527_29739590($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php if (!count($_smarty_tpl->tpl_vars['orders']->value)){?>
    Никто из покупателей еще не заказывал этот товар.
<?php }else{ ?>
    <table class="zebra double-padded s-product-orders single-lined" id="s-product-orders-list">
        <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value){
$_smarty_tpl->tpl_vars['o']->_loop = true;
?>
            <tr>
                <!--
                <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'a_params', null); ob_start(); ?>
                <?php if ($_smarty_tpl->tpl_vars['view']->value=='table'){?>
                href="?action=orders#/order/<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
/state_id=<?php echo $_smarty_tpl->tpl_vars['o']->value['state_id'];?>
/"
                <?php }else{ ?>
                href="?action=orders#/orders/state_id=<?php echo $_smarty_tpl->tpl_vars['o']->value['state_id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
/"
                <?php }?>
                style="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['style'], ENT_QUOTES, 'UTF-8', true);?>
"
                data-order-id="<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
"
                data-state-id="<?php echo $_smarty_tpl->tpl_vars['o']->value['state_id'];?>
"
                class="s-order-link"
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                -->

                <td class="nowrap">
                    <a <?php echo $_smarty_tpl->tpl_vars['a_params']->value;?>
>
                        <i class="<?php echo $_smarty_tpl->tpl_vars['o']->value['icon'];?>
"></i><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->orderId($_smarty_tpl->tpl_vars['o']->value['id']);?>

                    </a>
                </td>
                <td>
                    <div>
                        <a <?php echo $_smarty_tpl->tpl_vars['a_params']->value;?>
><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['o']->value['create_datetime'],'humandate');?>
</a>
                        <i class="shortener"></i>
                    </div>
                </td>
                <td>
                    <div>
                        <a <?php echo $_smarty_tpl->tpl_vars['a_params']->value;?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['contact']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                        <i class="shortener"></i>
                    </div>
                </td>
                <td>
                    <div>
                        <a <?php echo $_smarty_tpl->tpl_vars['a_params']->value;?>
>
                        <?php if ($_smarty_tpl->tpl_vars['o']->value['shipping_name']){?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['shipping_name'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php }else{ ?>
                            <span class="gray">Способ доставки не определен</span>
                        <?php }?>
                        </a>
                        <i class="shortener"></i>
                    </div>
                </td>
                <td>
                    <div>
                        <a <?php echo $_smarty_tpl->tpl_vars['a_params']->value;?>
>
                            <?php if ($_smarty_tpl->tpl_vars['o']->value['payment_name']){?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['o']->value['payment_name'], ENT_QUOTES, 'UTF-8', true);?>

                            <?php }else{ ?>
                                <span class="gray">Способ оплаты не определен</span>
                            <?php }?>
                        </a>
                        <i class="shortener"></i>
                    </div>
                </td>
                <td class="bold nowrap align-right">
                        <a <?php echo $_smarty_tpl->tpl_vars['a_params']->value;?>
><?php echo $_smarty_tpl->tpl_vars['o']->value['total_formatted'];?>
</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <div class="block half-padded">
        <br>
        <div class="lazyloading-progress-string"><?php echo _w('%d order','%d orders',$_smarty_tpl->tpl_vars['offset']->value+$_smarty_tpl->tpl_vars['count']->value);?>
&nbsp;<?php echo sprintf(_w('of %d'),$_smarty_tpl->tpl_vars['total_count']->value);?>
</div><br>
        <span class="lazyloading-progress" style="display:none">
            <i class="icon16 loading"></i> Загрузка <span class="lazyloading-chunk"><?php echo _w('%d order','%d orders',min($_smarty_tpl->tpl_vars['total_count']->value-$_smarty_tpl->tpl_vars['offset']->value-$_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['count']->value));?>
...</span>
        </span>
    </div>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['lazy']->value){?>
    <script type="text/javascript">
        $.product_orders.init({
            total_count: <?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
,
            container: '#s-product-profile-tabs .s-tab-block[data-tab="recent-orders"]',
            lazy_loading: {
                auto: true,
                count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
,
                url: '?module=product&id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
&action=orders'
            }
        });
    </script>
<?php }?>
<?php }} ?>