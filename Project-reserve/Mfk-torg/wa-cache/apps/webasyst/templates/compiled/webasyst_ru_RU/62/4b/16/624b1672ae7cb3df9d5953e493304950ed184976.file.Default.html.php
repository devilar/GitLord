<?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 10:51:22
         compiled from "/home/c/cl36655/public_html/wa-widgets/currencyquotes/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:17627813135c7cd8fa188ef5-00901270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '624b1672ae7cb3df9d5953e493304950ed184976' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-widgets/currencyquotes/templates/Default.html',
      1 => 1452519812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17627813135c7cd8fa188ef5-00901270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'quotes' => 0,
    'is_today' => 0,
    'date' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7cd8fa1ccc92_38797571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7cd8fa1ccc92_38797571')) {function content_5c7cd8fa1ccc92_38797571($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_date')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><style>
    #currency-quotes-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 .s-currency-quote { display: inline-block; min-width: 49%; position: relative; }
    #currency-quotes-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
 .cq-cover-block { background: #ccc; opacity: 0.6; }

    .widget-2x1 .s-currency-quote { text-align: center; padding-top: 2rem; }
</style>

<div class="block" id="currency-quotes-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
    <div class="cq-info">
        <?php if (!empty($_smarty_tpl->tpl_vars['quotes']->value)){?>
            <?php if (!$_smarty_tpl->tpl_vars['is_today']->value){?>
                <span class="hint"><?php echo sprintf("Показываются данные на %s",smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value));?>
</span>
            <?php }?>
            <div class="s-currency-quote">
                <h2 class="quote" title="Курс ЦБ РФ на <?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value,'humandate');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['USD']['val'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</h2>
                <h4>
                    <span class="heading">USD</span>
                    <span class="highlighted" title="Изменение курса по сравнению с предыдущим днем"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['USD']['diff_str'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</span>
                </h4>
            </div>
            <div class="s-currency-quote">
                <h2 class="quote" title="Курс ЦБ РФ на <?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['date']->value,'humandate');?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['EUR']['val'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</h2>
                <h4>
                    <span class="heading">EUR</span>
                    <span class="highlighted" title="Изменение курса по сравнению с предыдущим днем"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quotes']->value['EUR']['diff_str'])===null||$tmp==='' ? '&mdash;' : $tmp);?>
</span>
                </h4>
            </div>
        <?php }else{ ?>
            <span class="errormsg">Нет данных за последние 10 дней.</span>
        <?php }?>
    </div>
    <div class="block hidden cq-cover-block">
        <i class="icon16 loading"></i>
    </div>
</div>

<?php if (!$_smarty_tpl->tpl_vars['wa']->value->get('ignore_js')){?>
<script>$(function() {
    var widget_id = "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
",
        uniqid = '' + (new Date).getTime() + Math.random();
    var $container = $('#currency-quotes-'+widget_id);

    // run 1 hour updater
    setTimeout(function() {
        try {
            DashboardWidgets[widget_id].uniqid = uniqid;
            setTimeout(function() {
                try {
                    if (uniqid == DashboardWidgets[widget_id].uniqid) {
                        DashboardWidgets[widget_id].renderWidget();
                    }
                } catch (e) {}
            }, 60*60*1000);
        } catch (e) {}
    }, 0);

    $container.click(function(e) {
        e.preventDefault();

        var $cover = $('.cq-cover-block', $container);
        $cover.css({
            position: 'absolute',
            height: '100%',
            width: '100%',
            left: 0,
            top: 0
        }).show();
        var loading = $cover.find('.loading');
        var w = loading.width();
        var h = loading.height();
        var W = $cover.width();
        var H = $cover.height();
        loading.css({
            marginTop: (H - h) / 2,
            marginLeft: (W - w) / 2
        });

        try {
            DashboardWidgets[widget_id].renderWidget();
        } catch (e) {
            setTimeout(function() {
                $cover.hide();
            }, 500);
        }
    });

});</script>
<?php }?><?php }} ?>