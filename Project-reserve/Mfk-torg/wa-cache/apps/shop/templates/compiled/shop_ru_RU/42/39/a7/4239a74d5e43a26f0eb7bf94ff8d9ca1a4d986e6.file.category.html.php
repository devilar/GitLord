<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:39
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/category.html" */ ?>
<?php /*%%SmartyHeaderCode:9515720925c7ac35fc1b8a9-41182996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4239a74d5e43a26f0eb7bf94ff8d9ca1a4d986e6' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/category.html',
      1 => 1550729637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9515720925c7ac35fc1b8a9-41182996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'frontend_category' => 0,
    '_' => 0,
    'filters' => 0,
    'wa_static_url' => 0,
    'wa' => 0,
    'theme_settings' => 0,
    'wa_parent_theme_url' => 0,
    'fid' => 0,
    'filter' => 0,
    'c' => 0,
    '_v' => 0,
    'v_id' => 0,
    'v' => 0,
    'products' => 0,
    'sc' => 0,
    'catres' => 0,
    'pcat' => 0,
    'cproduct' => 0,
    'kolesa' => 0,
    'product' => 0,
    'z' => 0,
    'f_code' => 0,
    'features' => 0,
    'ch' => 0,
    'sku' => 0,
    'f_value' => 0,
    'available' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac35fd10d72_98431311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac35fd10d72_98431311')) {function content_5c7ac35fd10d72_98431311($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
?><h1 class="category-name">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

</h1>
<?php $_smarty_tpl->tpl_vars['kolesa'] = new Smarty_variable(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['category']->value['full_url'],"[/.*]",''), null, 0);?>
<!-- plugin hook: 'frontend_category' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<!-- filtering by product features -->    
<?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
<?php if (waRequest::isXMLHttpRequest()&&waRequest::get('page',1)==1){?>
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/css/jquery-ui/base/jquery.ui.slider.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.mouse.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.slider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php }?>
<div class="filters<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['ajax_filters'])){?> ajax<?php }?>">
    <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
" data-loading="<?php echo $_smarty_tpl->tpl_vars['wa_parent_theme_url']->value;?>
img/loading16.gif">
        <?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_smarty_tpl->tpl_vars['fid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value){
$_smarty_tpl->tpl_vars['filter']->_loop = true;
 $_smarty_tpl->tpl_vars['fid']->value = $_smarty_tpl->tpl_vars['filter']->key;
?>
            <div class="filter-param">
                <?php if ($_smarty_tpl->tpl_vars['fid']->value=='price'){?>
                    <?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(true), null, 0);?>
                    <h5>Цена</h5>
                    <div class="slider">
                    от <input type="text" class="min" name="price_min" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('price_min')){?>value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_min');?>
"<?php }?> placeholder="<?php echo floor($_smarty_tpl->tpl_vars['filter']->value['min']);?>
">
                    до <input type="text" class="max" name="price_max" <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('price_max')){?>value="<?php echo (int)$_smarty_tpl->tpl_vars['wa']->value->get('price_max');?>
"<?php }?> placeholder="<?php echo ceil($_smarty_tpl->tpl_vars['filter']->value['max']);?>
"> <?php echo $_smarty_tpl->tpl_vars['c']->value['sign'];?>

                    </div>
                <?php }else{ ?>
                    <h5><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h5>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['type']=='boolean'){?>
                        <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])){?> checked<?php }?> value="1"> Да</label>
                        <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'])==='0'){?> checked<?php }?> value="0"> Нет</label>
                        <label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
"<?php if ($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],'')===''){?> checked<?php }?> value=""> Неважно</label>
                    <?php }elseif(isset($_smarty_tpl->tpl_vars['filter']->value['min'])){?>
                    <?php $_smarty_tpl->tpl_vars['_v'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code']), null, 0);?>
                    <div class="slider">
                    от <input type="text" class="min" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[min]" placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['min'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['min'])){?>value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['min'];?>
"<?php }?>>
                    до <input type="text" class="max" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[max]" placeholder="<?php echo $_smarty_tpl->tpl_vars['filter']->value['max'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['_v']->value['max'])){?>value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['max'];?>
"<?php }?>>
                    <?php if (!empty($_smarty_tpl->tpl_vars['filter']->value['unit'])){?>
                        <?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['title'];?>

                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['unit']['value']!=$_smarty_tpl->tpl_vars['filter']->value['base_unit']['value']){?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[unit]" value="<?php echo $_smarty_tpl->tpl_vars['filter']->value['unit']['value'];?>
"><?php }?>
                    <?php }?>
                    </div>
                    <?php }else{ ?>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <label>
                            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['filter']->value['code'];?>
[]" <?php if (in_array($_smarty_tpl->tpl_vars['v_id']->value,(array)$_smarty_tpl->tpl_vars['wa']->value->get($_smarty_tpl->tpl_vars['filter']->value['code'],array()))){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                        </label>
                    <?php } ?>
                    <?php }?>
                <?php }?>
            </div>            
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')){?><input type="hidden" name="sort" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->get('sort'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('order')){?><input type="hidden" name="order" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->get('order'), ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
        <input type="submit" class="gray" value="Показать">
    </form>
</div>
<?php }?>

<!-- subcategories -->


<div id="product-list">
<?php if (!$_smarty_tpl->tpl_vars['products']->value){?>
    <?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)){?>
        Не найдено ни одного товара.
    <?php }else{ ?>
        
        <?php  $_smarty_tpl->tpl_vars['sc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['subcategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sc']->key => $_smarty_tpl->tpl_vars['sc']->value){
$_smarty_tpl->tpl_vars['sc']->_loop = true;
?>
            <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sc']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
            <?php $_smarty_tpl->tpl_vars["catres"] = new Smarty_variable("category/".((string)$_smarty_tpl->tpl_vars['sc']->value['id']), null, 0);?>
            
            <?php $_smarty_tpl->tpl_vars['pcat'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->products($_smarty_tpl->tpl_vars['catres']->value), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['features'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->features($_smarty_tpl->tpl_vars['pcat']->value), null, 0);?>
            <?php ob_start();?><?php echo shopCategoryImagesPlugin::getCategoryImageUrl($_smarty_tpl->tpl_vars['sc']->value['id']);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?><img class="sci" src="<?php echo shopCategoryImagesPlugin::getCategoryImageUrl($_smarty_tpl->tpl_vars['sc']->value['id']);?>
" / ><?php }?>
            <!-- description -->
            <?php if ($_smarty_tpl->tpl_vars['sc']->value['description']){?>
                <div class="scd"><?php echo $_smarty_tpl->tpl_vars['sc']->value['description'];?>
</div>
            <?php }?>
            <table class="w100">
            <?php  $_smarty_tpl->tpl_vars['cproduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cproduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pcat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cproduct']->key => $_smarty_tpl->tpl_vars['cproduct']->value){
$_smarty_tpl->tpl_vars['cproduct']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->product($_smarty_tpl->tpl_vars['cproduct']->value['id']), null, 0);?>
            <?php } ?>
            <tr<?php if ($_smarty_tpl->tpl_vars['kolesa']->value=="kolesa"){?> class="k"<?php }?>>
                <th<?php if ($_smarty_tpl->tpl_vars['kolesa']->value=="kolesa"){?> class="k0"<?php }?>>
                    Артикул
                </th>
                <?php $_smarty_tpl->tpl_vars['z'] = new Smarty_variable(1, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?>
                    <th class="name value<?php if ($_smarty_tpl->tpl_vars['kolesa']->value=="kolesa"){?> k<?php echo $_smarty_tpl->tpl_vars['z']->value++;?>
<?php }?>" itemprop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </th>
                <?php } ?>
                <th<?php if ($_smarty_tpl->tpl_vars['kolesa']->value=="kolesa"){?> class="k6"<?php }?>>
                    Опт. цена (шт.)
                </th>
                <th<?php if ($_smarty_tpl->tpl_vars['kolesa']->value=="kolesa"){?> class="k7"<?php }?>>
                    Розн. цена (шт.)
                </th>
            </tr>
            <?php $_smarty_tpl->tpl_vars['ch'] = new Smarty_variable(true, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['cproduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cproduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pcat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cproduct']->key => $_smarty_tpl->tpl_vars['cproduct']->value){
$_smarty_tpl->tpl_vars['cproduct']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['product'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->product($_smarty_tpl->tpl_vars['cproduct']->value['id']), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['cproduct']->value['count']===null||$_smarty_tpl->tpl_vars['cproduct']->value['count']>0, null, 0);?>
            <tr<?php if ($_smarty_tpl->tpl_vars['ch']->value){?><?php $_smarty_tpl->tpl_vars['ch'] = new Smarty_variable(false, null, 0);?><?php }else{ ?> class="even"<?php $_smarty_tpl->tpl_vars['ch'] = new Smarty_variable(true, null, 0);?><?php }?>>
                <td>
                <?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>

                <?php } ?>
                </td>
                <?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?>
                    <td class="name value" itemprop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if (is_array($_smarty_tpl->tpl_vars['f_value']->value)){?>
                            <?php if (implode(', ',$_smarty_tpl->tpl_vars['f_value']->value)!="-"){?>
                                <?php echo implode(', ',$_smarty_tpl->tpl_vars['f_value']->value);?>

                            <?php }?>
                        <?php }else{ ?>
                            <?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>

                        <?php }?>
                    </td>
                <?php } ?>
                <td>
                    <strong><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
 руб.</strong>
                </td>
                <td>
                    <span class="pt"><?php echo $_smarty_tpl->tpl_vars['cproduct']->value['price'];?>
 руб.</span>
                    <div class="inlineb">
                    <?php if ($_smarty_tpl->tpl_vars['available']->value){?>
                        <form class="purchase addtocart" <?php if ($_smarty_tpl->tpl_vars['cproduct']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['cproduct']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['cproduct']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?> method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['cproduct']->value['compare_price']>0){?><span class="compare-at-price nowrap"> <?php echo shop_currency_html($_smarty_tpl->tpl_vars['cproduct']->value['compare_price']);?>
 </span><?php }?>
                            <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['cproduct']->value['price'];?>
">
                            <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->primaryCurrency();?>
">
                            <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['cproduct']->value['id'];?>
">
                            <input type="text" name="quantity" value="1">
                            <input class="form-submit node-add-to-cart" type="submit" value="Купить">
                            <i class="adding2cart"></i>
                            <span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',$_smarty_tpl->tpl_vars['cproduct']->value['name'],$_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'));?>
</span>
                        </form>
                        <link itemprop="availability" href="http://schema.org/InStock" />
                    <?php }else{ ?>
                        <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['cproduct']->value['price']);?>
</span>
                        <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['cproduct']->value['price'];?>
">
                        <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->primaryCurrency();?>
">
                        <div class="out-of-stock"><strong><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></strong></div>
                        <link itemprop="availability" href="http://schema.org/OutOfStock" />
                    <?php }?>
                    </div>
                </td>
            </tr>
            <?php } ?>
            </table>
            
        <?php } ?>
    <?php }?>
<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ('list-thumbs.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sorting'=>!empty($_smarty_tpl->tpl_vars['category']->value['params']['enable_sorting'])), 0);?>

    
<?php }?>
</div>

<div class="clear-both"></div><?php }} ?>