<?php /* Smarty version Smarty-3.1.14, created on 2019-03-11 12:56:22
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/csv/CsvProductsetup.export.html" */ ?>
<?php /*%%SmartyHeaderCode:3838624595c8630c6bc4f14-10234557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f160967c7458b9ef79a350186d36b8823fa18658' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/csv/CsvProductsetup.export.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3838624595c8630c6bc4f14-10234557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'profile' => 0,
    'f' => 0,
    'settlements' => 0,
    'route' => 0,
    'current_domain' => 0,
    'title' => 0,
    'encoding' => 0,
    'enc' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8630c6c32b25_04068180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8630c6c32b25_04068180')) {function content_5c8630c6c32b25_04068180($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_format_file_size')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_format_file_size.php';
if (!is_callable('smarty_modifier_wa_datetime')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
?>
<h1>Экспорт товаров в CSV</h1>
<p>
    <?php echo sprintf('Экспорт информации о товарах в CSV-файлы. CSV-файлы можно создавать и редактировать с помощью электронных табличных редакторов, например, Microsoft Excel, OpenOffice и iWork. Подробное описание структуры CSV-файлов, которую поддерживает Shop-Script, читайте в <a href="%s" target="_blank">руководстве</a>.','http://www.shop-script.ru/help/26/import-products-from-csv-file/');?>

    <i class="icon10 new-window"></i>
</p>
<?php if (!empty($_smarty_tpl->tpl_vars['info']->value)){?>
<div class="field-group" style="border-bottom: 1px solid #ccc;">
    <div class="field">
        <div class="name bold">
            Последний экспорт
        </div>
        <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
        <div class="value" style="min-width: 300px;">
            <p>
                <a href="?module=csv&action=productdownload&profile=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['profile']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
&file=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="bold nowrap inline"><i class="icon16 download" style="margin-top: 0.3em;"></i>Скачать</a>
                <span class="hint inline"><?php echo smarty_modifier_wa_format_file_size($_smarty_tpl->tpl_vars['f']->value['size']);?>
</span>
                <br>
                <span class="hint inline" style="color: #aaa;">Обновлено: <?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['f']->value['mtime'],"humandatetime");?>
</span>
            </p>
        </div>
        <?php } ?>
    </div>
</div>
<?php }?>


<div class="field js-profile-description">
   <div class="name">Профиль</div>
   <div class="value">
       <input type="text" name="profile[name]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['profile']->value['name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
       <input type="hidden" name="profile[id]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['profile']->value['id'])===null||$tmp==='' ? '-1' : $tmp);?>
">
   </div>
</div>


<?php if (count($_smarty_tpl->tpl_vars['settlements']->value)>1){?>
<div class="field-group">
    <div class="field">
        <div class="name">
            Витрина
        </div>
        <div class="value no-shift">
            <select name="domain">
                <?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['title']->_loop = false;
 $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settlements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value){
$_smarty_tpl->tpl_vars['title']->_loop = true;
 $_smarty_tpl->tpl_vars['route']->value = $_smarty_tpl->tpl_vars['title']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['route']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['route']->value==$_smarty_tpl->tpl_vars['current_domain']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
            <p class="hint">Витрину необходимо выбрать для правильного формирования адресов изображений товаров</p>
        </div>
    </div>
</div>
<?php  }else{ if (!isset($_smarty_tpl->tpl_vars['route'])) $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['route']->value = reset($_smarty_tpl->tpl_vars['settlements']->value)){?>
<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['route']->value, ENT_QUOTES, 'UTF-8', true);?>
" name="domain">
<?php }}?>

<div class="field-group">
    <div class="field">
        <div class="name">
           Кодировка
        </div>
        <div class="value">
            <select name="encoding">
            <?php  $_smarty_tpl->tpl_vars['enc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['enc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['encoding']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['enc']->key => $_smarty_tpl->tpl_vars['enc']->value){
$_smarty_tpl->tpl_vars['enc']->_loop = true;
?><option<?php if ($_smarty_tpl->tpl_vars['enc']->value==$_smarty_tpl->tpl_vars['profile']->value['config']['encoding']){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['enc']->value, ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?>
            </select>
        </div>
        <div class="value hint js-encoding-hint" style="display: none;">
            <i class="icon10 exclamation" style="margin-top: 0;"></i>
            <?php echo sprintf('Некоторые символы (например, %s) могут быть пропущены при экспорте файла в выбранной кодировке. Для надежного экспорта и импорта любых символов используйте кодировку UTF-8.','©, ±, ö');?>

            <br><br>
        </div>

    </div>

    <div class="field">
        <div class="name">
           Разделитель данных
        </div>
        <div class="value">
            <select name="delimiter">
                <option value=";"<?php if ($_smarty_tpl->tpl_vars['profile']->value['config']['delimiter']==';'){?> selected="selected"<?php }?>>Точка с запятой (;)</option>
                <option value=","<?php if ($_smarty_tpl->tpl_vars['profile']->value['config']['delimiter']==','){?> selected="selected"<?php }?>>Запятая (,)</option>
                <option value="tab"<?php if ($_smarty_tpl->tpl_vars['profile']->value['config']['delimiter']=='tab'){?> selected="selected"<?php }?>>Табуляция</option>
            </select>
        </div>
    </div>

    <div class="field">
        <div class="name">
            Характеристики
        </div>
        <div class="value no-shift">
            <label><input type="checkbox" name="features"<?php if (!empty($_smarty_tpl->tpl_vars['profile']->value['config']['features'])){?> checked="checked"<?php }?>> Экспортировать значения характеристик</label>
        </div>
    </div>

    <div class="field">
        <div class="name">
            Изображения
        </div>
        <div class="value no-shift">
            <label><input type="checkbox" name="images"<?php if (!empty($_smarty_tpl->tpl_vars['profile']->value['config']['images'])){?> checked="checked"<?php }?>> Экспортировать ссылки на файлы фотографий</label>
        </div>
    </div>

    <div class="field">
        <div class="name">
            Дополнительные категории
        </div>
        <div class="value no-shift">
            <label><input type="checkbox" name="extra_categories"<?php if (!empty($_smarty_tpl->tpl_vars['profile']->value['config']['extra_categories'])){?> checked="checked"<?php }?>> Дублировать запись о товаре для каждой категории, к которой он принадлежит</label>
        </div>
    </div>
    <div class="field">
        <div class="name">Основной артикул</div>
        <div class="value no-shift"><label><input name="primary_sku" type="checkbox"<?php if (!empty($_smarty_tpl->tpl_vars['profile']->value['config']['primary_sku'])){?> checked="checked"<?php }?>> Экспортировать значение выбора артикула по умолчанию</label></div>
    </div>
    <div class="field">
        <div class="name">
            Дополнительные параметры
        </div>
        <div class="value no-shift"><label><input type="checkbox" name="params"<?php if (!empty($_smarty_tpl->tpl_vars['profile']->value['config']['params'])){?> checked="checked"<?php }?>> Экспортировать дополнительные параметры товаров и категорий</label></div>
    </div>

    <div class="field">
        <div class="name">
            Данные плагинов
        </div>
        <div class="value no-shift"><label><input type="checkbox" name="extra"<?php if (!empty($_smarty_tpl->tpl_vars['profile']->value['config']['extra'])){?> checked="checked"<?php }?>> Экспорт дополнительных полей</label></div>
    </div>
</div>


<div class="field-group">
    <?php echo $_smarty_tpl->getSubTemplate ("templates/includes/productSelector.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('hints'=>array('id'=>'<i class="icon10 exclamation"></i> Категории товаров не будут экспортированы','set'=>'<i class="icon10 exclamation"></i> Категории товаров не будут экспортированы','type'=>'<i class="icon10 exclamation"></i> Категории товаров не будут экспортированы'),'hash'=>$_smarty_tpl->tpl_vars['profile']->value['config']['hash']), 0);?>

</div>

<div class="clear-left"></div>

<div class="field-group" id="s-csvproduct-report" style="display: none;">
    <div class="field">
        <div class="value"></div>
        <div class="value">
            <br>
            <a href="?module=csv&action=productdownload&profile=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['profile']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" class="bold nowrap"><i class="icon16 download"></i>Скачать</a>
        </div>
    </div>
</div>

<div class="field-group" id="s-csvproduct-submit">
    <div class="field">
        <div class="value submit">
            <input type="submit" class="button green" value="Экспортировать">
        </div>

        <div class="value js-progressbar-container" style="display:none;">

            <div class="progressbar blue float-left" style="display: none; width: 70%;">
                <div class="progressbar-outer">
                    <div class="progressbar-inner" style="width: 0;"></div>
                </div>
            </div>

            <img style="float:left; margin-top:8px;" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/loading32.gif" />
            <div class="clear"></div>
            <span class="progressbar-description"></span>
            <br>
            <br>
                <span class="small italic">
                    Пожалуйста, не закрывайте браузер и не покидайте эту страницу до тех пор, пока экспорт не будет полностью завершен.
                </span>
        </div>
        <br>
        <br>
        <em class="errormsg"></em>
    </div>
</div>

<?php }} ?>