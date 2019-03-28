<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:39
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/list-thumbs.html" */ ?>
<?php /*%%SmartyHeaderCode:465748685c7ac35fd1b0f3-47922809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b123f1760a32eb835f8b411212e9d5dbc12a2a' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/list-thumbs.html',
      1 => 1550729559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '465748685c7ac35fd1b0f3-47922809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sorting' => 0,
    'active_sort' => 0,
    'wa' => 0,
    'category' => 0,
    'sort_fields' => 0,
    'sort' => 0,
    'name' => 0,
    'theme_settings' => 0,
    'products' => 0,
    'p' => 0,
    'badge_html' => 0,
    'wa_theme_url' => 0,
    'f_code' => 0,
    'features' => 0,
    'f_value' => 0,
    'available' => 0,
    'add2cart_label' => 0,
    'disable_compare' => 0,
    'pages_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac35fd9beb4_67535982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac35fd9beb4_67535982')) {function content_5c7ac35fd9beb4_67535982($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_function_wa_pagination')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/function.wa_pagination.php';
?><!-- products thumbnail list view -->

<?php if (!empty($_smarty_tpl->tpl_vars['sorting']->value)){?>
    <!-- sorting -->
    <?php $_smarty_tpl->tpl_vars['sort_fields'] = new Smarty_variable(array('name'=>'Название','price'=>'Цена','total_sales'=>'Хиты продаж','rating'=>'Оценка покупателей','create_datetime'=>'Дата добавления','stock'=>'В наличии'), null, 0);?>
    <?php if (!isset($_smarty_tpl->tpl_vars['active_sort']->value)){?>
        <?php $_smarty_tpl->tpl_vars['active_sort'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->get('sort','create_datetime'), null, 0);?>
    <?php }?>
    <ul class="sorting">
        <li>Сортировать:</li>
        <?php if (!empty($_smarty_tpl->tpl_vars['category']->value)&&!$_smarty_tpl->tpl_vars['category']->value['sort_products']){?>
            <li<?php if (!$_smarty_tpl->tpl_vars['active_sort']->value){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->currentUrl(0,1);?>
">Новые и популярные</a></li>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['sort']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['active_sort']->value==$_smarty_tpl->tpl_vars['sort']->value){?> class="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->sortUrl($_smarty_tpl->tpl_vars['sort']->value,$_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['active_sort']->value);?>
</li>
            <?php if ($_smarty_tpl->tpl_vars['wa']->value->get('sort')==$_smarty_tpl->tpl_vars['sort']->value){?><?php echo $_smarty_tpl->tpl_vars['wa']->value->title((($_smarty_tpl->tpl_vars['wa']->value->title()).(' — ')).($_smarty_tpl->tpl_vars['name']->value));?>
<?php }?>
        <?php } ?>
    </ul>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total()>0){?><?php $_smarty_tpl->tpl_vars['add2cart_label'] = new Smarty_variable('В корзину', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['add2cart_label'] = new Smarty_variable('Купить', null, 0);?><?php }?>

<ul class="thumbs product-list">
<?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['list_features'])){?>
    <?php $_smarty_tpl->tpl_vars['features'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->features($_smarty_tpl->tpl_vars['products']->value), null, 0);?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['available'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')||$_smarty_tpl->tpl_vars['p']->value['count']===null||$_smarty_tpl->tpl_vars['p']->value['count']>0, null, 0);?>
    <li itemscope itemtype ="http://schema.org/Product">

        <a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
">
            <div class="image">
                <div class="badge-wrapper">
                    <?php $_smarty_tpl->tpl_vars['badge_html'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->badgeHtml($_smarty_tpl->tpl_vars['p']->value['badge']), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['badge_html']->value){?>
                        <div class="corner top right"><?php echo $_smarty_tpl->tpl_vars['badge_html']->value;?>
</div>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productImgHtml($_smarty_tpl->tpl_vars['p']->value,'200',array('itemprop'=>'image','alt'=>$_smarty_tpl->tpl_vars['p']->value['name'],'default'=>((string)$_smarty_tpl->tpl_vars['wa_theme_url']->value)."img/dummy200.png"));?>

                </div>
            </div>
            <h5>
                <span itemprop="name"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['p']->value['rating']>0){?>
                    <span class="rating nowrap"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['p']->value['rating']);?>
</span>
                <?php }?>
            </h5>
             
            <?php if ($_smarty_tpl->tpl_vars['p']->value['summary']){?><span itemprop="description" class="summary"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['p']->value['summary']),100);?>
</span><?php }?>
        </a>
        
        <?php echo shopListfeaturesPlugin::display($_smarty_tpl->tpl_vars['p']->value,$_smarty_tpl->tpl_vars['products']->value);?>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['p']->value['features'])){?>
        <table class="features">
            <?php  $_smarty_tpl->tpl_vars['f_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_value']->_loop = false;
 $_smarty_tpl->tpl_vars['f_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_value']->key => $_smarty_tpl->tpl_vars['f_value']->value){
$_smarty_tpl->tpl_vars['f_value']->_loop = true;
 $_smarty_tpl->tpl_vars['f_code']->value = $_smarty_tpl->tpl_vars['f_value']->key;
?>
            <tr<?php if ($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['type']=='divider'){?> class="divider"<?php }?>>
            <td class="name">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['features']->value[$_smarty_tpl->tpl_vars['f_code']->value]['name'], ENT_QUOTES, 'UTF-8', true);?>

            </td>
            <td class="value">
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
        <div itemprop="offers" class="offers" itemscope itemtype="http://schema.org/Offer">
            <?php if ($_smarty_tpl->tpl_vars['available']->value){?>
                <form class="purchase addtocart" <?php if ($_smarty_tpl->tpl_vars['p']->value['sku_count']>1){?>data-url="<?php echo $_smarty_tpl->tpl_vars['p']->value['frontend_url'];?>
<?php if (strpos($_smarty_tpl->tpl_vars['p']->value['frontend_url'],'?')){?>&<?php }else{ ?>?<?php }?>cart=1"<?php }?> method="post" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontendCart/add');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['p']->value['compare_price']>0){?><span class="compare-at-price nowrap"> <?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['compare_price']);?>
 </span><?php }?>
                    <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span>
                    <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
">
                    <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->primaryCurrency();?>
">
                    <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                    <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['add2cart_label']->value;?>
">
                    <i class="adding2cart"></i>
                    <?php if (empty($_smarty_tpl->tpl_vars['disable_compare']->value)){?><a data-product="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
" class="compare" href="#" title="Сравнить"><i class="icon16 compare compare-from-list<?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->inComparison($_smarty_tpl->tpl_vars['p']->value['id'])){?> active<?php }?>"></i></a><?php }?>
                    <span class="added2cart" style="display: none;"><?php echo sprintf('%s теперь <a href="%s"><strong>в вашей корзине покупок</strong></a>',$_smarty_tpl->tpl_vars['p']->value['name'],$_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart'));?>
</span>
                </form>
                <link itemprop="availability" href="http://schema.org/InStock" />
            <?php }else{ ?>
                <span class="price nowrap"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price']);?>
</span>
                <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
">
                <meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->primaryCurrency();?>
">
                <div class="out-of-stock"><strong><?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->settings('ignore_stock_count')){?>Под заказ<?php }else{ ?>Нет в наличии<?php }?></strong></div>
                <link itemprop="availability" href="http://schema.org/OutOfStock" />
            <?php }?>
        </div>
    </li>
<?php } ?>
</ul>

<?php if (isset($_smarty_tpl->tpl_vars['pages_count']->value)&&$_smarty_tpl->tpl_vars['pages_count']->value>1){?>
<div class="block <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['pagination']=='lazyloading'){?>lazyloading-paging<?php }else{ ?>paging-nav<?php }?>"  data-times="2" data-link-text="Загрузить еще" data-loading-str="Загрузка...">
    <?php echo smarty_function_wa_pagination(array('total'=>$_smarty_tpl->tpl_vars['pages_count']->value,'attrs'=>array('class'=>"menu-h")),$_smarty_tpl);?>

</div>
<?php }?>
<?php }} ?>