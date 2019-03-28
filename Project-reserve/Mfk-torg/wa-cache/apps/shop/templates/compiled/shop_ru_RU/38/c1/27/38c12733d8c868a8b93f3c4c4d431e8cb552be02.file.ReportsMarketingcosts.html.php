<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 00:19:03
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/ReportsMarketingcosts.html" */ ?>
<?php /*%%SmartyHeaderCode:6899255795c86d0c78ca2e9-35803687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38c12733d8c868a8b93f3c4c4d431e8cb552be02' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/ReportsMarketingcosts.html',
      1 => 1543322182,
      2 => 'file',
    ),
    '6f9f4b4e4b365e75c2ff96d578034e99800170bd' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/sales_sidebar.html',
      1 => 1543322182,
      2 => 'file',
    ),
    '05f1e27743fb26242c920307c801107bf1448e66' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/mcosts_editor.html',
      1 => 1543322182,
      2 => 'file',
    ),
    '4d84f27c7c6fa45af836fe3730dc9ebad8f25540' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/mcosts_rows.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6899255795c86d0c78ca2e9-35803687',
  'function' => 
  array (
    'format_nice_date' => 
    array (
      'parameter' => 
      array (
        's' => NULL,
        'e' => NULL,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
    'graph_data' => 0,
    'expenses' => 0,
    'limit' => 0,
    'request_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c86d0c79b5cd9_46326085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c86d0c79b5cd9_46326085')) {function content_5c86d0c79b5cd9_46326085($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" type="text/javascript"></script>

<?php /*  Call merged included template "./sales_sidebar.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./sales_sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '6899255795c86d0c78ca2e9-35803687');
content_5c86d0c78f6db2_22557704($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./sales_sidebar.html" */?>

<div class="content left200px">
    <div class="block double-padded" style="margin-bottom:300px;">

        <h1>Затраты на маркетинг</h1>

        <div class="graph-container">
            <script>
                 (function() {
                    if (typeof showCostsGraph == 'undefined') {
                        return $.ajax({
                              dataType: "script",
                              url: "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/js/charts/d3chart-costs.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
",
                              cache: true
                        });
                    } else {
                        return $.Deferred(function(d) {
                            d.resolve();
                        });
                    }
                })().done(function() {
                    showCostsGraph(<?php echo json_encode($_smarty_tpl->tpl_vars['graph_data']->value);?>
);
                });
            </script>
            <!-- CHART WRAPPERS -->
            <div class="costs-wrapper"></div>
            <div class="hint-wrapper"></div>
        </div>

        <div id="s-mcosts-editor-wrapper" style="display:none;">
            <?php /*  Call merged included template "./mcosts_editor.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./mcosts_editor.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '6899255795c86d0c78ca2e9-35803687');
content_5c86d0c7916661_36164999($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./mcosts_editor.html" */?>
        </div>
        <div class="clear-both block" style="margin:40px 0 0 0">
            <a href="javascript:void(0)" id="s-new-expense-button" class="inline-link">
                <i class="icon16 add"></i>
                <b><i>Добавить запись</i></b>
            </a>
        </div>
        <div class="block">
            <?php if (count($_smarty_tpl->tpl_vars['expenses']->value)){?>
                <table class="zebra single-lined">
                    <tbody id="s-reports-marketing-costs-table">
                        <?php /*  Call merged included template "./mcosts_rows.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./mcosts_rows.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '6899255795c86d0c78ca2e9-35803687');
content_5c86d0c7965b92_64668207($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./mcosts_rows.html" */?>
                    </tbody>
                </table>
            <?php }else{ ?>
                <table class="zebra single-lined hidden"><tbody id="s-reports-marketing-costs-table"></tbody></table>
                <div class="empty expense-row">
                    <h3>В течение выбранного отчетного периода не было затрат на маркетинг</h3>
                    <p class="gray">Добавление затрат на маркетинг позволяет автоматизировать расчет возврата вложений в продвижение (ROI, Return On Investment) по каждому источнику покупателей и UTM-кампаниям.</p>
                </div>
            <?php }?>
        </div>

        <div class="clear-both block">
            <a href="javascript:void(0)" id="load-more-link" <?php if ($_smarty_tpl->tpl_vars['limit']->value>count($_smarty_tpl->tpl_vars['expenses']->value)){?> style="display:none"<?php }?>>Показать еще...</a>
        </div>
    </div>
