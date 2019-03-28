<?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 10:51:40
         compiled from "wa-apps/shop/templates/actions/category/ProductsCategory.html" */ ?>
<?php /*%%SmartyHeaderCode:8615202205c7cd90c0a9527-94478200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbec517fce31fd6300be73d66e380565356a702f' => 
    array (
      0 => 'wa-apps/shop/templates/actions/category/ProductsCategory.html',
      1 => 1551193711,
      2 => 'file',
    ),
    '4035c39317ea644e7881c0e4fb69d7e138f822d0' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/category/feature.template.html',
      1 => 1545053990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8615202205c7cd90c0a9527-94478200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'parent' => 0,
    'frontend_url' => 0,
    'frontend_base_url' => 0,
    'event_dialog' => 0,
    'plugin_html' => 0,
    'currency' => 0,
    'wa' => 0,
    'tag' => 0,
    'feature' => 0,
    'allow_filter' => 0,
    'routes' => 0,
    'domain_routes' => 0,
    'domain' => 0,
    'route' => 0,
    'url' => 0,
    'category_og' => 0,
    'editable_ogs_list' => 0,
    'editable_ogs' => 0,
    'og' => 0,
    'other_ogs' => 0,
    'k' => 0,
    'v' => 0,
    'wa_url' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7cd90c2740a5_48445473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7cd90c2740a5_48445473')) {function content_5c7cd90c2740a5_48445473($_smarty_tpl) {?><div class="dialog large" id="s-product-category-dialog">
    <div class="dialog-background"></div>
    <form id="s-product-list-create-form" method="post"
          action="?module=category&action=save&category_id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['settings']->value['id'])===null||$tmp==='' ? 0 : $tmp);?>
&parent_id=<?php if (!empty($_smarty_tpl->tpl_vars['parent']->value)){?><?php echo $_smarty_tpl->tpl_vars['parent']->value['id'];?>
<?php }else{ ?>0<?php }?>"
          enctype="multipart/form-data">
        <div class="dialog-window s-category-settings">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    
                    <h1>
                        <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['id'])){?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                            <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_STATIC){?>folder<?php }else{ ?>funnel<?php }?>"></i>
                            <span class="hint float-right">id: <?php echo $_smarty_tpl->tpl_vars['settings']->value['id'];?>
</span>
                        <?php }else{ ?>
                            Новая категория
                        <?php }?>
                    </h1>
                    <div class="fields form s-dialog-form">


                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">Название</div>
                                <div class="value">
                                    <input type="text" name="name" class="large long s-full-width-input js-product-list-name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                </div>
                            </div>
                        </div>

                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">
                                    Ссылка
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['frontend_urls']){?>
                                    <?php  $_smarty_tpl->tpl_vars['frontend_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frontend_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['frontend_urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['frontend_url']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['frontend_url']->key => $_smarty_tpl->tpl_vars['frontend_url']->value){
$_smarty_tpl->tpl_vars['frontend_url']->_loop = true;
 $_smarty_tpl->tpl_vars['frontend_url']->index++;
 $_smarty_tpl->tpl_vars['frontend_url']->first = $_smarty_tpl->tpl_vars['frontend_url']->index === 0;
?>
                                        <div class="value no-shift<?php if (!$_smarty_tpl->tpl_vars['frontend_url']->first){?> small<?php }?>">
                                            <?php if ($_smarty_tpl->tpl_vars['frontend_url']->first){?>
                                                <span class="s-frontend-base-url" style="display:none;"><?php echo waIdna::dec($_smarty_tpl->tpl_vars['frontend_url']->value['base']);?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
" class="s-frontend-base-url" target="_blank"><?php echo waIdna::dec($_smarty_tpl->tpl_vars['frontend_url']->value['base']);?>
<span id="s-settings-frontend-url"><?php echo waIdna::dec($_smarty_tpl->tpl_vars['settings']->value['url']);?>
</span><span class="slash"></span></a>
                                                <input type="text" id="s-settings-frontend-url-input" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['url'];?>
" name="url" style="display:none;">
                                                <a href="javascript:void(0);" class="small gray inline-link js-settings-frontend-url-edit-link"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>
                                                <em class="errormsg"></em>
                                            <?php }else{ ?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['frontend_url']->value['url'];?>
" target="_blank"><?php echo waIdna::dec($_smarty_tpl->tpl_vars['frontend_url']->value['url']);?>
</a>
                                            <?php }?>
                                        </div>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <div class="value">
                                        <?php echo $_smarty_tpl->tpl_vars['frontend_base_url']->value;?>
<?php if (!empty($_smarty_tpl->tpl_vars['parent']->value)){?><?php echo $_smarty_tpl->tpl_vars['parent']->value['full_url'];?>
/<?php }?><input type="text" name="url" value="" class="js-product-list-url">/
                                    </div>
                                <?php }?>

                                <div class="value no-shift">
                                    <label>
                                        <input value="1" name="hidden" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['status']&&$_smarty_tpl->tpl_vars['settings']->value['id']!==''){?>checked<?php }?> type="checkbox">
                                        Скрытая категория <span class="hint">Не показывать ссылки на эту категорию на витрине</span>
                                    </label>
                                </div>

                            </div>
                        </div>

                        
                        <?php if (!empty($_smarty_tpl->tpl_vars['event_dialog']->value)){?><?php  $_smarty_tpl->tpl_vars['plugin_html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plugin_html']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['event_dialog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plugin_html']->key => $_smarty_tpl->tpl_vars['plugin_html']->value){
$_smarty_tpl->tpl_vars['plugin_html']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['plugin_html']->key;
?><?php echo $_smarty_tpl->tpl_vars['plugin_html']->value;?>
<?php } ?><?php }?>


                        
                        <?php if (empty($_smarty_tpl->tpl_vars['settings']->value['id'])){?>
                            <div class="field-group">
                                <div class="field">
                                    <div class="name">
                                        Тип
                                    </div>
                                    <div class="value no-shift">
                                        <ul class="thumbs li150px s-list-type-selector">
                                            <?php if (ifset($_smarty_tpl->tpl_vars['parent']->value,'type',0)!=1){?>
                                                <li style="margin-bottom: 0;">
                                                    <label>
                                                        <input id="s-type-static" type="radio" name="type" value="0" checked="checked">
                                                        <strong>Категория</strong>
                                                        <i class="icon16 folder"></i>
                                                        <br><br>
                                                        <span class="hint">Статическая категория, в которой товары добавляются и упорядочиваются вручную.</span>
                                                    </label>
                                                </li>
                                            <?php }?>
                                            <li style="margin-bottom: 0;">
                                                <label>
                                                    <input id="s-type-dynamic" type="radio" name="type" value="1" <?php if (ifset($_smarty_tpl->tpl_vars['parent']->value,'type',0)==1){?>checked="checked"<?php }?>>
                                                    <strong>Фильтр</strong>
                                                    <i class="icon16 funnel"></i>
                                                    <br><br>
                                                    <span class="hint">Динамическая категория, формируемая в соответствии с параметрами поиска.</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['type'];?>
">
                        <?php }?>

                        
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['id']===''||$_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>
                            <div class="field-group js-category-dynamic-settings" <?php if ($_smarty_tpl->tpl_vars['settings']->value['id']===''&&empty($_smarty_tpl->tpl_vars['parent']->value)){?> style="display: none;" <?php }?>>
                                <div class="field">
                                    <div class="name">
                                        Параметры фильтрации товаров
                                    </div>
                                    <div class="value">
                                        <table class="zebra s-condition-block js-condition-list">
                                            <tbody class="js-feature-insertion-block">
                                            <tr style="<?php if (empty($_smarty_tpl->tpl_vars['parent']->value)){?>display: none;<?php }?>">
                                                <td class="min-width" style="vertical-align: top;">
                                                    <input type="checkbox" disabled="disabled" checked="checked" class="js-always-disabled">
                                                </td>
                                                <td colspan="3">
                                                    <?php echo sprintf('Только в категории «<strong>%s</strong>»',(($tmp = @$_smarty_tpl->tpl_vars['parent']->value['name'])===null||$tmp==='' ? '' : $tmp));?>

                                                    <p class="hint" style="margin-bottom: 0;">Динамическая фильтрация производится только среди товаров родительской категории.</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="min-width: 200px;width: 32%;">
                                                    <label><input class="js-condition-price-interval s-condition" type="checkbox" name="condition[price]" value="price"
                                                           <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price'])){?>checked<?php }?>>
                                                    Цена</label>
                                                </td>
                                                <td colspan="2">
                                                    <div class="js-feature-slider-base-price s-feature-slider-block" data-slider="range" data-code="base-price">
                                                        от
                                                        <input type="text" name="price[0]" class="js-begin short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['begin'];?>
<?php }else{ ?>0<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['begin'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['begin'];?>
<?php }else{ ?>0<?php }?>">
                                                        до
                                                        <input type="text" name="price[1]" class="js-end short" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['end'];?>
<?php }else{ ?>&infin;<?php }?>"
                                                               value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['end'])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['price']['end'];?>
<?php }?>">
                                                        <?php echo $_smarty_tpl->tpl_vars['currency']->value;?>

                                                        <div class="js-range-slider"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label><input class="js-condition-rate s-condition" type="checkbox" name="condition[rating]" value="rating"
                                                           <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating'])){?>checked<?php }?>>
                                                    Рейтинг</label>
                                                </td>
                                                <td>
                                                    <select name="rating[]">
                                                        <option value=">=" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['condition'])&&$_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['condition']=='>='){?>selected<?php }?>>больше или равно
                                                        </option>
                                                        <option value="<=" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['condition'])&&$_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['condition']=='<='){?>selected<?php }?>>меньше или равно
                                                        </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="rating[]" class="js-c-category-rate-value"
                                                           value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['values'][0])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['values'][0];?>
<?php }else{ ?>0<?php }?>">
                                                    <a href="javascript:void(0);" class="js-category-rate s-rate-photo" title="Rate photo"
                                                       data-rate="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['values'][0])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['rating']['values'][0];?>
<?php }else{ ?>0<?php }?>">
                                                        <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->ratingHtml(0,16,true);?>

                                                    </a>
                                                </td>
                                            </tr>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['cloud'])){?>
                                                <tr>
                                                    <td colspan="2">
                                                        <label><input class="js-condition-tag js-condition-tag s-condition" type="checkbox" name="condition[tag]" value="tag"
                                                               <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['tag']['tags'])){?>checked<?php }?>>
                                                        Теги</label>
                                                    </td>

                                                    <td colspan="2">
                                                        <div class="js-condition-tag-block block double-padded align-center">
                                                            <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['cloud']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                                                                <label>
                                                                     <span class="s-tag nowrap" style="font-size: <?php echo $_smarty_tpl->tpl_vars['tag']->value['size'];?>
%;" data-id="<?php echo $_smarty_tpl->tpl_vars['tag']->value['id'];?>
">
                                                                         <input type="checkbox" class="js-tag-value" name="tag[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                                                                <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['tag']['tags'])&&in_array($_smarty_tpl->tpl_vars['tag']->value['name'],$_smarty_tpl->tpl_vars['settings']->value['conditions']['tag']['tags'])){?>checked<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                                                     </span>
                                                                </label>
                                                            <?php } ?>
                                                            <span class="errormsg"></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php }?>
                                            <tr>
                                                <td colspan="2">
                                                    <label><input class="js-condition-count s-condition" type="checkbox" name="condition[count]" value="count"
                                                           <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count'])){?>checked<?php }?>>
                                                    В наличии</label>
                                                </td>
                                                <td>
                                                    <select name="count[]">
                                                        <option value=">=" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['condition'])&&$_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['condition']=='>='){?>selected<?php }?>>больше или равно
                                                        </option>
                                                        <option value="<=" <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['condition'])&&$_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['condition']=='<='){?>selected<?php }?>>меньше или равно
                                                        </option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" name="count[]" class="js-category-count-value"
                                                           value="<?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['values'][0])){?><?php echo $_smarty_tpl->tpl_vars['settings']->value['conditions']['count']['values'][0];?>
<?php }else{ ?>0<?php }?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <label><input class="js-condition-compare_price s-condition" type="checkbox" name="condition[compare_price]" value="compare_price"
                                                           <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['compare_price'])){?>checked<?php }?>>
                                                    Зачеркнутая цена</label>
                                                </td>
                                            </tr>
                                            <?php /*  Call merged included template "./feature.template.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./feature.template.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '8615202205c7cd90c0a9527-94478200');
content_5c7cd90c168376_69375610($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./feature.template.html" */?>
                                            </tbody>
                                        </table>
                                        <table class="js-autocomplete-wrapper" style="margin-top: 10px; margin-left: 4px;">
                                            <tbody>
                                                <tr <?php if ($_smarty_tpl->tpl_vars['settings']->value['feature_count']<=0){?> style="display: none"<?php }?>>
                                                    <td>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['feature_count'])&&$_smarty_tpl->tpl_vars['settings']->value['feature_count']>0){?>
                                                            <a href="javascript:void(0);" class="js-show-more inline-link" data-offset="0" data-count="<?php echo $_smarty_tpl->tpl_vars['settings']->value['feature_count'];?>
">
                                                                <b><i><?php echo sprintf("Показать еще %d",(20));?>
 Из <?php echo $_smarty_tpl->tpl_vars['settings']->value['feature_count'];?>
</i></b>
                                                            </a>
                                                        <?php }?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="js-autocomplete-block">
                                                        <input type="text" class="js-autocomplete ui-autocomplete-input" autocomplete="off" placeholder="Начните писать для поиска" style="margin-top: 12px;">
                                                        <span class="errormsg"></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- extra custom condition items -->
                                        <input type="hidden" name="custom_conditions" value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['custom_conditions'];?>
