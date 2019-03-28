<?php /* Smarty version Smarty-3.1.14, created on 2019-03-15 01:06:13
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductReviews.html" */ ?>
<?php /*%%SmartyHeaderCode:15486248225c8ad055526252-59407000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9a20cacd7e41c8a84a54c914f4be39faf94c597' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductReviews.html',
      1 => 1543322182,
      2 => 'file',
    ),
    'd96f3113a390f85cf4d0a7aec7ad8cdc89b057cf' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.review.html',
      1 => 1543322182,
      2 => 'file',
    ),
    '3a83ebdcf7f9aaee33f2ff543be1de1174d0079c' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.reviews.html',
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
  'nocache_hash' => '15486248225c8ad055526252-59407000',
  'function' => 
  array (
    'review_comments' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'lazy' => 0,
    'reviews' => 0,
    'order' => 0,
    'count' => 0,
    'total_count' => 0,
    'id' => 0,
    'sidebar_counters' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8ad05560fbe7_77783372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8ad05560fbe7_77783372')) {function content_5c8ad05560fbe7_77783372($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['lazy']->value){?>
    <?php if (!empty($_smarty_tpl->tpl_vars['reviews']->value)){?>
        <ul class="menu-h small">
            <li <?php if ($_smarty_tpl->tpl_vars['order']->value=='default'){?>class="selected"<?php }?>><a class="s-reviews-order inline-link" href="#" data-order="default"><b><i>Самые новые</i></b></a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['order']->value=='datetime'){?>class="selected"<?php }?>><a class="s-reviews-order inline-link" href="#" data-order="datetime"><b><i>Самые старые</i></b></a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['order']->value=='best_rated'){?>class="selected"<?php }?>><a class="s-reviews-order inline-link" href="#" data-order="best_rated"><b><i>С высокой оценкой</i></b></a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['order']->value=='worse_rated'){?>class="selected"<?php }?>><a class="s-reviews-order inline-link" href="#" data-order="worse_rated"><b><i>С низкой оценкой</i></b></a></li>
        </ul>
        <div class="s-reviews">
            <?php /*  Call merged included template "./include.reviews.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./include.reviews.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15486248225c8ad055526252-59407000');
content_5c8ad05555a686_40874207($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.reviews.html" */?>
            <div id="s-review-add" style="display:none;">
                <?php /*  Call merged included template "./../product/include.addReview.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./../product/include.addReview.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15486248225c8ad055526252-59407000');
content_5c8ad0555e3f09_41993193($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../product/include.addReview.html" */?>
            </div>
        </div>
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
        <script>
            $(function() {
                var container = $('#s-product-profile-tabs .s-tab-block[data-tab="reviews"]');
                var sidebar = $('#s-all-reviews');
                $.product_reviews.init({
                    product_id: <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
,
                    container: container,
                    statuses: {
                        deleted:  '<?php echo shopProductReviewsModel::STATUS_DELETED;?>
',
                        published:'<?php echo shopProductReviewsModel::STATUS_PUBLISHED;?>
'
                    },
                    lazy_loading: {
                        auto: true,
                        total_count: <?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
,
                        count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
,
                        url: '?module=product&action=reviews&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
',
                        target: '#s-product-profile-tabs .s-tab-block[data-tab="reviews"] .s-reviews ul:first'
                    }
                });
                container.find('.s-reviews-order').unbind('click').bind('click', function() {
                    $.get('?module=product&action=reviews&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&order='+$(this).attr('data-order'), function(html) {
                        container.html(html);
                        var product_profiles_reviews = $('#s-product-profile-reviews ul:first').empty();
                        container.find('.s-reviews ul:first').children().each(function() {
                            var clone = $(this).clone();
                            var review = clone.find('.s-review:first');
                            review.find('.s-review-reply').attr('href', '#/product/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/edit/reviews/'+clone.attr('data-id')+'/');
                            product_profiles_reviews.append(clone.empty().append(review));
                        });
                    });
                    return false;
                });
                sidebar.find('.count-new:first').text(<?php if ($_smarty_tpl->tpl_vars['sidebar_counters']->value['new']){?>'+<?php echo $_smarty_tpl->tpl_vars['sidebar_counters']->value['new'];?>
'<?php }else{ ?>''<?php }?>);
            });
        </script>
    <?php }else{ ?>
        Никто из покупателей еще не оставлял отзыв об этом товаре.
    <?php }?>
<?php }else{ ?>
    <div class="s-reviews">
        <?php /*  Call merged included template "./include.reviews.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./include.reviews.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('no_wrapped'=>1), 0, '15486248225c8ad055526252-59407000');
content_5c8ad05555a686_40874207($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.reviews.html" */?>
    </div>
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
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-15 01:06:13
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.reviews.html" */ ?>
<?php if ($_valid && !is_callable('content_5c8ad05555a686_40874207')) {function content_5c8ad05555a686_40874207($_smarty_tpl) {?><!-- reviews begin -->

<?php if (!function_exists('smarty_template_function_review_comments')) {
    function smarty_template_function_review_comments($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['review_comments']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable(-1, null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['comment']->value['depth']<$_smarty_tpl->tpl_vars['depth']->value){?>
      
        <?php $_smarty_tpl->tpl_vars['loop'] = new Smarty_variable(($_smarty_tpl->tpl_vars['depth']->value-$_smarty_tpl->tpl_vars['comment']->value['depth']), null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['name'] = "end-comment";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['loop']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total']);
?>
            </li>
          </ul>
        <?php endfor; endif; ?>
        
        <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value['depth'], null, 0);?>
      <?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['comment']->value['depth']==$_smarty_tpl->tpl_vars['depth']->value){?>
        </li>
        <li data-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
" data-parent-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['parent_id'];?>
">
      <?php }?>
      
      <?php if ($_smarty_tpl->tpl_vars['comment']->value['depth']>$_smarty_tpl->tpl_vars['depth']->value){?>
        <ul class="menu-v with-icons">
          <li data-id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
 data-parent-id="<?php echo $_smarty_tpl->tpl_vars['comment']->value['parent_id'];?>
">
          <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['comment']->value['depth'], null, 0);?>
      <?php }?>
        <?php /*  Call merged included template "./include.review.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./include.review.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('reply_allowed'=>$_smarty_tpl->tpl_vars['reply_allowed']->value,'single_view'=>true,'review'=>$_smarty_tpl->tpl_vars['comment']->value), 0, '15486248225c8ad055526252-59407000');
content_5c8ad05557c8a1_27396124($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.review.html" */?>
        <!-- sub comment placeholder -->
    <?php } ?>
    
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['name'] = "end-comment";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['depth']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-comment"]['total']);
?>
          </li>
        </ul>
    <?php endfor; endif; ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (empty($_smarty_tpl->tpl_vars['no_wrapped']->value)){?>
<ul class="menu-v with-icons">
<?php }?>
<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
    <li data-id=<?php echo $_smarty_tpl->tpl_vars['review']->value['id'];?>
 data-parent-id="0">
        <?php /*  Call merged included template "./include.review.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./include.review.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('reply_allowed'=>$_smarty_tpl->tpl_vars['reply_allowed']->value,'single_view'=>true), 0, '15486248225c8ad055526252-59407000');
content_5c8ad05557c8a1_27396124($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.review.html" */?>
        <?php if (!empty($_smarty_tpl->tpl_vars['review']->value['comments'])){?>
            <?php smarty_template_function_review_comments($_smarty_tpl,array('comments'=>$_smarty_tpl->tpl_vars['review']->value['comments']));?>

        <?php }?>
    </li>
<?php } ?>
<?php if (empty($_smarty_tpl->tpl_vars['no_wrapped']->value)){?>
</ul>
<?php }?>
<!-- reviews end --><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-15 01:06:13
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.review.html" */ ?>
<?php if ($_valid && !is_callable('content_5c8ad05557c8a1_27396124')) {function content_5c8ad05557c8a1_27396124($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
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

</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-15 01:06:13
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.addReview.html" */ ?>
<?php if ($_valid && !is_callable('content_5c8ad0555e3f09_41993193')) {function content_5c8ad0555e3f09_41993193($_smarty_tpl) {?><form id="s-review-add-form" method="post">
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