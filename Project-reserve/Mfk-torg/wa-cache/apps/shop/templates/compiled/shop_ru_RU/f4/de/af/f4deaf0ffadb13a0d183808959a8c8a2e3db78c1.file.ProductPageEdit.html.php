<?php /* Smarty version Smarty-3.1.14, created on 2019-03-11 20:52:29
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductPageEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:17770153395c86a05d2164f3-24042999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4deaf0ffadb13a0d183808959a8c8a2e3db78c1' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductPageEdit.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17770153395c86a05d2164f3-24042999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'product_id' => 0,
    'url' => 0,
    'preview_hash' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c86a05d2924c5_42508464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c86a05d2924c5_42508464')) {function content_5c86a05d2924c5_42508464($_smarty_tpl) {?><div class="s-page-editor">
<form id="s-page-form" method="post" action="?module=product&action=pageSave<?php if ($_smarty_tpl->tpl_vars['page']->value){?>&id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
<?php }?>&product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
    <div class="block s-page-gray-toolbar">
        <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
        <div class="float-right ie-menu-h-fix">
            <ul class="menu-h">
                <li><a href="javascript:void(0);" class="inline-link" id="s-page-settings-toggle"><i class="icon16 edit"></i><b><i>Настройки страницы</i></b></a></li>
                <li><a class="s-page-delete" href="?module=product&action=PageDelete"><i class="icon16 delete"></i>Удалить</a></li>
            </ul>
        </div>
        <?php }?>
        <div class="js-product-page-name">
            <h2><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['status']==shopProductPagesModel::STATUS_DRAFT){?> <span class="s-page-draft">черновик</span><?php }?><?php }else{ ?>Новая страница<?php }?></h2>
            <div class="s-page-urls small">
                <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" title="Просмотр" target="_blank"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
/</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" target="_blank"><i class="icon10 new-window"></i></a>
                    <?php }?>
                <?php }?>
                <br />
            </div>
        </div>
        <div id="s-page-settings" style="<?php if ($_smarty_tpl->tpl_vars['page']->value){?>display: none;<?php }?>">
            <div class="fields form">
                <div class="field-group">
                    <div class="field">
                        <div class="name bold">Название страницы</div>
                        <div class="value">
                            <input type="text" class="bold large" name="info[name]" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                        </div>
                    </div>
                    <div class="field">
                        <div class="value s-ibutton-checkbox">
                            <ul class="menu-h">
                                <li><span id="s-page-v-open-label" class="s-page-gray">Черновик</span></li>
                                <li><input type="checkbox" id="s-page-v" name="info[status]" <?php if (!$_smarty_tpl->tpl_vars['page']->value||$_smarty_tpl->tpl_vars['page']->value['status']==shopProductPagesModel::STATUS_PUBLISHED){?>checked="checked"<?php }?> /></li>
                                <li><span id="s-page-v-private-label">Опубликовано</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="field s-page-url">
                        <div class="name bold">URL страницы</div>
                        <div class="value s-page-app-url">
                            <input type="text" name="info[url]" class="bold" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                        </div>
                        <div class="value small s-page-app-url">
                            <span><?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
/<?php }?><span class="s-page-url-part"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
/<?php }?></span></span>
                        </div>
                    </div>
                </div>
                <?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?>
                <a id="s-page-advanced-params-link" href="#" class="hint inline-link"><b><i>еще</i></b><i class="icon10 darr"></i></a>
                <div id="s-page-advanced-params" style="display:none">
                <?php }?>
                    <div class="field-group">
                        <div class="field">
                            <div class="name"><strong class="title">Заголовок</strong></div>
                            <div class="value"><input type="text" name="info[title]" value="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="bold long" placeholder="<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                        </div>
                        <div class="field">
                            <div class="name">META Keywords</div>
                            <div class="value"><textarea name="info[keywords]"><?php if (!empty($_smarty_tpl->tpl_vars['page']->value['keywords'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['keywords'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea></div>
                        </div>
                        <div class="field">
                            <div class="name">META Description</div>
                            <div class="value"><textarea name="info[description]"><?php if (!empty($_smarty_tpl->tpl_vars['page']->value['description'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea></div>
                        </div>
                    </div>
                <?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?>
                </div>
                <script type="text/javascript">
                    $("#s-page-advanced-params-link").click(function () {
                        $("#s-page-advanced-params").show();
                        $(this).remove();
                        return false;
                    });
                </script>
                <?php }?>
            </div>
            <br clear="left" />
        </div>
    </div>
    <div class="wa-editor-core-wrapper s-editor-core-wrapper">
        <ul class="wa-editor-wysiwyg-html-toggle s-wysiwyg-html-toggle">
            <li class="selected"><a class="wysiwyg" href="#">Визуальный редактор</a></li>
            <li><a class="html" href="#">HTML</a></li>
        </ul>
        <div>
            <textarea style="display:none" id="s-page-content" name="info[content]"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
            <div class="wa-editor-upload-img hidden" title="Загрузить изображение">
                <i class="icon16 image"></i>
            </div>
        </div>
    </div>
</form>

<div class="dialog" id="s-upload-dialog">
    <div class="dialog-background"> </div>
    <div class="dialog-window" style="height: 225px; min-height: 225px; width: 450px; min-width: 450px">
        <form id="s-upload-form" method="post" action="?module=pages&action=uploadimage&r=2" enctype="multipart/form-data">
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h2>Загрузить изображение</h2>
                    <div id="redactor-droparea" style="text-align: center;">
                        <input id="s-input-file" type="file" name="file" multiple>
                        <input type="hidden" name="path" id="s-upload-path" value="" />
                        <div class="loading" style="display:none; margin-top: 10px">
                            <i class="icon16 loading"></i> Загрузка...
                        </div>
                    </div>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" class="button green" value="Загрузить">
                    или <a href="#" class="inline-link cancel"><b><i>отмена</i></b></a>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(function () {

        if (!$.fn.fileupload) {
            // We don't initialize filupload immidiately so it's ok not to wait until this loads
            $.getScript(<?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
+"wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js?v"+<?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->version(true));?>
);
        }

        $('#s-page-content').waEditor({
            lang: "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
",
            smarty_wysiwyg_msg: <?php echo json_encode(_ws('WYSIWYG editor is disabled because page source contains Smarty code tags.'));?>
,
            modification_wysiwyg_msg: <?php echo json_encode(_ws('WYSIWYG editor may change your HTML code. It is necessary for correct text formatting. Smarty code may be broken and outdated HTML tags may be replaced with modern ones. Are you sure to switch to WYSIWYG editor?'));?>
,
            toolbarFixedTopOffset: $('#mainmenu').length ? $('#mainmenu').height() : 0,
            upload_img_dialog: '#s-upload-dialog',
            saveButton: $('#s-product-save-button'),
            callbacks: {
                change: function() {
                    $('#s-product-save-button').addClass('yellow');
                    $('#s-page-content').waEditor('sync');
                }
            }
        });

        var page_settings_container = $('#s-page-settings');

        var iButtonInit = function () {
            $("#s-page-v").iButton({
                labelOn: "",
                labelOff: "",
                classContainer: 'ibutton-container mini'
            });
        };
        if (page_settings_container.is(":visible")) {
            setTimeout(iButtonInit, 200);
        } else {
            $("#s-page-settings-toggle").one('click', function () {
                setTimeout(iButtonInit, 100);
                return false;
            });
        }
        $('#s-page-settings-toggle').click(function(){
            $('#s-page-settings').toggle();
            return false;
        });

        var status_check = function(item){
            if ($(item).is(':checked')) {
                $('#s-page-v-open-label').addClass('s-page-gray');
                $('#s-page-v-private-label').removeClass('s-page-gray');
            }
            else {
                $('#s-page-v-open-label').removeClass('s-page-gray');
                $('#s-page-v-private-label').addClass('s-page-gray');
            }
        };
        status_check($('#s-page-v'));
        $('#s-page-v').change(function(){
            $('#s-page-button').removeClass('green').addClass('yellow');
            status_check(this);
        });

        var url_input = page_settings_container.find('input[name="info[url]"]');
        url_input.keyup(function() {
            var val = url_input.val().replace(/(\/+)$/, '');
            page_settings_container.find('.s-page-url-part').text(val + '/');
        });

        <?php if (!$_smarty_tpl->tpl_vars['page']->value||!$_smarty_tpl->tpl_vars['page']->value['id']){?>
            page_settings_container.find('input:first').focus();
            page_settings_container.find('input[name="info[name]"]').blur(function () {
                if ($(this).val() && !url_input.val()) {
                    $.getJSON("?action=transliterate&str="+$(this).val(), function (r) {
                        if (!url_input.val()) {
                            url_input.val(r.data);
                            url_input.trigger('keyup');
                        }
                    });
                }
            });
        <?php }?>
    });
</script>

<div class="clear"></div>
</div>
<?php }} ?>