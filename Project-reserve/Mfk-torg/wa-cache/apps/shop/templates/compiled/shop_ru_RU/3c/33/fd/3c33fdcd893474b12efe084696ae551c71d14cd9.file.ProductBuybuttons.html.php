<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:53:38
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductBuybuttons.html" */ ?>
<?php /*%%SmartyHeaderCode:7137151625c8f4e82bcf9c8-63799099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c33fdcd893474b12efe084696ae551c71d14cd9' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductBuybuttons.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7137151625c8f4e82bcf9c8-63799099',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'storefronts' => 0,
    'storefront' => 0,
    'locales' => 0,
    'locale_id' => 0,
    'wa' => 0,
    'locale' => 0,
    'preview_controller' => 0,
    'app_static_url' => 0,
    'app_storefront' => 0,
    'id' => 0,
    'name' => 0,
    'img_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4e82c1d3e5_52416328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4e82c1d3e5_52416328')) {function content_5c8f4e82c1d3e5_52416328($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css" type="text/css" />

<div id="s-product-buybuttons">
    <div style="display: table; width: 100%;">
        <div style="display: table-cell; vertical-align: top; width: 400px; padding: 0 1em 0 0;">
            <div class="fields form">
                <div class="field">
                    <div class="name">Витрина</div>
                    <div class="value no-shift">
                        <select name="storefront" class="s-embed-param">
                            <?php  $_smarty_tpl->tpl_vars['storefront'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['storefront']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storefronts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->key => $_smarty_tpl->tpl_vars['storefront']->value){
$_smarty_tpl->tpl_vars['storefront']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['storefront']->value['controller_url'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['storefront']->value['product_url'];?>
" data-static-url="<?php echo $_smarty_tpl->tpl_vars['storefront']->value['static_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['storefront']->value['root_url_decoded'];?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Язык</div>
                    <div class="value no-shift">
                        <select name="locale" class="s-embed-param">
                            <?php  $_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['locale']->_loop = false;
 $_smarty_tpl->tpl_vars['locale_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['locales']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->key => $_smarty_tpl->tpl_vars['locale']->value){
$_smarty_tpl->tpl_vars['locale']->_loop = true;
 $_smarty_tpl->tpl_vars['locale_id']->value = $_smarty_tpl->tpl_vars['locale']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['locale_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['locale_id']->value==$_smarty_tpl->tpl_vars['wa']->value->user()->getLocale()){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['locale']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['locale']->value['region'], ENT_QUOTES, 'UTF-8', true);?>
)</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Кнопка</div>
                    <div class="value no-shift">
                        <label><input class="s-embed-param" type="radio" name="goto" value="cart" checked="checked"> В корзину <span class="hint">Покупатели смогут добавить несколько товаров в корзину, прежде чем перейти к оформлению заказа</span></label>
                    </div>
                    <div class="value no-shift">
                        <label><input class="s-embed-param" type="radio" name="goto" value="checkout"> Купить <span class="hint">Покупатели будут сразу же отправлены к оформлению заказа</span></label>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Шрифт</div>
                    <div class="value no-shift">
                        <select name="font_family" class="s-embed-param">
                            <option value="Helvetica Neue,Arial,sans-serif" selected>Helvetica (Arial)</option>
                            <option value="Trebuchet MS,sans-serif">Trebuchet MS</option>
                            <option value="Verdana,sans-serif">Verdana</option>
                            <option value="Georgia,serif">Georgia</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Ширина</div>
                    <div class="value">
                        <input class="short s-embed-param" type="text" name="width" value="512" placeholder="512">px
                    </div>
                </div>
                <div class="field">
                    <div class="name">Цвет ссылки</div>
                    <div class="value s-color-block">
                        #<input type="text" name="links_color" value="006bd8" class="short s-color s-embed-param">
                        <span class="s-color-replacer">
                            <i class="icon16 color" style="background: #006bd8;"></i>
                        </span>
                        <div class="s-color-picker" style="display: none"></div>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Цвет текста</div>
                    <div class="value s-color-block">
                        #<input type="text" name="text_color" value="888888" class="short s-color s-embed-param">
                        <span class="s-color-replacer">
                            <i class="icon16 color" style="background: #888888;"></i>
                        </span>
                        <div class="s-color-picker" style="display: none"></div>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Цвет цены</div>
                    <div class="value s-color-block">
                        #<input type="text" name="price_color" value="ee1155" class="short s-color s-embed-param">
                        <span class="s-color-replacer">
                            <i class="icon16 color" style="background: #ee1155;"></i>
                        </span>
                        <div class="s-color-picker" style="display: none"></div>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Цвет фона</div>
                    <div class="value s-color-block">
                        #<input type="text" name="background_color" value="ffffff" class="short s-color s-embed-param">
                        <span class="s-color-replacer">
                            <i class="icon16 color" style="background: #ffffff;"></i>
                        </span>
                        <div class="s-color-picker" style="display: none"></div>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Цвет кнопки</div>
                    <div class="value s-color-block">
                        #<input type="text" name="button_color" value="ffcc00" class="short s-color s-embed-param">
                        <span class="s-color-replacer">
                            <i class="icon16 color" style="background: #ffcc00;"></i>
                        </span>
                        <div class="s-color-picker" style="display: none"></div>
                    </div>
                </div>
                <div class="field">
                    <div class="name">Изображение товара</div>
                    <div class="value no-shift">
                        <input class="s-embed-param" type="checkbox" name="show_image" value="1" checked="checked">
                    </div>
                </div>
            </div>
            <div class="fields" style="width: 100%;">
                <h5 class="heading">Код виджета</h5>
                <div class="field">
                    <div class="value" style="margin-left: 0px;">
                        <textarea class="s-product-embed-code" style="height: 300px; width: 300px;"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: table-cell; vertical-align: top;">
            <div class="s-preview-wrapper" style="position: relative;">
                <div class="s-product-embed-preview" style="position: absolute; left: 0; top: 20px;"></div>
            </div>
        </div>
    </div>
</div>

<script>
( function($) {

    function BuyButtonsPage(options) {
        var that = this;

        // DOM
        that.$wrapper = options["$wrapper"];
        that.$preview = that.$wrapper.find(".s-product-embed-preview");

        // VARS
        that.button_id = options["button_id"];
        that.product_name = options["product_name"];
        that.product_image = options["product_image"];
        that.change_time = 1100;

        // CLASS NAMES
        that.waiting_class = "is-waiting";

        // DYNAMIC VARS
        that.changeTimeout = 0;

        // INIT
        that.initClass();
    }

    BuyButtonsPage.prototype.initClass = function() {
        var that = this;

        // Magic
        that.$wrapper.closest('.s-product-form.buybuttons')
            .addClass('ajax');

        // Set default params
        that.setDataFromStorage();

        // Color picker
        that.initColorPicker();

        //
        $.shop.changeListener(that.$wrapper, '.s-embed-param', function() {
            that.generateEmbedHtml();
        });

        // Events
        that.$wrapper.on("change", ".s-embed-param", function() {
            that.generateEmbedHtml();
        });

        // First run
        that.generateEmbedHtml();
    };

    BuyButtonsPage.prototype.initColorPicker = function() {
        var that = this,
            $colorBlocks = that.$wrapper.find(".s-color-block");

        $colorBlocks.each( function() {
            var $block = $(this),
                $input = $block.find(".s-color"),
                $picker = $block.find(".s-color-picker"),
                $replacer = $block.find(".s-color-replacer"),
                first = true;

            // Init color picker
            var farbtastic = $.farbtastic($picker, function(color) {

                $replacer.find('i').css('background', color);

                $input.val(color.slice(1));

                !first && that.generateEmbedHtml();

                first = false;
            });

            // Set data
            var color = $input.val() || "";

            farbtastic.setColor('#' + color);

            // Event
            $replacer.on("click", function() {
                $picker.slideToggle(200);
                return false;
            });

            $.shop.changeListener($input, function () {
                var color = $input.val() || '';
                farbtastic.setColor('#' + color);
            });
        });

    };

    BuyButtonsPage.prototype.setDataFromStorage = function() {
        var that = this,
            $embed = that.$wrapper.find('.s-embed-param'),
            params = $.storage.get('shop/buybuttons/' + that.button_id);

        if (!$.isPlainObject(params)) {
            params = { };
        }

        $embed.each(function () {
            var $field = $(this),
                name = $field.attr("name"),
                val = $field.val(),
                is_radio = ( $field.is(':radio') ),
                is_checkbox = ( $field.is(':checkbox') );

            if (params[name] !== undefined) {
                if (is_radio) {
                    $field.attr('checked', val == params[name]);
                } else if (is_checkbox && val == params[name][0]) {
                    $field.attr('checked', params[name][1]);
                } else {
                    $field.val(params[name]);
                }
            }
        });
    };

    BuyButtonsPage.prototype.generateEmbedHtml = function() {
        var that = this,
            params = [],
            product_url = '',
            storefront = '',
            params_in_storage = { },
            show_image = false,
            width = 200,
            app_static_url = "",
            time = that.change_time;

        if (that.changeTimeout) {
            clearTimeout(that.changeTimeout);
        }

        that.$preview.addClass( that.waiting_class );

        that.changeTimeout = setTimeout( function() {


            that.$wrapper.find('.s-embed-param').each(function () {
                var el = $(this);
                if (el.is(':radio') && !el.is(':checked')) {
                    return;
                }

                var name = el.attr('name');
                var val = el.val();

                if (name === 'storefront') {
                    var $selected = el.find('option:selected');
                    product_url = $selected.data('url');
                    app_static_url = $selected.data("static-url");
                    storefront = $selected.val();
                }

                if (el.is(':checkbox')) {
                    params_in_storage[name] = [val, el.is(':checked')];
                    if (name === 'show_image' && el.is(':checked')) {
                        show_image = true;
                    }
                    if (el.is(':checked')) {
                        params.push("data-" + (name.replace('_', '-')) + "='" + val + "'");
                    }
                } else {
                    params_in_storage[name] = val;
                    if (name === 'storefront') {
                        params.push("data-" + (name.replace('_', '-')) + "='" + ':storefront' + "'");
                    } else {
                        if (val) {
                            params.push("data-" + (name.replace('_', '-')) + "='" + val + "'");
                        }
                    }
                }

                if ( name == "width" && val > 0 ) {
                    width = val;
                }

            });

            params.push("data-height=':height:'");

            $.storage.set('shop/buybuttons/' + that.button_id, params_in_storage);

            var html_tmpl =
                '<div class="webasyst-shop-script-product" data-id="' + that.button_id + '" :params>' +
                    '<a href=":product_url" target="_blank">' +
                        '<span>:product_name</span><br />' +
                        ':product_image' +
                    '</a>' +
                    '&lt;script&gt; ( function(d,s,h,c) { var script = d.createElement(s), wrapper = d.getElementsByClassName(c)[0]; h += "?v=" + parseInt((new Date().getTime())/(1000*60*60*24)); script.async = 1; script.src = h; wrapper.appendChild(script); })(document,"script",":app_static_url:js/buybuttons.js", "webasyst-shop-script-product"); &lt;/script&gt;' +
                '</div>';

            html_tmpl = html_tmpl
                .replace(':product_name', that.product_name)
                .replace(':product_image', (show_image && that.product_image) ? '<img src="' + that.product_image + '" style="width: ' + width + 'px;">' : "")
                .replace(':product_url', product_url);

            var html = html_tmpl
                .replace(':params', params.join(' '))
                .replace(':app_static_url:', app_static_url)
                .replace(':storefront', storefront);

            // Preview html is special. Preview doesn't know height of content, so it make measuring and then resizing iframe itself
            // For this purpose we use storefront of current domain if we can
            params.push('data-url="<?php echo $_smarty_tpl->tpl_vars['preview_controller']->value;?>
"');
            var preview_html = html_tmpl
                .replace(':params', params.join(' '))
                .replace(':app_static_url:', '<?php echo $_smarty_tpl->tpl_vars['app_static_url']->value;?>
')
                .replace(':storefront', '<?php echo $_smarty_tpl->tpl_vars['app_storefront']->value;?>
');

            var embed_block = that.$wrapper.find('.s-product-embed-code');
            var prev_embed_code = embed_block.html();
            if (prev_embed_code != html) {
                embed_block.html(html);

                that.$preview.html(
                    preview_html
                        .replace(/&lt;/g, '<')
                        .replace(/&gt;/g, '>')
                );

                that.$preview.one("height-is-set", function(event, height) {
                    embed_block.html(html.replace(":height:", height));
                });

                setFrameHeight();
            }

            that.$preview.removeClass( that.waiting_class );
        }, time);

        function setFrameHeight() {
            var $wrapper = that.$preview,
                $container = $wrapper.closest(".s-preview-wrapper");

            $container.css("height", "auto");

            frameTimeout();

            function frameTimeout() {
                setTimeout( function() {
                    var $frame = $wrapper.find("iframe");
                    if (!$frame.length) {
                        frameTimeout();
                    } else {
                        $container.height( $container.outerHeight() + $frame.outerHeight() );
                        $wrapper.trigger("height-is-set", $frame.outerHeight());
                    }
                }, 1000);
            }
        }
    };

    new BuyButtonsPage({
        $wrapper: $("#s-product-buybuttons"),
        button_id: "<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
        product_name: "<?php echo htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
",
        product_image: <?php if ($_smarty_tpl->tpl_vars['img_url']->value){?>"<?php echo $_smarty_tpl->tpl_vars['img_url']->value;?>
"<?php }else{ ?>false<?php }?>
    });

})(jQuery)
</script>
<?php }} ?>