">
                                    </div>
                                </div>
                            </div>
                        <?php }?>

                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">
                                    Сортировка товаров
                                </div>
                                <div class="value no-shift">
                                    <select name="sort_products" class="js-sort-type">
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_STATIC){?>
                                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value['sort_products'])){?>selected="selected"<?php }?> <?php if ((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['include_sub_categories'])===null||$tmp==='' ? '0' : $tmp)){?>disabled="disabled"<?php }?>>Вручную (как задано в бекенде)</option>
                                        <?php }?>
                                        <option value="name ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='name ASC'){?>selected="selected"<?php }?>>По названию</option>
                                        <option value="price DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='price DESC'){?>selected="selected"<?php }?>>Самые дорогие</option>
                                        <option value="price ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='price ASC'){?>selected="selected"<?php }?>>Самые дешевые</option>
                                        <option value="rating DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='rating DESC'){?>selected="selected"<?php }?>>С высокой оценкой</option>
                                        <option value="rating ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='rating ASC'){?>selected="selected"<?php }?>>С низкой оценкой</option>
                                        <option value="total_sales DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='total_sales DESC'){?>selected="selected"<?php }?>>Хиты продаж</option>
                                        <option value="total_sales ASC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='total_sales ASC'){?>selected="selected"<?php }?>>Низкие продажи</option>
                                        <option value="count DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='count DESC'){?>selected="selected"<?php }?>>В наличии</option>
                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?>
                                            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['settings']->value['sort_products'])){?>selected="selected"<?php }?>>Дата добавления</option>
                                        <?php }else{ ?>
                                            <option value="create_datetime DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='create_datetime DESC'){?>selected="selected"<?php }?>>Дата добавления
                                            </option>
                                        <?php }?>
                                        <option value="stock_worth DESC" <?php if ($_smarty_tpl->tpl_vars['settings']->value['sort_products']=='stock_worth DESC'){?>selected="selected"<?php }?>>Стоимость активов после реализации</option>
                                    </select>
                                    <label class="small">
                                        <input type="checkbox" name="enable_sorting" <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_sorting']){?>checked="checked"<?php }?> value="1"> Посетители сайта могут выбирать порядок сортировки
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">
                                    Отображение
                                </div>
                                <div class="value no-shift"<?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==shopCategoryModel::TYPE_DYNAMIC){?> style="display: none;"<?php }?>>
                                    <label>
                                        <input type="checkbox" class="js-subcategory-toggle" name="include_sub_categories" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['include_sub_categories'])===null||$tmp==='' ? '0' : $tmp)){?>checked="checked"<?php }?> value="1">
                                        Включить товары из подкатегорий
                                        <span class="hint">Включение этой настройки автоматически добавит в список товаров данной категории все товары из ее подкатегорий</span><br>
                                        <span class="hint js-sort-manual-message bold" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['include_sub_categories']){?>style="display: none;"<?php }?>>Сортировка товаров вручную может работать непредсказуемо в этом режиме. Для получения стабильного результата выберите другой вариант сортировки.</span>
                                    </label>
                                </div>
                                <div class="value no-shift">
                                    <label>
                                        <input type="checkbox" name="allow_filter" value="1"
                                               class="js-category-allow-filter" <?php if ($_smarty_tpl->tpl_vars['settings']->value['allow_filter']){?>checked<?php }?>> Разрешить фильтрацию товаров
                                        <span class="hint">Фильтрация товаров позволит покупателям подбирать товары внутри этой категории по значениям характеристик, например, по цвету, производителю, цене</span>
                                    </label>

                                    <div class="block js-category-filter" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['allow_filter']){?>style="display:none;"<?php }?>>
                                        <ul class="menu-v compact small">
                                            
                                            <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['allow_filter_data'])){?>
                                                <?php  $_smarty_tpl->tpl_vars['allow_filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['allow_filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['allow_filter_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['allow_filter']->key => $_smarty_tpl->tpl_vars['allow_filter']->value){
$_smarty_tpl->tpl_vars['allow_filter']->_loop = true;
?>
                                                    <li title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['code'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" class="js-filter-item">
                                                        <i class="icon16 sort"></i>
                                                        <label>
                                                            <input type="checkbox" name="filter[]" data-filter-id="<?php echo $_smarty_tpl->tpl_vars['allow_filter']->value['id'];?>
" class="js-filter-chekbox" value="<?php echo $_smarty_tpl->tpl_vars['allow_filter']->value['id'];?>
"
                                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==1){?>
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['allow_filter']->value['code']]['values'])){?>
                                                                    <?php if (count($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['allow_filter']->value['code']]['values'])<2){?>
                                                                        data-disabled="1" disabled="disabled" title="Фильтрация по этой характеристике недоступна, потому что для нее выбрано только одно значение в секции «Параметры фильтрации товаров»."
                                                                    <?php }?>
                                                                <?php }?>
                                                            <?php }?>
                                                            checked="checked">
                                                                 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                                            <?php if (isset($_smarty_tpl->tpl_vars['allow_filter']->value['code'])){?>
                                                                <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allow_filter']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['allow_filter']->value['type_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                            <?php }?>
                                                        </label>
                                                    </li>
                                                <?php } ?>
                                            <?php }?>
                                            <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                                                <li title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['code'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" class="js-filter-item unsortable">
                                                    <i class="icon16 sort" style="display: none;"></i>
                                                    <label>
                                                        <input type="checkbox" name="filter[]" data-filter-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value['id'];?>
" class="js-filter-chekbox" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value['id'];?>
"
                                                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['type']==1){?>
                                                            <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['feature']->value['code']]['values'])){?>
                                                                <?php if (count($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['feature']->value['code']]['values'])<2){?>
                                                                    data-disabled="1" disabled="disabled" title="Фильтрация по этой характеристике недоступна, потому что для нее выбрано только одно значение в секции «Параметры фильтрации товаров»."
                                                                <?php }?>
                                                            <?php }?>
                                                        <?php }?>
                                                        <?php if (($_smarty_tpl->tpl_vars['feature']->value['id']=='price'&&!$_smarty_tpl->tpl_vars['settings']->value['allow_filter'])){?>checked="checked"<?php }?>>
                                                             <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                                        <?php if (isset($_smarty_tpl->tpl_vars['feature']->value['code'])){?>
                                                            <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['feature']->value['type_name'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</span>
                                                        <?php }?>
                                                    </label>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="field js-product-category-visibility-block">
                            <div class="name">
                                Видимость категории
                            </div>
                            <div class="value no-shift">
                                <label><input type="radio" name="storefront" value="" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['routes']){?>checked="checked"<?php }?>>
                                    Все витрины
                                </label>
                            </div>
                            <div class="value no-shift">
                                <label><input type="radio" name="storefront" value="route" <?php if ($_smarty_tpl->tpl_vars['settings']->value['routes']){?>checked="checked"<?php }?>>
                                    Только выбранные витрины
                                </label>
                            </div>
                            <?php if (!empty($_smarty_tpl->tpl_vars['routes']->value)){?>
                                <div class="value">

                                    <?php  $_smarty_tpl->tpl_vars['domain_routes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain_routes']->_loop = false;
 $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain_routes']->key => $_smarty_tpl->tpl_vars['domain_routes']->value){
$_smarty_tpl->tpl_vars['domain_routes']->_loop = true;
 $_smarty_tpl->tpl_vars['domain']->value = $_smarty_tpl->tpl_vars['domain_routes']->key;
?>
                                        <?php  $_smarty_tpl->tpl_vars['route'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['route']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domain_routes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['route']->key => $_smarty_tpl->tpl_vars['route']->value){
$_smarty_tpl->tpl_vars['route']->_loop = true;
?>
                                            <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable(($_smarty_tpl->tpl_vars['domain']->value).("/").($_smarty_tpl->tpl_vars['route']->value['url']), null, 0);?>
                                            <label>
                                                <input <?php if (in_array($_smarty_tpl->tpl_vars['url']->value,$_smarty_tpl->tpl_vars['settings']->value['routes'])){?>checked<?php }?> <?php if (!$_smarty_tpl->tpl_vars['settings']->value['routes']){?>disabled<?php }?> type="checkbox" name="routes[]"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"> <?php echo waIdna::dec($_smarty_tpl->tpl_vars['url']->value);?>

                                            </label>
                                            <br>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['has_children']){?>
                                <div class="value" style="margin-top: 20px">
                                    <label class="italic">
                                        <input type="checkbox" name="propagate_visibility" value="1" checked="checked"> Применить новые настройки видимости к подкатегориям
                                    </label>
                                </div>
                            <?php }?>
                        </div>

                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">Заголовок</div>
                                <div class="value">
                                    <input value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['meta_title'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                                           id="s-meta-title"
                                           name="meta_title"
                                           placeholder="<?php echo htmlspecialchars(shopCategoryModel::getDefaultMetaTitle($_smarty_tpl->tpl_vars['settings']->value), ENT_QUOTES, 'UTF-8', true);?>
" class="long bold">
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">META Keywords</div>
                                <div class="value">
            <textarea name="meta_keywords"
                      placeholder="<?php echo htmlspecialchars(shopCategoryModel::getDefaultMetaKeywords($_smarty_tpl->tpl_vars['settings']->value), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['meta_keywords'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">META Description</div>
                                <div class="value">
                                    <textarea name="meta_description"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['settings']->value['meta_description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                        </div>

                        
                        <?php $_smarty_tpl->tpl_vars['category_og'] = new Smarty_variable(ifempty($_smarty_tpl->tpl_vars['settings']->value['og'],array()), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['editable_ogs_list'] = new Smarty_variable(explode(',','title,image,video,description,type'), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['editable_ogs'] = new Smarty_variable(array_intersect_key($_smarty_tpl->tpl_vars['category_og']->value,array_fill_keys($_smarty_tpl->tpl_vars['editable_ogs_list']->value,1)), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['other_ogs'] = new Smarty_variable(array_diff_key($_smarty_tpl->tpl_vars['category_og']->value,$_smarty_tpl->tpl_vars['editable_ogs']->value), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['og'] = new Smarty_variable($_smarty_tpl->tpl_vars['editable_ogs']->value, null, 0);?>

                        <div class="field-group" style="display: none;">
                            <div class="field">
                                <div class="name">Соцсети</div>
                                <div class="value no-shift">
                                    <label><input type="checkbox" class="js-category-social-metatag" <?php if (!$_smarty_tpl->tpl_vars['editable_ogs']->value){?> checked<?php }?>> Для соцсетей использовать эти же заголовки</label>
                                </div>
                            </div>

                            <div class="field">
                                <div class="name">Заголовок для соцсетей <span class="hint">og:title</span></div>
                                <div class="value">
                                    <input name="og[title]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['title']), ENT_QUOTES, 'UTF-8', true);?>
" class="long bold">
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">URL изображения для соцсетей <span class="hint">og:image</span></div>
                                <div class="value">
                                    <input name="og[image]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['image']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="" class="long">
                                    <br>
                                    <span class="hint">Если адрес не указан явно, соцсеть автоматически выберет одно из изображений на странице</span>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">URL видео для соцсетей <span class="hint">og:video</span></div>
                                <div class="value">
                                    <input name="og[video]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['video']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="" class="long">
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">Описание для соцсетей <span class="hint">og:description</span></div>
                                <div class="value">
                                    <textarea name="og[description]"><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['description']), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                </div>
                            </div>
                            <div class="field">
                                <div class="name">Тип страницы для соцсетей <span class="hint">og:type</span></div>
                                <div class="value">
                                    <input name="og[type]" value="<?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['og']->value['type']), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="article">
                                </div>
                            </div>

                            <div class="field">
                                <div class="value">
                                    <p class="hint">Подробная информация о параметрах для соцсетей и их возможных значениях опубликована на сайте протокола <a href="http://ogp.me" target="_blank">Open Graph</a>.</p>
                                </div>
                            </div>

                            
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['other_ogs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <input type="hidden" name="og[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php } ?>

                            
                            <?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['editable_ogs_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
                                <input type="hidden" name="og[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="" class="editable-og-disabler"<?php if ($_smarty_tpl->tpl_vars['editable_ogs']->value){?> disabled<?php }?>>
                            <?php } ?>
                        </div>

                        
                        <div class="field-group">
                            <div class="field description">
                                <div class="name">
                                    <label for="description">
                                        Описание
                                    </label>
                                </div>
                                <div class="value">
                                    <i class="icon16 loading"></i>
                                    <div class="s-editor-core-wrapper wa-editor-core-wrapper" style="display:none;">
                                        <ul class="wa-editor-wysiwyg-html-toggle s-wysiwyg-html-toggle">
                                            <li class="selected"><a class="wysiwyg" href="#">Визуальный редактор</a></li>
                                            <li><a class="html" href="#">HTML</a></li>
                                        </ul>
                                        <div>
                    <textarea style="display:none" id="s-category-description-content" name="description"
                              data-modification-wysiwyg-msg="WYSIWYG editor may change your HTML code. It is necessary for correct text formatting. Smarty code may be broken and outdated HTML tags may be replaced with modern ones. Are you sure to switch to WYSIWYG editor?"
                    ><?php if (isset($_smarty_tpl->tpl_vars['settings']->value['description'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                                            <div class="ace">
                                                <div id="wa-ace-editor-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="field-group">
                            <div class="field">
                                <div class="name">
                                    <label for="custom-settings">
                                        Дополнительные параметры
                                    </label>
                                </div>
                                <div class="value">
                                    <textarea name="params" rows="10" cols="5"><?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['params'])){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['k']->value!='order'){?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
=<?php echo (htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true)).("\n");?>
<?php }?><?php } ?><?php }?></textarea><br>
                                    <span class="hint">Необязательный набор дополнительных параметров <em>key=value</em> (используются в шаблоне общедоступной части в виде <em>&#123;$category.params.key&#125;</em>). Каждую пару key=value указывайте с новой строки.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" value="Сохранить" class="button green">
                    или <a class="cancel" href="#">отмена</a>
                    <span class="s-category-error errormsg js-category-error"></span>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </div>
    </form>
</div>

<script type="text/javascript">
    //VARS NEED TO wysiwyg and
    var wa_url = '<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
';
    var wa_app = 'shop';
    var wa_lang = '<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
';

    (function ($) {
        new shopDialogProductsCategory({
            $wrapper: $('#s-product-category-dialog'),
            category_id: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value['id']);?>
,
            account_name: "<?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
"
        });
    })(jQuery);
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 10:51:40
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/category/feature.template.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7cd90c168376_69375610')) {function content_5c7cd90c168376_69375610($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_replace')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty3/plugins/modifier.replace.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['features'])){?>
    <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['f_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['settings']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['f_id']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
        <?php $_smarty_tpl->tpl_vars['conditions_feature'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['settings']->value,'conditions','feature',array()), null, 0);?>
        <tr>
            <td colspan="2" class="js-condition-feature-names">
                <label>
                    <input class="js-condition-feature s-condition" type="checkbox" name="" data-feature_id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" value=""
                           <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['conditions']['feature'][$_smarty_tpl->tpl_vars['f']->value['code']])){?>checked<?php }?>>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </label>
                <span class="hint"><?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
</span>
                <?php if ((isset($_smarty_tpl->tpl_vars['f']->value['status'])&&$_smarty_tpl->tpl_vars['f']->value['status']=='private')){?><i class="icon16 ss visibility" title="Видна только в бекенде"></i><?php }?>
            </td>
            <td colspan="2">
                <div class="js-condition-feature-block s-feature-block-values">
                    <?php if (!empty($_smarty_tpl->tpl_vars['settings']->value['id'])){?>
                    <div class="js-feature-list-value">
                        <?php if (!empty($_smarty_tpl->tpl_vars['f']->value['values'])&&substr($_smarty_tpl->tpl_vars['f']->value['type'],0,5)!=='range'){?>
                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                <label>
                                    <input class="s-condition js-feature-value" type="checkbox" data-f_val="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][values][]" value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
"
                                           checked="checked">
                                    <?php if ($_smarty_tpl->tpl_vars['f']->value['type']=='color'){?>
                                        <i class="icon16 color s-color-icon" style="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['style'])===null||$tmp==='' ? '' : $tmp);?>
"></i>
                                    <?php }?>
                                    <?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value,64), ENT_QUOTES, 'UTF-8', true);?>

                                </label>
                            <?php } ?>
                            <?php if ($_smarty_tpl->tpl_vars['f']->value['count']>count($_smarty_tpl->tpl_vars['f']->value['values'])){?>
                                <a href="javascript:void(0);" class="js-show-all-feature inline-link" data-feature_id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
"><b><i>Показать все</i></b></a>
                            <?php }?>
                        <?php }?>
                        <?php if (substr($_smarty_tpl->tpl_vars['f']->value['type'],0,5)=='range'){?>
                            <div class="js-feature-slider-<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
 s-feature-slider-block" data-slider="range" data-code="<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
">
                                <?php if (!empty($_smarty_tpl->tpl_vars['conditions_feature']->value[$_smarty_tpl->tpl_vars['f']->value['code']])){?>
                                    <?php $_smarty_tpl->tpl_vars['begin'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['conditions_feature']->value,$_smarty_tpl->tpl_vars['f']->value['code'],'begin',null), null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['end'] = new Smarty_variable(ifset($_smarty_tpl->tpl_vars['conditions_feature']->value,$_smarty_tpl->tpl_vars['f']->value['code'],'end',null), null, 0);?>
                                    от
                                    <input type="text" class="js-begin" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][values][begin]" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['begin']->value)){?><?php echo $_smarty_tpl->tpl_vars['begin']->value;?>
<?php }?>"
                                           value="<?php if (isset($_smarty_tpl->tpl_vars['begin']->value)){?><?php echo $_smarty_tpl->tpl_vars['begin']->value;?>
