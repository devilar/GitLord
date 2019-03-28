<?php /* Smarty version Smarty-3.1.14, created on 2019-03-25 23:58:21
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/ReportsProducts.html" */ ?>
<?php /*%%SmartyHeaderCode:4980446875c9940edc77e28-76772122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7623f076d1ab68f5f4f46730ee9d29448c4e1f56' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/ReportsProducts.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4980446875c9940edc77e28-76772122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'graph_data' => 0,
    'request_options' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'def_cur' => 0,
    'pie_data' => 0,
    'top_products' => 0,
    'rows_show_immidiately' => 0,
    'p' => 0,
    'size' => 0,
    'top_services' => 0,
    's' => 0,
    'service_total_val' => 0,
    'service_total_percent' => 0,
    'wa_app_url' => 0,
    'sales_channels' => 0,
    'id' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9940edd207d1_97479904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9940edd207d1_97479904')) {function content_5c9940edd207d1_97479904($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><div class="content">
    <div class="block double-padded">

        <?php if ($_smarty_tpl->tpl_vars['graph_data']->value===null){?>
            <h1>
                Бестселлеры
                <span class="hint" id="period-description">Произвольный интервал</span>
            </h1>

            <ul class="menu-h s-product-reports">
                <li class="selected"><a href="#/products/bestsellers/">Хиты продаж</a></li>
                <li><a href="#/products/assets/">Активы</a></li>
                <li><a href="#/products/whattosell/">Что продавать</a></li>
            </ul>
        <?php }else{ ?>
            <div class="block half-padded float-right">
                <ul class="menu-h">
                    <li><a href="?module=reports&action=exportsales&<?php echo http_build_query($_smarty_tpl->tpl_vars['request_options']->value);?>
"><i class="icon16 ss excel"></i>Скачать данные графика в CSV</a></li>
                </ul>
            </div>

            <h1>
                Продажи
                <span class="hint" id="period-description">Произвольный интервал</span>
            </h1>

            <div class="graph-wrapper">
                <script>
                    (function() {
                        if (typeof showSalesGraph == 'undefined') {
                            return $.ajax({
                                  dataType: "script",
                                  url: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3chart-sales.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
",
                                  cache: true
                            });
                        } else {
                            return $.Deferred(function(d) {
                                d.resolve();
                            });
                        }
                    })().done(function() {
                        showSalesGraph(<?php echo json_encode($_smarty_tpl->tpl_vars['graph_data']->value);?>
, <?php echo json_encode(smarty_modifier_replace(wa_currency_html(0,$_smarty_tpl->tpl_vars['def_cur']->value),'0','%s'));?>
);
                    });
                </script>
                <!-- CHART WRAPPERS -->
                <div class="sales-wrapper"></div>
                <div class="hint-wrapper" id="hint-wrapper"></div>
            </div>
        <?php }?>



        <div class="clear-both"></div>

        
        <div class="sidebar right300px">

            <?php if (!empty($_smarty_tpl->tpl_vars['pie_data']->value)){?>
                <div class="graph-wrapper">
                    <div class="pie-wrapper"></div>
                    <div class="hint-wrapper"></div>
                </div>
                <script>
                    (function() {
                        if (typeof showPieGraph == 'undefined') {
                            return $.ajax({
                                dataType: "script",
                                url: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3chart-pie.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
",
                                cache: true
                            });
                        } else {
                            return $.Deferred(function(d) {
                                d.resolve();
                            });
                        }
                    })().done(function() {
                        showPieGraph(<?php echo json_encode($_smarty_tpl->tpl_vars['pie_data']->value);?>
, {
                            color_type: "products"
                        });
                    });
                </script>
            <?php }?>
        </div>

        
        <div class="content right300px">

            <?php if ($_smarty_tpl->tpl_vars['top_products']->value){?>
                
                <table id="s-report-products-bestsellers-table" class="zebra">
                    <thead>
                        <tr class="white s-header-row">
                            <th style="width:50px;"></th>
                            <th></th>
                            <th class="align-right">
                                <?php if ($_smarty_tpl->tpl_vars['request_options']->value['sort']=='sales'){?>
                                    Продажи<i class="icon16 darr"></i>
                                <?php }else{ ?>
                                    <a href="#/products/bestsellers/sort=sales/">Продажи</a>
                                <?php }?>
                            </th>
                            <th class="s-wider-cell align-right">
                                <?php if ($_smarty_tpl->tpl_vars['request_options']->value['sort']=='profit'){?>
                                    Прибыль<i class="icon16 darr"></i>
                                <?php }else{ ?>
                                    <a href="#/products/bestsellers/sort=profit/">Прибыль</a>
                                <?php }?>
                            </th>
                            <th style="width:100px;"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop->config('enable_2x')){?>
                            <?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable('48x48@2x', null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['size'] = new Smarty_variable('48x48', null, 0);?>
                        <?php }?>
                        <?php $_smarty_tpl->tpl_vars['rows_show_immidiately'] = new Smarty_variable(10, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['p']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->index++;
?>
                        <?php if ($_smarty_tpl->tpl_vars['p']->index==$_smarty_tpl->tpl_vars['rows_show_immidiately']->value-1){?>
                            <tr class="white">
                                <td></td>
                                <td style="height:48px;">
                                    <a id="show-all-rows-link" class="gray inline-link" href="javascript:void(0)"><b><i>Показать больше товаров</i></b></a>
                                </td>
                                <td class="align-right"></td>
                                <td class="s-wider-cell align-right"></td>
                                <td class="s-wider-cell"></td>
                            </tr>
                        <?php }?>
                        <tr<?php if ($_smarty_tpl->tpl_vars['p']->index>=$_smarty_tpl->tpl_vars['rows_show_immidiately']->value-1){?> style="display:none;"<?php }?>>
                            <td><a href="?action=products#/product/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->getProductImgHtml($_smarty_tpl->tpl_vars['p']->value,$_smarty_tpl->tpl_vars['size']->value,array('height'=>48,'width'=>48));?>
</a></td>
                            <td><a href="?action=products#/product/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                            <td class="align-right">
                                <span title="<?php echo sprintf_wp('Общая стоимость %1$s &minus; Скидка %2$s',wa_currency($_smarty_tpl->tpl_vars['p']->value['sales_subtotal'],$_smarty_tpl->tpl_vars['def_cur']->value),wa_currency($_smarty_tpl->tpl_vars['p']->value['discount'],$_smarty_tpl->tpl_vars['def_cur']->value));?>
">
                                    <?php echo wa_currency_html($_smarty_tpl->tpl_vars['p']->value['sales'],$_smarty_tpl->tpl_vars['def_cur']->value);?>

                                </span>
                            </td>
                            <td class="s-wider-cell align-right">
                                <span title="<?php echo sprintf_wp('Общие продажи %1$s &minus; Закупочная стоимость %2$s',wa_currency($_smarty_tpl->tpl_vars['p']->value['sales'],$_smarty_tpl->tpl_vars['def_cur']->value),wa_currency($_smarty_tpl->tpl_vars['p']->value['purchase'],$_smarty_tpl->tpl_vars['def_cur']->value));?>
">
                                    <?php echo wa_currency_html($_smarty_tpl->tpl_vars['p']->value['profit'],$_smarty_tpl->tpl_vars['def_cur']->value);?>

                                </span>
                            </td>
                            <td class="s-wider-cell" style="background: #fff;"<?php if ($_smarty_tpl->tpl_vars['p']->value['sales']-$_smarty_tpl->tpl_vars['p']->value['profit']>0){?> title="<?php echo sprintf('Рентабельность реализованной продукции = Прибыль (%s) / Закупочная стоимость (%s) = %s%%',wa_currency($_smarty_tpl->tpl_vars['p']->value['profit'],$_smarty_tpl->tpl_vars['def_cur']->value),wa_currency($_smarty_tpl->tpl_vars['p']->value['sales']-$_smarty_tpl->tpl_vars['p']->value['profit'],$_smarty_tpl->tpl_vars['def_cur']->value),round(100*$_smarty_tpl->tpl_vars['p']->value['profit']/($_smarty_tpl->tpl_vars['p']->value['sales']-$_smarty_tpl->tpl_vars['p']->value['profit'])));?>
"<?php }?>>
                                <div class="s-bar" style="width:<?php echo $_smarty_tpl->tpl_vars['p']->value['sales_percent'];?>
px;"><div class="s-bar2" style="width:<?php echo $_smarty_tpl->tpl_vars['p']->value['profit_percent'];?>
px;"></div></div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>


                
                <br><br>

                <h2>Услуги</h2>

                <?php if ($_smarty_tpl->tpl_vars['top_services']->value){?>
                    <table class="zebra" id="s-report-products-services-table">
                        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_services']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                        <tr>
                            <td><a href="?action=products#/services/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
/"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                            <td class="s-wider-cell align-right">+<?php echo wa_currency_html($_smarty_tpl->tpl_vars['s']->value['total'],$_smarty_tpl->tpl_vars['def_cur']->value);?>
</td>
                            <td class="s-wider-cell" style="background: #fff;">
                                <div class="s-bar" style="width:<?php echo $_smarty_tpl->tpl_vars['s']->value['total_percent']/2;?>
px;"></div>
                            </td>
                        </tr>
                        <?php } ?>
                        <tr class="white">
                            <td></td>
                            <td class="s-wider-cell bold align-right">+<?php echo wa_currency_html($_smarty_tpl->tpl_vars['service_total_val']->value,$_smarty_tpl->tpl_vars['def_cur']->value);?>
</td>
                            <td class="s-wider-cell hint"><?php echo sprintf('<strong>+%s%%</strong> к средней сумме заказа',$_smarty_tpl->tpl_vars['service_total_percent']->value);?>
</td>
                        </tr>
                    </table>
                <?php }else{ ?>
                    <p style="margin-top:10px;"><?php echo sprintf('В течение выбранного отчетного периода не было заказов с дополнительными <a href="%s">услугами</a>.',($_smarty_tpl->tpl_vars['wa_app_url']->value).('?action=products#/services/'));?>
</p>
                <?php }?>

            <?php }else{ ?>
                <p style="margin-top:10px;">В течение выбранного отчетного периода не было продаж.</p>
            <?php }?>

        </div>

        <div class="clear-both"></div>
    </div>
</div>

<div class="hidden">
    <ul class="menu-h">
        <li>
            <select id="s-products-report-storefront-selector" class="storefront-selector">
                <option value="">Все каналы</option>
                <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sales_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (ifset($_smarty_tpl->tpl_vars['request_options']->value['sales_channel'])==$_smarty_tpl->tpl_vars['id']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
        </li>
    </ul>
</div>

<script>(function() { "use strict";
    <?php if ($_smarty_tpl->tpl_vars['graph_data']->value===null){?>
        document.title = "Бестселлеры — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    <?php }else{ ?>
        document.title = "Продажи — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
        $.wa.locale = $.extend($.wa.locale, {
            'Sales': "Продажи",
            'Profit': "Прибыль"
        });
    <?php }?>

    var request_params = <?php echo json_encode($_smarty_tpl->tpl_vars['request_options']->value);?>
;
    var action_url = '?module=reportsproducts&action=default';

    // Storefront selector logic
    (function() { "use strict";

        var $storefront_selector = $('#s-products-report-storefront-selector').removeAttr('id');

        // Move selector into the top menu wrapper
        $('#s-reports-custom-controls').empty().append($storefront_selector.closest('ul'));

        // Reload page when user changes something in the selector
        $storefront_selector.change(function() {
            $storefront_selector.after('<i class="icon16 loading"></i>');
            $.post(action_url, $.extend({ }, request_params, { sales_channel: $storefront_selector.val() }), function(r) {
                $('#reportscontent').html(r);
            });
        });

    })();

    // Human-readable period description in page header
    (function() {
        var $timeframe_selected_li = $('#mainmenu .s-reports-timeframe .selected');
        if ($timeframe_selected_li.length && $timeframe_selected_li.data('timeframe') != 'custom') {
            $('#period-description').html($timeframe_selected_li.find('a').html());
        }
    })();

    // Show all table rows when user clicks on a "Load more..." link
    $('#show-all-rows-link').click(function() {
        var $tr = $(this).closest('tr');
        var $trs = $tr.siblings();
        $tr.remove();
        $trs.show();
    });

})();</script>

<?php }} ?>