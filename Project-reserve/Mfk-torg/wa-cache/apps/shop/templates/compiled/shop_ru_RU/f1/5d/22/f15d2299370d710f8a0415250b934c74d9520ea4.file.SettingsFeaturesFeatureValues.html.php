<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:46:19
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureValues.html" */ ?>
<?php /*%%SmartyHeaderCode:19220840525c8f4ccb22ac59-87268685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f15d2299370d710f8a0415250b934c74d9520ea4' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsFeaturesFeatureValues.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19220840525c8f4ccb22ac59-87268685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'values_per_feature' => 0,
    'feature' => 0,
    'value_id' => 0,
    'value' => 0,
    'more' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4ccb26e354_39287023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4ccb26e354_39287023')) {function content_5c8f4ccb26e354_39287023($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['more'] = new Smarty_variable(!empty($_smarty_tpl->tpl_vars['values_per_feature']->value)&&(($_smarty_tpl->tpl_vars['feature']->value['count']>($_smarty_tpl->tpl_vars['values_per_feature']->value+2))||($_smarty_tpl->tpl_vars['feature']->value['count']>count($_smarty_tpl->tpl_vars['feature']->value['values']))) ? ($_smarty_tpl->tpl_vars['feature']->value['count']-count($_smarty_tpl->tpl_vars['feature']->value['values'])) : null, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['value_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <li data-value-id="<?php echo $_smarty_tpl->tpl_vars['value_id']->value;?>
"><?php if (is_object($_smarty_tpl->tpl_vars['value']->value)&&isset($_smarty_tpl->tpl_vars['value']->value['icon'])){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['icon'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
<?php } ?>
<?php if ($_smarty_tpl->tpl_vars['more']->value){?>
    <li class="js-more-link"><a href="#/features/feature/values/show/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" class="js-action inline-link"><b><i><?php echo sprintf("Показать еще %d",$_smarty_tpl->tpl_vars['more']->value);?>
</i></b></a></li>
<?php }?><?php }} ?>