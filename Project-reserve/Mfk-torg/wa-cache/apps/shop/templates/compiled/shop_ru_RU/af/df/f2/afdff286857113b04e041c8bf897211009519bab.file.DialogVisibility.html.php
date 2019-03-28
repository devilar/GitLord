<?php /* Smarty version Smarty-3.1.14, created on 2019-03-11 12:57:27
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/DialogVisibility.html" */ ?>
<?php /*%%SmartyHeaderCode:18219340855c863107c36318-32524680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afdff286857113b04e041c8bf897211009519bab' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/DialogVisibility.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18219340855c863107c36318-32524680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'status_change' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c863107c69c86_55508466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c863107c69c86_55508466')) {function content_5c863107c69c86_55508466($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['result']->value['attempted'])){?>


<script>(function() { "use strict";

    var status_change = <?php echo json_encode($_smarty_tpl->tpl_vars['status_change']->value);?>
;
    var access_denied_count = <?php echo json_encode(count($_smarty_tpl->tpl_vars['result']->value['denied']));?>
;
    var changed_ids = <?php echo json_encode(array_fill_keys($_smarty_tpl->tpl_vars['result']->value['successfull'],1));?>
;
    var access_denied_msg = "Невозможно обновить информацию о товарах (%d), к которым у вас нет доступа.";

    // Update items in the list for successfully changed products
    $('#product-list .product').each(function() {
        var $li = $(this); // <li> or <tr>, actually
        if (changed_ids[$li.data('product-id')]) {
            if (status_change) {
                $li.removeClass('gray');
            } else {
                $li.addClass('gray');
            }
        }
    });

    // Notify user if some of the products were not changed
    if (access_denied_count > 0) {
        alert(access_denied_msg.replace('%d', access_denied_count));
    }

    // remove the dialog
    $('#visibility-dialog-wrapper').empty();

    // Deselect products
    $.product_list.container.find('.s-select-all:first').trigger('select', false);

})();</script>

<?php }else{ ?>



<div class="hidden dialog width500px height200px">
    <div class="dialog-background"></div>
    <form method="post" action="?module=dialog&action=visibility">
        <div class="dialog-window">
            <div class="dialog-content">
                <div class="dialog-content-indent">
                    <h1>
                        Изменить видимость товаров
                        <span class="hidden gray products-count"></span>
                    </h1>

                    <p>
                        <label>
                            <input type="radio" name="status" value="1" checked>
                            Опубликованы на сайте
                        </label>
                        <br>
                        <label>
                            <input type="radio" name="status" value="0">
                            Скрыт с сайта
                        </label>
                    </p>

                    <p><label>
                        <input type="checkbox" name="update_skus" value="1">
                        <span class="hidden status-off-label">Временно снять с продажи все артикулы выбранных товаров</span>
                        <span class="status-on-label">Выставить все артикулы выбранных товаров на продажу</span>
                    </label></p>
                </div>
            </div>
            <div class="dialog-buttons">
                <div class="dialog-buttons-gradient">
                    <input type="submit" value="Применить" class="button green">
                    или <a class="cancel" href="#">отмена</a>
                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        </div>
    </form>
</div>
<script>(function() { "use strict";
    var $wrapper = $('#visibility-dialog-wrapper');
    var $form = $wrapper.find('form');

    // Initialize dialog
    $wrapper.find('h1 .products-count').html('('+($('#visibility-dialog-wrapper').data('products').count||'?')+')').show();
    $wrapper.children('.dialog').removeClass('hidden').waDialog({
        disableButtonsOnSubmit: true,
        onSubmit: function ($dialog) {
            $.post($form.attr('action'), $wrapper.data('products').serialized.concat($form.serializeArray()), function(result) {
                $wrapper.html(result);
            });
            return false;
        }
    });

    // Change checkbox label depending on radio status
    var $checkbox = $form.find('[name="update_skus"]');
    var $radios = $form.find('[name="status"]');
    $radios.on('change', function() {
        if ($radios.filter(':checked').val() == '1') {
            $checkbox.siblings('span').hide().filter('.status-on-label').show();
        } else {
            $checkbox.siblings('span').hide().filter('.status-off-label').show();
        }
    });
})();</script>

<?php }?><?php }} ?>