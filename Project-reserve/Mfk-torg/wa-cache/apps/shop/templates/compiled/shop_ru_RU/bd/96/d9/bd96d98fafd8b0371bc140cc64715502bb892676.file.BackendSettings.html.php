<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 12:08:27
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/backend/BackendSettings.html" */ ?>
<?php /*%%SmartyHeaderCode:2263743145c87770b782352-04386245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd96d98fafd8b0371bc140cc64715502bb892676' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/backend/BackendSettings.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2263743145c87770b782352-04386245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'backend_settings' => 0,
    '_' => 0,
    'wa_backend_url' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c87770b7cb073_60014873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c87770b7cb073_60014873')) {function content_5c87770b7cb073_60014873($_smarty_tpl) {?><div class="sidebar right15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>

<div class="sidebar left200px">
    <div class="block s-nolevel2-sidebar s-inner-sidebar">
        <ul class="menu-v with-icons stack" id="s-settings-menu">
            <li>
                <a href="?action=settings#/general/">
                    <i class="icon16 ss settings-bw"></i>Общие настройки
                </a>
            </li>
            <li>
                <a href="?action=settings#/schedule/">
                    <i class="icon16 ss schedule-bw"></i>Режим работы
                </a>
            </li>

            <!-- plugin hook: 'backend_settings.sidebar_top_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_settings']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_top_li']);?>
<?php } ?><?php }?>


            <li class="top-padded">
                <a href="?action=settings#/features/">
                    <i class="icon16 ss features-bw"></i>Типы и характеристики товаров
                </a>
            </li>
            <li class="nowrap">
                <a href="?action=settings#/recommendations/">
                    <i class="icon16 ss star-bw"></i>Рекомендации
                </a>
            </li>
            <li>
                <a href="?action=settings#/images/">
                    <i class="icon16 ss camera-bw"></i>Изображения
                </a>
            </li>
            <li>
                <a href="?action=settings#/stock/">
                    <i class="icon16 ss cube-bw"></i>Склады
                </a>
            </li>
            <li>
                <a href="?action=settings#/search/">
                    <i class="icon16 ss search-bw"></i>Поиск товаров
                </a>
            </li>
            <!-- plugin hook: 'backend_settings.sidebar_middle_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_settings']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_middle_li']);?>
<?php } ?><?php }?>
            <li>
                <a href="?action=settings#/orderStates/">
                    <i class="icon16 ss flag-bw"></i>Статусы заказов
                </a>
            </li>
            <li>
                <a href="?action=settings#/shipping/">
                    <i class="icon16 ss shipping-bw"></i>Доставка
                </a>
            </li>
            <li>
                <a href="?action=settings#/couriers/">
                    <i class="icon16 ss couriers-bw"></i>Курьеры
                </a>
            </li>
            <li>
                <a href="?action=settings#/payment/">
                    <i class="icon16 ss payment-bw"></i>Оплата
                </a>
            </li>
            <li>
                <a href="?action=settings#/checkout/">
                    <i class="icon16 ss cart-bw"></i>Оформление заказа
                </a>
            </li>
            <li>
                <a href="?action=settings#/discounts/">
                    <i class="icon16 ss discounts-bw"></i>Скидки
                </a>
            </li>
            <li>
                <a href="?action=settings#/affiliate/">
                    <i class="icon16 ss affiliate-bw"></i>Партнерская программа
                </a>
            </li>
            <li>
                <a href="?action=settings#/currencies/">
                    <i class="icon16 ss currency-bw"></i>Валюты
                </a>
            </li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/regions/">
                    <i class="icon16 ss globe-bw"></i>Страны и регионы
                </a>
            </li>
            <li>
                <a href="?action=settings#/taxes/">
                    <i class="icon16 ss percent-bw"></i>Налоги
                </a>
            </li>
            <li>
                <a href="?action=settings#/printform/">
                    <i class="icon16 ss print-forms-bw"></i>Печатные формы
                </a>
            </li>
            <li>
                <a href="?action=settings#/notifications/">
                    <i class="icon16 ss notification-bw"></i>Уведомления
                </a>
            </li>
            <li>
                <a href="?action=settings#/followups/">
                    <i class="icon16 ss stopwatch-bw"></i>Триггерные рассылки
                </a>
            </li>
            <li>
                <a href="?action=settings#/analytics/">
                    <i class="icon16 ss dashboard-bw"></i>Аналитика
                </a>
            </li>


            <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin()){?>
            <li class="top-padded">
                <a href="?action=settings#/reset/">
                    <i class="icon16 ss reset-bw"></i>Сброс
                </a>
            </li>
            <?php }?>
            <!-- plugin hook: 'backend_settings.sidebar_bottom_li' -->
            
            <?php if (!empty($_smarty_tpl->tpl_vars['backend_settings']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['sidebar_bottom_li']);?>
<?php } ?><?php }?>

        </ul>
    </div>
</div>

<div class="content left200px right15px s-nolevel2-box" id="s-settings-content">
    <div class="block double-padded s-settings-form">
        Загрузка...
        <i class="icon16 loading"></i>
    </div>

    <div class="clear"></div>
    <!-- settings placeholder -->
</div>

    <div class="clear"></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/settings.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
    $.settings.init({
        debug:true,
        loading : 'Загрузка...<i class="icon16 loading"><'+'/i>',
        backend_url:'<?php echo strtr($_smarty_tpl->tpl_vars['wa_backend_url']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
    });
</script>
<?php }} ?>