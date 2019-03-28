<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 17:47:15
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.shipping.html" */ ?>
<?php /*%%SmartyHeaderCode:2962919885c7be8f30c3041-66359533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20520a4fe16a3659c87cf04db0bc8233a14db41d' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.shipping.html',
      1 => 1431678452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2962919885c7be8f30c3041-66359533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkout_shipping_methods' => 0,
    'm' => 0,
    'shipping' => 0,
    'r' => 0,
    'rate_id' => 0,
    'external_methods' => 0,
    'wa' => 0,
    'frontend_checkout' => 0,
    '_' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7be8f315cc22_09376601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7be8f315cc22_09376601')) {function content_5c7be8f315cc22_09376601($_smarty_tpl) {?><div class="checkout-content" data-step-id="shipping">
<ul class="checkout-options">
    <?php $_smarty_tpl->tpl_vars['external_methods'] = new Smarty_variable(array(), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['checkout_shipping_methods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
        <li class="shipping-<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
">
            <?php if (empty($_smarty_tpl->tpl_vars['m']->value['error'])){?>
            <div class="rate">
                <span class="price nowrap">
                    <?php if ($_smarty_tpl->tpl_vars['m']->value['rate']!==null){?>
                    <?php echo shop_currency_html($_smarty_tpl->tpl_vars['m']->value['rate'],$_smarty_tpl->tpl_vars['m']->value['currency']);?>

                    <?php }elseif($_smarty_tpl->tpl_vars['m']->value['external']){?>
                    <?php $_smarty_tpl->createLocalArrayVariable('external_methods', null, 0);
$_smarty_tpl->tpl_vars['external_methods']->value[] = $_smarty_tpl->tpl_vars['m']->value['id'];?>
                    Загрузка... <i class="icon16 loading"></i>
                    <?php }?>
                </span>
                <em class="hint error comment" <?php if (empty($_smarty_tpl->tpl_vars['m']->value['comment'])){?>style="display:none"<?php }?>>
                    <br><?php if (!empty($_smarty_tpl->tpl_vars['m']->value['comment'])){?><?php echo $_smarty_tpl->tpl_vars['m']->value['comment'];?>
<?php }?>
                </em>
                <span class="hint" <?php if (empty($_smarty_tpl->tpl_vars['m']->value['est_delivery'])){?>style="display:none"<?php }?>>
                <br>
                Приблизительное время доставки:<br>
                <strong class="est_delivery"><?php if (!empty($_smarty_tpl->tpl_vars['m']->value['est_delivery'])){?><?php echo $_smarty_tpl->tpl_vars['m']->value['est_delivery'];?>
<?php }?></strong>
                </span>
            </div>
            <?php }else{ ?>
            <div class="rate error">
                <span class="price nowrap" style="display:none"></span>
                <em class="hint error comment" style="display:none"></em>
                <span class="hint" style="display:none">
                    <br>
                    Приблизительное время доставки:<br>
                    <strong class="est_delivery"></strong>
                </span>
                <em class="shipping-error"><?php echo $_smarty_tpl->tpl_vars['m']->value['error'];?>
</em>
            </div>
            <?php }?>
            <h3>
                <label>
                    <?php if (!empty($_smarty_tpl->tpl_vars['m']->value['logo'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['m']->value['logo'];?>
" class="method-logo"><?php }?>
                    <input type="radio" name="shipping_id" value="<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['m']->value['external']||!empty($_smarty_tpl->tpl_vars['m']->value['error'])){?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['m']->value['id']==$_smarty_tpl->tpl_vars['shipping']->value['id']){?>checked<?php }?>>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </label> 
                    
                <?php if (empty($_smarty_tpl->tpl_vars['m']->value['error'])&&!empty($_smarty_tpl->tpl_vars['m']->value['rates'])){?>
                    <?php if (count($_smarty_tpl->tpl_vars['m']->value['rates'])>1){?>
                        <select class="shipping-rates" name="rate_id[<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
]">
                            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['rate_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['m']->value['rates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['rate_id']->value = $_smarty_tpl->tpl_vars['r']->key;
?>
                                <option data-rate="<?php echo shop_currency($_smarty_tpl->tpl_vars['r']->value['rate'],$_smarty_tpl->tpl_vars['r']->value['currency']);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['r']->value['est_delivery'])){?>data-est_delivery="<?php echo $_smarty_tpl->tpl_vars['r']->value['est_delivery'];?>
"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['r']->value['comment'])){?>data-comment="<?php echo $_smarty_tpl->tpl_vars['r']->value['comment'];?>
"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['rate_id']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['rate_id']->value==$_smarty_tpl->tpl_vars['shipping']->value['rate_id']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
 (<?php echo shop_currency($_smarty_tpl->tpl_vars['r']->value['rate'],$_smarty_tpl->tpl_vars['r']->value['currency']);?>
)</option>
                            <?php } ?>
                        </select>
                    <?php }else{ ?>
                        <input type="hidden" name="rate_id[<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
]" value="<?php echo key($_smarty_tpl->tpl_vars['m']->value['rates']);?>
">
                    <?php }?>
                <?php }?>
            </h3>
            <?php if ($_smarty_tpl->tpl_vars['m']->value['description']){?><p><?php echo $_smarty_tpl->tpl_vars['m']->value['description'];?>
</p><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['m']->value['form'])){?><div class="wa-form wa-address" <?php if ($_smarty_tpl->tpl_vars['m']->value['id']!=$_smarty_tpl->tpl_vars['shipping']->value['id']){?>style="display:none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value['form']->html();?>
</div><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['m']->value['custom_html'])){?>
                <div class="clear-both"></div>
                <div class="wa-form" <?php if ($_smarty_tpl->tpl_vars['m']->value['id']!=$_smarty_tpl->tpl_vars['shipping']->value['id']){?>style="display:none"<?php }?>><?php echo $_smarty_tpl->tpl_vars['m']->value['custom_html'];?>
</div>
            <?php }?>
        </li>
    <?php }
if (!$_smarty_tpl->tpl_vars['m']->_loop) {
?>
        <li>
            <em class="error">Oops! We are sorry, but <strong>we can not ship this order to your selected destination</strong>. Checkout can not be completed.</em>
        </li>
    <?php } ?>
</ul>
<script type="text/javascript">
    $(function () {
        <?php if ($_smarty_tpl->tpl_vars['external_methods']->value){?>
            $.get("<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/shipping');?>
", { shipping_id: [<?php echo implode(',',$_smarty_tpl->tpl_vars['external_methods']->value);?>
]}, function (response) {
                for (var shipping_id in response.data) {
                    responseCallback(shipping_id, response.data[shipping_id]);
                }
            }, "json");
        <?php }?>

                function responseCallback(shipping_id, data) {
                    var name = 'rate_id[' + shipping_id + ']';
                    if (typeof(data) != 'string') {
                        $(".shipping-" + shipping_id + ' input:radio').removeAttr('disabled');
                    }
                    if (typeof(data) == 'string') {
                        $(".shipping-" + shipping_id + ' input[name="' + name + '"]').remove();
                        $(".shipping-" + shipping_id + ' select[name="' + name + '"]').remove();
                        var el = $(".shipping-" + shipping_id).find('.rate');
                        if (el.hasClass('error')) {
                            el.find('em').html(data);
                        } else {
                            el.find('.price, .hint').hide();
                            el.addClass('error').append($('<em class="shipping-error"></em>').html(data));
                        }
                    } else if (data.length > 1) {
                        $(".shipping-" + shipping_id + ' input[name="' + name + '"]').remove();
                        var select = $(".shipping-" + shipping_id + ' select[name="' + name + '"]');
                        var html = '<select class="shipping-rates" name="' + name + '">';
                        for (var i = 0; i < data.length; i++) {
                            var r = data[i];
                            html += '<option data-rate="' + r.rate + '" data-comment="' + (r.comment || '') + '" data-est_delivery="' + (r.est_delivery || '') + '" value="' + r.id + '">' + r.name + ' (' + r.rate + ')</option>';
                        }
                        html += '</select>';
                        if (select.length) {
                            var selected = select.val();
                            select.remove();
                        } else {
                            var selected = false;
                        }
                        select = $(html);
                        $(".shipping-" + shipping_id + " h3").append(select);
                        if (selected) {
                            select.val(selected);
                        }
                        select.trigger('change', 1);
                        $(".shipping-" + shipping_id).find('.rate').removeClass('error').find('.price').show();
                        $(".shipping-" + shipping_id).find('.rate em.shipping-error').remove();
                    } else {
                        $(".shipping-" + shipping_id + ' select[name="' + name + '"]').remove();
                        var input = $(".shipping-" + shipping_id + ' input[name="' + name + '"]');
                        if (input.length) {
                            input.val(data[0].id);
                        } else {
                            $(".shipping-" + shipping_id + " h3").append('<input type="hidden" name="' + name + '" value="' + data[0].id + '">');
                        }
                        $(".shipping-" + shipping_id + " .price").html(data[0].rate);
                        $(".shipping-" + shipping_id + " .est_delivery").html(data[0].est_delivery);
                        $(".shipping-" + shipping_id).find('.rate').removeClass('error').find('.price').show();
                        if (data[0].est_delivery) {
                            $(".shipping-" + shipping_id + " .est_delivery").parent().show();
                        } else {
                            $(".shipping-" + shipping_id + " .est_delivery").parent().hide();
                        }
                        if (data[0].comment) {
                            $(".shipping-" + shipping_id + " .comment").html('<br>' + data[0].comment).show();
                        } else {
                            $(".shipping-" + shipping_id + " .comment").hide();
                        }
                        $(".shipping-" + shipping_id).find('.rate em.shipping-error').remove();
                    }
                }

                $(".checkout-options").on('change', "select.shipping-rates", function (e, not_check) {
                    var opt = $(this).children('option:selected');
                    var li = $(this).closest('li');
                    li.find('.price').html(opt.data('rate'));
                    if (!not_check) {
                        li.find('input:radio').attr('checked', 'checked');
                    }
                    li.find('.est_delivery').html(opt.data('est_delivery'));
                    if (opt.data('est_delivery')) {
                        li.find('.est_delivery').parent().show();
                    } else {
                        li.find('.est_delivery').parent().hide();
                    }
                    if (opt.data('comment')) {
                        li.find('.comment').html('<br>' + opt.data('comment')).show();
                    } else {
                        li.find('.comment').empty().hide();
                    }
                });
                $(".checkout-options input:radio").change(function () {
                    if ($(this).is(':checked') && !$(this).data('ignore')) {
                        $(".checkout-options .wa-form").hide();
                        $(this).closest('li').find('.wa-form').show();
                        if ($(this).data('changed')) {
                            $(this).closest('li').find('.wa-form').find('input,select').data('ignore', 1).change().removeData('ignore');
                            $(this).removeData('changed');
                        }
                    }
                });
                $(".wa-address").find('input,select').change(function () {
                    if ($(this).data('ignore')) {
                        return true;
                    }
                    var shipping_id = $("input[name=shipping_id]:checked").val();
                    var loaded_flag = false;
                    setTimeout(function () {
                        if (!loaded_flag && !$(".shipping-" + shipping_id + " .price .loading").length) {
                            $(".shipping-" + shipping_id + " .price").append(' <i class="icon16 loading"></i>');
                        }
                    }, 300);
                    var v = $(this).val();
                    var name = $(this).attr('name').replace(/customer_\d+/, '');
                    $(".checkout-options input:radio").each(function () {
                        if ($(this).val() != shipping_id) {
                            var el = $(this).closest('li').find('[name="customer_' + $(this).val() + name + '"]');
                            if (el.attr('type') != 'hidden') {
                                el.val(v);
                                $(this).data('changed', 1);
                            }
                        }
                    });

                    $.post("<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/shipping');?>
", $("form").serialize(), function (response) {
                        loaded_flag = true;
                        responseCallback(shipping_id, response.data);
                    }, "json");
                });
            });

</script>

<!-- plugin hook: 'frontend_checkout' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_checkout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)){?>
<div class="checkout-result error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }?>

</div><?php }} ?>