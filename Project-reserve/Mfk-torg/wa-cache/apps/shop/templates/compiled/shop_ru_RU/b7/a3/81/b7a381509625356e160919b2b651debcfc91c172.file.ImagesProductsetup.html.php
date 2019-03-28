<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:00:43
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/images/ImagesProductsetup.html" */ ?>
<?php /*%%SmartyHeaderCode:3109651485c8f421b5abe99-67644326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7a381509625356e160919b2b651debcfc91c172' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/images/ImagesProductsetup.html',
      1 => 1543322182,
      2 => 'file',
    ),
    '4713b657dc65319f8f6b54f3d7720e32d6caa47c' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/images/include.imageUpload.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3109651485c8f421b5abe99-67644326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'types' => 0,
    'type' => 0,
    'icon' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f421b60a778_28971914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f421b60a778_28971914')) {function content_5c8f421b60a778_28971914($_smarty_tpl) {?><div class="block double-padded s-images-import" id="s-imagesproduct-form">
    <h1>Массовая загрузка изображений</h1>
    <p>Массовая загрузка изображений позволяет быстро создавать товары при загрузке группы файлов изображений. Shop-Script автоматически сгруппирует изображения по именам файлов, и вы сможете вручную организовать их, либо создавая новые товары, либо привязывая изображения к уже существующим товарам. Массовая загрузка изображений работает только в браузерах, поддерживающих HTML5.</p>
    
    <form id="fileupload" action="?module=product&amp;action=imageUpload" method="POST" enctype="multipart/form-data">
    
        <div class="block double-padded s-image-upload-dropbox" id="s-image-upload-dropbox">
            <a href="javascript:void(0);" id="s-upload-images-link" class="fileinput-button">
                <i class="icon16 upload"></i>Выберите изображения<input type="file" name="files[]" multiple=""></a>
            <span class="gray">или перетащите их сюда, чтобы начать загрузку</span>
        </div>
        <p class="gray" style="display:none;" id="s-image-upload-explanation">
            Перетаскивайте изображения между автоматически обнаруженными группами и прикрепляйте их к новым либо существующим товарам. После завершения группировки щелкните по кнопке «Загрузить изображения».
        </p>
        
        <table class="zebra s-bulk-image-uploader-map">
            <tbody class="preload-files">
            </tbody>
        </table>
        
        
        <input type="hidden" name="product_id" value="">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        
        <?php /*  Call merged included template "./include.imageUpload.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./include.imageUpload.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3109651485c8f421b5abe99-67644326');
content_5c8f421b5ddb01_52774641($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.imageUpload.html" */?>
    
        <div class="block">

            <p id="add-new-group-container" style="display:none;">
                <a href="#" class="inline-link" id="add-new-group"><i class="icon16 add"></i><b><i>Добавить товар</i></b></a>
            </p>
        
            <p id="s-product-type-container" style="display:none;">
                <?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable(reset($_smarty_tpl->tpl_vars['types']->value), null, 0);?>
                Установить всем новым товарам следующий тип товаров:
                <?php $_smarty_tpl->tpl_vars['icon'] = new Smarty_variable(shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon']), null, 0);?>
                <span id="s-product-type-icon"><?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
</span>
                <select name="type_id" id="s-product-type">
                    <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
                        <option data-icon="<?php echo htmlspecialchars(shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon']), ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        </option>
                    <?php } ?>
                </select>
            </p>
            
            <div class="fileupload-buttonbar">
                <input type="button" class="button green start" value="Загрузить изображения" style="display:none" id="submit">
                <span id="s-imagesproduct-report" style="display: none;"></span>
            </div>
            
        </div>
    
    </form>
    
    <div class="clear-both"></div>

</div>

