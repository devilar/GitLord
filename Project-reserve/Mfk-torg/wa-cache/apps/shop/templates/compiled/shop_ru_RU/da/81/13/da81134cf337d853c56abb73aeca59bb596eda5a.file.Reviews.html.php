<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:55:34
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reviews/Reviews.html" */ ?>
<?php /*%%SmartyHeaderCode:16179205515c8f4ef6baecd5-66929930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da81134cf337d853c56abb73aeca59bb596eda5a' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reviews/Reviews.html',
      1 => 1543322182,
      2 => 'file',
    ),
    'd96f3113a390f85cf4d0a7aec7ad8cdc89b057cf' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.review.html',
      1 => 1543322182,
      2 => 'file',
    ),
    '5b1bfe7bc13d539e2dfa4d3b9fc5e6c4cd4d45ab' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.addReview.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16179205515c8f4ef6baecd5-66929930',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reviews' => 0,
    'review' => 0,
    'reply_allowed' => 0,
    'lazy' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'products_reviews_hook' => 0,
    '_' => 0,
    'count' => 0,
    'total_count' => 0,
    'sidebar_counters' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4ef6c71f41_18743870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4ef6c71f41_18743870')) {function content_5c8f4ef6c71f41_18743870($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array("review_list", null, null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
$_smarty_tpl->tpl_vars['review']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['review']->key;
?>
        <li data-id="<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
"><?php /*  Call merged included template "./../product/include.review.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./../product/include.review.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('reply_allowed'=>$_smarty_tpl->tpl_vars['reply_allowed']->value), 0, '16179205515c8f4ef6baecd5-66929930');
content_5c8f4ef6bdceb3_39144092($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../product/include.review.html" */?></li>
    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (!$_smarty_tpl->tpl_vars['lazy']->value){?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/rate.widget.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/reviews.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<div class="block double-padded">
    <h1>Отзывы</h1>
    <div class="s-reviews">
        <ul class="menu-v with-icons"><?php echo Smarty::$_smarty_vars['capture']['review_list'];?>
</ul>
        <div id="s-review-add" style="display:none;">
            <?php /*  Call merged included template "./../product/include.addReview.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../product/include.addReview.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16179205515c8f4ef6baecd5-66929930');
content_5c8f4ef6c42b78_63915625($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../product/include.addReview.html" */?>
        </div>
    </div>

    <!-- plugin hook: 'products_reviews_hook' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_reviews_hook']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['_']->value)===null||$tmp==='' ? '' : $tmp);?>
<?php } ?>

    <div class="lazyloading-wrapper">
        <div class="lazyloading-progress-string"><?php echo _w('%d review','%d reviews',$_smarty_tpl->tpl_vars['count']->value);?>
&nbsp;<?php echo sprintf(_w('of %d'),$_smarty_tpl->tpl_vars['total_count']->value);?>
</div><br>
        <a href="javascript:void(0);" class="lazyloading-link" <?php if ($_smarty_tpl->tpl_vars['count']->value>=$_smarty_tpl->tpl_vars['total_count']->value){?>style="display:none;"<?php }?>>Показать больше отзывов</a>
        <span class="lazyloading-progress" style="display:none">
            <i class="icon16 loading"></i> Загрузка <span class="lazyloading-chunk"><?php echo _w('%d review','%d reviews',min($_smarty_tpl->tpl_vars['total_count']->value-$_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['count']->value));?>
...</span>
        </span>
    </div>
