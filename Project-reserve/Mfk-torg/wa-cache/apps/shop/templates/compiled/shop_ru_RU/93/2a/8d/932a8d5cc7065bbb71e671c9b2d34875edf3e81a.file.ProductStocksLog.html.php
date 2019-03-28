<?php /* Smarty version Smarty-3.1.14, created on 2019-03-15 01:06:06
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductStocksLog.html" */ ?>
<?php /*%%SmartyHeaderCode:19099270985c8ad04edc9ef6-88448070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '932a8d5cc7065bbb71e671c9b2d34875edf3e81a' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductStocksLog.html',
      1 => 1543322182,
      2 => 'file',
    ),
    'e3cd96a762fbffac413b309e52b85fdf553d140c' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.stocks_log.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19099270985c8ad04edc9ef6-88448070',
  'function' => 
  array (
    'product_row' => 
    array (
      'parameter' => 
      array (
        'row' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'get_url_params' => 
    array (
      'parameter' => 
      array (
        'stock_id' => NULL,
        'order' => NULL,
      ),
      'compiled' => '',
    ),
    'get_url' => 
    array (
      'parameter' => 
      array (
        'stock_id' => NULL,
        'order' => NULL,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'lazy' => 0,
    'total_count' => 0,
    'count' => 0,
    'product_id' => 0,
    'stock_id' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8ad04f062556_58592860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8ad04f062556_58592860')) {function content_5c8ad04f062556_58592860($_smarty_tpl) {?><?php /*  Call merged included template "./include.stocks_log.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./include.stocks_log.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '19099270985c8ad04edc9ef6-88448070');
content_5c8ad04ef13972_43886812($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.stocks_log.html" */?>
<?php if (!$_smarty_tpl->tpl_vars['lazy']->value){?>
    <script>
        $.product_stocks_log.init({
            total_count: <?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
,
            container: '#s-product-profile-tabs .s-tab-block[data-tab="stock-logs"]',
            lazy_loading: {
                auto: true,
                count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
,
                url: '?module=product&id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
&action=stocksLog&<?php smarty_template_function_get_url_params($_smarty_tpl,array('stock_id'=>$_smarty_tpl->tpl_vars['stock_id']->value,'order'=>$_smarty_tpl->tpl_vars['order']->value));?>
'
            }
        });
       </script>
<?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-15 01:06:06
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/include.stocks_log.html" */ ?>
<?php if ($_valid && !is_callable('content_5c8ad04ef13972_43886812')) {function content_5c8ad04ef13972_43886812($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?><?php $_smarty_tpl->tpl_vars['stocks_count'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['stocks']->value), null, 0);?>

<?php if (!function_exists('smarty_template_function_product_row')) {
    function smarty_template_function_product_row($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['product_row']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <td>
        <div class="s-stock-productname-column">
            <?php if (!$_smarty_tpl->tpl_vars['product_id']->value){?>
                <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['row']->value['product_id'];?>
/">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>

                    <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['sku_name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            <?php }else{ ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['sku_name'], ENT_QUOTES, 'UTF-8', true);?>

            <?php }?>
            <i class="shortener"></i>
        </div>
    </td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if ($_smarty_tpl->tpl_vars['stocks_count']->value<1){?>

    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "log_list", null); ob_start(); ?>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
</td>
                <?php smarty_template_function_product_row($_smarty_tpl,array('row'=>$_smarty_tpl->tpl_vars['row']->value));?>

                <td>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['diff_count']>0){?>+<?php echo $_smarty_tpl->tpl_vars['row']->value['diff_count'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value['diff_count'];?>
<?php }?>
                    <?php echo shopHelper::getStockCountIcon($_smarty_tpl->tpl_vars['row']->value['after_count'],$_smarty_tpl->tpl_vars['row']->value['stock_id']);?>

                    <span class="hint" title="В наличии">
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['after_count']!==null){?><?php echo $_smarty_tpl->tpl_vars['row']->value['after_count'];?>
<?php }else{ ?>∞<?php }?>
                    </span>
                </td>
                <td>
                    <div><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
<i class="shortener"></i></div>
                </td>
                <td class="gray align-right"><div><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['row']->value['datetime'],'humandatetime');?>
</div></td>
            </tr>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }else{ ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "log_list", null); ob_start(); ?>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
</td>
                <?php smarty_template_function_product_row($_smarty_tpl,array('row'=>$_smarty_tpl->tpl_vars['row']->value));?>

                <?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
?>
                    <td class="s-stock-column" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if ($_smarty_tpl->tpl_vars['stock']->value['id']==$_smarty_tpl->tpl_vars['row']->value['stock_id']){?>
                            <?php echo shopHelper::getStockCountIcon($_smarty_tpl->tpl_vars['row']->value['after_count'],$_smarty_tpl->tpl_vars['row']->value['stock_id']);?>

                            <?php if ($_smarty_tpl->tpl_vars['row']->value['after_count']!==null){?><?php echo $_smarty_tpl->tpl_vars['row']->value['after_count'];?>
<?php }else{ ?>∞<?php }?>
                            <span class="hint">
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['diff_count']>0){?>+<?php echo $_smarty_tpl->tpl_vars['row']->value['diff_count'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value['diff_count'];?>
<?php }?>
                            </span>
                        <?php }?>
                    </td>
                <?php } ?>
                <td class="s-stock-column" title="Все склады">
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['sku_count_show']){?>
                        <?php echo shopHelper::getStockCountIcon($_smarty_tpl->tpl_vars['row']->value['after_count']);?>

                        <?php if ($_smarty_tpl->tpl_vars['row']->value['after_count']===null){?>∞<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value['after_count'];?>
<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['stock_name']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['stock_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                        <span class="hint">
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['diff_count']>0){?>+<?php echo $_smarty_tpl->tpl_vars['row']->value['diff_count'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['row']->value['diff_count'];?>
<?php }?>
                        </span>
                    <?php }?>
                </td>
                <td title="<?php echo strip_tags($_smarty_tpl->tpl_vars['row']->value['description']);?>
">
                    <div><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
<i class="shortener"></i></div>
                </td>
                <td class="gray align-right"><div><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['row']->value['datetime'],'humandatetime');?>
</div></td>
            </tr>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', "lazy_loading_footer", null); ob_start(); ?>
<div class="block half-padded">
    <br>
    <div class="lazyloading-progress-string"><?php echo _w('%d log item','%d log items',$_smarty_tpl->tpl_vars['offset']->value+$_smarty_tpl->tpl_vars['count']->value);?>
&nbsp;<?php echo sprintf(_w('of %d'),$_smarty_tpl->tpl_vars['total_count']->value);?>
</div><br>
    <span class="lazyloading-progress" style="display:none">
        <i class="icon16 loading"></i> Загрузка <span class="lazyloading-chunk"><?php echo _w('%d log item','%d log items',min($_smarty_tpl->tpl_vars['total_count']->value-$_smarty_tpl->tpl_vars['offset']->value-$_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['count']->value));?>
...</span>
    </span>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['lazy']->value){?>

    <?php if (!function_exists('smarty_template_function_get_url_params')) {
    function smarty_template_function_get_url_params($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['get_url_params']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if ($_smarty_tpl->tpl_vars['stock_id']->value||($_smarty_tpl->tpl_vars['stock_id']->value==='0'||$_smarty_tpl->tpl_vars['stock_id']->value===0)){?>stock_id=<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
&<?php }?><?php if ($_smarty_tpl->tpl_vars['order']->value){?>order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


    <?php if (!function_exists('smarty_template_function_get_url')) {
    function smarty_template_function_get_url($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['get_url']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php if ($_smarty_tpl->tpl_vars['product_id']->value){?><?php smarty_template_function_get_url_params($_smarty_tpl,array('stock_id'=>$_smarty_tpl->tpl_vars['stock_id']->value,'order'=>$_smarty_tpl->tpl_vars['reverse_order']->value));?>
<?php }else{ ?>#/stockslog/<?php smarty_template_function_get_url_params($_smarty_tpl,array('stock_id'=>$_smarty_tpl->tpl_vars['stock_id']->value,'order'=>$_smarty_tpl->tpl_vars['reverse_order']->value));?>
<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


    <?php if ($_smarty_tpl->tpl_vars['log']->value){?>
        <?php if ($_smarty_tpl->tpl_vars['stocks_count']->value<1){?>
            <table class="zebra s-stocks-log single-lined">
                <tr class="header white">
                    <th class="min-width"></th>
                    <th></th>
                    <th class="s-stock-column">Количество</th>
                    <th>Описание</th>
                    <th></th>
                </tr>
                <?php echo $_smarty_tpl->tpl_vars['log_list']->value;?>

            </table>
        <?php }else{ ?>
            <table class="zebra s-stocks-log single-lined">
                <tr class="header white">
                    <th class="min-width"></th>
                    <th></th>
                    <?php  $_smarty_tpl->tpl_vars['stock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stock']->key => $_smarty_tpl->tpl_vars['stock']->value){
$_smarty_tpl->tpl_vars['stock']->_loop = true;
?>
                        <th class="s-stock-column" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stock']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<i class="shortener"></i></div></th>
                    <?php } ?>
                    <th class="s-stock-column"></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php echo $_smarty_tpl->tpl_vars['log_list']->value;?>

            </table>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['lazy_loading_footer']->value;?>


    <?php }else{ ?>
        <?php if (isset($_smarty_tpl->tpl_vars['stocks']->value[$_smarty_tpl->tpl_vars['stock_id']->value])){?>
            <?php echo sprintf('Нет записей об изменении остатков по складу @%s.',$_smarty_tpl->tpl_vars['stocks']->value[$_smarty_tpl->tpl_vars['stock_id']->value]['name']);?>

        <?php }else{ ?>
            Нет записей об изменении остатков на складе.
        <?php }?>
    <?php }?>

<?php }else{ ?>
    <table><?php echo $_smarty_tpl->tpl_vars['log_list']->value;?>
</table>
    <?php echo $_smarty_tpl->tpl_vars['lazy_loading_footer']->value;?>

<?php }?>
<?php }} ?>