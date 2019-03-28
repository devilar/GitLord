<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:02
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsPayment.html" */ ?>
<?php /*%%SmartyHeaderCode:9088027925c9cceee43a969-14968188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95216c835786f056222fc128c53b51113ea36371' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsPayment.html',
      1 => 1545053990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9088027925c9cceee43a969-14968188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plugins' => 0,
    'id' => 0,
    'plugin' => 0,
    'installer' => 0,
    'instances' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9cceee498a98_16301295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9cceee498a98_16301295')) {function content_5c9cceee498a98_16301295($_smarty_tpl) {?>
<div class="blank s-settings-form">
    <div class="block double-padded">

        <div class="float-right">
            <ul class="menu-h with-icons dropdown" id="s-payment-menu">
                <li>
                    <a href="#/payment/" class="inline-link js-action"><i class="icon16 add"></i><b><i>Добавить способ оплаты</i></b><i class="icon16 darr"></i></a>
                    <ul class="menu-v with-icons">
                        <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
                        <li>
                            <a href="#/payment/plugin/add/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/">
                            <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['icon'][16])){?>
                            <?php echo shopHelper::getIcon('ss payment-bw');?>

                            <?php }else{ ?>
                            <?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['plugin']->value['icon'][16]);?>

                            <?php }?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                            </a>

                        </li>
                        <?php } ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['installer']->value)){?>
                        <li class="bordered-top" style="padding-top: 10px; padding-bottom: 10px; margin-top: 7px; padding-left: 8px;">
                            <a href="#/payment/plugins/" style="text-align: center;">Поиск плагинов оплаты...</a>
                            <br>
                            <span class="hint align-center">Каждый способ оплаты можно установить несколько раз и задать каждому способу различные настройки.</span>
                        </li>
                        <?php }?>
                    </ul>
                </li>
            </ul>
        </div>

        <h1 class="js-bread-crumbs">Оплата</h1>

        <br>
        <table class="zebra" id="s-settings-payment">
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>

            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <td class="min-width"><i class="icon16 sort"></i></td>
                <td class="min-width">
                    <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?>
                        <i class="icon16 exclamation"></i>
                    <?php }else{ ?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['logo'])){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['logo'];?>
" class="s-payment-shipping-logo">
                        <?php }elseif(!empty($_smarty_tpl->tpl_vars['plugin']->value['img'])){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['img'];?>
" class="s-payment-shipping-logo">
                        <?php }?>
                    <?php }?>
                </td>
                <td>
                    <h3 class="large<?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['status'])){?> gray<?php }?>  js-plugin-title">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['status'])){?>(отключен)<?php }?>
                        <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?>
                            <span class="red">удален</span>
                        <?php }?>
                    </h3>
                    <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['installed'])){?>
                        <span><i class="icon16 info"></i>
                            <?php if ($_smarty_tpl->tpl_vars['installer']->value){?>
                                <?php echo sprintf('Можно удалить настройки или установить <a href="%s" class="inline">плагин</a>.',"#/shipping/plugins/");?>

                            <?php }else{ ?>
                                Можно удалить настройки или установить плагин.
                            <?php }?>
                        </span>
                    <?php }?>
                    <p class="hint"><?php echo strip_tags($_smarty_tpl->tpl_vars['plugin']->value['description']);?>
</p>
                </td>
                <td>
                    <ul class="menu-h with-icons">
                        <li><a href="#/payment/plugin/setup/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="nowrap js-payment-plugin-setup"><i class="icon16 settings"></i>Конфигурация</a></li>
                        <li>
                            <a href="#" class="nowrap js-payment-plugin-clone">
                                <i class="icon16 split"></i>Создать копию
                            </a>
                        </li>
                        <li><a href="#/payment/plugin/delete/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="nowrap js-action js-confirm js-payment-plugin-delete"
                               data-confirm-text="Этот способ оплаты будет полностью удален. Продолжить?"><i class="icon16 delete"></i>Удалить</a></li>
                    </ul>
                </td>

            </tr>
            <?php }
if (!$_smarty_tpl->tpl_vars['plugin']->_loop) {
?>
            <tr>
                <td>
                    <em class="gray">Не определено ни одного способа оплаты.</em>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

    <div id="s-settings-payment-setup" class="fields form"></div>

    </div>
    <div class="clear-both"></div>
</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/payment.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<script type="text/javascript">
document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Оплата").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
if(typeof($)!='undefined') {
$.settings.paymentInit({
    locales: {
        disabled: <?php echo json_encode(_w('disabled'));?>

    }
});
}
</script><?php }} ?>