</div>
<script>
    document.title = "Отзывы — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    $.product_reviews.init({
        statuses: {
            deleted: '<?php echo shopProductReviewsModel::STATUS_DELETED;?>
',
            published: '<?php echo shopProductReviewsModel::STATUS_PUBLISHED;?>
'
        },
        lazy_loading: {
            auto: true,
            total_count: <?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
,
            count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>

        },
        container: '#s-content'
    });
    $('#s-all-reviews').find('.count-new:first').text(<?php if ($_smarty_tpl->tpl_vars['sidebar_counters']->value['new']){?>'+<?php echo $_smarty_tpl->tpl_vars['sidebar_counters']->value['new'];?>
'<?php }else{ ?>''<?php }?>);
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>
        $.fn.retina && $('.s-reviews .image img').retina();
    <?php }?>
</script>
<?php }else{ ?>
    <ul class="s-reviews"><?php echo Smarty::$_smarty_vars['capture']['review_list'];?>
</ul>
    <div class="lazyloading-progress-string"><?php echo _w('%d review','%d reviews',$_smarty_tpl->tpl_vars['offset']->value+$_smarty_tpl->tpl_vars['count']->value);?>
&nbsp;<?php echo sprintf(_w('of %d'),$_smarty_tpl->tpl_vars['total_count']->value);?>
</div><br>
    <span class="lazyloading-progress" style="display:none">
        <i class="icon16 loading"></i> Загрузка <span class="lazyloading-chunk"><?php echo _w('%d review','%d reviews',min($_smarty_tpl->tpl_vars['total_count']->value-$_smarty_tpl->tpl_vars['offset']->value-$_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['count']->value));?>
...</span>
    </span>
    <script>
        $('#s-all-reviews').find('.count-new:first').text(<?php if ($_smarty_tpl->tpl_vars['sidebar_counters']->value['new']){?>'+<?php echo $_smarty_tpl->tpl_vars['sidebar_counters']->value['new'];?>
'<?php }else{ ?>''<?php }?>);
    </script>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:55:34
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.review.html" */ ?>
<?php if ($_valid && !is_callable('content_5c8f4ef6bdceb3_39144092')) {function content_5c8f4ef6bdceb3_39144092($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><div class="s-review <?php if ($_smarty_tpl->tpl_vars['review']->value['status']==shopProductReviewsModel::STATUS_DELETED){?>s-deleted<?php }?>">
    <div class="profile image50px">
        <div class="image">
        
            <!-- product thumbnail -->
            <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['review']->value['product_id'];?>
/"
                title="
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value)){?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }elseif((!empty($_smarty_tpl->tpl_vars['review']->value['product_name']))){?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                "
            >
                <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['product_url_crop_small'])){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['review']->value['product_url_crop_small'];?>
">
                <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/image-dummy-small.png">
                <?php }?>
            </a>

        </div>
        <div class="details">
            <!-- rating -->
            <?php if (!$_smarty_tpl->tpl_vars['review']->value['parent_id']&&!empty($_smarty_tpl->tpl_vars['review']->value['rate'])&&$_smarty_tpl->tpl_vars['review']->value['title']){?>
                <h5>
                    <span class="hint rate">
                        <?php $_smarty_tpl->tpl_vars['rate'] = new Smarty_variable(round($_smarty_tpl->tpl_vars['review']->value['rate']), null, 0);?>
                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml($_smarty_tpl->tpl_vars['rate']->value,10,true);?>

                    </span>
                    <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['title'], ENT_QUOTES, 'UTF-8', true));?>

                </h5>
            <?php }?>

            <span class="hint">

                <!-- author -->
                <?php if ($_smarty_tpl->tpl_vars['review']->value['contact_id']){?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['author'])){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
contacts/#/contact/<?php echo $_smarty_tpl->tpl_vars['review']->value['contact_id'];?>
" class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['author']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <?php }?>
                <?php }elseif($_smarty_tpl->tpl_vars['review']->value['site']){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['review']->value['site'];?>
" class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['author']['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                <?php }else{ ?>
                    <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['author']['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
                    <?php if ($_smarty_tpl->tpl_vars['review']->value['email']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['product_name'])){?>
                    <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf('к товару <a href="%s">%s</a>',"#/product/".((string)$_smarty_tpl->tpl_vars['review']->value['product_id'])."/",$_tmp1);?>

                <?php }?>

                <!-- datetime -->
                <?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['review']->value['datetime'],"humandatetime");?>


            </span>

            <?php if (true||$_smarty_tpl->tpl_vars['review']->value['editable']){?>
                <a href="#" class="small s-review-delete"  <?php if ($_smarty_tpl->tpl_vars['review']->value['status']==shopProductReviewsModel::STATUS_DELETED){?>  style="display: none;"<?php }?> >удалить</a>
                <a href="#" class="small s-review-restore" <?php if ($_smarty_tpl->tpl_vars['review']->value['status']==shopProductReviewsModel::STATUS_PUBLISHED){?>style="display: none;"<?php }?> >восстановить</a>
            <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['review']->value['status']==shopProductReviewsModel::STATUS_DELETED&&!(true||$_smarty_tpl->tpl_vars['review']->value['editable'])){?>
                <p class="s-review-text">Отзыв удален</p>
            <?php }else{ ?>
                <?php if (isset($_smarty_tpl->tpl_vars['review']->value['product'])&&(!$_smarty_tpl->tpl_vars['review']->value['product']||(!(true||$_smarty_tpl->tpl_vars['review']->value['editable'])&&($_smarty_tpl->tpl_vars['review']->value['product'])))){?>
                    <p class="s-review-text">Отзыв к неизвестному товару</p>
                <?php }else{ ?>
                    <p class="s-review-text">
                        <span<?php if (!empty($_smarty_tpl->tpl_vars['review']->value['is_new'])){?> class="highlighted"<?php }?>><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['text'], ENT_QUOTES, 'UTF-8', true));?>
</span>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['review']->value['parent_id']&&isset($_smarty_tpl->tpl_vars['review']->value['parent_text'])){?>
                        <span class="hint">ответ на <strong><?php if ($_smarty_tpl->tpl_vars['review']->value['parent_status']==shopProductReviewsModel::STATUS_DELETED&&!(true||$_smarty_tpl->tpl_vars['review']->value['editable'])){?><strike>Отзыв удален</strike><?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['review']->value['parent_text'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></strong></span>
                        <br>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['reply_allowed']->value){?>
                        <a href="<?php if (isset($_smarty_tpl->tpl_vars['reply_link']->value)){?><?php echo $_smarty_tpl->tpl_vars['reply_link']->value;?>
<?php }else{ ?>#<?php }?>" class="s-review-reply small inline-link"><b><i>ответить</i></b></a>
                    <?php }?>
                <?php }?>
            <?php }?>

        </div>
    </div>

</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:55:34
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.addReview.html" */ ?>
<?php if ($_valid && !is_callable('content_5c8f4ef6c42b78_63915625')) {function content_5c8f4ef6c42b78_63915625($_smarty_tpl) {?><form id="s-review-add-form" method="post">
    <i class="icon16 userpic20" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['current_author']->value['photo_url_20'];?>
');"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_author']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

    <p>
        <textarea name="text"></textarea>
    </p>
    <input type="button" class="save" value="Добавить комментарий">
    <span class="s-review-add-form-status s-ajax-status" style="display: none;">
      <i class="s-ajax-status-loading icon16 loading"><!--icon --></i>
    </span>
    <em class="hint">Ctrl+Enter</em>
    <input type="hidden" name="parent_id" value="0">
    <input type="hidden" name="product_id" value="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
<?php }else{ ?>0<?php }?>">
</form><?php }} ?>