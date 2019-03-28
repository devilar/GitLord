<?php /* Smarty version Smarty-3.1.14, created on 2019-03-11 20:52:29
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductRelated.html" */ ?>
<?php /*%%SmartyHeaderCode:5824901755c86a05dde5bc4-33983649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3860fccf2681cc7aee1e8882728d2892a9eac603' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductRelated.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5824901755c86a05dde5bc4-33983649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'type' => 0,
    'related' => 0,
    'p' => 0,
    'backend_product_edit' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c86a05de55e14_84031037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c86a05de55e14_84031037')) {function content_5c86a05de55e14_84031037($_smarty_tpl) {?><div class="fields">
    <div class="field-group">
        <div class="field">
            <div class="name">
                Перекрестные продажи (Cross-selling)
            </div>
            <div class="value">
                <label><input type="radio" name="cross_selling" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value['cross_selling']==1){?>checked="true"<?php }?>> Вкл
                <?php if ($_smarty_tpl->tpl_vars['type']->value['cross_selling']){?>
                <em class="hint">Авто (<?php if ($_smarty_tpl->tpl_vars['type']->value['cross_selling']=='alsobought'){?><?php echo sprintf('На основании того, что другие покупатели заказывали вместе с %s',$_smarty_tpl->tpl_vars['product']->value['name']);?>
<?php }else{ ?>товары из категории "<?php echo $_smarty_tpl->tpl_vars['type']->value['category']['name'];?>
"<?php }?>)</em></label>
                <?php }?>
            </div>
            <div class="value">
                <label><input type="radio" name="cross_selling" value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value['cross_selling']){?>checked="true"<?php }?>> Выкл</label>
                <?php if (!$_smarty_tpl->tpl_vars['type']->value['cross_selling']){?>
                <em class="hint">Авто</em>
                <?php }?>
            </div>
            <div class="value">
                <label><input type="radio" name="cross_selling" value="2" <?php if ($_smarty_tpl->tpl_vars['product']->value['cross_selling']==2){?>checked="true"<?php }?>> Выбрать вручную</label>
            </div>
            <div class="value manually" <?php if ($_smarty_tpl->tpl_vars['product']->value['cross_selling']!=2){?>style="display:none"<?php }?>>
                <table class="related zebra">
                    <?php if (isset($_smarty_tpl->tpl_vars['related']->value['cross_selling'])){?>
                    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related']->value['cross_selling']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                    <tr class="p" data-product-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                        <td><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price'],true);?>
</td>
                        <td class="min-width"><a class="delete" href="#"><i class="icon16 delete"></i></a></td>
                    </tr>
                    <?php } ?>
                    <?php }?>
                    <tr>
                        <td colspan="3">
                            <input data-type="cross_selling" class="product-autocomplete long" type="text" placeholder="Начните вводить название товара или артикул">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="field-group">
        <div class="field">
            <div class="name">
                Схожие и альтернативные товары
            </div>
            <div class="value">
                <label><input <?php if (!$_smarty_tpl->tpl_vars['type']->value['upselling']){?>disabled="disabled"<?php }?> type="radio" name="upselling" value="1" <?php if ($_smarty_tpl->tpl_vars['product']->value['upselling']==1){?>checked="true"<?php }?>> Вкл
                <?php if (!$_smarty_tpl->tpl_vars['type']->value['upselling']){?>
                    <span class="hint">
                        <?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['type'] = null;?>
                        <?php echo sprintf(_w('Upselling & Similar product recommendations are not configured for %s product type. Setup filtering conditions for %s in the master <a href="%s">recommendation settings</a>.'),(($tmp = @$_smarty_tpl->tpl_vars['product']->value['type']['name'])===null||$tmp==='' ? '' : $tmp),(($tmp = @$_smarty_tpl->tpl_vars['product']->value['type']['name'])===null||$tmp==='' ? '' : $tmp),'?action=settings#/recommendations/');?>

                    </span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['type']->value['upselling']){?>
                <em class="hint">Авто</em>
                <?php }?>
                </label>
                <?php if ($_smarty_tpl->tpl_vars['type']->value['upselling']){?>
                <p class="hint">
                    <br>
                    <?php echo $_smarty_tpl->tpl_vars['type']->value['upselling_html'];?>

                </p>
                <?php }?>
            </div>
            <div class="value">
                <label><input type="radio" name="upselling" value="0" <?php if (!$_smarty_tpl->tpl_vars['product']->value['upselling']){?>checked="true"<?php }?>> Выкл</label>
                <?php if (!$_smarty_tpl->tpl_vars['type']->value['upselling']){?>
                <em class="hint">Авто</em>
                <?php }?>
            </div>
            <div class="value">
                <label><input type="radio" name="upselling" value="2" <?php if ($_smarty_tpl->tpl_vars['product']->value['upselling']==2){?>checked="true"<?php }?>> Выбрать вручную</label>
            </div>
            <div class="value manually" <?php if ($_smarty_tpl->tpl_vars['product']->value['upselling']!=2){?>style="display:none"<?php }?>>
                <table class="related zebra">
                    <?php if (isset($_smarty_tpl->tpl_vars['related']->value['upselling'])){?>
                    <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related']->value['upselling']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
                    <tr class="p" data-product-id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                        <td><?php echo shop_currency_html($_smarty_tpl->tpl_vars['p']->value['price'],true);?>
</td>
                        <td class="min-width"><a class="delete" href="#"><i class="icon16 delete"></i></a></td>
                    </tr>
                    <?php } ?>
                    <?php }?>
                    <tr>
                        <td colspan="3">
                            <input data-type="upselling" class="product-autocomplete long" type="text" placeholder="Начните вводить название товара или артикул">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- plugin hook: 'backend_product_edit.related' -->
    
    <?php if (!empty($_smarty_tpl->tpl_vars['backend_product_edit']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_product_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['related']);?>
<?php } ?><?php }?>

</div>
<script type="text/javascript">
    $('#s-product-save > div.s-product-form.related').addClass('ajax');

    var save = function (data, after) {
        $('#product-save-message').html('<i class="icon16 loading"></i>');
        return $.shop.jsonPost(
                '?module=product&action=relatedSave&id=<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
',
                data,
                function (response) {
                    $('#product-save-message').html('<i class="icon16 yes"></i>');
                    setTimeout(function () {
                        $('#product-save-message').html('')
                    }, 300);
                    after && after(response);
                }
        );
    };

    (function() {
        var $autocompletes = $('.product-autocomplete').autocomplete({
            source: '?action=autocomplete',
            minLength: 3,
            delay: 300,
            select: function(event, ui) {
                var tr = $('<tr class="p" data-product-id="' + ui.item.id + '"></tr>');
                tr.append($('<td></td>').html(ui.item.value));
                tr.append($('<td></td>').html(ui.item.price_html));
                tr.append('<td class="min-width"><a class="delete" href="#"><i class="icon16 delete"></i></a></td>');
                tr.insertBefore($(this).closest('tr'));

                // save
                save({
                    'type': $(this).data('type'),
                    'product_id': ui.item.id
                });

                // Do not close autocompletion list after select
                var autocomplete = $(this).data('autocomplete');
                autocomplete.do_not_close_autocomplete = 1;
                window.setTimeout(function() {
                    autocomplete.do_not_close_autocomplete = false;
                    autocomplete.menu.element.position($.extend({
                        of: autocomplete.element
                    }, autocomplete.options.position || { my: "left top", at: "left bottom", collision: "none" }));
                }, 0);

                return false;
            }
        });

        // Do not close autocompletion list after select
        $autocompletes.each(function() {
            var autocomplete = $(this).data('autocomplete');
            var oldClose = autocomplete.close;
            autocomplete.close = function(e) {
                if (this.do_not_close_autocomplete) {
                    return false;
                }
                oldClose.apply(this, arguments);
            };
        });

    })();
    $('input[name="upselling"], input[name="cross_selling"]').click(function () {
        var data = { };
        data[this.name] = this.value;
        if (this.value == 2) {
            var related_product_id = [];
            $(this).closest('div.field').find('.manually').show().find('tr.p').each(function() {
                related_product_id.push($(this).data('productId'));
            });
            data.type = this.name;
            data.product_id = related_product_id;
        } else {
            $(this).closest('div.field').find('.manually').hide();
        }
        save(data);
    });

    $("table.related").on('click', 'a.delete', function () {
        var tr = $(this).closest('tr');
        var type = tr.closest('table.related').find('input').data('type');
        save({
            'type': type,
            'delete': 1,
            'product_id': tr.data('product-id')
        }, function (response) {
            if (response.status == 'ok') {
                tr.remove();
            }
        });
        return false;
    });
</script>
<?php }} ?>