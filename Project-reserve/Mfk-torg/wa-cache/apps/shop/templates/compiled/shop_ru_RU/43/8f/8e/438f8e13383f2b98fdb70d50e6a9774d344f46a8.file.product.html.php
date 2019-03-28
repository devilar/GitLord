<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:40
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/product.html" */ ?>
<?php /*%%SmartyHeaderCode:12514675655c7ac3608a03d2-77771906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '438f8e13383f2b98fdb70d50e6a9774d344f46a8' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/product.html',
      1 => 1486447665,
      2 => 'file',
    ),
    'adc297f7aff68b5d0f47ce6a6c240354e883da85' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/product.cart.html',
      1 => 1486456835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12514675655c7ac3608a03d2-77771906',
  'function' => 
  array (
    'in_stock' => 
    array (
      'parameter' => 
      array (
        'n' => 0,
        'low' => 5,
        'critical' => 2,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa_theme_url' => 0,
    'product' => 0,
    'wa' => 0,
    'reviews_total_count' => 0,
    'page' => 0,
    'frontend_product' => 0,
    '_' => 0,
    'image' => 0,
    'f_code' => 0,
    'features' => 0,
    'f_value' => 0,
    'c' => 0,
    't' => 0,
    'upselling' => 0,
    'crossselling' => 0,
    'compare_ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac360a43301_54082170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac360a43301_54082170')) {function content_5c7ac360a43301_54082170($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
swipebox/css/swipebox.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
swipebox/js/jquery.swipebox.js"></script>

<article itemscope itemtype="http://schema.org/Product">
    
    <h1>
        <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['rating'])&&$_smarty_tpl->tpl_vars['product']->value['rating']>0){?>
            <span class="rating nowrap" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" title="<?php echo sprintf('Средняя оценка покупателей: %s / 5',$_smarty_tpl->tpl_vars['product']->value['rating']);?>
">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['product']->value['rating'],16);?>

                <span itemprop="ratingValue" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['product']->value['rating'];?>
</span>
                <span itemprop="reviewCount" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
</span>
            </span>
        <?php }?>
    </h1>

    <!-- product internal nav -->
    <nav>
        <ul class="product-nav top-padded">
            <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'page',array('page_url'=>$_smarty_tpl->tpl_vars['page']->value['url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            <?php } ?>
            
            <!-- plugin hook: 'frontend_product.menu' -->
            
            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['menu'];?>
<?php } ?>
        
        </ul>
    </nav>

    <!-- purchase -->
    <div class="product-sidebar">
    
        <div class="cart" id="cart-flyer">
        
            <?php /*  Call merged included template "product.cart.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("product.cart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '12514675655c7ac3608a03d2-77771906');
content_5c7ac3608e0fc9_33820119($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "product.cart.html" */?>
            
            <!-- compare -->

            
            <!-- plugin hook: 'frontend_product.cart' -->
            
            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['cart'];?>
<?php } ?>
            
        </div>
    
        <!-- plugin hook: 'frontend_product.block_aux' -->
        
        <?php if (!empty($_smarty_tpl->tpl_vars['frontend_product']->value)){?>
            <div class="aux">
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['block_aux'];?>
<?php } ?>    
            </div>
        <?php }?>
        
    </div>    
    
    <!-- product info & gallery -->
    <div class="product-info" id="overview">

        <?php if ($_smarty_tpl->tpl_vars['product']->value['images']){?>
        
            <figure class="product-gallery">
            
                <!-- main image -->
                <div class="image" id="product-core-image">
                    <div class="corner top right">
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['product']->value['badge']);?>

                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl($_smarty_tpl->tpl_vars['product']->value,'970');?>
