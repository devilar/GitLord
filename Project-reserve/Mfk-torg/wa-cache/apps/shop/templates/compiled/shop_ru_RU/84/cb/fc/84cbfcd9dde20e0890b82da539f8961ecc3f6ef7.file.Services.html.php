<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:55:34
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/services/Services.html" */ ?>
<?php /*%%SmartyHeaderCode:9852826135c8f4ef64f02a4-64202172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84cbfcd9dde20e0890b82da539f8961ecc3f6ef7' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/services/Services.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9852826135c8f4ef64f02a4-64202172',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'services' => 0,
    'service' => 0,
    'item' => 0,
    'variants' => 0,
    'multi_variants' => 0,
    'variant' => 0,
    'use_product_currency' => 0,
    'currencies' => 0,
    'code' => 0,
    'primary_currency' => 0,
    'types' => 0,
    'type' => 0,
    'products' => 0,
    'product' => 0,
    'products_count' => 0,
    'taxes' => 0,
    'tax' => 0,
    'count' => 0,
    'template_content' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4ef6598050_20982746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4ef6598050_20982746')) {function content_5c8f4ef6598050_20982746($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/services.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<div class="sidebar left250px s-inner-sidebar">
    <ul class="menu-v with-icons stack" id="s-services-list">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li <?php if ($_smarty_tpl->tpl_vars['service']->value['id']==$_smarty_tpl->tpl_vars['item']->value['id']){?>class="selected"<?php }?> data-service-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <a href="#/services/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><i class="icon16 sort"></i><i class="icon16 ss service no-overhanging"></i> <span class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></a>
            </li>
        <?php } ?>
        <li class="top-padded">
            <a href="#/services/0/" class="s-new-service">
                <i class="icon16 no-overhanging"></i>
                <i class="icon16 add"></i>Новая услуга
            </a>
        </li>
    </ul>
    <div class="block hint align-center">
        <p>Услуги позволяют добавлять индивидуальные свойства к товарам и артикулам, например, индивидуальную упаковку, расширенную гарантию, именную гравировку. Услуги удобно использовать для повышения средней стоимости заказов в вашем магазине.</p>
    </div>
</div>

<form method="post" action="?module=service&action=save&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" id="s-services-save">

<div class="content left250px blank bordered-left">
    <div class="block double-padded">
        <div class="float-right">
            <?php if ($_smarty_tpl->tpl_vars['service']->value['id']){?>
                <ul class="menu-h">
                    <li><a href="#" class="s-delete-service"><i class="icon16 delete"></i>Удалить эту услугу</a></li>
                </ul>
            <?php }?>
        </div>
        <h1>
            <span class="editable" id="s-service-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
            <input name="service_name" id="s-service-title-input" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" style="display:none;">
        </h1>

        <div class="fields form width100px">
            <div class="field">
                <div class="name" style="padding-top: 10px;">
                    Стоимость услуги
                </div>
                <div class="value">
                    <table class="zebra s-services-variants">
                        <?php $_smarty_tpl->tpl_vars['multi_variants'] = new Smarty_variable(false, null, 0);?>
                        <?php if (count($_smarty_tpl->tpl_vars['variants']->value)>1||(count($_smarty_tpl->tpl_vars['variants']->value)==1&&!empty($_smarty_tpl->tpl_vars['variants']->value[0]['name']))){?>
                            <?php $_smarty_tpl->tpl_vars['multi_variants'] = new Smarty_variable(true, null, 0);?>
                        <?php }?>

                        <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['variant']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value){
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['variant']->index++;
?>
                            <tr class="s-services-variant">
                                <td class="min-width s-services-ext-cell" <?php if (!$_smarty_tpl->tpl_vars['multi_variants']->value){?>style="display:none;"<?php }?>><i class="icon16 sort"></i></td>
                                <td class="min-width s-services-ext-cell" <?php if (!$_smarty_tpl->tpl_vars['multi_variants']->value){?>style="display:none;"<?php }?>>
                                    <input type="radio" name="default" value="<?php echo $_smarty_tpl->tpl_vars['variant']->index;?>
" <?php if ($_smarty_tpl->tpl_vars['variant']->value['id']===$_smarty_tpl->tpl_vars['service']->value['variant_id']){?>checked="checked"<?php }?>>
                                </td>
                                <td class="s-services-ext-cell" <?php if (!$_smarty_tpl->tpl_vars['multi_variants']->value){?>style="display:none;"<?php }?>>
                                    <input type="text" name="name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Название свойства">
                                </td>
                                <td class="s-price-surplus">
                                    +<input type="text" name="price[]" value="<?php echo (double)$_smarty_tpl->tpl_vars['variant']->value['price'];?>
" placeholder="<?php echo (double)$_smarty_tpl->tpl_vars['service']->value['price'];?>
" class="s-price-surplus">
                                    <div class="s-services-choose-currency">
                                        <select class="s-service-currency">
                                            <?php if ($_smarty_tpl->tpl_vars['use_product_currency']->value){?>
                                                <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['currency']->key;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['service']->value['currency']==$_smarty_tpl->tpl_vars['code']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</option>
                                                <?php } ?>
                                                <option value="%" <?php if ($_smarty_tpl->tpl_vars['service']->value['currency']=='%'){?>selected="selected"<?php }?>>%</option>
                                            <?php }else{ ?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['primary_currency']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['primary_currency']->value;?>
</option>
                                                <option value="%" <?php if ($_smarty_tpl->tpl_vars['service']->value['currency']=='%'){?>selected="selected"<?php }?>>%</option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </td>
                                <td class="s-service-actions-cell">
                                    <a href="#" class="small inline-link s-multiple-options-toggle" <?php if ($_smarty_tpl->tpl_vars['multi_variants']->value){?>style="display:none"<?php }?>>
                                        <i class="icon16 settings"></i><b><i>Варианты</i></b>
                                    </a>
                                    <a href="#" class="s-delete-option" <?php if (!$_smarty_tpl->tpl_vars['multi_variants']->value){?>style="display:none"<?php }?>>
                                        <i class="icon16 delete"></i>
                                    </a>
                                </td>
                                <input type="hidden" name="variant[]" value="<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
">
                            </tr>
                        <?php } ?>
                        <tr class="white s-add-row" <?php if (!$_smarty_tpl->tpl_vars['multi_variants']->value){?>style="display:none"<?php }?>>
                            <td></td>
                            <td colspan="4">
                                <a href="#" class="inline-link s-add-new-option">
                                    <i class="icon16 add"></i>
                                    <b><i>Добавить вариант</i></b>
                                </a>
                            </td>
                        </tr>
                        <input type="hidden"
                                          value="<?php echo $_smarty_tpl->tpl_vars['service']->value['currency'];?>
"
                                          name="currency"
                                          id="s-service-currency-code"
                                      >
                    </table>
                </div>
                <div class="value">
                    <p class="hint">Услуга заказывается вместе с товаром и увеличивает его цену на указанную стоимость. Стоимость услуги может быть определена для всех товаров выбранных типов или же индивидуально для конкретных товаров.</p>
                </div>
            </div>
            
            <div class="field">
                <?php if (!empty($_smarty_tpl->tpl_vars['types']->value)){?>
                <div class="value no-shift">
                    Предлагать услугу со следующими товарами:
                    <table class="full-width">
                    <tr>
                      <td>
                        <ul class="menu-v" id="s-services-types">
                            <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                            <li>
                                <label>
                                    <input type="checkbox" name="type[]" value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
" <?php if ((!empty($_smarty_tpl->tpl_vars['type']->value['type_id'])&&$_smarty_tpl->tpl_vars['type']->value['type_id'])||!$_smarty_tpl->tpl_vars['service']->value['id']){?>checked="checked"<?php }?>>
                                    <?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon'],'icon.box');?>

                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                    <span class="hint"><?php echo $_smarty_tpl->tpl_vars['type']->value['count'];?>
</span>
                                </label>
                            </li>
                            <?php } ?>
                            <li>
                                <label>
                                    <input id="s-services-products-choosen" type="checkbox" disabled="disabled" <?php if ($_smarty_tpl->tpl_vars['products']->value){?>checked="checked"<?php }?>> Выбрать товары
                                </label>
                                <div class="block double-padded" id="s-services-products">
                                    <table class="zebra">
                                        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                                            <tr data-product-id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                                <td><a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/services"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                                                <td class="min-width">
                                                    <a href="#" class="s-delete-product"><i class="icon16 delete"></i></a>
                                                    <input type="hidden" name="product[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <?php $_smarty_tpl->_capture_stack[0][] = array("template-services-new-product", null, null); ob_start(); ?>
                                        <tr data-product-id="{%#o.product.id%}" class="s-new-product">
                                            <td><a href="#/product/{%#o.product.id%}/edit/services">{%=o.product.name%}</a></td>
                                            <td class="min-width">
                                                <a href="#" class="s-delete-product"><i class="icon16 delete"></i></a>
                                                <input type="hidden" name="product[]" value="{%#o.product.id%}">
                                            </td>
                                        </tr>
                                        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                        <tr class="s-add-new-service-product">
                                            <td colspan="2">
                                                <i class="icon16 add" style="margin-top: 0.3em;"></i>
                                                <input type="text" placeholder="Начните печатать название товара или артикула" class="product-autocomplete long">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </li>
                        </ul>
                      </td>
                      <td class="s-service-appliance-est">
                        <div class="block">
                            <em id="s-services-products-count">≈ <?php echo _w('%d product','%d products',$_smarty_tpl->tpl_vars['products_count']->value);?>
</em>
                        </div>
                      </td>
                    </tr>
                    </table>
                </div>
                <?php }?>
            </div>
            <div class="field">
                <div class="name">
                    Облагается налогом
                </div>
                <div class="value no-shift">
                    <select name="tax_id">
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['service']->value['tax_id']==='0'||$_smarty_tpl->tpl_vars['service']->value['tax_id']=='0'){?>selected="selected"<?php }?>>Наследовать от товара</option>
                        <option value="-1" <?php if ($_smarty_tpl->tpl_vars['service']->value['tax_id']===null){?>selected="selected"<?php }?>>Нет</option>
                        <?php  $_smarty_tpl->tpl_vars['tax'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['taxes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax']->key => $_smarty_tpl->tpl_vars['tax']->value){
$_smarty_tpl->tpl_vars['tax']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['tax']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['service']->value['tax_id']==$_smarty_tpl->tpl_vars['tax']->value['id']){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tax']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="field">
                <div class="value no-shift">
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                    <input type="button" value="Сохранить" class="button green" id="s-save-service-submit">
                    <i class="icon16 loading" style="display:none;"></i>
                    <i class="icon16 yes" style="display:none;"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="clear-both"></div>
</div>

</form>


<div class="dialog width300px height150px" id="s-delete-service">
    <div class="dialog-background"></div>
    <form method="post" action="?module=service&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Удалить услугу</h1>
                Действительно удалить эту услугу?
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button red" type="submit" value="Удалить"> или <a class="cancel" href="javascript:void(0);">отмена</a>
            </div>
        </div>
    </div>
    </form>
</div>

<script>
    $(function() {
        document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(($_smarty_tpl->tpl_vars['service']->value['name']).(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
        $.product_services.init({
            container: '#s-content',
            service_id: <?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
,
            count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>

        });
    });
</script>


<?php if (!empty(Smarty::$_smarty_vars['capture'])){?>
    <?php  $_smarty_tpl->tpl_vars['template_content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template_content']->_loop = false;
 $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable;
 $_from = Smarty::$_smarty_vars['capture']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template_content']->key => $_smarty_tpl->tpl_vars['template_content']->value){
$_smarty_tpl->tpl_vars['template_content']->_loop = true;
 $_smarty_tpl->tpl_vars['template']->value = $_smarty_tpl->tpl_vars['template_content']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['template_content']->value&&(strpos($_smarty_tpl->tpl_vars['template']->value,'template-')===0)){?>
            <script id="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" type="text/html">
                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_content']->value,'</','<\/');?>

            </script>
        <?php }?>
    <?php } ?>
<?php }?>

<?php }} ?>