<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:03
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsCheckoutSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:206925965c9cceef803111-77646613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbd07558a8fbfbf13c22072fb1dd1cc2f0f77683' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsCheckoutSidebar.html',
      1 => 1545053990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206925965c9cceef803111-77646613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_class' => 0,
    'storefronts' => 0,
    '_id' => 0,
    '_new_checkouts' => 0,
    '_route' => 0,
    '_domain' => 0,
    '_url' => 0,
    'wa_app_url' => 0,
    '_old_checkouts' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9cceef856511_26667971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9cceef856511_26667971')) {function content_5c9cceef856511_26667971($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_class'] = new Smarty_variable('s-settings-checkout-sidebar', null, 0);?>
<?php $_smarty_tpl->tpl_vars['_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['_class']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['_new_checkouts'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefronts']->value[2], null, 0);?>
<?php $_smarty_tpl->tpl_vars['_old_checkouts'] = new Smarty_variable($_smarty_tpl->tpl_vars['storefronts']->value[1], null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['_class']->value;?>
 sidebar left200px" id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
">
    <?php if (!empty($_smarty_tpl->tpl_vars['_new_checkouts']->value)){?>
        <h5 class="heading js-list-header" data-version="2">
            <span class="table-cell"><i class="icon16 darr"></i></span>
            <a class="table-cell" href="javascript:void(0);">Оформление заказа в корзине&nbsp;(<?php echo count($_smarty_tpl->tpl_vars['_new_checkouts']->value);?>
)</a>
        </h5>
        <ul class="menu-v js-storefronts-list" data-version="2">
            
            <?php  $_smarty_tpl->tpl_vars['_route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_route']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_new_checkouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_route']->key => $_smarty_tpl->tpl_vars['_route']->value){
$_smarty_tpl->tpl_vars['_route']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['_domain'] = new Smarty_variable(waIdna::dec($_smarty_tpl->tpl_vars['_route']->value['domain']), null, 0);?>
                <?php $_smarty_tpl->tpl_vars['_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_domain']->value)."/".((string)htmlspecialchars($_smarty_tpl->tpl_vars['_route']->value['url'], ENT_QUOTES, 'UTF-8', true)), null, 0);?>
                <li class="s-domain-item" data-domain-id="<?php echo waIdna::dec($_smarty_tpl->tpl_vars['_domain']->value);?>
" data-route-id="<?php echo $_smarty_tpl->tpl_vars['_route']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?action=settings#/checkout2&domain=<?php echo urlencode($_smarty_tpl->tpl_vars['_domain']->value);?>
&route=<?php echo urlencode($_smarty_tpl->tpl_vars['_route']->value['id']);?>
/">
                        <i class="icon16 status-green-tiny"></i><?php echo $_smarty_tpl->tpl_vars['_url']->value;?>

                        <i class="shortener"></i>
                    </a>
                </li>
            <?php } ?>
        </ul>
    <?php }?>

    <h5 class="heading js-list-header js-old-checkout" data-version="1">
        <span class="table-cell"><i class="icon16 darr"></i></span>
        <div class="table-cell">
            <a href="?action=settings#/checkout&r=1">Пошаговое оформление заказа&nbsp;(<?php echo count($_smarty_tpl->tpl_vars['_old_checkouts']->value);?>
)</a>
        </div>
        <div class="table-cell" style="width: 16px;">
            <a class="js-link" href="?action=settings#/checkout&r=1"><i class="icon16 settings"></i></a>
        </div>
    </h5>
    <ul class="menu-v js-storefronts-list" data-version="1">
        
        
        <?php  $_smarty_tpl->tpl_vars['_route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_route']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_old_checkouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_route']->key => $_smarty_tpl->tpl_vars['_route']->value){
$_smarty_tpl->tpl_vars['_route']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['_domain'] = new Smarty_variable(waIdna::dec($_smarty_tpl->tpl_vars['_route']->value['domain']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['_url'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['_domain']->value)."/".((string)htmlspecialchars($_smarty_tpl->tpl_vars['_route']->value['url'], ENT_QUOTES, 'UTF-8', true)), null, 0);?>
            <li class="s-domain-item">
                <span title="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
                    <i class="icon16 status-blue-tiny"></i><?php echo $_smarty_tpl->tpl_vars['_url']->value;?>

                    <i class="shortener"></i>
                </span>
            </li>
        <?php } ?>
    </ul>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/checkout_sidebar.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script>
    (function ($) {
        new ShopSettingsCheckoutSidebar({
            $wrapper: $("#<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
")
        });
    })(jQuery);
</script><?php }} ?>