">
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['product']->value,'750',array('itemprop'=>'image','id'=>'product-image','alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true)));?>

                    </a>
                    <div id="switching-image" style="display: none;"></div>
                </div>
                
                <!-- thumbs -->
                <?php if (count($_smarty_tpl->tpl_vars['product']->value['images'])>1){?>
                    <div class="more-images" id="product-gallery">
                        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                            <div class="image<?php if ($_smarty_tpl->tpl_vars['image']->value['id']==$_smarty_tpl->tpl_vars['product']->value['image_id']){?> selected<?php }?>">
                                <a id="product-image-<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgUrl(array('id'=>$_smarty_tpl->tpl_vars['product']->value['id'],'image_id'=>$_smarty_tpl->tpl_vars['image']->value['id'],'ext'=>$_smarty_tpl->tpl_vars['image']->value['ext']),'970');?>
" class="swipebox">
                                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml(array('id'=>$_smarty_tpl->tpl_vars['product']->value['id'],'image_id'=>$_smarty_tpl->tpl_vars['image']->value['id'],'ext'=>$_smarty_tpl->tpl_vars['image']->value['ext'],'image_desc'=>$_smarty_tpl->tpl_vars['image']->value['description']),'96x96',array('alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['description'], ENT_QUOTES, 'UTF-8', true)));?>

                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php }?>
                
            </figure>
    
        <?php }?>

        <!-- plugin hook: 'frontend_product.block' -->
        
        <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value['block'];?>
<?php } ?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['description']){?>
            <div class="description" id="product-description" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
        <?php }?>

        <!-- product features -->
        <?php if ($_smarty_tpl->tpl_vars['product']->value['features']){?>
            <table class="features" id="product-features">
                <?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?>
                    <tr<?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='divider'){?> class="divider"<?php }?>>
                        <td class="name">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>

                        </td>
                        <td class="value" itemprop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php if (is_array($_smarty_tpl->tpl_vars['f_value']->value)){?>
                                <?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='color'){?>
                                    <?php echo implode('<br /> ',$_smarty_tpl->tpl_vars['f_value']->value);?>

                                <?php }else{ ?>
                                    <?php echo implode(', ',$_smarty_tpl->tpl_vars['f_value']->value);?>

                                <?php }?>
                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>

                            <?php }?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php }?>

        <!-- categories -->
        <?php if (count($_smarty_tpl->tpl_vars['product']->value['categories'])>1){?>
            <ul class="menu-h compact" id="product-categories">
            Категории:
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['c']->value['status']){?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/category',array('category_url'=>$_smarty_tpl->tpl_vars['c']->value['full_url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                <?php }?><?php } ?>
            </ul>
        <?php }?>

        <!-- tags -->
        <?php if ($_smarty_tpl->tpl_vars['product']->value['tags']){?>
            <p class="tags" id="product-tags">
                Теги:
                <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/tag',array('tag'=>urlencode($_smarty_tpl->tpl_vars['t']->value)));?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</a>
                <?php } ?>
            </p>
        <?php }?>
    

    </div>

</article>


<!-- RELATED PRODUCTS -->
<?php $_smarty_tpl->tpl_vars['upselling'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->upSelling(12), null, 0);?>
<?php $_smarty_tpl->tpl_vars['crossselling'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->crossSelling(12), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['upselling']->value||$_smarty_tpl->tpl_vars['crossselling']->value){?>
    <div class="product-info">

        <?php if ($_smarty_tpl->tpl_vars['crossselling']->value){?>
            <section class="related">
                <h3><?php echo sprintf('Покупатели, которые приобрели %s, также купили',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</h3>
                <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs-mini.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['crossselling']->value,'ulclass'=>"related-bxslider"), 0);?>

            </section>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['upselling']->value){?>
            <section class="related">
                <h3>
                    Рекомендуем посмотреть
                    <?php $_smarty_tpl->tpl_vars['compare_ids'] = new Smarty_variable(array_merge(array($_smarty_tpl->tpl_vars['product']->value['id']),array_keys($_smarty_tpl->tpl_vars['upselling']->value)), null, 0);?>
                    <input type="button" onClick="javascript:window.location='<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/compare',array('id'=>implode(',',$_smarty_tpl->tpl_vars['compare_ids']->value)));?>
';" value="Сравнить все" class="gray" />
                    
                </h3>
                <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs-mini.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['upselling']->value,'ulclass'=>"related-bxslider"), 0);?>

            </section>
        <?php }?>  

    </div>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:40
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/product.cart.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7ac3608e0fc9_33820119')) {function content_5c7ac3608e0fc9_33820119($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
?><form id="cart-form<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?>-dialog<?php }?>" method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
">

    <h4><?php echo sprintf('Купить %s',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</h4>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['product']->value,'96x96',array('itemprop'=>'image','id'=>'product-image','alt'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true)));?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['product']->value['summary']){?>
        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['summary'],512);?>
