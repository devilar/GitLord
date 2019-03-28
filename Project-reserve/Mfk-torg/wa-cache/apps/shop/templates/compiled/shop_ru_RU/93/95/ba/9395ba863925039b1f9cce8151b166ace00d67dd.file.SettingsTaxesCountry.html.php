<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:07
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsTaxesCountry.html" */ ?>
<?php /*%%SmartyHeaderCode:6776413305c9ccef35c71a2-41323905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9395ba863925039b1f9cce8151b166ace00d67dd' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsTaxesCountry.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6776413305c9ccef35c71a2-41323905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c' => 0,
    'wa_url' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9ccef35ed536_22441699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9ccef35ed536_22441699')) {function content_5c9ccef35ed536_22441699($_smarty_tpl) {?>

<tr class="s-country <?php echo $_smarty_tpl->tpl_vars['c']->value['css_class'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['c']->value['iso3'];?>
"> 
    <td class="min-width">
        <?php if (substr($_smarty_tpl->tpl_vars['c']->value['iso3'],0,1)!=='%'){?>
            <i class="icon16 country" style="background:url(<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/country/<?php echo $_smarty_tpl->tpl_vars['c']->value['iso3'];?>
.gif) no-repeat;"></i>
        <?php }?>
    </td>
    <td class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
    <td>
        <div class="global-country-rate">
            <span class="small">Глобальная ставка:</span>
            <input type="text" name="countries[<?php echo $_smarty_tpl->tpl_vars['c']->value['iso3'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['c']->value['global_rate'];?>
" class="numerical" placeholder="0">%
            <a href="javascript:void(0)" class="inline-link hint back-to-simple-mode-link"><i class="icon10 settings"></i><b><i>Простой режим</i></b></a>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['c']->value['regions']){?>
            <a href="javascript:void(0)" class="inline-link hint setup-by-regions-link"><b><i>Настройка по регионам</i></b></a>
            <a href="javascript:void(0)" class="inline-link hint advanced-settings-link"><i class="icon10 settings"></i><b><i>Расширенные настройки</i></b></a>
        <?php }?>
        <em class="small commit-delete-message">Нажмите на кнопку «Сохранить» ниже, чтобы подтвердить удаление.</em>
    </td>
    <td class="min-width"><a href="javascript:void(0)"><i class="icon16 delete"></i></a></td>
</tr>

<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
    <tr class="small s-region <?php echo $_smarty_tpl->tpl_vars['r']->value['css_class'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['c']->value['iso3'];?>
-region"> 
        <td class="min-width"></td>
        <td><?php echo $_smarty_tpl->tpl_vars['r']->value['name'];?>
 <span class="hint"><?php echo $_smarty_tpl->tpl_vars['r']->value['code'];?>
</span></td>
        <td>
            <input type="text" class="short s-tax-name" name="country_regions[<?php echo $_smarty_tpl->tpl_vars['c']->value['iso3'];?>
][<?php echo $_smarty_tpl->tpl_vars['r']->value['code'];?>
][name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['tax_name'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Название налога">
            <input type="text" class="short numerical" name="country_regions[<?php echo $_smarty_tpl->tpl_vars['c']->value['iso3'];?>
][<?php echo $_smarty_tpl->tpl_vars['r']->value['code'];?>
][tax_value]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['r']->value['params']['tax_value'],$_smarty_tpl->tpl_vars['r']->value['tax_value']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="0">%
            <select name="country_regions[<?php echo $_smarty_tpl->tpl_vars['c']->value['iso3'];?>
][<?php echo $_smarty_tpl->tpl_vars['r']->value['code'];?>
][tax_value_modifier]">
                <option value="+"<?php if (ifset($_smarty_tpl->tpl_vars['r']->value['params']['tax_value_modifier'])=='+'){?> selected<?php }?>>+ суммируется с глобальной ставкой по стране</option>
                <option value="*"<?php if (ifset($_smarty_tpl->tpl_vars['r']->value['params']['tax_value_modifier'])=='*'){?> selected<?php }?>>* умножается на размер глобальной ставки</option>
                <option value=""<?php if (ifset($_smarty_tpl->tpl_vars['r']->value['params']['tax_value_modifier'])===''){?> selected<?php }?>>заменяет глобальную ставку по стране</option>
            </select>
        </td>
        <td class="min-width"></td>
    </tr>
<?php } ?>

<?php }} ?>