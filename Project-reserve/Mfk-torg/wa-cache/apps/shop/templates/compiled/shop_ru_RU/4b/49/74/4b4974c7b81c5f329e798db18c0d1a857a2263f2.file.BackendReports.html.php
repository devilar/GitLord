<?php /* Smarty version Smarty-3.1.14, created on 2019-03-06 09:24:35
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/backend/BackendReports.html" */ ?>
<?php /*%%SmartyHeaderCode:17158134195c7f67a37d6f57-68337217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b4974c7b81c5f329e798db18c0d1a857a2263f2' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/backend/BackendReports.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17158134195c7f67a37d6f57-68337217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7f67a380c202_56524072',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7f67a380c202_56524072')) {function content_5c7f67a380c202_56524072($_smarty_tpl) {?><div id="reports-paid-orders-notice" class="s-alert" style="display:none;">
    В отчетах о продажах показываются только оплаченные и выполненные заказы. Если заказ оформлен, но вы не видите его в отчетах, вероятно, что к нему еще не было применено действие «Оплачен» или «Выполнен». Нажмите на соответствующую кнопку на странице заказа, и тогда он будет помечен печатью «ОПЛАЧЕН» и станет учитываться при построении отчетов о продажах.
    <a href="javascript:void(0)" class="close s-alert-close">&times;</a>
</div>

<div id="reportscontent">
    <div class="block double-padded ">
        Загрузка... <i class="icon16 loading"></i>
    </div>
</div>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/charts.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/charts/d3.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/charts/topojson.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/charts/datamaps.world.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tmpl.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/reports.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script> $.reports.init({ lang: '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
' }); </script>
<?php }} ?>