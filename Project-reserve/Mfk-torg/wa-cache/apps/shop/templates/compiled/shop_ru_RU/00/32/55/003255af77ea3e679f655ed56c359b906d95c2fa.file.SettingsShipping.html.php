<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:00
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsShipping.html" */ ?>
<?php /*%%SmartyHeaderCode:5234291365c9cceec42ce94-36517418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '003255af77ea3e679f655ed56c359b906d95c2fa' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsShipping.html',
      1 => 1545053990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5234291365c9cceec42ce94-36517418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shipping_params' => 0,
    'param_data' => 0,
    'param' => 0,
    'state' => 0,
    'description' => 0,
    'option_id' => 0,
    'option_data' => 0,
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
  'unifunc' => 'content_5c9cceec4b6501_74433907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9cceec4b6501_74433907')) {function content_5c9cceec4b6501_74433907($_smarty_tpl) {?><div class="blank s-settings-form">
    <div class="block double-padded">
        <h1 class="js-bread-crumbs">Доставка</h1>
        <br/>
        <div id="s-settings-shipping-params" class="block hr double-padded s-settings-shipping-params">
            <a href="#/shipping/params/" class="inline-link js-action float-right"><i class="icon16 settings"></i><b><i>Настройки</i></b></a>
            <h2 class="s-order-weight-size">Вес и размеры заказа</h2>

            <form method="post">
                <?php  $_smarty_tpl->tpl_vars['param_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param_data']->_loop = false;
 $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipping_params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param_data']->key => $_smarty_tpl->tpl_vars['param_data']->value){
$_smarty_tpl->tpl_vars['param_data']->_loop = true;
 $_smarty_tpl->tpl_vars['param']->value = $_smarty_tpl->tpl_vars['param_data']->key;
?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['param_data']->value['states'])){?>
                        <?php  $_smarty_tpl->tpl_vars['description'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['description']->_loop = false;
 $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['param_data']->value['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['description']->key => $_smarty_tpl->tpl_vars['description']->value){
$_smarty_tpl->tpl_vars['description']->_loop = true;
 $_smarty_tpl->tpl_vars['state']->value = $_smarty_tpl->tpl_vars['description']->key;
?>
                        <p class="js-shipping-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-state="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ((empty($_smarty_tpl->tpl_vars['param_data']->value['state'])||($_smarty_tpl->tpl_vars['param_data']->value['state']!=$_smarty_tpl->tpl_vars['state']->value))){?> style="display: none;" <?php }?>><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
                        <?php } ?>
                    <?php }?>
                <?php } ?>
                <div class="field-group" style="display: none;">
                    <?php if (!empty($_smarty_tpl->tpl_vars['shipping_params']->value)){?>
                        <?php  $_smarty_tpl->tpl_vars['param_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param_data']->_loop = false;
 $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shipping_params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param_data']->key => $_smarty_tpl->tpl_vars['param_data']->value){
$_smarty_tpl->tpl_vars['param_data']->_loop = true;
 $_smarty_tpl->tpl_vars['param']->value = $_smarty_tpl->tpl_vars['param_data']->key;
?>
                            <div class="field">
                                <div class="name"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['param_data']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['param']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <div class="value">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['param_data']->value['readonly'])){?>
                                        <?php echo $_smarty_tpl->tpl_vars['param_data']->value['readonly'];?>

                                        <?php }else{ ?>
                                    <select name="params[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param']->value, ENT_QUOTES, 'UTF-8', true);?>
]">
                                        <?php  $_smarty_tpl->tpl_vars['option_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option_data']->_loop = false;
 $_smarty_tpl->tpl_vars['option_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['param_data']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option_data']->key => $_smarty_tpl->tpl_vars['option_data']->value){
$_smarty_tpl->tpl_vars['option_data']->_loop = true;
 $_smarty_tpl->tpl_vars['option_id']->value = $_smarty_tpl->tpl_vars['option_data']->key;
?>
                                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option_id']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['option_data']->value['title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['param_data']->value['value'])&&($_smarty_tpl->tpl_vars['param_data']->value['value']==$_smarty_tpl->tpl_vars['option_id']->value)){?> selected<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['option_data']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php } ?>
                                    </select>
                                    <?php }?>
                                </div>
                                <?php if (!empty($_smarty_tpl->tpl_vars['param_data']->value['description'])){?>
                                    <div class="value hint"><?php echo $_smarty_tpl->tpl_vars['param_data']->value['description'];?>
</div>
                                <?php }?>
                            </div>
                        <?php } ?>
                    <?php }?>
                </div>
                <div class="field-group" style="display: none;">
                    <div class="field">
                        <div class="value submit">
                            <input type="submit" value="Сохранить" class="button green">
                            <span class="js-form-status" style="display:none"><!-- message placeholder --></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id="s-settings-shipping-rounding" class="block double-padded hr s-settings-shipping-rounding">
            <p><?php echo sprintf_wp("Rounding of fractional shipping costs can be set up in %scurrency settings%s.",'<a href="#/currencies/">','</a>');?>
</p>
        </div>

        <div class="float-right">
            <ul class="menu-h with-icons dropdown s-add-shipping-method" id="s-shipping-menu">
                <li>
                    <a href="#/shipping/" class="inline-link js-action"><i class="icon16 add"></i><b><i>Добавить способ доставки</i></b><i class="icon16 darr"></i></a>
                    <ul class="menu-v with-icons js-shipping-window-height">
                        <?php  $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['plugins']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->key => $_smarty_tpl->tpl_vars['plugin']->value){
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['plugin']->key;
?>
                        <li>
                            <a href="#/shipping/plugin/add/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/">
                            <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['icon'][16])){?><?php echo shopHelper::getIcon('ss shipping-bw');?>
<?php }else{ ?><?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['plugin']->value['icon'][16]);?>
<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                            <span class="hint"><?php echo strip_tags($_smarty_tpl->tpl_vars['plugin']->value['description']);?>
</span>
                            </a>

                        </li>
                        <?php } ?>
                        <li class="bordered-top" style="padding-top: 10px; padding-bottom: 10px; margin-top: 7px; padding-left: 8px;">
                            <?php if (!empty($_smarty_tpl->tpl_vars['installer']->value)){?>
                                <a href="#/shipping/plugins/" style="text-align: center;">Поиск плагинов доставки...</a>
                                <br>
                            <?php }?>
                            <span class="hint align-center">Каждый способ доставки можно установить несколько раз и задать каждому способу различные настройки.</span>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <h2>Способы доставки</h2>
        <br/>

        <table class="zebra" id="s-settings-shipping">

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
                    <h3 class="large <?php if (empty($_smarty_tpl->tpl_vars['plugin']->value['status'])){?> gray<?php }?> js-plugin-title">
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
                        <li><a href="#/shipping/plugin/setup/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="nowrap js-shipping-plugin-setup"><i class="icon16 settings"></i>Конфигурация</a></li>
                        <li>
                            <a href="#" class="nowrap js-shipping-plugin-clone">
                                <i class="icon16 split"></i>Создать копию
                            </a>
                        </li>
                        <li><a href="#/shipping/plugin/delete/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="nowrap js-action js-confirm js-shipping-plugin-delete" data-confirm-text="Этот способ доставки будет полностью удален. Продолжить?"><i class="icon16 delete"></i>Удалить</a></li>
                    </ul>
                </td>

            </tr>
            <?php }
if (!$_smarty_tpl->tpl_vars['plugin']->_loop) {
?>
            <tr>
                <td colspan="4">
                    <em class="gray">Не определен ни один способ доставки.</em>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>



        <div id="s-settings-shipping-setup" class="fields form"></div>

    </div>
    <div class="clear-both"></div>

</div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/shipping.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">(function() { "use strict";
    document.title = "Доставка — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    if (typeof(window.$) != 'undefined') {
        $.settings.shippingInit({
            locales: {
                disabled: <?php echo json_encode(_w('disabled'));?>

            }
        });
    }
}());</script><?php }} ?>