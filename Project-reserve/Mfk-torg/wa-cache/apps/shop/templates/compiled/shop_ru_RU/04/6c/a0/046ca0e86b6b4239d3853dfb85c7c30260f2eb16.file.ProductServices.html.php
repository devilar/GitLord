<?php /* Smarty version Smarty-3.1.14, created on 2019-03-11 20:52:31
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductServices.html" */ ?>
<?php /*%%SmartyHeaderCode:10380456835c86a05f943d31-91433653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '046ca0e86b6b4239d3853dfb85c7c30260f2eb16' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductServices.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10380456835c86a05f943d31-91433653',
  'function' => 
  array (
    'variant_row' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'services' => 0,
    's' => 0,
    'service' => 0,
    'product' => 0,
    'variant' => 0,
    'multi_variants' => 0,
    'variant_sku' => 0,
    'multi_skus' => 0,
    'display' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c86a05f9e75c9_43623168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c86a05f9e75c9_43623168')) {function content_5c86a05f9e75c9_43623168($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/services.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>

<?php if ($_smarty_tpl->tpl_vars['services']->value){?>

    <div class="sidebar left200px s-inner-sidebar">
        <ul class="menu-v with-icons stack">
            <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
            <li data-service-id="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['s']->value['status']===shopProductServicesModel::STATUS_FORBIDDEN){?>gray<?php }?> <?php if ($_smarty_tpl->tpl_vars['s']->value['id']==$_smarty_tpl->tpl_vars['service']->value['id']){?>selected<?php }?>">
                <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/services/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
/">
                    <i class="icon16 ss service"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </a>
            </li>
            <?php } ?>
        </ul>
        <div class="block not-padded right-padded align-center bordered-top top-padded">
            <p class="hint"><?php echo sprintf('Добавляйте новые услуги в разделе «<a href="%s">Услуги</a>».','#services/');?>
</p>
        </div>
    </div>

    <div class="content left200px blank shadowed">
        <div class="block double-padded">
            <h2 class="s-service-name toggle-gray<?php if (empty($_smarty_tpl->tpl_vars['service']->value['status'])){?> gray<?php }?>">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <span class="hint">для <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
            </h2>
            <form action="?module=product&action=servicesSave&product_id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
&service_id=<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
" method="post">
            <table class="zebra toggle-gray<?php if (empty($_smarty_tpl->tpl_vars['service']->value['status'])){?> gray<?php }?>">
                <?php $_smarty_tpl->tpl_vars['multi_variants'] = new Smarty_variable(false, null, 0);?>
                <?php if (count($_smarty_tpl->tpl_vars['service']->value['variants'])>1){?>
                    <?php $_smarty_tpl->tpl_vars['multi_variants'] = new Smarty_variable(true, null, 0);?>
                <?php }?>
                <?php if (!function_exists('smarty_template_function_variant_row')) {
    function smarty_template_function_variant_row($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['variant_row']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                    <tr class="s-services-variant-product" data-variant-id="<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['multi_variants']->value){?>
                            <td class="min-width">
                                <input type="radio" name="default" value="<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['variant']->value['status']==shopProductServicesModel::STATUS_DEFAULT){?>checked="checked"<?php }?>
                                >
                            </td>
                        <?php }?>
                        <td class="min-width">
                            <input type="checkbox" name="variant[<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
]" id="v-<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['variant']->value['status']!=shopProductServicesModel::STATUS_FORBIDDEN){?>checked="checked"<?php }?>
                            >
                        </td>
                        <td style="width: 30%;">
                            <label for="v-<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['multi_variants']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['service']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                            </label>
                        </td>
                        <td>
                            + <input type="text" name="variant_price[<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
]" class="large bold s-price-surplus"
                                placeholder="<?php if ($_smarty_tpl->tpl_vars['variant']->value['base_price']){?><?php echo (double)$_smarty_tpl->tpl_vars['variant']->value['base_price'];?>
<?php }?>"
                                value="<?php if ($_smarty_tpl->tpl_vars['variant']->value['price']){?><?php echo (double)$_smarty_tpl->tpl_vars['variant']->value['price'];?>
<?php }?>"
                              >
                            <span class="large bold overhanging">
                                <?php echo $_smarty_tpl->tpl_vars['service']->value['currency'];?>

                            </span>
                            <?php if (count($_smarty_tpl->tpl_vars['variant']->value['skus'])>1){?>
                                <a href="#" class="hint inline-link s-services-by-sku" data-variant-id="<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
"><b><i>Настроить по артикулу</i></b></a>
                            <?php }?>
                        </td>
                    </tr>

                    <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable(false, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['variant_sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variant']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant_sku']->key => $_smarty_tpl->tpl_vars['variant_sku']->value){
$_smarty_tpl->tpl_vars['variant_sku']->_loop = true;
?>
                        <?php if ((boolean)$_smarty_tpl->tpl_vars['variant_sku']->value['status']!=(boolean)$_smarty_tpl->tpl_vars['variant']->value['status']){?>
                            <?php $_smarty_tpl->tpl_vars['display'] = new Smarty_variable(true, null, 0);?>
                            <?php break 1?>
                        <?php }?>
                    <?php } ?>

                    <?php $_smarty_tpl->tpl_vars['multi_skus'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['variant']->value['skus'])>1, null, 0);?>

                    <?php  $_smarty_tpl->tpl_vars['variant_sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant_sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variant']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant_sku']->key => $_smarty_tpl->tpl_vars['variant_sku']->value){
$_smarty_tpl->tpl_vars['variant_sku']->_loop = true;
?>
                        <tr class="small s-services-variant-sku" data-variant-id="<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['multi_skus']->value||!$_smarty_tpl->tpl_vars['display']->value){?>style="display: none;"<?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['multi_variants']->value){?><td class="min-width">&nbsp;</td><?php }?>
                            <td class="min-width">&nbsp;</td>
                            <td>
                                <label>
                                    <input type="checkbox" name="variant_sku[<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
][<?php echo $_smarty_tpl->tpl_vars['variant_sku']->value['sku_id'];?>
]" value="1" <?php if ($_smarty_tpl->tpl_vars['variant_sku']->value['status']!=shopProductServicesModel::STATUS_FORBIDDEN){?>checked<?php }?>>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                            </td>
                            <td>
                                + <input type="text" name="variant_sku_price[<?php echo $_smarty_tpl->tpl_vars['variant']->value['id'];?>
][<?php echo $_smarty_tpl->tpl_vars['variant_sku']->value['sku_id'];?>
]" class="large bold s-price-surplus"
                                    placeholder="<?php if ($_smarty_tpl->tpl_vars['variant_sku']->value['base_price']){?><?php echo (double)$_smarty_tpl->tpl_vars['variant_sku']->value['base_price'];?>
<?php }?>"
                                    value="<?php if ($_smarty_tpl->tpl_vars['variant_sku']->value['price']){?><?php echo (double)$_smarty_tpl->tpl_vars['variant_sku']->value['price'];?>
<?php }?>"
                                  >
                                <span class="large bold overhanging">
                                    <?php echo $_smarty_tpl->tpl_vars['service']->value['currency'];?>

                                </span>
                            </td>
                        </tr>
                    <?php } ?>
                <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


                <?php if (empty($_smarty_tpl->tpl_vars['service']->value['variants'])){?>
                    <?php smarty_template_function_variant_row($_smarty_tpl,array('variant'=>$_smarty_tpl->tpl_vars['service']->value));?>

                <?php }else{ ?>
                    <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['service']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value){
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                        <?php smarty_template_function_variant_row($_smarty_tpl,array());?>

                    <?php } ?>
                <?php }?>

            </table>
            </form>
        </div>
        <div class="clear-left"></div>
    </div>

<?php }else{ ?>
    <p><?php echo sprintf('В вашем магазине услуги еще не определены. Добавьте новую услугу в разделе <a href="%s">Услуги</a>.','#services/');?>
</p>
<?php }?>

<script type="text/javascript">
    $.product_services.init({
        container: '.s-product-form.services',
        counter: '#s-product-edit-menu li.services span.hint',
        service_id: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['service']->value['id'])===null||$tmp==='' ? 0 : $tmp);?>
,
        product_id: <?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
,
        count: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['count']->value)===null||$tmp==='' ? 0 : $tmp);?>

    });
</script><?php }} ?>