<?php }?>">
                                    до
                                    <input type="text" class="js-end" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][values][end]" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['end']->value)){?><?php echo $_smarty_tpl->tpl_vars['end']->value;?>
<?php }?>"
                                           value="<?php if (isset($_smarty_tpl->tpl_vars['end']->value)){?><?php echo $_smarty_tpl->tpl_vars['end']->value;?>
<?php }?>">
                                    <?php $_smarty_tpl->tpl_vars['f_unit'] = new Smarty_variable(shopDimension::getBaseUnit($_smarty_tpl->tpl_vars['f']->value['type']), null, 0);?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['f_unit']->value)&&isset($_smarty_tpl->tpl_vars['f_unit']->value['title'])){?><?php echo $_smarty_tpl->tpl_vars['f_unit']->value['title'];?>
<?php }?>
                                    <div class="js-range-slider"></div>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>

                    <input type="hidden" name="condition[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['code'];?>
][type]" value="<?php echo $_smarty_tpl->tpl_vars['f']->value['type'];?>
">
                    <span class="errormsg"></span>
                </div>
                <?php }?>
            </td>
        </tr>
    <?php } ?>
<?php }?>

<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("template_feature_field_values", null, null); ob_start(); ?> feature field values jquery template -->

    {% var count = 0; %}
    {% for (var v_id in o.feature.values) { %}
    {% if (o.feature.values.hasOwnProperty(v_id)) { %}
    {% if (o.feature.type.substr(0, 5) !== 'range') { %}
    <!-- checkbox feature values template -->
    <label {% if (!o.show_all && count>= 7) { %}class="js-feature-hidden" style="display: none;"{% } %}>
        <input class="s-condition js-feature-value" type="checkbox" name="condition[features][{%=o.feature.code%}][values][]" value="{%=v_id%}" {% if (!o.default_checked) {
               %}disabled="disabled" {% } %}>
        {% if (o.feature.type == 'color') { %}
        <i class="icon16 color s-color-icon" style="background:{%=o.feature.values[v_id].hex%};"></i>
        {%=o.feature.values[v_id].value%}
        {% } else { %}
        {%=o.feature.values[v_id]%}
        {% } %}
    </label>
    {% if (!o.show_all && count == 7) { %}
    <a href="javascript:void(0);" class="js-show-all-feature inline-link"><b><i>Показать все</i></b></a>
    {% } %}
    {% count++; %}
    {% }else { %}
    <!-- slider feature values template (only range) -->
    <div class="js-feature-slider-{%=o.feature.code%} s-feature-slider-block">
        {% if (o.feature.values[v_id]) { %}
        от <input type="text" class="js-begin" name="condition[features][{%=o.feature.code%}][values][begin]"
                        value="{% if (o.feature.values[v_id].begin) { %}{%=o.feature.values[v_id].begin%}{% }else{ %}0{% } %}"
                        placeholder="{% if (o.feature.values[v_id].begin) { %}{%=o.feature.values[v_id].begin%}{% }else{ %}0{% } %}" {% if (!o.default_checked) {
                        %}disabled="disabled" {% } %}>
        до <input type="text" class="js-end" name="condition[features][{%=o.feature.code%}][values][end]"
                      value="{% if (o.feature.values[v_id].end) { %}{%=o.feature.values[v_id].end%}{% }else{ %}100{% } %}"
                      placeholder="{% if (o.feature.values[v_id].end) { %}{%=o.feature.values[v_id].end%}{% }else{ %}100{% } %}" {% if (!o.default_checked) { %}disabled="disabled"
                      {% } %}>
        {% if (o.feature.unit) { %}{%=o.feature.unit%}{% } %}
        <div class="js-range-slider"></div>
        {% } %}
    </div>
    {% } %}
    {% } %}
    {% } %}
    {% if (!o.show_all) { %}
    <input type="hidden" name="condition[features][{%=o.feature.code%}][type]" value="{%=o.feature.type%}" {% if (!o.default_checked) { %}disabled="disabled" {% } %}>
    <span class="errormsg"></span>
    {% } %}

