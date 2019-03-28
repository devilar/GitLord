<?php /* Smarty version Smarty-3.1.14, created on 2019-03-06 09:24:35
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/ReportsSales.html" */ ?>
<?php /*%%SmartyHeaderCode:8952781475c7f67a3c99573-20041990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '368840462fafbd98e0c2c704e9d90d5e6edeefcf' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/ReportsSales.html',
      1 => 1543322182,
      2 => 'file',
    ),
    '6f9f4b4e4b365e75c2ff96d578034e99800170bd' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/sales_sidebar.html',
      1 => 1543322182,
      2 => 'file',
    ),
    '08378f2e8f102bcd3d480b722b3b0df564d62c00' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/sales_report_rows.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8952781475c7f67a3c99573-20041990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'abtests' => 0,
    'id' => 0,
    'request_options' => 0,
    'name' => 0,
    'filter' => 0,
    'filter_title' => 0,
    'menu_types' => 0,
    'details_graph_data' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'def_cur' => 0,
    'graph_data' => 0,
    'roi_enabled' => 0,
    'totals' => 0,
    'abtest_variants' => 0,
    'v' => 0,
    'order_list_html' => 0,
    'order_items_list_html' => 0,
    'sales_channels' => 0,
    'more_rows_exist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7f67a3dc08b1_93338256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7f67a3dc08b1_93338256')) {function content_5c7f67a3dc08b1_93338256($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php /*  Call merged included template "./sales_sidebar.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./sales_sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '8952781475c7f67a3c99573-20041990');
content_5c7f67a3cc6602_58695708($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./sales_sidebar.html" */?>

