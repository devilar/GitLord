<?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 10:51:21
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/widgets/sales/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:17687320625c7cd8f9e76c30-32577607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c71cf99971c810b773dc050ad8492f7333ef64' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/widgets/sales/templates/Default.html',
      1 => 1551549257,
      2 => 'file',
    ),
    '260806063be8652656309ffd27e7df0fe3d9655d' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/widgets/sales/css/salesWidget.css',
      1 => 1551549257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17687320625c7cd8f9e76c30-32577607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_backend_url' => 0,
    'widget_id' => 0,
    'title' => 0,
    'total_formatted' => 0,
    'dynamic_class' => 0,
    'dynamic_html' => 0,
    'sales_link' => 0,
    'total' => 0,
    'widget_url' => 0,
    'wa' => 0,
    'graph_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7cd8f9ebf3c5_70337799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7cd8f9ebf3c5_70337799')) {function content_5c7cd8f9ebf3c5_70337799($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['sales_link'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."shop/?action=reports#/sales/type=sources", null, 0);?>

<div class="sales-widget-wrapper">
    <div class="graph-wrapper" id="graph-wrapper-<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
"></div>
    <div class="text-wrapper">
        <h6 class="heading nowrap"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h6>
        <h1 class="s-sales nowrap"><?php echo $_smarty_tpl->tpl_vars['total_formatted']->value;?>
</h1>
        <h3 class="s-sales-compare <?php echo $_smarty_tpl->tpl_vars['dynamic_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['dynamic_html']->value;?>
</h3>
    </div>
    <a class="redirect-to-reports-link" href="<?php echo $_smarty_tpl->tpl_vars['sales_link']->value;?>
" title="<?php echo htmlspecialchars(shop_currency($_smarty_tpl->tpl_vars['total']->value), ENT_QUOTES, 'UTF-8', true);?>
"></a>
</div>


<script>
( function() {
    var is_loaded = (typeof SalesGraph !== "undefined"),
        js_href = "<?php echo $_smarty_tpl->tpl_vars['widget_url']->value;?>
js/salesWidget.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
",
        widget = DashboardWidgets["<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
"],
        options = {
            widget_id: <?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
,
            graph_data: <?php echo json_encode($_smarty_tpl->tpl_vars['graph_data']->value);?>
,
            graph_id: "graph-wrapper-<?php echo $_smarty_tpl->tpl_vars['widget_id']->value;?>
"
        };

    if (is_loaded) {
        widget.sales = new SalesGraph(options);
    } else {
        $.getScript(js_href, function() {
            widget.sales = new SalesGraph(options);
        });
    }
})();
</script>


<style><?php /*  Call merged included template "../css/salesWidget.css" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../css/salesWidget.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '17687320625c7cd8f9e76c30-32577607');
content_5c7cd8f9eb7272_52049794($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../css/salesWidget.css" */?></style>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 10:51:21
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/widgets/sales/css/salesWidget.css" */ ?>
<?php if ($_valid && !is_callable('content_5c7cd8f9eb7272_52049794')) {function content_5c7cd8f9eb7272_52049794($_smarty_tpl) {?>.sales-widget-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #fff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    overflow: hidden;
}
.sales-widget-wrapper .redirect-to-reports-link {
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
}
.sales-widget-wrapper .text-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-sizing: border-box;
}
.sales-widget-wrapper .text-wrapper .s-sales {
    margin-bottom: 0;
    color: #008000;
}
.sales-widget-wrapper .graph-wrapper {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    overflow: hidden;
}
.sales-widget-wrapper .graph-wrapper svg {
    display: block;
    position: absolute;
    bottom: 0;
    left: 0;
    fill: rgba(0,0,0,0.1);
    -webkit-border-radius: 0 0 3px 3px;
    -moz-border-radius: 0 0 3px 3px;
    border-radius: 0 0 3px 3px;
}
.sales-widget-wrapper .graph-wrapper svg path,
.sales-widget-wrapper .graph-wrapper svg line {
    fill: none;
    stroke: #aaa;
    shape-rendering: auto;
}
.sales-widget-wrapper .graph-wrapper svg .line {
    stroke-width: 3px;
    opacity: 1;
}
.sales-widget-wrapper .graph-wrapper svg .area {
    stroke: none;
    opacity: 0.3;
}
.sales-widget-wrapper .graph-wrapper svg.profit .area {
    opacity: 0.5;
}
.widget-1x1 .sales-widget-wrapper .text-wrapper {
    padding: 0.5rem;
}
.widget-1x1 .sales-widget-wrapper .text-wrapper {
    padding: 0.5rem;
}
.widget-2x1 .sales-widget-wrapper .text-wrapper {
    padding: 0.75rem;
}
.widget-2x2 .sales-widget-wrapper .text-wrapper {
    padding: 0.75rem;
}
.tv .sales-widget-wrapper {
    background: transparent;
}
.tv .sales-widget-wrapper .text-wrapper .s-sales {
    color: #5ac847;
}
.sales-widget-wrapper .s-sales-compare.red { color: red; }
.sales-widget-wrapper .s-sales-compare.green { color: #86cd86; }
.tv .sales-widget-wrapper .s-sales-compare.green { color: #437843; }
<?php }} ?>