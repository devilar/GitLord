<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 22:19:29
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.html" */ ?>
<?php /*%%SmartyHeaderCode:13603875905c7ad741229860-41681249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b01a918d1fc4435d36d5d838f7638175e9ca74ef' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/checkout.html',
      1 => 1472238461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13603875905c7ad741229860-41681249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkout_steps' => 0,
    'step_id' => 0,
    '_upcoming_flag' => 0,
    'checkout_current_step' => 0,
    'wa' => 0,
    'cart_total' => 0,
    's' => 0,
    'wa_parent_theme_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ad7412a1234_55342512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ad7412a1234_55342512')) {function content_5c7ad7412a1234_55342512($_smarty_tpl) {?><!-- following CSS hides top navigation menu; remove <style>…</style> to unhide -->
<style>
    body { background: #fff; padding-top: 0; }
    header,
    .banner .search,
    .banner ul.menu-h,
    .page-nav,
    .currency-toggle,
    .followus,
    .poweredby { display: none; }
    .banner { margin-top: -10px; padding-bottom: 60px; }
    .page-content { margin-left: 0 !important; padding: 0; border-left: 0 !important; }
    .float-right { float: right; }
    .container { max-width: 800px; }
    #mobile-nav-toggle { display: none !important; }
    .footer-block { display: none; }
    .banner { min-height: 40px; }
    .banner h3 { margin-bottom: 0; }
    .banner h3 a { color: #fff; }
    .banner h3 a:hover { color: yellow !important; }
</style>

<div class="checkout">

    <?php if (isset($_smarty_tpl->tpl_vars['checkout_steps']->value)){?>
    <!-- checkout step content -->
    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['step_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['checkout_steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['s']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['s']->iteration=0;
 $_smarty_tpl->tpl_vars['s']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['step_id']->value = $_smarty_tpl->tpl_vars['s']->key;
 $_smarty_tpl->tpl_vars['s']->iteration++;
 $_smarty_tpl->tpl_vars['s']->index++;
 $_smarty_tpl->tpl_vars['s']->first = $_smarty_tpl->tpl_vars['s']->index === 0;
 $_smarty_tpl->tpl_vars['s']->last = $_smarty_tpl->tpl_vars['s']->iteration === $_smarty_tpl->tpl_vars['s']->total;
?>
        <div class="checkout-step step-<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
">
            <form class="checkout-form <?php if ($_smarty_tpl->tpl_vars['s']->last){?>last<?php }?>" method="post" action="">
                <h2 class="<?php if (isset($_smarty_tpl->tpl_vars['_upcoming_flag']->value)){?>upcoming<?php }?><?php if ($_smarty_tpl->tpl_vars['step_id']->value==$_smarty_tpl->tpl_vars['checkout_current_step']->value){?><?php $_smarty_tpl->tpl_vars['_upcoming_flag'] = new Smarty_variable(1, null, 0);?><?php }?>"<?php if ($_smarty_tpl->tpl_vars['s']->first){?> style="border-top: none;"<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['s']->first){?>
                        <?php $_smarty_tpl->tpl_vars['cart_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total(), null, 0);?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/cart');?>
" class="hint float-right">Корзина: <strong><?php echo shop_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,true);?>
</strong></a>
                    <?php }else{ ?>
                        <a href="#" class="hint float-right back"<?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value!=$_smarty_tpl->tpl_vars['step_id']->value){?> style="display:none"<?php }?>>Назад</a>
                    <?php }?>
                    <a href="#"><span class="gray"><?php echo $_smarty_tpl->tpl_vars['s']->iteration;?>
.</span> <?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</a>
                </h2>

                <?php if ($_smarty_tpl->tpl_vars['s']->first&&$_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>
                    <div class="checkout-step-content auth" <?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value!=$_smarty_tpl->tpl_vars['step_id']->value){?>style="display:none"<?php }?>>
                        <?php if (!$_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                            <!-- authorized / not authorized selector -->
                            <ul>
                                <li><label><input name="user_type" type="radio" <?php if (!$_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?>checked<?php }?> value="0"> Я новый покупатель</label></li>
                                <li><label><input name="user_type" type="radio" <?php if ($_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?>checked<?php }?> value="1"> Я уже заказывал ранее и у меня есть аккаунт</label></li>
                            </ul>
                            <div id="login-form"<?php if (!$_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?> style="display:none"<?php }?>>
                                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_parent_theme_path']->value)."/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('without_form'=>true), 0);?>

                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $("#login-form input").attr('disabled', 'disabled');
                                    $("input[name='user_type']").change(function () {
                                        if ($("input[name='user_type']:checked").val() == '1') {
                                            $("#login-form input").removeAttr('disabled');
                                            $(this).closest('div.auth').next(".checkout-step-content").hide();
                                            $("input[type=submit]:last").hide();
                                            $("#login-form").show();
                                        } else {
                                            $("#login-form input").attr('disabled', 'disabled');
                                            $("#login-form").hide();
                                            $(this).closest('div.auth').next(".checkout-step-content").show();
                                            $("input[type=submit]:last").show();
                                        }
                                    });
                                    <?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value==$_smarty_tpl->tpl_vars['step_id']->value){?>
                                        $("input[name='user_type']").change();
                                    <?php }?>
                                });
                            </script>
                            <div class="clear-both"></div>
                        <?php }else{ ?>
                        <!-- authorized -->
                            <blockquote>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getPhoto(50);?>
">
                                <p>
                                    <span class="black"><?php echo sprintf("Вы авторизованы как <strong>%s</strong>. Пожалуйста, подтвердите или обновите вашу контактную информацию. Изменения будут автоматически сохранены в вашем профиле. ",$_smarty_tpl->tpl_vars['wa']->value->user('name'));?>
</span>
                                    <br>
                                    <em>Если вы хотите оформить заказ от имени другого пользователя, <a href="?logout">выйдите из сеанса</a> и перейдите к оформлению заказа заново.</em>
                                </p>
                            </blockquote>
                            <div class="clear-both"></div>
                        <?php }?>
                    </div>
                <?php }?>

                <div class="checkout-step-content" style="<?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()&&$_smarty_tpl->tpl_vars['s']->first){?>margin-top: <?php if ($_smarty_tpl->tpl_vars['step_id']->value=='contactinfo'){?>-40px;<?php }else{ ?>-23px;<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value!=$_smarty_tpl->tpl_vars['step_id']->value||$_smarty_tpl->tpl_vars['wa']->value->post('wa_auth_login')){?> display:none;<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['checkout_current_step']->value==$_smarty_tpl->tpl_vars['step_id']->value){?>
                        <?php if (in_array($_smarty_tpl->tpl_vars['step_id']->value,array('contactinfo','shipping','payment','confirmation'))){?>
                            <?php echo $_smarty_tpl->getSubTemplate ("checkout.".((string)$_smarty_tpl->tpl_vars['step_id']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['s']->value['content'];?>

                        <?php }?>
                    <?php }else{ ?>
                        <div class="checkout-content" data-step-id="<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
"></div>
                    <?php }?>
                    <div class="clear-both"></div>
                    <input type="hidden" name="step" value="<?php echo $_smarty_tpl->tpl_vars['step_id']->value;?>
">
                    <?php if ($_smarty_tpl->tpl_vars['s']->last){?>
                    <div class="float-right">
                        <input type="submit" class="large bold" value="Оформить заказ">
                    </div>
                    <?php }else{ ?>
                    <input type="submit" class="large bold" value="Далее &rarr;">
                    <?php }?>
                    <div class="clear-both"></div>
                </div>
            </form>
        </div>
    <?php } ?>
    <?php }else{ ?>
        <div class="checkout-step">
            <?php echo $_smarty_tpl->getSubTemplate ("checkout.".((string)$_smarty_tpl->tpl_vars['checkout_current_step']->value).".html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    <?php }?>

</div>

<script type="text/javascript">
    $(function () {
    
        $('header .banner h3').text('Оформление заказа');
        $('header .banner h3').show();
    
        function checkoutStep(step_id) {
            $.get("<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/checkout');?>
" + step_id + '/', function (response) {
                var current = $(".checkout-step .checkout-step-content:visible");
                var current_step_id =  current.find(".checkout-content").data('step-id');
                if (current_step_id != step_id) {
                    current.animate( { height: 0 }, 200, function() { $(this).hide(); } );
                    current.parent().find('a.back').hide();
                }
                $(".checkout-step.step-" + step_id + " .checkout-content").replaceWith(response);
                $(".checkout-step.step-" + step_id + " a.back").show();
                $(".checkout-step.step-" + step_id + ' h2').removeClass('upcoming')
                $(".checkout-step.step-" + step_id).next('.checkout-step').each(function () {
                    $(this).find('h2').addClass('upcoming');
                });
                $(".checkout-step.step-" + step_id).prev('.checkout-step').each(function () {
                    $(this).find('h2').removeClass('upcoming');
                });
                if (current_step_id != step_id) {
                    $(".checkout-step.step-" + step_id + " .checkout-step-content").show(0).css({ height: 'auto'});
                }
                if ($(".checkout-step.step-" + step_id + ' .auth').length) {
                    $("input[name='user_type']").change();
                }
            });
        }
        $(".checkout h2 a").click(function () {
            if ($(this).hasClass('hint')) {
                if ($(this).hasClass('back')) {
                    checkoutStep($(this).closest('div').prev().find('.checkout-content').data('step-id'));
                    return false;
                }
                return true;
            }
            if ($(this).closest('h2').hasClass('upcoming')) {
                return false;
            }
            checkoutStep($(this).closest('div').find('.checkout-content').data('step-id'));
            return false;
        });
        $("form.checkout-form").on('submit', function () {
            var f = $(this);
            var step = f.find('.checkout-content').data('step-id');
            if (step == 'payment' || step == 'shipping') {
                if (!f.find('input[name="' + step + '_id"]:checked').not(':disabled').length) {
                    if (!f.find('em.errormsg').length) {
                    $('<em class="errormsg inline">' + (step == 'payment' ? 'Пожалуйста, выберите способ оплаты' :
                            'Пожалуйста, выберите способ доставки') + '</em>').insertAfter(f.find('input:submit:last'));
                    }
                    return false;
                } else {
                    f.find('em.errormsg').remove();
                }
            }
            if (f.hasClass('last') || ($("#login-form").length && !$("#login-form input:submit").attr('disabled'))) {
                $('<span class="loading"> <i class="icon24 loading"></i></span>').insertBefore(f.find('input:submit:last'));
                return true;
            }
            $('<span class="loading"> <i class="icon24 loading"></i></span>').insertAfter(f.find('input:submit:last').attr('disabled', 'disabled'));
            $.post(f.attr('action') || window.location, f.serialize(), function (response) {
                var content = $(response);
                var step_id = content.data('step-id');
                if (!step_id) {
                    step_id = content.filter('.checkout-content').data('step-id');
                }
                var current = $(".checkout-step .checkout-step-content:visible");
                var current_step_id =  current.find(".checkout-content").data('step-id');
                if (current_step_id != step_id) {
                    current.animate({ height: 0}, 200, function() {
                        $(this).hide();
                    });
                    $(".checkout-step.step-" + step_id + " .checkout-step-content").css({ height: 'auto'}).show(200, function () {
                        $(document).scrollTop($(".checkout-step.step-" + step_id).offset().top);
                    });
                    current.parent().find('a.back').hide();
                }
                $(".checkout-step.step-" + step_id + " .checkout-content").replaceWith(content);
                $(".checkout-step.step-" + step_id + " a.back").show();
                $(".checkout-step.step-" + step_id + " input[type=submit]:last").show();
                if (current_step_id != step_id) {
                    $(".checkout-step.step-" + step_id + " .checkout-step-content").show(0).css({ height: 'auto'});
                }
                $(".checkout-step.step-" + step_id + ' h2').removeClass('upcoming')
                $(".checkout-step.step-" + step_id).next('.checkout-step').each(function () {
                    $(this).find('h2').addClass('upcoming');
                });
                $(".checkout-step.step-" + step_id).prev('.checkout-step').each(function () {
                    $(this).find('h2').removeClass('upcoming');
                });
            }).always(function () {
                f.find('span.loading').remove();
                f.find('input:submit:last').removeAttr('disabled');
            });
            return false;
        });
    });
</script><?php }} ?>