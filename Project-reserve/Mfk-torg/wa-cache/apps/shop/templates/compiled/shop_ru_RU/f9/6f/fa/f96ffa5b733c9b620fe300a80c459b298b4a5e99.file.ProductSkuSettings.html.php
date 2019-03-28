<?php /* Smarty version Smarty-3.1.14, created on 2019-03-11 11:24:36
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductSkuSettings.html" */ ?>
<?php /*%%SmartyHeaderCode:2769919635c861b44aa5f44-17241018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f96ffa5b733c9b620fe300a80c459b298b4a5e99' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductSkuSettings.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2769919635c861b44aa5f44-17241018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'sku_id' => 0,
    'sku' => 0,
    'backend_product_sku_settings' => 0,
    '_' => 0,
    'features' => 0,
    'feature' => 0,
    'code' => 0,
    'sku_features' => 0,
    'product' => 0,
    'units' => 0,
    'unit' => 0,
    'selected_' => 0,
    'image_id' => 0,
    'image' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c861b44b5d3f4_64098683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c861b44b5d3f4_64098683')) {function content_5c861b44b5d3f4_64098683($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_format_file_size')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_format_file_size.php';
?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js"></script>

<div class="fields form extra-padded-left">

    <div class="field">
        <div class="name">Доступен для заказа</div>
        <div class="value no-shift"><input type="checkbox" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][available]" <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['available'])){?> checked="checked"<?php }?> value="1"></div>
    </div>

    <!-- plugin hook: 'backend_product_sku_settings' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_product_sku_settings']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product_sku_settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?><?php }?>

    
    <?php if (!empty($_smarty_tpl->tpl_vars['features']->value['weight'])){?>
        <?php $_smarty_tpl->tpl_vars['feature'] = new Smarty_variable($_smarty_tpl->tpl_vars['features']->value['weight'], null, 0);?>
        <?php if (empty($_smarty_tpl->tpl_vars['feature']->value['multiple'])&&(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'dimension.')===0)){?>
            <?php $_smarty_tpl->tpl_vars['code'] = new Smarty_variable('weight', null, 0);?>
            <div class="field">
                <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                <div class="value">
                    <?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable(shopDimension::getUnits($_smarty_tpl->tpl_vars['feature']->value['type']), null, 0);?>
                    <input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][value]"
                        value="<?php if (isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value]->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
                        <?php if (!isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&isset($_smarty_tpl->tpl_vars['product']->value['features'][$_smarty_tpl->tpl_vars['code']->value])){?>
                            placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['features'][$_smarty_tpl->tpl_vars['code']->value]->value, ENT_QUOTES, 'UTF-8', true);?>
"
                        <?php }?>
                    >
                    <select name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][unit]">
                        <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['unit']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value){
$_smarty_tpl->tpl_vars['unit']->_loop = true;
 $_smarty_tpl->tpl_vars['unit']->index++;
 $_smarty_tpl->tpl_vars['unit']->first = $_smarty_tpl->tpl_vars['unit']->index === 0;
?>
                            <?php if (!isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&isset($_smarty_tpl->tpl_vars['product']->value['features'][$_smarty_tpl->tpl_vars['code']->value])){?>
                                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value['features'][$_smarty_tpl->tpl_vars['code']->value]->unit==$_smarty_tpl->tpl_vars['unit']->value['value']), null, 0);?>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['selected_'] = new Smarty_variable((!isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&$_smarty_tpl->tpl_vars['unit']->first)||(isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value]->unit==$_smarty_tpl->tpl_vars['unit']->value['value'])), null, 0);?>
                            <?php }?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
                                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
"
                                <?php if ($_smarty_tpl->tpl_vars['selected_']->value){?> selected="selected"<?php }?>
                            ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unit']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                    </select>
                    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['features'][$_smarty_tpl->tpl_vars['code']->value])){?>
                        <p class="hint"><?php echo sprintf('Укажите вес этого артикула, если он отличается от значения веса, заданного для товара (%s).',$_smarty_tpl->tpl_vars['product']->value['features']['weight']);?>
 Значение поля «Вес» используется для расчета стоимости доставки.</p>
                    <?php }?>
                </div>
            </div>
        <?php }?>
    <?php }?>

    <div class="field s-product-sku-images" <?php if (count($_smarty_tpl->tpl_vars['product']->value->images)<=1){?>style="display:none"<?php }?>>
        <div class="name">Изображение для данного артикула</div>
        <div class="value">
        <input type="text" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][image_id]" value="<?php echo $_smarty_tpl->tpl_vars['sku']->value['image_id'];?>
" style="display:none;">
        <ul class="s-product-image-crops">

            

            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['image_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['image_id']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
            <li data-image-id="<?php echo $_smarty_tpl->tpl_vars['image_id']->value;?>
"<?php if (($_smarty_tpl->tpl_vars['sku']->value['image_id']==$_smarty_tpl->tpl_vars['image_id']->value)){?> class="selected"<?php }?>>
                <a href="#/product/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
/edit/main/sku/image/select/<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['image_id']->value;?>
/" class="js-action"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['url_crop'];?>
"></a>
            </li>
            <?php } ?>

        </ul>
        </div>
    </div>

    <div class="field">
        <div class="name">
            Прикрепленный файл
        </div>
        <div class="value no-shift">
            <input type="file" name="" class="fileupload" <?php if ($_smarty_tpl->tpl_vars['sku_id']->value<0){?> disabled="disabled"<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?> style="display:none;"<?php }?>>

            <?php if ($_smarty_tpl->tpl_vars['sku_id']->value<0){?><span class="hint"><br>Сохраните информацию о товаре, чтобы прикрепить файл</span><?php }?>

            <div class="js-progressbar-container" style="display:none;">
                <div class="progressbar blue float-left" style="width: 70%;">
                    <div class="progressbar-outer">
                        <div class="progressbar-inner" style="width: 0%;"></div>
                    </div>
                </div>
                <br clear="left">
                <span class="small italic">Пожалуйста, не закрывайте браузер и не покидайте эту страницу, пока не завершится процесс загрузки.</span>
            </div>

            <div class="s-sku-attachment" <?php if (empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?> style="display: none;"<?php }?>>
                <input type="hidden" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][eproduct_manage]" value="1">
                <input type="checkbox" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][eproduct]" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?> checked="checked"<?php }?>>
                <strong class="s-file-name">
                    <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </strong>
                <span class="s-file-size hint">
                    <?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_size'])){?>
                        <?php echo smarty_modifier_wa_format_file_size($_smarty_tpl->tpl_vars['sku']->value['file_size']);?>

                    <?php }?>
                </span>
                <input type="hidden" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][file_name]" class="s-input-file-name" value="<?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['file_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                <p class="small">Комментарий к прикрепленному файлу (не обязательно):<br>
                    <textarea rows="5" cols="40" name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][file_description]" class="s-file-description"><?php if (!empty($_smarty_tpl->tpl_vars['sku']->value['file_description'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['file_description'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                </p>
            </div>

            <p class="hint">Ссылка на загрузку файла будет отправлена покупателю в уведомлении о заказе и будет работать только в случае, если заказ был оплачен. Удобный способ доставки электронных товаров.</p>

            <span class="error-message"></span>
        </div>
    </div>

    <?php if (count($_smarty_tpl->tpl_vars['features']->value)){?>
        <h5 class="heading">Характеристики артикула</h5>
        <p class="hint">Сохранение значений характеристик для артикулов позволяет улучшить удобство подбора товаров для покупателя. Когда покупатель находит товар с использованием фильтров по характеристикам, артикул для этого товара будет выбран автоматически согласно указанным значениям характеристик.</p>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['feature']->key;
?>
        <div class="field">
            <?php if (($_smarty_tpl->tpl_vars['code']->value=='weight')&&empty($_smarty_tpl->tpl_vars['feature']->value['multiple'])&&(strpos($_smarty_tpl->tpl_vars['feature']->value['type'],'dimension.')===0)){?>
                
            <?php }else{ ?>
                <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<br><span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                <div class="value">
                    <select name="skus[<?php echo $_smarty_tpl->tpl_vars['sku_id']->value;?>
][features][<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
]">
                        <option value=""></option>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                            <option value="<?php echo (string)htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (isset($_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])&&($_smarty_tpl->tpl_vars['value']->value==(string)$_smarty_tpl->tpl_vars['sku_features']->value[$_smarty_tpl->tpl_vars['code']->value])){?>selected="selected"<?php }?>>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>

                            </option>
                        <?php } ?>
                    </select>
                </div>
            <?php }?>
        </div>
    <?php } ?>

</div>
<?php }} ?>