<div class="content left200px">
    <div class="block double-padded">

        <div class="block half-padded float-right">
            <ul class="menu-h">
                <?php if ($_smarty_tpl->tpl_vars['abtests']->value){?><li class="highlighted">
                    <i class="icon16 split"></i><span class="highlighted">Доступны результаты A/B-теста</span>
                    <select id="s-sales-abtest-selector">
                        <option value="">Выберите тест</option>
                        <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abtests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php if (ifset($_smarty_tpl->tpl_vars['request_options']->value['abtest'])==$_smarty_tpl->tpl_vars['id']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                    </select>
                </li><?php }?>
                <li><a href="?module=reports&action=exportsales&<?php echo http_build_query($_smarty_tpl->tpl_vars['request_options']->value);?>
"><i class="icon16 ss excel"></i>Скачать данные графика в CSV</a></li>
            </ul>
        </div>

        <h1>
            <?php if ($_smarty_tpl->tpl_vars['filter']->value){?>
                <a href="javascript:void(0)" class="back s-reset-filter" id="s-reset-filter">&larr; <span class="s-back-title"></span></a>
                <span class="s-header-title"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['filter_title']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
            <?php }else{ ?>
                <span class="s-header-title">
                    <?php if (!empty($_smarty_tpl->tpl_vars['request_options']->value['type'])&&!empty($_smarty_tpl->tpl_vars['menu_types']->value[$_smarty_tpl->tpl_vars['request_options']->value['type']])){?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_types']->value[$_smarty_tpl->tpl_vars['request_options']->value['type']]['header_name'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }else{ ?>
                        Отчет о продажах
                    <?php }?>
                </span>
            <?php }?>

            <span class="hint" id="period-description">Произвольный интервал</span>
        </h1>

        <?php if ($_smarty_tpl->tpl_vars['details_graph_data']->value){?>
            <div class="extended-sales-graph-wrapper">
                <div class="extended-sales-graph" id="extended-sales-graph"></div>
                <div class="extended-sales-hint" id="extended-sales-hint"></div>
                <div class="extended-sales-divider" id="extended-sales-divider"></div>
                <script>
                    ( function($) {
                        if (typeof ExtendedSalesGraph === "function") {
                            initGraph();
                        } else {
                            $.getScript("<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3chart-sales.extended.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
", initGraph);
                        }
                        function initGraph() {
                            new ExtendedSalesGraph({
                                data: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['details_graph_data']->value['data'])===null||$tmp==='' ? array() : $tmp));?>
,
                                currency: <?php echo json_encode(smarty_modifier_replace(wa_currency_html(0,$_smarty_tpl->tpl_vars['def_cur']->value),'0',':value:'));?>
,
                                chart_names: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['details_graph_data']->value['names'])===null||$tmp==='' ? array() : $tmp));?>
,
                                $wrapper: $("#extended-sales-graph"),
                                $tooltip: $("#extended-sales-hint"),
                                $divider: $("#extended-sales-divider")
                            });
                        }
                    })(jQuery);
                </script>
            </div>
        <?php }else{ ?>
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

        <table class="zebra" id="sales-report-table">
            <thead>
                <tr class="white s-header-row">
                    <th>&nbsp;</th>
                    <th class="align-right"><a href="javascript:void(0)" data-col="order_count" title="Учитываются только оплаченные заказы">Заказы</a></th>
                    <th class="align-right"><a href="javascript:void(0)" data-col="sales" title="Общая сумма всех оплаченных заказов">Продажи</a></th>
                    <th class="align-right"><a href="javascript:void(0)" data-col="average_order" title="Средняя сумма заказа">Средний чек</a></th>
                    <th class="align-right"><a href="javascript:void(0)" data-col="profit" class="inline" title="Прибыль = Сумма заказа &minus; Доставка &minus; Налог &minus; Закупочная стоимость">Прибыль</a></th>

                    <?php if ($_smarty_tpl->tpl_vars['roi_enabled']->value){?>
                        <th class="align-right"><a href="javascript:void(0)" data-col="cost" title="Затраты на маркетинг">Затраты</a></th>
                        <th class="align-right"><a href="javascript:void(0)" data-col="roi" title="Возврат инвестиций за выбранный период (ROI, Return On Investment) = Прибыль / Затраты на маркетинг">ROI</a></th>
                        <th class="align-right" title="Показатель ROI, рассчитанный за все время. Наиболее вероятно текущий показатель ROI с увеличением выбранного периода будет стремиться к этому значению.">ROI за все время</th>
                    <?php }?>
                </tr>
                <tr class="s-summary-row">
                    <td>Итого</td>
                    <td class="align-right"><?php echo $_smarty_tpl->tpl_vars['totals']->value['order_count'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['abtest_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
: <?php echo ifempty($_smarty_tpl->tpl_vars['v']->value['totals']['order_count'],0);?>
</span><?php } ?></td>
                    <td class="s-sales-cell align-right"><?php echo $_smarty_tpl->tpl_vars['totals']->value['sales_formatted'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['abtest_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['totals']['sales_formatted'];?>
</span><?php } ?></td>
                    <td class="align-right"><?php echo $_smarty_tpl->tpl_vars['totals']->value['avg_order_formatted'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['abtest_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['totals']['avg_order_formatted'];?>
</span><?php } ?></td>
                    <td class="s-profit-cell align-right"><?php echo $_smarty_tpl->tpl_vars['totals']->value['profit_formatted'];?>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['abtest_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
: <?php echo $_smarty_tpl->tpl_vars['v']->value['totals']['profit_formatted'];?>
</span><?php } ?></td>

                    <?php if ($_smarty_tpl->tpl_vars['roi_enabled']->value){?>
                        <td class="align-right">
                            <?php echo $_smarty_tpl->tpl_vars['totals']->value['cost_formatted'];?>

                        </td>
                        <td class="align-right"><strong class="s-roi <?php if ($_smarty_tpl->tpl_vars['totals']->value['roi']>=130){?>s-positive<?php }elseif($_smarty_tpl->tpl_vars['totals']->value['roi']>=100){?>s-questionable<?php }elseif($_smarty_tpl->tpl_vars['totals']->value['cost']){?>s-negative<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['totals']->value['cost']){?>
                                <?php echo round($_smarty_tpl->tpl_vars['totals']->value['roi']);?>
%</strong>
                            <?php }else{ ?>
                                <span class="gray">&mdash;</span>
                            <?php }?>
                        </td>
                        <td class="align-right">
                            <?php if ($_smarty_tpl->tpl_vars['totals']->value['cost']){?>
                                <?php echo $_smarty_tpl->tpl_vars['totals']->value['lifetime_roi'];?>
%
                            <?php }else{ ?>
                                <span class="gray">&mdash;</span>
                            <?php }?>
                        </td>
                    <?php }?>
                </tr>
            </thead>

            <tbody>
                <?php /*  Call merged included template "./sales_report_rows.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./sales_report_rows.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '8952781475c7f67a3c99573-20041990');
content_5c7f67a3d37933_24255339($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./sales_report_rows.html" */?>
            </tbody>

        </table>

        <!-- BEGIN DETAILS BLOCK -->

        <?php $_smarty_tpl->tpl_vars['order_list_html'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['order_list_html']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['order_items_list_html'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['order_items_list_html']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>

        <div id="s-details-item-list-container" <?php if (!$_smarty_tpl->tpl_vars['order_list_html']->value&&!$_smarty_tpl->tpl_vars['order_items_list_html']->value){?>style="display: none;"<?php }?>>
            <ul class="menu-h s-details-item-list-tabs">
                <li class="s-details-item selected" data-tab="orders">
                    <a href="javascript:void(0)" class="s-details-item-link inline-link" data-tab="orders"><b><i>Заказы</i></b></a>
                </li>
                <li class="s-details-item" data-tab="order-items">
                    <a href="javascript:void(0)" class="s-details-item-link inline-link" data-tab="order-items"><b><i>Заказанные товары</i></b></a>
                </li>
            </ul>

            <div class="block not-padded">
                <div class="s-details-items-list-tab-content" data-tab="orders">
                    <?php echo $_smarty_tpl->tpl_vars['order_list_html']->value;?>

                </div>
                <div class="s-details-items-list-tab-content" data-tab="order-items" style="display: none;">
                    <?php echo $_smarty_tpl->tpl_vars['order_items_list_html']->value;?>

                </div>
            </div>

        </div>

        <!-- END DETAILS BLOCK -->

        <p id="load-more-rows">
            <a href="javascript:void" class="inline-link"><b>Показать еще...</b></a>
        </p>

        <div class="clear-both"></div>
    </div>
</div>

<div class="hidden">
    <ul class="menu-h">
        <li>
            <select id="s-sales-report-storefront-selector" class="storefront-selector">
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

<script>
    // Tooltips
    ( function($) {

        var bindEvents = function() {
            var $tooltip_array = $("#sales-report-table th a");

            $tooltip_array.on("mousemove", function(e) {
                onMove(e)
            });

            $tooltip_array.on("mouseenter", function(e) {
                onHover(e, $(this));
            });

            $tooltip_array.on("mouseleave", function() {
                onHoverOut( $(this) );
            });
        };

        var onHover = function(event, element) {
            var titleText = element.attr('title');

            if (titleText) {
                // Set Title to Data
                element.data('tiptext', titleText).removeAttr('title');

                // Render Tooltip
                $('<div class="tooltip-bubble"></div>')
                        .text(titleText)
                        .appendTo('body')
                        .css({
                            top: (event.pageY - 10) + 'px',
                            left: (event.pageX + 20) + 'px'
                        })
                        .fadeIn('slow');
            }
        };

        var onHoverOut = function(element) {
            var title_text = element.data('tiptext');

            if (title_text) {
                element.attr('title', title_text);
                $('.tooltip-bubble').remove();
            }
        };

        var onMove = function(event) {
            $(".tooltip-bubble").css({
                top: (event.pageY - 10) + 'px',
                left: (event.pageX + 20) + 'px'
            });
        };

        $(document).ready( function() {
            bindEvents();
        });

    })(jQuery);
</script>

<script type="text/javascript">(function() { "use strict";
    document.title = "Продажи — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    $.wa.locale = $.extend($.wa.locale, {
        'Sales': "Продажи",
        'Profit': "Прибыль"
    });

    var current_sort = <?php echo json_encode(trim($_smarty_tpl->tpl_vars['request_options']->value['sort'],'!'));?>
; // sales, profit, etc.
    var current_order = <?php if (substr($_smarty_tpl->tpl_vars['request_options']->value['sort'],0,1)=='!'){?>'desc'<?php }else{ ?>'asc'<?php }?>;
    var single_page_table = <?php if ($_smarty_tpl->tpl_vars['more_rows_exist']->value){?>false<?php }else{ ?>true<?php }?>;
    var request_params = <?php echo json_encode($_smarty_tpl->tpl_vars['request_options']->value);?>
;
    var action_url = '?module=reports&action=sales';

    // Highlight active item in sidebar
    request_params.type && $('#s-sidebar a[href="#/sales/type='+request_params.type+'"]').closest('li').addClass('selected').siblings().removeClass('selected');

    // drilldown, backlink text
    $('#reportscontent .s-back-title').text($('#grouping-type-selector .selected').text());

    // Human-readable period description in page header
    (function() {
        var $timeframe_selected_li = $('#mainmenu .s-reports-timeframe .selected');
        if ($timeframe_selected_li.length && $timeframe_selected_li.data('timeframe') != 'custom') {
            $('#period-description').html($timeframe_selected_li.find('a').html());
        }
    })();

    // Storefront selector logic
    (function() { "use strict";

        var $storefront_selector = $('#s-sales-report-storefront-selector').removeAttr('id');

        // Move selector into the top menu wrapper
        $('#s-reports-custom-controls').empty().append($storefront_selector.closest('ul'));

        // Reload page when user changes something in the selector
        $storefront_selector.change(function() {
            $.post(action_url, $.extend({ }, request_params, { sales_channel: $storefront_selector.val() }), function(r) {
                $('#reportscontent').html(r);
            });
        });

    })();

    // Reload page when user changes value in A/B test selector
    $('#s-sales-abtest-selector').change(function() {
        $(this).parent().append('<i class="icon16 loading"></i>');
        $.post(action_url, $.extend({ }, request_params, { abtest: $(this).val() }), function(r) {
            $('#reportscontent').html(r);
        });
    });

    // Table sorting logic
    (function() { "use strict";

        var $table = $('#sales-report-table');
        var $load_more_link = $('#load-more-rows');
        if (single_page_table) {
            $load_more_link.remove();
        }

        highlightSortingColumn();

        // Reorder the table when user clicks on a column header
        $table.on('click', 'thead a', function() {
            var $a = $(this);
            var col = $a.data('col');
            if (col == current_sort) {
                if (current_order == 'desc') {
                    current_order = 'asc';
                } else {
                    current_order = 'desc';
                }
            } else {
                current_sort = col;
                current_order = 'desc';
            }

            request_params['sort'] = (current_order == 'desc' ?'!':'')+current_sort;
            $a.append('<i class="icon16 loading"></i>');
            var rnd_protect = $.reports.rnd_protect = Math.random();
            $.post(action_url, $.extend({ }, request_params/*, { table_only: 1 }*/), function(r) {
                if (rnd_protect != $.reports.rnd_protect) {
                    return; // too late, user clicked something else
                }
                /*$a.children('.loading').remove();
                $table.children('tbody').html(r);
                highlightSortingColumn();
                $load_more_link.show();*/
                $('#reportscontent').html(r);
            });
        });

        // Link to load more rows
        $load_more_link.click(function() {
            if ($load_more_link.children('.loading').length) {
                return;
            }

            $load_more_link.append('<i class="icon16 loading"></i>');
            var rnd_protect = $.reports.rnd_protect = Math.random();
            var current_count = $('#sales-report-table>tbody>tr').length;
            $.post(action_url, $.extend({ }, request_params, { table_only: 1, start: current_count }), function(r) {
                $load_more_link.children('.loading').remove();
                if (rnd_protect != $.reports.rnd_protect) {
                    return; // too late, user clicked something else
                }
                r = $.trim(r)
                var trs = r ? $.parseHTML(r) : [];
                if (trs.length) {
                    $table.children('tbody').append(trs);
                } else {
                    $load_more_link.hide();
                }
                highlightSortingColumn();
            });
        });

        // Helper to update visual indication when sorting changes
        function highlightSortingColumn() {
            var $tds = $table.find('td');
            $tds.filter('.column-'+current_sort).addClass('bold');
            $tds.filter(':not(.column-'+current_sort+')').removeClass('bold');

            var $thead = $table.children('thead');
            $thead.find('i.sorting-indicator').remove();
            $thead.find('a[data-col="'+current_sort+'"]').append('<i class="icon16 '+(current_order == 'desc' ? 'darr' : 'uarr')+' sorting-indicator"></i>')
                .closest('th').addClass('bold').siblings().removeClass('bold');
        }
    })();

    var getParamsFromHash = function () {
        var hash = $.reports.hash || 'sales/type=sources';
        var prefix = 'sales/';
        var prefix_len = prefix.length;
        var hash_slice = hash.slice(0, prefix_len);
        if (hash_slice === prefix || hash === prefix.slice(0, -1)) {
            var hash_params = hash.slice(prefix.length) || '';
            hash_params = hash_params.slice(-1) !== '/' ? hash_params : hash_params.slice(0, -1);
            return hash_params;
        }
        return '';
    };

    // drilldown logic
    (function () { "use strict";
        var $table = $('#sales-report-table');

        var applyNameFilterToHash = function (name) {
            name = name !== null ? name : undefined;
            var params = getParamsFromHash();
            var map = $.reports.parseParams(params);
            var key = 'filter[name]';
            if (map[key] !== name) {
                map[key] = name;
            }
            if (map[key] === undefined) {
                delete map[key];
            } else {
                delete map.details; // details in drill-down graph is prohibited
            }
            params = $.reports.unparseParams(map);

            return 'sales/' + params;
        };

        $table.on('click', '.s-reports-drilldown-link', function() {
            var link = $(this);
            var hash = applyNameFilterToHash(link.data('name'));
            if (hash !== $.reports.hash) {
                $.wa.setHash('/' + hash);
            }
            $('#s-sales-details').attr('disabled', true);
        });

        $('#s-reset-filter').click(function () {
            var hash = applyNameFilterToHash(null);
            if (hash !== $.reports.hash) {
                if (hash) {
                    $.wa.setHash('/' + hash);
                } else {
                    $.wa.setHash('');
                }
            }
            $('#s-sales-details').attr('disabled', false);
        });

    })();

    // details logic
    $('#s-sales-details').click(function () {
        var $this = $(this);
        var params = getParamsFromHash();
        var map = $.reports.parseParams(params);
        var details = $this.is(':checked') ? '1' : undefined;
        if (details) {
            $.storage.set('shop/reports/sales-details', '1')
        } else {
            $.storage.del('shop/reports/sales-details')
        }
        if (map.details !== details) {
            map.details = details;
        }
        if (map.details === undefined) {
            delete map.details;
        }
        params = $.reports.unparseParams(map);
        var hash = 'sales/' + params;
        hash !== $.reports.hash && $.wa.setHash(hash);
    });

    // details tab blocks
    (function (container) {
        container.find('.s-details-item-link').click(function () {
            var $link = $(this);
            var tab = $link.data('tab');
            var $tabs = $('.s-details-item');
            var $tab_blocks = $('.s-details-items-list-tab-content', container);

            $tabs.removeClass('selected').filter('[data-tab="' + tab + '"]').addClass('selected');
            $tab_blocks.hide().filter('[data-tab="' + tab + '"]').show();
        });
    })($('#s-details-item-list-container'));


})();</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-06 09:24:35
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/sales_sidebar.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7f67a3cc6602_58695708')) {function content_5c7f67a3cc6602_58695708($_smarty_tpl) {?><div class="sidebar left200px" id="s-sidebar">
    <div class="block">
        <ul class="menu-v not" id="grouping-type-selector">
            <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['type_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['type_id']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
                <li data-type-id="<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
">
                    <a href="#/sales/type=<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['menu_name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                </li>
            <?php } ?>

            <li class="top-padded"><a href="#/sales/costs/" class="gray"><i class="icon16 dollar"></i>Затраты на маркетинг</a></li>
            <li class="bottom-padded"><a href="#/sales/abtesting/" class="gray"><i class="icon16 split"></i>A/B-тесты</a></li>

            <li class="top-padded bordered-top">
                <label>
                    <input type="checkbox" class="s-sales-details" id="s-sales-details"
                       <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['name'])&&!empty($_smarty_tpl->tpl_vars['is_details']->value)){?>checked="checked"<?php }?>
                       <?php if (isset($_smarty_tpl->tpl_vars['filter']->value['name'])){?>disabled="disabled"<?php }?>>
                            Детализация
                </label>
            </li>

        </ul>
    </div>
</div>
<script>(function() { "use strict";

    var $ul = $('#grouping-type-selector');

    // Highlight selected item in sidebar
    var hash = window.location.hash || '#/sales/type=sources';
    $ul.find('a[href="'+hash+'"]').closest('li').addClass('selected');

    // Loading indicator when user clicks on a link in sidebar
    $ul.on('click', 'li', function() {
        var $li = $(this);
        var $a = $li.find('a');
        if ($a.length && $a.attr('href') != window.location.hash) {
            $li.addClass('selected').siblings().removeClass('selected');
        }
    });

})();</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-06 09:24:35
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/sales_report_rows.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7f67a3d37933_24255339')) {function content_5c7f67a3d37933_24255339($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->index++;
?>
    <?php $_smarty_tpl->tpl_vars['abt_rows'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['abtest_variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><?php if (isset($_smarty_tpl->tpl_vars['v']->value['data'][ifset($_smarty_tpl->tpl_vars['row']->value['orig_name'],$_smarty_tpl->tpl_vars['row']->value['name'])])){?><?php $_smarty_tpl->createLocalArrayVariable('abt_rows', null, 0);
$_smarty_tpl->tpl_vars['abt_rows']->value[$_smarty_tpl->tpl_vars['v']->value['name']] = $_smarty_tpl->tpl_vars['v']->value['data'][ifset($_smarty_tpl->tpl_vars['row']->value['orig_name'],$_smarty_tpl->tpl_vars['row']->value['name'])];?><?php }?><?php } ?>
    <?php $_smarty_tpl->tpl_vars['chart_num'] = new Smarty_variable(min($_smarty_tpl->tpl_vars['row']->index,$_smarty_tpl->tpl_vars['max_n_graphs']->value), null, 0);?>
    <tr data-chart-num="<?php echo $_smarty_tpl->tpl_vars['chart_num']->value;?>
"
            <?php if (!empty($_smarty_tpl->tpl_vars['row']->value['name'])&&($_smarty_tpl->tpl_vars['type_id']->value=='sources')){?>
                title="<?php echo htmlspecialchars(sprintf('Сумма заказов, оформленных после перехода на витрину магазина с сайта %s. Первоначальный источник перехода на витрину покупателей, оформивших такие заказы, не учитывается.',$_smarty_tpl->tpl_vars['row']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
"
            <?php }?>
    >
        <td class="column-name"><?php if (!empty($_smarty_tpl->tpl_vars['details_graph_data']->value)){?><span class="s-chart-color" data-color-id="<?php echo $_smarty_tpl->tpl_vars['chart_num']->value;?>
"></span><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['row']->value['icon_class'])){?><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['row']->value['icon_class'];?>
"></i><?php }?><?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['name'])){?><a href="javascript:void(0)" class="s-reports-drilldown-link" data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['orig_name'], ENT_QUOTES, 'UTF-8', true);?>
" style="display: inline-block;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
        <td class="align-right column-order_count">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['order_count'];?>

            <?php  $_smarty_tpl->tpl_vars['abt_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['abt_row']->_loop = false;
 $_smarty_tpl->tpl_vars['abt_variant_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['abt_row']->key => $_smarty_tpl->tpl_vars['abt_row']->value){
$_smarty_tpl->tpl_vars['abt_row']->_loop = true;
 $_smarty_tpl->tpl_vars['abt_variant_name']->value = $_smarty_tpl->tpl_vars['abt_row']->key;
?>
                <br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['abt_variant_name']->value, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo $_smarty_tpl->tpl_vars['abt_row']->value['order_count'];?>
</span>
            <?php } ?>
        </td>
        <td class="align-right column-sales">
            <?php echo wa_currency($_smarty_tpl->tpl_vars['row']->value['sales'],$_smarty_tpl->tpl_vars['def_cur']->value,'%2{h}');?>

            <?php  $_smarty_tpl->tpl_vars['abt_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['abt_row']->_loop = false;
 $_smarty_tpl->tpl_vars['abt_variant_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['abt_row']->key => $_smarty_tpl->tpl_vars['abt_row']->value){
$_smarty_tpl->tpl_vars['abt_row']->_loop = true;
 $_smarty_tpl->tpl_vars['abt_variant_name']->value = $_smarty_tpl->tpl_vars['abt_row']->key;
?>
                <br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['abt_variant_name']->value, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo wa_currency($_smarty_tpl->tpl_vars['abt_row']->value['sales'],$_smarty_tpl->tpl_vars['def_cur']->value,'%2{h}');?>
</span>
            <?php } ?>
        </td>
        <td class="align-right column-average_order">
            <?php if ($_smarty_tpl->tpl_vars['row']->value['order_count']>0){?><?php echo wa_currency($_smarty_tpl->tpl_vars['row']->value['sales']/$_smarty_tpl->tpl_vars['row']->value['order_count'],$_smarty_tpl->tpl_vars['def_cur']->value,'%2{h}');?>
<?php }else{ ?><span class="gray">&mdash;</span><?php }?>
            <?php  $_smarty_tpl->tpl_vars['abt_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['abt_row']->_loop = false;
 $_smarty_tpl->tpl_vars['abt_variant_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['abt_row']->key => $_smarty_tpl->tpl_vars['abt_row']->value){
$_smarty_tpl->tpl_vars['abt_row']->_loop = true;
 $_smarty_tpl->tpl_vars['abt_variant_name']->value = $_smarty_tpl->tpl_vars['abt_row']->key;
?>
                <br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['abt_variant_name']->value, ENT_QUOTES, 'UTF-8', true);?>
:
                    <?php if ($_smarty_tpl->tpl_vars['abt_row']->value['order_count']>0){?><?php echo wa_currency($_smarty_tpl->tpl_vars['abt_row']->value['sales']/$_smarty_tpl->tpl_vars['abt_row']->value['order_count'],$_smarty_tpl->tpl_vars['def_cur']->value,'%2{h}');?>
<?php }else{ ?><span class="gray">&mdash;</span><?php }?>
                </span>
            <?php } ?>
        </td>
        <td class="align-right column-profit">
            <?php echo wa_currency($_smarty_tpl->tpl_vars['row']->value['profit'],$_smarty_tpl->tpl_vars['def_cur']->value,'%2{h}');?>

            <?php  $_smarty_tpl->tpl_vars['abt_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['abt_row']->_loop = false;
 $_smarty_tpl->tpl_vars['abt_variant_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['abt_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['abt_row']->key => $_smarty_tpl->tpl_vars['abt_row']->value){
$_smarty_tpl->tpl_vars['abt_row']->_loop = true;
 $_smarty_tpl->tpl_vars['abt_variant_name']->value = $_smarty_tpl->tpl_vars['abt_row']->key;
?>
                <br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['abt_variant_name']->value, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo wa_currency($_smarty_tpl->tpl_vars['abt_row']->value['profit'],$_smarty_tpl->tpl_vars['def_cur']->value,'%2{h}');?>
</span>
            <?php } ?>
        </td>

        <?php if ($_smarty_tpl->tpl_vars['roi_enabled']->value){?>
            <td class="align-right column-cost">
                <div class="edit-icon-wrapper">
                    <a href="?action=reports#/sales/costs/"><i class="icon16 edit"></i></a>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['row']->value['cost']){?><?php echo wa_currency($_smarty_tpl->tpl_vars['row']->value['cost'],$_smarty_tpl->tpl_vars['def_cur']->value,'%2{h}');?>
<?php }else{ ?><span class="gray">&mdash;</span><?php }?>
            </td>
            <td class="align-right column-roi">
                <strong class="s-roi <?php if ($_smarty_tpl->tpl_vars['row']->value['roi']>=130){?>s-positive<?php }elseif($_smarty_tpl->tpl_vars['row']->value['roi']>=100){?>s-questionable<?php }elseif($_smarty_tpl->tpl_vars['row']->value['cost']){?>s-negative<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['cost']){?><?php echo round($_smarty_tpl->tpl_vars['row']->value['roi']);?>
%<?php }else{ ?><span class="gray">&mdash;</span><?php }?>
                </strong>
            </td>
            <td class="align-right s-roi column-alltime-roi">
                <?php if ($_smarty_tpl->tpl_vars['row']->value['cost']&&!empty($_smarty_tpl->tpl_vars['row']->value['lifetime_roi'])){?><?php echo $_smarty_tpl->tpl_vars['row']->value['lifetime_roi'];?>
%<?php }else{ ?><span class="gray">&mdash;</span><?php }?>
            </td>
        <?php }?>

    </tr>
<?php } ?>

<?php }} ?>