<!-- <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->

<script type="text/x-jquery-tmpl" id="template_feature_field_values">
    <?php echo smarty_modifier_replace(smarty_modifier_regex_replace(Smarty::$_smarty_vars['capture']["template_feature_field_values"],'@(^.*-->)|(<!\-\-.*$)@m',''),'</','<\/');?>


</script>


<!-- <?php $_smarty_tpl->_capture_stack[0][] = array("template_feature_field", null, null); ob_start(); ?> feature field jquery template  -->
<tr>
    <td colspan="2">
        <label><input class="js-condition-feature s-condition" type="checkbox" name="" data-loading="ok" data-feature_id="{%=o.feature.id%}" value="" {% if (o.default_checked) {
                      %}checked="checked" {% } %}> {%=o.feature.name%}</label>
        <span class="hint">{%=o.feature.code%}</span>
        {% if (o.feature.status == 'private') { %}<i class="icon16 ss visibility" title="Видна только в бекенде"></i>{% } %}
    </td>
    <td colspan="2">
        <div class="js-condition-feature-block s-feature-block-values" {% if (!o.show_all && !o.default_checked) { %}style="display:none" {% } %}>
            <?php echo Smarty::$_smarty_vars['capture']["template_feature_field_values"];?>

        </div>
    </td>
</tr>
<!--  <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?> -->

<script type="text/x-jquery-tmpl" id="template_feature_field">
    <?php echo smarty_modifier_replace(smarty_modifier_regex_replace(Smarty::$_smarty_vars['capture']["template_feature_field"],'@(^.*-->)|(<!\-\-.*$)@m',''),'</','<\/');?>


</script><?php }} ?>