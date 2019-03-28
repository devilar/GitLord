<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:41:04
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsDiscountsCoupons.html" */ ?>
<?php /*%%SmartyHeaderCode:611059915c9ccef0844b88-72909079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '016c6d613bd94a9a53863498a943efb8f6a78d0a' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsDiscountsCoupons.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '611059915c9ccef0844b88-72909079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'enabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9ccef0875bf5_69964365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9ccef0875bf5_69964365')) {function content_5c9ccef0875bf5_69964365($_smarty_tpl) {?><div class="block double-padded">

    <h1>
        Купоны
    </h1>

    <form action="?module=settings&action=discountsCoupons" id="s-discounts-coupons-form">
        <div class="fields form">
            <div class="field-group">
                <input type="hidden" name="dummy" value="1">
                <div class="field">
                    <div class="name">Статус</div>
                    <div class="value no-shift s-ibutton-checkbox">
                        <ul class="menu-h">
                            <li><span class="gray" id="s-discount-type-disabled-label">Отключен</span></li>
                            <li>
                                <input type="checkbox" id="s-discount-type-status" name="enabled" value="1"<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?> checked<?php }?>>
                            </li>
                            <li><span id="s-discount-type-enabled-label">Включен</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="field"<?php if (!$_smarty_tpl->tpl_vars['enabled']->value){?> style="display:none"<?php }?>>
                <div class="value">
                    <p class="hint"><?php echo sprintf('Купоны можно добавить в разделе <a href="%s">Купоны на скидку</a>.','?action=orders#/coupons/');?>
</p>
                    <br>
                </div>
            </div>



        </div>
    </form>

    <div class="clear-left"></div>

</div>

<script>(function() { "use strict";
    var form = $('#s-discounts-coupons-form');
    var current_type = 'coupons';

    var ibutton = $('#s-discount-type-status').iButton( { labelOn : "", labelOff : "", className: 'mini' } ).change(function() {
        var self = $(this);
        var enabled = self.is(':checked');
        if (enabled) {
            self.closest('.field-group').siblings().show(200);
            $('#discount-types a[rel="'+current_type+'"] i.icon16').attr('class', 'icon16 status-blue-tiny');
        } else {
            self.closest('.field-group').siblings().hide(200);
            $('#discount-types a[rel="'+current_type+'"] i.icon16').attr('class', 'icon16 status-gray-tiny');
        }
        $.post('?module=settings&action=discountsEnable', { type: current_type, enable: enabled ? '1' : '0' });
    });

    form.submit(function() {
        form.find(':submit').attr('disabled', true);
        $.post(form.attr('action'), form.serialize(), function(r) {
            $('#s-discounts-content').html(r);
        });
        return false;
    });
})();</script><?php }} ?>