</p>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?>

        <!-- SELECTABLE FEATURES selling mode -->
        <?php $_smarty_tpl->tpl_vars['default_sku_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['sku_features'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status'], null, 0);?>
        
        <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['selectable_features_control']=='inline'){?>
            <div class="options">
                <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features_selectable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                    <div class="inline-select<?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?> color<?php }?>">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <?php if (!isset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?><?php $_smarty_tpl->createLocalArrayVariable('default_sku_features', null, 0);
$_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']] = $_smarty_tpl->tpl_vars['v_id']->value;?><?php }?>
                            <a data-value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" href="#"<?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?> class="selected"<?php }?><?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?> style="<?php echo $_smarty_tpl->tpl_vars['v']->value->style;?>
; margin-bottom: 20px;"<?php }?>>
                                <?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?>&nbsp;<i class="icon16 checkmark color_checkmark"></i><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?>&nbsp;<span class="color_name"><?php echo strip_tags($_smarty_tpl->tpl_vars['v']->value);?>
</span><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php }?>
                            </a>
                        <?php } ?>
                        <input type="hidden" data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="sku-feature" name="features[<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
]" value="<?php echo ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']]);?>
">
                    </div>

                <?php } ?>
            </div>        
        <?php }else{ ?>
            <div class="options">
                <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features_selectable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
:
                    <select data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="sku-feature" name="features[<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
]">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                        <?php } ?>
                    </select>
                    <br>
                <?php } ?>
            </div>
        <?php }?>
        
        <!-- list all SKUs for Schema.org markup -->
        <?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <?php $_smarty_tpl->tpl_vars['sku_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['sku']->value['name']){?><meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
                <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['sku']->value['price'];?>
">
                <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
">
                <?php if ((!($_smarty_tpl->tpl_vars['sku']->value['count']===null)&&$_smarty_tpl->tpl_vars['sku']->value['count']<=0)){?>
                    <link itemprop="availability" href="http://schema.org/OutOfStock" />
                <?php }else{ ?>
                    <link itemprop="availability" href="http://schema.org/InStock" />
                <?php }?>
            </div>
        <?php } ?>
        
    <?php }else{ ?>

        <!-- FLAT SKU LIST selling mode -->
        <?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable(false, null, 0);?>
        <?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?>
    
            
        
            <ul class="skus">
                <?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['sku_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?>
                <li itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <label<?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?> class="disabled"<?php }?>>
                    <input name="sku_id" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
"<?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?> disabled="true"<?php }?><?php if (!$_smarty_tpl->tpl_vars['sku_available']->value){?>data-disabled="1"<?php }?><?php if ($_smarty_tpl->tpl_vars['sku']->value['id']==$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> checked="checked"<?php }?> data-compare-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['compare_price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
" data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency'],null,0);?>
"<?php if ($_smarty_tpl->tpl_vars['sku']->value['image_id']){?> data-image-id="<?php echo $_smarty_tpl->tpl_vars['sku']->value['image_id'];?>
"<?php }?>> <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']){?><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
                    <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['sku']->value['price'];?>
">
                    <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
">
                    <span class="price tiny nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['sku']->value['price'],$_smarty_tpl->tpl_vars['product']->value['currency']);?>
</span>
                    <?php if ((!($_smarty_tpl->tpl_vars['sku']->value['count']===null)&&$_smarty_tpl->tpl_vars['sku']->value['count']<=0)){?>
                        <link itemprop="availability" href="http://schema.org/OutOfStock" />
                    <?php }else{ ?>
                        <link itemprop="availability" href="http://schema.org/InStock" />
                    <?php }?>
                    </label>
                </li>
                <?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_available']->value||$_smarty_tpl->tpl_vars['sku_available']->value, null, 0);?>
                <?php } ?>
            </ul>

        <?php }else{ ?>
    
            
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                <?php $_smarty_tpl->tpl_vars['sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['skus'][$_smarty_tpl->tpl_vars['product']->value['sku_id']], null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['sku']->value['sku']){?><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['sku'], ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['sku']->value['name']){?><meta itemprop="name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
                <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['sku']->value['price'];?>
">
                <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['product']->value['currency'];?>
">
                <?php if (!$_smarty_tpl->tpl_vars['sku']->value['available']){?>
                <link itemprop="availability" href="http://schema.org/Discontinued" />
                <p><em class="bold error">Этот товар временно недоступен для заказа</em></p>
                <?php }elseif(!$_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')&&!($_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0)){?>
                <link itemprop="availability" href="http://schema.org/OutOfStock" />
                <div class="stocks"><strong class="stock-none"><i class="icon16 stock-transparent"></i><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></strong></div>
                <?php }else{ ?>
                <link itemprop="availability" href="http://schema.org/InStock" />
                <?php }?>
                <input name="sku_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['sku_id'];?>
">
                <?php $_smarty_tpl->tpl_vars['product_available'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['status']&&$_smarty_tpl->tpl_vars['sku']->value['available']&&($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['sku']->value['count']===null||$_smarty_tpl->tpl_vars['sku']->value['count']>0), null, 0);?>
            </div>
    
        <?php }?>

    <?php }?>

    <!-- stock info -->
    <?php if ($_smarty_tpl->tpl_vars['product_available']->value||count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?>
        <div class="stocks">
            <?php if (!function_exists('smarty_template_function_in_stock')) {
    function smarty_template_function_in_stock($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['in_stock']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                <?php if ($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['low']->value||$_smarty_tpl->tpl_vars['n']->value===null){?>
                    <strong class="stock-high"><i class="icon16 stock-green"></i>В наличии</strong>
                <?php }elseif($_smarty_tpl->tpl_vars['n']->value>$_smarty_tpl->tpl_vars['critical']->value){?>
                    <strong class="stock-low"><i class="icon16 stock-yellow"></i><?php echo _w("Only a few items left");?>
</strong>
                <?php }elseif($_smarty_tpl->tpl_vars['n']->value>0){?>
                    <strong class="stock-critical"><i class="icon16 stock-red"></i><?php echo _w("Only %d left in stock","Only %d left in stock",$_smarty_tpl->tpl_vars['n']->value);?>
</strong>
                <?php }else{ ?>
                    <strong class="stock-none"><i class="icon16 stock-transparent"></i><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></strong>
                <?php }?>
            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

            <?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?>
                <div <?php if ($_smarty_tpl->tpl_vars['sku']->value['id']!=$_smarty_tpl->tpl_vars['product']->value['sku_id']){?>style="display:none"<?php }?> class="sku-<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
-stock">
                    <?php if ($_smarty_tpl->tpl_vars['sku']->value['stock']){?>
                        <?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_smarty_tpl->tpl_vars['stock_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
 $_smarty_tpl->tpl_vars['stock_id']->value = $_smarty_tpl->tpl_vars['stock']->key;
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value])){?>
                                <?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable($_smarty_tpl->tpl_vars['sku']->value['stock'][$_smarty_tpl->tpl_vars['stock_id']->value], null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['stock_count'] = new Smarty_variable(null, null, 0);?>
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['stock']->value['name'];?>
: <?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['stock_count']->value,'low'=>$_smarty_tpl->tpl_vars['stock']->value['low_count'],'critical'=>$_smarty_tpl->tpl_vars['stock']->value['critical_count']));?>
<br>
                        <?php } ?>
                    <?php }else{ ?>
                        <?php smarty_template_function_in_stock($_smarty_tpl,array('n'=>$_smarty_tpl->tpl_vars['sku']->value['count']));?>

                    <?php }?>
                </div>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?>
            <div class="sku-no-stock">
                <strong class="stock-none">Товар с выбранным набором характеристик недоступен для покупки</strong>
            </div>
            <?php }?>
        </div>
    <?php }?>

    <div class="purchase">

        <?php if ($_smarty_tpl->tpl_vars['services']->value){?>
        <!-- services -->
        <div class="services">
            <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
            <div class="service-<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
">
                <label>
                    <input data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency'],null,0);?>
" <?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?>disabled="disabled"<?php }?> type="checkbox" name="services[]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['s']->value['price']&&!isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?>(+<span class="service-price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['s']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
</span>)<?php }?>
                </label>
                <?php if (isset($_smarty_tpl->tpl_vars['s']->value['variants'])){?>
                <select data-variant-id="<?php echo $_smarty_tpl->tpl_vars['s']->value['variant_id'];?>
" class="service-variants" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]" disabled>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['s']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['s']->value['variant_id']==$_smarty_tpl->tpl_vars['v']->value['id']){?>selected<?php }?> data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency'],null,0);?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (+<?php echo shop_currency($_smarty_tpl->tpl_vars['v']->value['price'],$_smarty_tpl->tpl_vars['s']->value['currency']);?>
)</option>
                    <?php } ?>
                </select>
                <?php }else{ ?>
                <input type="hidden" name="service_variant[<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['s']->value['variant_id'];?>
">
                <?php }?>
            </div>
            <?php } ?>
        </div>
        <?php }?>

        <!-- price -->
        <div class="add2cart">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['compare_price']>0){?><span class="compare-at-price nowrap"> <?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['compare_price']);?>
 </span><?php }?>
            <span data-price="<?php echo shop_currency($_smarty_tpl->tpl_vars['product']->value['price'],null,null,0);?>
" class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span>
            <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
            
            <input type="submit" <?php if (!$_smarty_tpl->tpl_vars['product_available']->value){?>disabled="disabled"<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total()>0){?>В корзину<?php }else{ ?>Купить<?php }?>">
            <i class="adding2cart"></i>
            <span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'));?>
</span>
        </div>
    </div>
</form>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
product.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
<script type="text/javascript">
    $(function () {
        new Product('#cart-form<?php if ($_smarty_tpl->tpl_vars['wa']->value->get('cart')){?>-dialog<?php }?>', {
            currency: <?php echo json_encode($_smarty_tpl->tpl_vars['currency_info']->value);?>

            <?php if (count($_smarty_tpl->tpl_vars['product']->value['skus'])>1||$_smarty_tpl->tpl_vars['product']->value['sku_type']){?>
            ,services: <?php echo json_encode($_smarty_tpl->tpl_vars['sku_services']->value);?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?>
            ,features: <?php echo json_encode($_smarty_tpl->tpl_vars['sku_features_selectable']->value);?>

            <?php }?>
        });
    });
</script><?php }} ?>