</div>

<script>(function() { "use strict";

    document.title = "Затраты на маркетинг — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    var request_options = <?php echo json_encode($_smarty_tpl->tpl_vars['request_options']->value);?>

    var limit = <?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
;

    var $table = $('#s-reports-marketing-costs-table');
    var $editor_wrapper = $('#s-mcosts-editor-wrapper');
    $editor_wrapper.show().children().hide();
    var $load_more_link = $('#load-more-link');

    // when user clicks on an edit link in a table, load that row into editor
    $table.on('click', '.edit', function() {
        var expense_id = $(this).closest('.expense-row').data('expense-id');
        expense_id && showEditor(expense_id);
    });

    // Show empty editor when user clicks on a "new expense" button
    $('#s-new-expense-button').click(function() {
        showEditor('');
    });

    // "Load more" link fetches more rows into table
    $load_more_link.click(function() {
        if ($load_more_link.find('.loading').length) {
            return false;
        }
        var count = $table.children().length;
        $load_more_link.append('<i class="icon16 loading"></i>');
        $.post('?module=reportsmarketingcosts&action=rows', { start: count }, function(r) {
            $load_more_link.find('.loading').remove();
            $table.append($.parseHTML(r));
            updatePeriods();
            if ($table.children().length == count) {
                $load_more_link.hide();
            }
        });
    });

    // Update chart and table when something's changed via editor
    $editor_wrapper.on('successfull_save', function() {
        $editor_wrapper.slideUp();
        var count = $table.children().length;
        $table.html('<tr><td><i class="icon16 loading"></i></td></tr>');
        $.post('?module=reportsmarketingcosts&action=rows', $.extend({}, request_options, { limit: Math.max(limit, count) }), function(r) {
            $table.html(r).parent().show();
            updatePeriods();
        });
    });

    updatePeriods();

    // Helper to load HTML for expense editor
    var rnd1;
    function showEditor(expense_id) {
        var $input = $editor_wrapper.find('input[name="expense_id"]');
        var editor_expense_id = $input.val();
        if ($input.length && expense_id == editor_expense_id) {
            $editor_wrapper.children().show();
            $editor_wrapper.hide().slideDown();
        } else {
            var rnd2 = rnd1 = Math.random();
            $editor_wrapper.show().html('<div class="block"><i class="icon16 loading"></i></div>');
            $.get('?module=reportsmarketingcosts&action=editor&expense_id='+expense_id, function(r) {
                if (rnd2 == rnd1) {
                    $editor_wrapper.hide().html(r).slideDown();
                }
            });
        }
    }

    // Helper to update period bars in table
    function updatePeriods() {

        var MAX_BAR_WIDTH = 100;

        var $periods = $table.find('> .expense-row > td.period-td > .period');

        var min_ts = (new Date()).getTime() / 1000;
        var max_ts = 0;
        $periods.each(function() {
            var $period = $(this);
            var end_ts = $period.data('end-ts');
            end_ts > max_ts && (max_ts = end_ts);
            var start_ts = $period.data('start-ts');
            start_ts < min_ts && (min_ts = start_ts);
        });

        var ts_diff = max_ts - min_ts;
        if (ts_diff <= 0) {
            $periods.css('width', '250px').children('.period-bar').css('width', '0%');
            return;
        }

        $periods.each(function() {
            var $period = $(this);
            var end_ts = $period.data('end-ts');
            var start_ts = $period.data('start-ts');

            var period_width = ((max_ts - start_ts)*MAX_BAR_WIDTH / ts_diff);
            $period.css('width', period_width+'%');

            var bar_pos = ((max_ts - end_ts)*MAX_BAR_WIDTH / ts_diff);
            var bar_width = (period_width - bar_pos)*100 / period_width;
            $period.children('.period-bar').css('width', bar_width+'%');
        });
    }

})();</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 00:19:03
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/sales_sidebar.html" */ ?>
<?php if ($_valid && !is_callable('content_5c86d0c78f6db2_22557704')) {function content_5c86d0c78f6db2_22557704($_smarty_tpl) {?><div class="sidebar left200px" id="s-sidebar">
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
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 00:19:03
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/mcosts_editor.html" */ ?>
<?php if ($_valid && !is_callable('content_5c86d0c7916661_36164999')) {function content_5c86d0c7916661_36164999($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['uniqid'] = new Smarty_variable(str_replace('.','-',uniqid('s-',true)), null, 0);?>
<div class="block double-padded" id="<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
"><form action="?module=reportsmarketingcosts&action=editor">
    <div class="fields form width100px">
        <input type="hidden" name="expense_id" value="<?php echo $_smarty_tpl->tpl_vars['expense']->value['id'];?>
">
        <div class="field">
            <?php if ($_smarty_tpl->tpl_vars['expense']->value['id']){?>
                <a href="javascript:void" class="float-right" id="delete-expense-link"><i class="icon16 delete"></i>Удалить запись</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['expense']->value['id']){?>
                <h2>Редактировать запись</h2>
            <?php }else{ ?>
                <h2>Добавить запись</h2>
            <?php }?>
        </div>

        <div class="field">
            <div class="name">Сумма</div>
            <div class="value">
                <input type="text" name="expense[amount]" class="large bold numerical" value="<?php echo $_smarty_tpl->tpl_vars['expense']->value['amount'];?>
" placeholder="0">
                <?php echo $_smarty_tpl->tpl_vars['def_cur']->value;?>

            </div>
        </div>
        <div class="field">
            <div class="name">Канал</div>
            <div class="value no-shift">
                <select class="channel-selector" name="channel_selector">
                    <option></option>
                    <option disabled>--- Источники ---</option>
                    <?php  $_smarty_tpl->tpl_vars['ch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ch']->key => $_smarty_tpl->tpl_vars['ch']->value){
$_smarty_tpl->tpl_vars['ch']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ch']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-channel-type="source" data-color="<?php echo $_smarty_tpl->tpl_vars['ch']->value['color'];?>
"<?php if ($_smarty_tpl->tpl_vars['expense']->value['type']=='source'&&$_smarty_tpl->tpl_vars['expense']->value['name']==$_smarty_tpl->tpl_vars['ch']->value['name']){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ch']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                    <?php } ?>
                    <option value="" data-channel-type="source"<?php if ($_smarty_tpl->tpl_vars['expense']->value['type']=='source'&&empty($_smarty_tpl->tpl_vars['expense']->value['name'])){?> selected<?php }?>>Ввести доменное имя...</option>
                    <option disabled>--- Кампании ---</option>
                    <?php  $_smarty_tpl->tpl_vars['ch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campaigns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ch']->key => $_smarty_tpl->tpl_vars['ch']->value){
$_smarty_tpl->tpl_vars['ch']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ch']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" data-channel-type="campaign" data-color="<?php echo $_smarty_tpl->tpl_vars['ch']->value['color'];?>
"<?php if ($_smarty_tpl->tpl_vars['expense']->value['type']=='campaign'&&$_smarty_tpl->tpl_vars['expense']->value['name']==$_smarty_tpl->tpl_vars['ch']->value['name']){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ch']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                    <?php } ?>
                    <option value="" data-channel-type="campaign"<?php if ($_smarty_tpl->tpl_vars['expense']->value['type']=='campaign'&&empty($_smarty_tpl->tpl_vars['expense']->value['name'])){?> selected<?php }?>>Ввести идентификатор UTM-кампании...</option>
                </select>
                <input type="hidden" name="expense[color]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expense']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
">
                <input type="hidden" name="expense[type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expense']->value['type'], ENT_QUOTES, 'UTF-8', true);?>
">
                <input type="text" name="expense[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expense']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" style="display:none">
                <i class="icon16 color" style="background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expense']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
;"></i>

                <div class="js-colorpicker" style="display:none"></div>
            </div>
        </div>
        <div class="field">
            <div class="name">Витрина</div>
            <div class="value no-shift">
                <select name="expense[storefront]">
                    <option value="">Не указан</option>
                    <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefronts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['expense']->value['storefront']==$_smarty_tpl->tpl_vars['s']->value){?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="field">
            <div class="name">Оплаченный период</div>
            <div class="value no-shift">
                <label>
                    <input type="radio" name="expense_period_type" value="one_time"<?php if ($_smarty_tpl->tpl_vars['expense']->value['start']==$_smarty_tpl->tpl_vars['expense']->value['end']){?> checked<?php }?>>
                    Единоразовый
                </label>
                <span>
                    <input type="text" class="small" name="expense_period_single" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expense']->value['start'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <i class="icon16 calendar"></i>
                </span>
            </div>
            <div class="value no-shift">
                <label>
                    <input type="radio" name="expense_period_type" value="timeframe"<?php if ($_smarty_tpl->tpl_vars['expense']->value['start']!=$_smarty_tpl->tpl_vars['expense']->value['end']){?> checked<?php }?>>
                    Период <span class="hint">Введенная сумма будет равномерно распределена по дням всего указанного временного интервала, что позволяет сделать оценку ROI более точной.</span>
                </label>
                <div>
                    <span><input type="text" class="small" name="expense_period_from"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expense']->value['start'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <i class="icon16 calendar"></i></span>
                    &mdash;
                    <span><input type="text" class="small" name="expense_period_to"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expense']->value['end'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <i class="icon16 calendar"></i></span>
                </div>
            </label></div>
        </div>
        <div class="field">
            <div class="name">Заметка</div>
            <div class="value no-shift">
                <textarea name="expense[note]" placeholder="не обязательно"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expense']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>
        </div>
        <div class="field">
            <div class="value">
                <input type="submit" class="button green" value="Сохранить">
                или
                <a href="javascript:void(0)" class="cancel-button">отмена</a>
            </div>
        </div>
    </div>
    <div class="clear-both"></div>
</form></div>
<script>(function() { "use strict";

    var errors = <?php echo json_encode(ifempty($_smarty_tpl->tpl_vars['errors']->value,array()));?>
;
    var $wrapper = $('#<?php echo $_smarty_tpl->tpl_vars['uniqid']->value;?>
');
    var corfirm_deletion_message = "Вы уверены?";

    
    <?php if (empty($_smarty_tpl->tpl_vars['errors']->value)&&waRequest::post()&&$_smarty_tpl->tpl_vars['expense']->value['id']){?>
        $wrapper.trigger('successfull_save');
        $('<span><i class="icon16 yes"></i>'+"Сохранено"+'</span>').appendTo($wrapper.find(':submit:first').parent()).animate({
            opacity: 0
        }, 3000, function() {
            $(this).remove();
        });
    <?php }?>

    var $form = $wrapper.children('form');
    var $button = $form.find(':submit:first');
    var $channel_selector = $wrapper.find('select.channel-selector');
    var $channel_input_text = $channel_selector.parent().find('input[name="expense[name]"]');
    var $channel_input_hidden = $channel_selector.parent().find('input[name="expense[type]"]');
    var $channel_input_color = $channel_selector.parent().find('input[name="expense[color]"]');
    var $period_radios = $wrapper.find('input[name="expense_period_type"]');
    var expense_id = $form.find('[name="expense_id"]').val();

    if (!expense_id) {
        // Remember last selected storefront in local storage
        (function() { "use strict";
            var $selector = $form.find('[name="expense[storefront]"]').change(function() {
                $.storage.set('shop/marketingcosts/storefront', $selector.val());
            });

            if ($selector.children().length == 2) {
                $selector.val($selector.children().last().attr('value'));
            } else {
                $selector.val($.storage.get('shop/marketingcosts/storefront')||'');
            }
        })();
    }

    // Show error messages
    $.each(errors, function(name, error) {
        var $input = $form.find('[name="'+name+'"]').addClass('error');
        $input.closest('.value').append($('<em class="errormsg"></em>').text(error));
    });

    // Clear error messages when user modifies something
    $form.on('change keyup', '.error', function() {
        var $field = $(this).closest('.field');
        $field.find('.errormsg').remove();
        $field.find('.error').removeClass('error');
        return true;
    });

    // init datepickers
    $period_radios.closest('.field').find('input:text').datepicker({
        'dateFormat': 'yy-mm-dd'
    }).datepicker('hide');

    // Open datepickers when user clicks on a calendar icon
    $period_radios.closest('.field').on('click', '.calendar', function() {
        $(this).siblings('input').datepicker('show');
    });

    // Open colorpicker when user clicks on its icon
    var setColor = (function() { "use strict";
        var $colorpicker_wrapper = $wrapper.find('.js-colorpicker');
        var $icon = $colorpicker_wrapper.closest('.value').find('i.icon16.color');
        var $hiden = $channel_input_color;

        var farbtastic = $.farbtastic($colorpicker_wrapper, setColor);

        $icon.css('cursor', 'pointer').click(function() {
            $colorpicker_wrapper.slideToggle();
        });

        return setColor;

        function setColor(color) {
            $hiden.val(color);
            $icon.css('background', color);
            farbtastic.setColor(color);
            $channel_selector.children(':selected').data('color', color);
        }
    })();


    // Show/hide form elements depending on radios, etc.
    var animation_speed = 0;
    updateElements();
    $channel_selector.change(updateElements);
    $period_radios.change(updateElements);
    animation_speed = 'fast';

    // Close the editor when user clicks 'cancel' link
    $button.siblings('.cancel-button').click(function() {
        $wrapper.slideUp();
    });

    // Link to delete expense
    $('#delete-expense-link').click(function() {
        if (confirm(corfirm_deletion_message)) {
            $wrapper.slideUp();
            expense_id && $.post('?module=reportsmarketingcosts&action=delete', { expense_id: expense_id }, function() {
                $wrapper.trigger('successfull_save');
                setTimeout(function() {
                    $wrapper.remove();
                }, 0);
            });
        }
    });

    // Validate and save via XHR
    $form.submit(function() {
        $('<i class="icon16 loading"></i>').insertAfter($button);
        $.post($form.attr('action'), $form.serialize(), function(r) {
            $wrapper.parent().html(r);
        });
        return false;
    });

    // Helper to update visibility of form elements and values of hidden fields
    // depending on what's selected in radios and selects
    function updateElements() {
        // Channel selector logic
        var $option = $channel_selector.children(':selected');
        var channel_name = $channel_selector.val();
        var channel_type = $option.data('channel-type');
        var channel_color = $option.data('color');

        $channel_input_hidden.val(channel_type);
        channel_color && setColor(channel_color);
        if (channel_name || !channel_type) {
            $channel_input_text.val(channel_name).hide();
        } else {
            $channel_input_text.show();
        }

        // Period selector logic
        var $field = $period_radios.closest('.field');
        if ($period_radios.filter(':checked').val() == 'one_time') {
            $field.find('[name="expense_period_single"]').parent().show();
            $field.find('[name="expense_period_from"], [name="expense_period_to"]').datepicker('hide').closest('div').slideUp(animation_speed);
        } else {
            var $i = $field.find('[name="expense_period_single"]').datepicker('hide').parent().hide();
            $field.find('[name="expense_period_from"], [name="expense_period_to"]').closest('div').slideDown(animation_speed);
        }
    }

})();</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 00:19:03
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/reports/mcosts_rows.html" */ ?>
<?php if ($_valid && !is_callable('content_5c86d0c7965b92_64668207')) {function content_5c86d0c7965b92_64668207($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php if (!function_exists('smarty_template_function_format_nice_date')) {
    function smarty_template_function_format_nice_date($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['format_nice_date']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php $_smarty_tpl->tpl_vars['fs'] = new Smarty_variable(smarty_modifier_wa_date($_smarty_tpl->tpl_vars['s']->value,'humandate'), null, 0);?><?php $_smarty_tpl->tpl_vars['fe'] = new Smarty_variable(smarty_modifier_wa_date($_smarty_tpl->tpl_vars['e']->value,'humandate'), null, 0);?><?php $_smarty_tpl->tpl_vars['current_year'] = new Smarty_variable(date('Y'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['s']->value==$_smarty_tpl->tpl_vars['e']->value){?><?php $_smarty_tpl->tpl_vars['fe'] = new Smarty_variable(str_replace($_smarty_tpl->tpl_vars['current_year']->value,'',$_smarty_tpl->tpl_vars['fe']->value), null, 0);?><?php echo trim($_smarty_tpl->tpl_vars['fe']->value);?>
<?php }else{ ?><?php $_smarty_tpl->tpl_vars['s_month'] = new Smarty_variable(waDateTime::date('f Y',$_smarty_tpl->tpl_vars['s']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['e_month'] = new Smarty_variable(waDateTime::date('f Y',$_smarty_tpl->tpl_vars['e']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['s_month']->value==$_smarty_tpl->tpl_vars['e_month']->value){?><?php $_smarty_tpl->tpl_vars['fs'] = new Smarty_variable(str_replace($_smarty_tpl->tpl_vars['e_month']->value,'',$_smarty_tpl->tpl_vars['fs']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['fe'] = new Smarty_variable(str_replace($_smarty_tpl->tpl_vars['current_year']->value,'',$_smarty_tpl->tpl_vars['fe']->value), null, 0);?><?php }elseif(strpos($_smarty_tpl->tpl_vars['fs']->value,$_smarty_tpl->tpl_vars['current_year']->value)){?><?php $_smarty_tpl->tpl_vars['fs'] = new Smarty_variable(str_replace($_smarty_tpl->tpl_vars['current_year']->value,'',$_smarty_tpl->tpl_vars['fs']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['fe'] = new Smarty_variable(str_replace($_smarty_tpl->tpl_vars['current_year']->value,'',$_smarty_tpl->tpl_vars['fe']->value), null, 0);?><?php }?><?php echo trim($_smarty_tpl->tpl_vars['fs']->value);?>
&nbsp;&ndash;&nbsp;<?php echo trim($_smarty_tpl->tpl_vars['fe']->value);?>
<?php }?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['expenses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
    <tr class="expense-row<?php if ($_smarty_tpl->tpl_vars['e']->value['type']=='campaign'){?> s-tr-campaign<?php }?>" data-expense-id="<?php echo $_smarty_tpl->tpl_vars['e']->value['id'];?>
">
        <td class="channel">
            <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<i class="shortener"></i></div>
        </td>
        <td class="note gray" style="max-width: 20%;">
            <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['e']->value['note'], ENT_QUOTES, 'UTF-8', true);?>
<i class="shortener"></i></div>
        </td>
        <td class="period-td">
            <div class="period" style="width:0;" data-start-ts="<?php echo $_smarty_tpl->tpl_vars['e']->value['start_ts'];?>
" data-end-ts="<?php echo $_smarty_tpl->tpl_vars['e']->value['end_ts'];?>
">
                <div class="period-bar" style="width:0; background-color: <?php echo $_smarty_tpl->tpl_vars['e']->value['color'];?>
;" title="<?php smarty_template_function_format_nice_date($_smarty_tpl,array('s'=>$_smarty_tpl->tpl_vars['e']->value['start'],'e'=>$_smarty_tpl->tpl_vars['e']->value['end']));?>
"></div>
            </div>
        </td>
        <td class="amount align-right nowrap">
            <?php echo shop_currency_html($_smarty_tpl->tpl_vars['e']->value['amount'],$_smarty_tpl->tpl_vars['def_cur']->value,$_smarty_tpl->tpl_vars['def_cur']->value);?>

        </td>
        <td class="date-td gray">
            <div>
                <span class="period-dates">
                    <?php smarty_template_function_format_nice_date($_smarty_tpl,array('s'=>$_smarty_tpl->tpl_vars['e']->value['start'],'e'=>$_smarty_tpl->tpl_vars['e']->value['end']));?>

                </span>
                <i class="shortener"></i>
            </div>
        </td>
        <td class="min-width">
            <a href="javascript:void(0)" class="edit" title="Редактировать"><i class="icon16 edit"></i></a>
        </td>
    </tr>
<?php } ?>


<?php if (!empty($_smarty_tpl->tpl_vars['graph_data']->value)&&!empty($_smarty_tpl->tpl_vars['is_update']->value)){?>
    <tr class="hidden temporary-row"><td><script>
        showCostsGraph(<?php echo json_encode($_smarty_tpl->tpl_vars['graph_data']->value);?>
, "refresh");
        setTimeout(function() {
            $('#s-reports-marketing-costs-table tr.temporary-row').remove();
        }, 0);
    </script></td></tr>
<?php }?>
<?php }} ?>