<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:53:40
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/frontend/FrontendBuybuttons.html" */ ?>
<?php /*%%SmartyHeaderCode:6103423225c8f4e840644f3-05475599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7563813f5b8a4e8afa84455308b49b561db4694e' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/frontend/FrontendBuybuttons.html',
      1 => 1543322182,
      2 => 'file',
    ),
    'e8ac2f65e57282855b9e0b4b7aa8ea89b3519aba' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/css/buyButton.css',
      1 => 1543322181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6103423225c8f4e840644f3-05475599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'img_url' => 0,
    'wa_url' => 0,
    '_font_family' => 0,
    '_background_color' => 0,
    '_text_color' => 0,
    '_button_color' => 0,
    '_price_color' => 0,
    '_link_color' => 0,
    'wa' => 0,
    'container_id' => 0,
    '_show_image' => 0,
    'product_url' => 0,
    'product' => 0,
    'features_selectable' => 0,
    'f' => 0,
    'v_id' => 0,
    'default_sku_features' => 0,
    'v' => 0,
    'sku' => 0,
    'name' => 0,
    'value' => 0,
    'sku_features_selectable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4e840e7ae6_46155056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4e840e7ae6_46155056')) {function content_5c8f4e840e7ae6_46155056($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_background_color'] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['params']->value['background_color']), null, 0);?><?php $_smarty_tpl->tpl_vars['_link_color'] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['params']->value['links_color']), null, 0);?><?php $_smarty_tpl->tpl_vars['_text_color'] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['params']->value['text_color']), null, 0);?><?php $_smarty_tpl->tpl_vars['_button_color'] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['params']->value['button_color']), null, 0);?><?php $_smarty_tpl->tpl_vars['_price_color'] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['params']->value['price_color']), null, 0);?><?php $_smarty_tpl->tpl_vars['_font_family'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['params']->value['font_family'])===null||$tmp==='' ? '' : $tmp), null, 0);?><?php $_smarty_tpl->tpl_vars['_show_image'] = new Smarty_variable((!empty($_smarty_tpl->tpl_vars['params']->value['show_image'])&&$_smarty_tpl->tpl_vars['img_url']->value), null, 0);?><!DOCTYPE html><html><head><link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/font/ruble/arial/fontface.css" rel="stylesheet" /><style><?php /*  Call merged included template "../../../css/buyButton.css" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("../../../css/buyButton.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '6103423225c8f4e840644f3-05475599');
content_5c8f4e840a1770_21798932($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "../../../css/buyButton.css" */?></style><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js"></script><style><?php if ($_smarty_tpl->tpl_vars['_font_family']->value){?>.wa-widget-wrapper {font-family: <?php echo $_smarty_tpl->tpl_vars['_font_family']->value;?>
;}<?php }?>.wa-content-wrapper {background: <?php echo $_smarty_tpl->tpl_vars['_background_color']->value;?>
;color: <?php echo $_smarty_tpl->tpl_vars['_text_color']->value;?>
;}.wa-add-button {background: <?php echo $_smarty_tpl->tpl_vars['_button_color']->value;?>
;}.wa-price {color: <?php echo $_smarty_tpl->tpl_vars['_price_color']->value;?>
;}a {color: <?php echo $_smarty_tpl->tpl_vars['_link_color']->value;?>
;}</style></head><body><form class="wa-buy-button-form" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->get('storefront');?>
" method="post" target="_blank"><div class="wa-widget-wrapper"><div class="wa-widget" id="<?php echo $_smarty_tpl->tpl_vars['container_id']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['_show_image']->value){?><div class="wa-image-wrapper"><img src="<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
"></div><?php }?><div class="wa-content-wrapper"><div class="wa-text-wrapper"><h3><a href="<?php echo $_smarty_tpl->tpl_vars['product_url']->value;?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h3><p><?php echo $_smarty_tpl->tpl_vars['product']->value['summary'];?>
</p></div><div class="wa-footer-wrapper"><div class="table-layout"><div class="left-column"><?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?><?php $_smarty_tpl->tpl_vars['default_sku_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['sku_features'], null, 0);?><div class="wa-options"><?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features_selectable']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['f']->value['name'];?>
:<select data-feature-id="<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
" class="wa-sku-feature" name="buybutton[features][<?php echo $_smarty_tpl->tpl_vars['f']->value['id'];?>
]"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['v_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['f']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v_id']->value = $_smarty_tpl->tpl_vars['v']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['v_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v_id']->value==ifset($_smarty_tpl->tpl_vars['default_sku_features']->value[$_smarty_tpl->tpl_vars['f']->value['id']])){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option><?php } ?></select><br><?php } ?></div><?php }elseif(count($_smarty_tpl->tpl_vars['product']->value['skus'])>1){?><select class="wa-sku-selector" name="buybutton[sku_id]"><?php  $_smarty_tpl->tpl_vars['sku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['skus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sku']->key => $_smarty_tpl->tpl_vars['sku']->value){
$_smarty_tpl->tpl_vars['sku']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['sku']->value['id']==$_smarty_tpl->tpl_vars['product']->value['sku_id']){?> selected="selected"<?php }?> <?php if (!$_smarty_tpl->tpl_vars['sku']->value['orig_available']){?>disabled="disabled"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['sku']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sku']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option><?php } ?></select><?php }?><span class="wa-price"><?php echo shop_currency_html($_smarty_tpl->tpl_vars['product']->value['price']);?>
</span></div><div class="right-column"><input class="wa-add-button" type="submit" value="<?php if ($_smarty_tpl->tpl_vars['params']->value['goto']==='checkout'){?>Купить<?php }else{ ?>В корзину<?php }?>"></div></div></div></div></div></div><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?><input type="hidden" name="buybutton[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"><?php } ?></form></body></html>

