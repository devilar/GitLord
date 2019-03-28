<?php /* Smarty version Smarty-3.1.14, created on 2019-03-26 00:00:19
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/ReportsProductsWhatToSell.html" */ ?>
<?php /*%%SmartyHeaderCode:10760395555c9941631f4aa7-33729820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69ab401955366d8fa686bb929a086b4a79dabb7c' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/ReportsProductsWhatToSell.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10760395555c9941631f4aa7-33729820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'only_sold' => 0,
    'l' => 0,
    'limit' => 0,
    'cur_tmpl' => 0,
    'wa' => 0,
    'cur_tmpl_plain' => 0,
    'locale_info' => 0,
    'products' => 0,
    'request_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c994163320444_98094045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c994163320444_98094045')) {function content_5c994163320444_98094045($_smarty_tpl) {?><div class="content">
    <div class="block double-padded ">
        <div class="block half-padded float-right">
            <ul class="menu-h">
                <li>
                    <select id="only-sold-selector">
                        <option value="">Все товары, сортированные по прибыльности</option>
                        <option value="1"<?php if ($_smarty_tpl->tpl_vars['only_sold']->value){?> selected<?php }?>>Товары, которые были куплены в течение отчетного периода хотя бы раз</option>
                    </select>
                </li>
                <li>
                    <select id="limit-selector">
                        <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = array(100,250,500); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['l']->value==$_smarty_tpl->tpl_vars['limit']->value){?> selected<?php }?>><?php echo sprintf('%d товаров',htmlspecialchars($_smarty_tpl->tpl_vars['l']->value, ENT_QUOTES, 'UTF-8', true));?>
</option>
                        <?php } ?>
                    </select>
                </li>
            </ul>
        </div>
        <h1>
            Что продавать
        </h1>

        <table id="s-reports-what-to-sell-table" class="zebra">
            <thead>
                <tr class="s-marked-row">
                    <td colspan="5" style="padding-left: 0 !important; padding-top: 0 !important;">
                        <ul class="menu-h s-product-reports">
                            <li><a href="#/products/bestsellers/">Хиты продаж</a></li>
                            <li><a href="#/products/assets/">Активы</a></li>
                            <li class="selected"><a href="#/products/whattosell/">Что продавать</a></li>
                        </ul>
                    </td>
                    <td class="marked-column" colspan="4" style="text-align: center; vertical-align: middle;">
                        <span class="s-prediction">*</span>Прогноз:
                        <select id="future-period-selector">
                            <option value="1">1 месяц</option>
                            <option value="3">3 месяца</option>
                            <option value="6">6 месяцев</option>
                            <option value="12">1 год</option>
                            <option value="24">2 года</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr class="s-marked-row white s-header-row">
                    <th></th>
                    <th></th>
                    <th class="align-right nowrap"><a href="javascript:void(0)" title="Прибыль от реализации единицы товара">Прибыль на единицу <i class="icon16 darr"></i></a></th>
                    <th></th>
                    <th class="align-right nowrap"><a href="javascript:void(0)" title="Среднее количество единиц товара, реализуемых в течение месяца">Продаж в месяц</a></th>
                    <th class="marked-column align-right s-wider-cell nowrap">
                        <a href="javascript:void(0)" title="Оценка общей суммы продаж за выбранный период"><span class="s-prediction">*</span>Продажи</a>
                    </th>
                    <th class="marked-column align-right s-wider-cell nowrap">
                        <a href="javascript:void(0)" title="Оценка общего количества реализованных единиц товара за выбранный период"><span class="s-prediction">*</span>К доставке</a>
                    </th>
                    <th class="marked-column align-right s-wider-cell nowrap">
                        <a href="javascript:void(0)" title="Оценка дополнительных расходов на закупку недостающего количества товаров"><span class="s-prediction">*</span>Вложения</a>
                    </th>
                    <th class="marked-column align-right s-wider-cell nowrap">
                        <a href="javascript:void(0)"title="Оценка общей выручки от реализации товаров"><span class="s-prediction">*</span>Доход</a>
                    </th>
                    <th></th>
                </tr>
                <tr class="s-summary-row">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="marked-column align-right s-sales-cell s-wider-cell nowrap">
                        <span class="total-sales"><?php echo sprintf($_smarty_tpl->tpl_vars['cur_tmpl']->value,'<span class="value"></span>');?>
</span>
                    </td>
                    <td class="marked-column align-right">
                        <span class="total-to-ship"><span class="value"></span></span>
                    </td>
                    <td class="marked-column align-right s-costs-cell s-wider-cell nowrap">
                        <span class="total-expenses"><?php echo sprintf($_smarty_tpl->tpl_vars['cur_tmpl']->value,'<span class="value"></span>');?>
</span>
                    </td>
                    <td class="marked-column align-right s-profit-cell s-wider-cell nowrap">
                        <span class="total-income"><?php echo sprintf($_smarty_tpl->tpl_vars['cur_tmpl']->value,'<span class="value"></span>');?>
</span>
                    </td>
                    <td style="position: relative;"><div style="position: absolute; left:0;right:0;top:-2px;bottom:-5px;background:#fff;"><!-- hoax element for hiding <tr> shadow --></div></td>
                </tr>

                <tr class="hidden template">
                    <td class="col-img"><a href="javascript:void(0)"><img src="" width="48" height="48"></a></td>
                    <td class="col-name"><a href="javascript:void(0)"><span class="product-name"></span></a> <span class="sku-names"></span></td>
                    <td class="col-margin align-right nowrap"><?php echo sprintf($_smarty_tpl->tpl_vars['cur_tmpl']->value,'<input type="text" class="short numerical input-margin hidden" placeholder="" value=""><span class="amount"></span>');?>
</td>
                    <td class="col-margin-bar"><span></span></td>
                    <td class="col-sold align-right">&times; <input type="text" class="short numerical input-sold" placeholder="" value=""></td>
                    <td class="marked-column col-sales align-right nowrap s-wider-cell"><?php echo sprintf($_smarty_tpl->tpl_vars['cur_tmpl']->value,'<span class="amount"></span>');?>
</td>
                    <td class="marked-column col-to-ship align-right"><span class="to-ship"></span><br><span class="hint"><?php echo sprintf_wp("%s in stock",'<span class="in-stock"></span>');?>
</span></td>
                    <td class="marked-column col-expenses align-right nowrap s-wider-cell"><?php echo sprintf($_smarty_tpl->tpl_vars['cur_tmpl']->value,'<span class="amount"></span>');?>
<br><span class="hint more-to-buy"><?php echo sprintf_wp("+%s item to buy",'<span class="more-to-buy-num"></span>');?>
</span></td>
                    <td class="marked-column col-income align-right nowrap s-wider-cell"><?php echo sprintf($_smarty_tpl->tpl_vars['cur_tmpl']->value,'<span class="amount"></span>');?>
</td>
                    <td class="col-income-bar s-wider-cell nowrap" data-title-tmpl="Рентабельность реализованной продукции = Прибыль (%s) / Закупочная стоимость (%s) = %s%%"><span><span></span></span> <i class="hidden small"></i></td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <div class="clear-both"></div>
    </div>
</div>

<script>
(function() { "use strict";

    document.title = "Что продавать — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";

    var cur_tmpl_plain = <?php echo json_encode($_smarty_tpl->tpl_vars['cur_tmpl_plain']->value);?>
;
    //var format_decimal_separator = "<?php echo ifset($_smarty_tpl->tpl_vars['locale_info']->value['decimal_point'],'.');?>
";
    var format_thousands_separator = "<?php echo ifset($_smarty_tpl->tpl_vars['locale_info']->value['thousands_sep'],' ');?>
";
    var format_regexp = new RegExp('\\B(?=(\\d{3})+(?!\\d))', 'g');

    var products = <?php echo json_encode($_smarty_tpl->tpl_vars['products']->value);?>
;
    var request_options = <?php echo json_encode($_smarty_tpl->tpl_vars['request_options']->value);?>
;
    var action_url = '?module=reportsproducts&action=whattosell';

    var $table = $('#s-reports-what-to-sell-table');
    var $period_selector = $('#future-period-selector');
    var $thead = $table.children('thead');

    // Reload page when user changes number of products on page
    var $limit_selector = $('#limit-selector');
    $limit_selector.change(function() {
        $limit_selector.after('<i class="icon16 loading"></i>');
        var limit = $limit_selector.val();
        $.storage.set('shop/reports/whattosell/limit', limit); // used in reports.js
        $.post(action_url, $.extend({}, request_options, { limit: limit }), function(r) {
            $('#reportscontent').html(r);
        });
    });

    // Reload page when user changes filtering selector
    var $only_sold_selector = $('#only-sold-selector');
    $only_sold_selector.change(function() {
        $only_sold_selector.after('<i class="icon16 loading"></i>');
        var val = $only_sold_selector.val();
        $.storage.set('shop/reports/whattosell/only_sold', val); // used in reports.js
        $.post(action_url, $.extend({}, request_options, { only_sold: val }), function(r) {
            $('#reportscontent').html(r);
        });
    });

    // Initialize table
    ( function() { "use strict";
        var $template_tr = $thead.children('tr.template'),
            trs = [],
            max_margin;

        $.each(products, function(i, p) {
            var $tr = $template_tr.clone().removeClass('hidden template').attr('data-id', p.id).data('product', p);
            if (p.image_id) {
                $tr.find('> .col-img a').attr('href', '?action=products#/product/'+p.id+'/');
                $tr.find('> .col-img img').attr('src', p.image_url);
            } else {
                $tr.find('> .col-img').empty();
            }
            $tr.find('> .col-name a').attr('href', '?action=products#/product/'+p.id+'/');
            $tr.find('> .col-name .product-name').text(p.name);
            $tr.find('> .col-name .sku-names').text(p.sku_names);
            $tr.find('> .col-margin input').attr('placeholder', p.margin);
            $tr.find('> .col-margin .amount').html(p.margin);
            $tr.find('> .col-sold input').attr('placeholder', p.sold);
            $tr.find('> .col-sold input').attr('value', p.sold);
            $tr.find('> .col-to-ship .in-stock').html(formatNum(p.count));
            trs.push($tr[0]);
        });

        var period = $.storage.get('shop/reports/whattosell/period');
        period && $period_selector.val(period);

        $table.children('tbody').empty().append(trs);
        updateTable();
    })();

    // Update table when something changes in inputs
    ( function() { "use strict";
        var timeout = null;
        $table.on('change keyup', function() {
            timeout && clearTimeout(timeout);
            timeout = setTimeout(function() {
                timeout = null;
                updateTable();
            }, 250);
        });
    })();

    $period_selector.on('change', function() {
        $.storage.set('shop/reports/whattosell/period', $(this).val());
        updateTable();
    });

    // Fix for menu-h at thead
    $thead.find(".s-product-reports").on("click", function(event) {
        event.stopPropagation();
    });

    // Sort table when user clicks on a column header
    $thead.on('click', 'a', function() {
        $thead.find('.darr,.uarr').remove();
        var $a = $(this);
        var $td = $a.closest('th,td');
        $.reports.sortTable($td);
        $a.append('<i class="icon16 darr"></i>');
        $.storage.set('shop/reports/whattosell/sort_col', $td.index());
    });

    // Initial sort
    ( function() {
        var sort_col = $.storage.get('shop/reports/whattosell/sort_col');
        sort_col && $thead.find('>.s-header-row>*').eq(sort_col).find('a').click();
    })();

    // Helper to recalculate all amounts in table depending on inputs and period selector
    function updateTable() {
        var period_multiplier = $period_selector.val();
        var $trs = $table.find('> tbody> tr');

        var max_sales = 0;
        var max_margin = 0;
        var total_sales = 0;
        var total_to_ship = 0;
        var total_purchase = 0;
        var total_income = 0;

        // Update estimated sales, # to ship, expenses and income
        $trs.each(function() {
            var $tr = $(this);
            var p = $tr.data('product');
            var $margin_input = $tr.find('> .col-margin input');
            var $sold_input = $tr.find('> .col-sold input');

            var margin = $margin_input.val() || p.margin;
            var sold = $sold_input.val() || p.sold;

            if (!margin) {
                $margin_input.addClass('error');
                margin = 0;
            } else {
                $margin_input.removeClass('error');
            }
            if (isNaN(sold)) {
                $sold_input.addClass('error');
                sold = 0;
            } else {
                $sold_input.removeClass('error');
            }

            var sales = Math.round(p.price * sold * period_multiplier);
            var to_ship = sold * period_multiplier;
            var more_to_buy = Math.max(0, to_ship - p.count);
            var purchase = Math.round(more_to_buy*p.purchase);
            var income = Math.round(sales - purchase);

            max_margin = Math.max(max_margin, margin);
            max_sales = Math.max(max_sales, sales);

            total_sales += sales;
            total_to_ship += to_ship;
            total_purchase += purchase;
            total_income += income;

            $tr.find('.col-sales').data('sort', sales).find('.amount').html(formatNum(sales));
            $tr.find('.col-expenses').data('sort', purchase).find('.amount').html(formatNum(purchase));
            $tr.find('.col-to-ship').data('sort', to_ship).find('.to-ship').html(formatNum(to_ship));
            $tr.find('.col-income').data('sort', income).find('.amount').html(formatNum(income));
            $tr.find('.col-margin').data('sort', margin);
            $tr.find('.col-sold').data('sort', sold);
            if (more_to_buy) {
                $tr.find('> .col-expenses .more-to-buy').css('display', 'inline').find('.more-to-buy-num').html(formatNum(more_to_buy));
            } else {
                $tr.find('> .col-expenses .more-to-buy').css('display', 'none').find('.more-to-buy-num').html('0');
            }

            var $income_bar_td = $tr.find('.col-income-bar');
            if (purchase > 0) {
                var profitability = Math.round(income*100/purchase);
                $income_bar_td.attr('title',
                    ($income_bar_td.data('title-tmpl')||'')
                        .replace('%s', cur_tmpl_plain.replace('%s', formatNum(income)))
                        .replace('%s', cur_tmpl_plain.replace('%s', formatNum(purchase)))
                        .replace('%s', profitability)
                        .replace('%%', '%')
                );
                $income_bar_td.find('i').css('display', 'inline').html(profitability+'%');
            } else {
                $income_bar_td.find('i').css('display', 'none').html('');
                $income_bar_td.attr('title', '');
            }

            $tr.data('purchase', purchase);
            $tr.data('margin', margin);
            $tr.data('sales', sales);
        });

        // Update bars
        $trs.each(function() {
            var $tr = $(this);
            var purchase = $tr.data('purchase');
            var margin = $tr.data('margin');
            var sales = $tr.data('sales');

            $tr.find('> .col-margin-bar span').css('width', (max_margin > 0 ? margin * 100 / max_margin : 0)+'px');
            $tr.find('> .col-income-bar span span').css('width', (max_sales > 0 ? purchase * 200 / max_sales : 0)+'px')
                .parent().css('width', (max_sales > 0 ? sales * 200 / max_sales : 0)+'px');
        });

        // Update totals
        $thead.find('.total-sales .value').html(formatNum(total_sales));
        $thead.find('.total-to-ship .value').html(formatNum(total_to_ship));
        $thead.find('.total-expenses .value').html(formatNum(total_purchase));
        $thead.find('.total-income .value').html(formatNum(total_income));
    }

    function formatNum(num) {
        return Math.round(num).toFixed().replace(format_regexp, format_thousands_separator);
    }

})();
</script>
<?php }} ?>