<script>
    $('#s-product-type').bind('change', function() {
        var self = $(this);
        $('#s-product-type-icon').html(
            self.find('option:selected').attr('data-icon')
        );
    });
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:00:43
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/images/include.imageUpload.html" */ ?>
<?php if ($_valid && !is_callable('content_5c8f421b5ddb01_52774641')) {function content_5c8f421b5ddb01_52774641($_smarty_tpl) {?><style>
    .fade {
        opacity: 0;
        -webkit-transition: opacity 0.15s linear;
        -moz-transition: opacity 0.15s linear;
        -o-transition: opacity 0.15s linear;
        transition: opacity 0.15s linear;
    }
    .fade.in {
        opacity: 1;
    }
</style>

<div class="dialog width500px height400px s-drop-files-here-zone" id="s-image-uploader">
    <div class="dialog-background"></div>
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <div id="s-upload-step1">
                    <div id="s-upload-imagelist">
                        <ul class="zebra files"></ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <div id="s-upload-step1-buttons" class="fileupload-buttonbar">
                    <div class="block float-right" style="padding-top: 13px;">
                        <a href="#" class="hint cancel">Прервать</a>
                    </div>
                    <div class="block">
                        <div class="progressbar blue small width300px float-left">
                            <div class="progressbar-outer">
                                <div class="progressbar-inner fileupload-progressbar" id="s-upload-progressbar"></div>
                            </div>
                        </div>
                        <div class="float-left" style="margin-top: 5px;" id="s-upload-filescount"></div>
                        <div id="s-upload-error" style="display:none" class="block half-padded errormsg">
                            Файлы, загруженные с ошибками
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script id="template-group-container" type="text/html">

<tr data-group-id="{%=''+o.id%}" data-product-id="0">
<td class="images"><ul class="thumbs li100px s-product-image-crops"></ul></td>
<td class="min-width">&rarr;</td>
<td class="product">
    <input type="hidden" name="product[{%=''+o.id%}][id]"  class="s-product-id">
    <input type="text" name="product[{%=''+o.id%}][name]"  class="s-product-name" placeholder="Наименование">
    <input type="text" name="product[{%=''+o.id%}][price]" class="s-product-price short numerical" placeholder="0">
    <span class="s-product-price"></span>
    <span class="s-product-currency"><?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
</span>
</td>
<td class="min-width"><a href="#" class="s-group-delete"><i class="icon16 delete"></i></a></td>
</tr>
</script>

<script id="template-preload" type="text/html">

{% for (var i=0, file; file=o.files[i]; i++) { %}
    <li class="template-preload fade">
        <div class="preview">
            <span class="fade"></span>
        </div>
        <div class="hint">
            <span class="name"><span>{%=file.name%}</span></span>
        </div>
        <div class="error" {% if (!file.error) { %}style="display:none;"{% } %}>
            {%=file.error%}
        </div>
    </li>
{% } %}

</script>

<script id="template-upload" type="text/html">

    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <li class="template-upload">
        <div class="s-upload-oneimage-progress">
            <div class="s-image-filename">
                {%=file.name%}
                <span class="hint">{%=o.formatFileSize(file.size)%}</span>
            </div>
            <span class="start"></span><span class="cancel"></span>
        </div>
        &nbsp;
    </li>
    {% } %}

</script>

<script id="template-download" type="text/html">

    {% for (var i=0, files=o.files, l=files.length, file=files[0]; i<l; file=files[++i]) { %}
    <li class="template-upload {% if (file.error) { %}error{% } %}">
        {% if (file.error) { %}
            <div class="s-upload-oneimage-progress" style="width:100%">
                <div class="s-image-filename">
                    <b>{%=file.name%}</b>
                    {% if (typeof file.error === 'object' && file.error instanceof SyntaxError) { %}
                        {% if (file.responseText) { %}
                            {%#file.responseText%}
                        {% } else { %}
                            {%=$_('Failed to upload. Most probably, there were not enough memory to create thumbnails.')%}.
                        {% } %}
                    {% } else { %}
                        {%=file.error%}
                    {% } %}
                </div>
            </div>
        {% } else { %}
            <div class="s-upload-oneimage-progress" style="width:100%">
                <div class="s-image-filename">
                    {%=file.name%} <span class="hint">{%=o.formatFileSize(file.size)%}</span>
                </div>
            </div>
        {% } %}
        &nbsp;
    </li>
    {% } %}

</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/images/jquery.ui.widget.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/tmpl.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/images/load-image.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/images/canvas-to-blob.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/images/jquery.fileupload-fp.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/images/jquery.fileupload-ui.js"></script>


<script type="text/javascript">
$(function() {
    
    // Support css-transition. Used by fileupload-ui
    $.support.transition = (function () {
        var transitionEnd = (function () {
          var el = document.createElement('transition')
            , transEndEventNames = {
                 'WebkitTransition' : 'webkitTransitionEnd'
              ,  'MozTransition'    : 'transitionend'
              ,  'OTransition'      : 'oTransitionEnd otransitionend'
              ,  'transition'       : 'transitionend'
              }
            , name;
          for (name in transEndEventNames){
            if (el.style[name] !== undefined) {
              return transEndEventNames[name]
            }
          }
        }());
        return transitionEnd && {
          end: transitionEnd
        }
      })();
    
    // Updated version of $.Widget factory require _destroy methods
    if ($.type($.ui.autocomplete.prototype._destroy) === 'undefined') {
        $.extend($.ui.autocomplete.prototype, {
            _destroy: function() {
                
            }
        });
    }
    // Updated version of $.Widget factory require _destroy methods
    if ($.type($.ui.sortable.prototype._destroy) === 'undefined') {
        $.extend($.ui.sortable.prototype, {
            _destroy: function() {
                
            }
        });
    }

    var fileupload = $('#fileupload');
    fileupload.fileupload({
        maxFileSize: <?php echo waRequest::getUploadMaxFilesize();?>
,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        process: [
            {
                action: 'load',
                fileTypes: /^image\/(gif|jpeg|png)$/,
                maxFileSize: <?php echo waRequest::getUploadMaxFilesize();?>

            }
        ]
    });    
});
</script>

<?php }} ?>