<script>
    $(function () {

        var purchasing_disabled = true;

        <?php if ($_smarty_tpl->tpl_vars['product']->value['sku_type']){?>
            purchasing_disabled = false;
            var features = <?php echo json_encode($_smarty_tpl->tpl_vars['sku_features_selectable']->value);?>
;
            $(".wa-sku-feature").change(function () {
                var key = "";
                $(".wa-sku-feature").each(function () {
                    key += $(this).data('feature-id') + ':' + $(this).val() + ';';
                });
                var sku = features[key];
                if (sku) {
                    purchasing_disabled = !sku.available;
                    $('.wa-price').html(sku.price_html || '');
                } else {
                    $('.wa-price').html('');
                    purchasing_disabled = true;
                }
            }).trigger('change');
        <?php }else{ ?>
            var skus = <?php echo json_encode($_smarty_tpl->tpl_vars['product']->value->skus);?>
;
            purchasing_disabled = skus.length <= 0;
            $('.wa-sku-selector').change(function () {
                var val = $(this).find('option:selected').val() || '';
                var sku = skus[val];
                if (sku) {
                    purchasing_disabled = !sku.available;
                    $('.wa-price').html(skus[val].price_html || '');
                    $('.wa-price[data-sku-id="' + val + '"]').show();
                } else {
                    $('.wa-price').html('');
                    purchasing_disabled = true;
                }
            }).trigger('change');
        <?php }?>

        $('.wa-buy-button-form').submit(function (e) {
            if (purchasing_disabled) {
                alert('Нет в наличии');
                e.preventDefault();
            }
        });
    });
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:53:40
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/css/buyButton.css" */ ?>
<?php if ($_valid && !is_callable('content_5c8f4e840a1770_21798932')) {function content_5c8f4e840a1770_21798932($_smarty_tpl) {?>body,
html {
  padding: 0;
  margin: 0;
  overflow: hidden;
}
.wa-widget-wrapper {
  padding: 2px;
}
.wa-widget-wrapper .wa-widget {
  font-size: 14px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  overflow: hidden;
  -webkit-box-shadow: 0 0 2px rgba(0,0,0,0.1), 0 2px 2px rgba(0,0,0,0.1);
  box-shadow: 0 0 2px rgba(0,0,0,0.1), 0 2px 2px rgba(0,0,0,0.1);
}
.wa-widget-wrapper .wa-widget .wa-image-wrapper {
  line-height: 0;
}
.wa-widget-wrapper .wa-widget .wa-image-wrapper img {
  -webkit-border-radius: 2px 2px 0 0;
  border-radius: 2px 2px 0 0;
  width: 100%;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper {
  padding: 1em;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-text-wrapper {
  word-wrap: break-word;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-text-wrapper a {
  text-decoration: none;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-text-wrapper h3 {
  margin: 0;
  font-size: 1.2em;
  line-height: 1.1em;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-text-wrapper p {
  margin: 1em 0 0;
  line-height: 1.25em;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-footer-wrapper {
  margin: 1em 0 0;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-footer-wrapper .table-layout {
  display: table;
  width: 100%;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-footer-wrapper .table-layout .left-column,
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-footer-wrapper .table-layout .right-column {
  display: table-cell;
  vertical-align: middle;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-footer-wrapper .table-layout .right-column {
  padding: 0 0 0 8px;
  text-align: right;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-footer-wrapper .wa-price {
  display: inline-block;
  font-weight: bold;
  font-size: 1.1em;
}
.wa-widget-wrapper .wa-widget .wa-content-wrapper .wa-footer-wrapper .wa-add-button {
  display: inline-block;
  margin: 0;
  padding: 10px;
  width: auto;
  height: 40px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border: 0;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -webkit-box-shadow: 0 0 2px rgba(0,0,0,0.1), 0 2px 2px rgba(0,0,0,0.1);
  box-shadow: 0 0 2px rgba(0,0,0,0.1), 0 2px 2px rgba(0,0,0,0.1);
  font-weight: normal;
  font-size: 1em;
  line-height: 1.25em;
  text-decoration: none;
  color: #fff;
  white-space: nowrap;
  text-align: center;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
}
<?php }} ?>