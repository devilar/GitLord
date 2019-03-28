<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:39
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/plugins/smartsearch/templates/Smartsearch.html" */ ?>
<?php /*%%SmartyHeaderCode:12557932305c7ac35fe2fcf7-10710520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a2d251ddd34c5103f68e753fb704b6e8f8fa352' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/plugins/smartsearch/templates/Smartsearch.html',
      1 => 1551549257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12557932305c7ac35fe2fcf7-10710520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'smartsearch_theme' => 0,
    'wa_url' => 0,
    'autocomplete_width' => 0,
    'autocomplete_text_color' => 0,
    'autocomplete_text_color_hover' => 0,
    'autocomplete_price_color' => 0,
    'selector' => 0,
    'minLength' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac35fe45695_13204452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac35fe45695_13204452')) {function content_5c7ac35fe45695_13204452($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
plugins/smartsearch/css/themes/base/jquery.ui.all.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
plugins/smartsearch/css/themes/<?php echo $_smarty_tpl->tpl_vars['smartsearch_theme']->value;?>
/jquery.ui.theme.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.position.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.autocomplete.min.js"></script>

<style>
    .ui-autocomplete{
        width: <?php if (intval($_smarty_tpl->tpl_vars['autocomplete_width']->value)){?> <?php echo $_smarty_tpl->tpl_vars['autocomplete_width']->value;?>
px <?php }else{ ?> auto<?php }?> !important;
        z-index: 9999 !important;
    }
    .autocomplete_img{
        float: left;
    }
    .autocomplete_content{
        padding-left: 5px;
        float: left;
        width: 300px;
    }
    .autocomplete_clear{
        clear: both
    }
    a.autocomplete_link{
        color: <?php echo $_smarty_tpl->tpl_vars['autocomplete_text_color']->value;?>
 !important;
    }
    a.autocomplete_link:hover{
        color: <?php echo $_smarty_tpl->tpl_vars['autocomplete_text_color_hover']->value;?>
 !important;
    }
    .autocomplete_price{
        color: <?php echo $_smarty_tpl->tpl_vars['autocomplete_price_color']->value;?>
;
        font-weight: bold;
    }
</style>

<script>
    jQuery(function ($) {
        $(document).ready(function () {
            if ($("<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
").length > 0) {
                $('<?php echo $_smarty_tpl->tpl_vars['selector']->value;?>
').autocomplete({
                    delay: 500,
                    minLength: parseInt('<?php echo $_smarty_tpl->tpl_vars['minLength']->value;?>
'),
                    source: function (request, response) {
                        request.term = request.term.replace(/^\s+|\s+$/g, '');
                        var query = request.term.replace(/\s+/g, '+');
                        $.ajax({
                            url: '<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/smartsearch');?>
',
                            data: {
                                term: query
                            },
                            type: "GET",
                            dataType: "json",
                            success: function (data) {
                                if (data.status == 'ok') {
                                    var items = $.map(data.data, function (item) {
                                        var img = '';
                                        if (item.img_url) {
                                            img = '<img src="' + item.img_url + '" />';
                                        }
                                        return {
                                            label: item.name,
                                            value: item.name,
                                            url: item.frontend_url,
                                            text: '<div class="autocomplete_img">' + img + '</div>\
                                                <div class="autocomplete_content">\
                                                <span class="autocomplete_name">' + item.name + '</span>\
                                                <span class="autocomplete_price">' + item.price_str + '</span>\
                                                </div>\
                                                <br class="autocomplete_clear"/>'
                                        }
                                    });
                                    response(items);
                                }
                            }
                        });
                    },
                    select: function (event, ui) {
                        location.href = ui.item.url;
                    }
                }).data("autocomplete")._renderMenu = function (ul, items) {
                    $.each(items, function (index, item) {
                        $('<li></li>')
                                .data('item.autocomplete', item)
                                .append('<a href="' + item.url + '">' + item.text + '</a>')
                                .appendTo(ul);
                    });
                };
            }
        });
    });
</script><?php }} ?>