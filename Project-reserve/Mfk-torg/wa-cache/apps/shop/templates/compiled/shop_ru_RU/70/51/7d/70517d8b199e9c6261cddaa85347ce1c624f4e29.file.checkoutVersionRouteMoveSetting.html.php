<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:37:00
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/includes/checkoutVersionRouteMoveSetting.html" */ ?>
<?php /*%%SmartyHeaderCode:21453978275c9ccdfc782857-42594169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70517d8b199e9c6261cddaa85347ce1c624f4e29' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/includes/checkoutVersionRouteMoveSetting.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21453978275c9ccdfc782857-42594169',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9ccdfc7a2bd8_48201327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9ccdfc7a2bd8_48201327')) {function content_5c9ccdfc7a2bd8_48201327($_smarty_tpl) {?>


<style>
    .checkout-2-background { background-color: #9cff9e; }
</style>
<script>
    (function ($) {
        var $version_field = $('input[name="params[checkout_version]"]').parents('.field'),
            $theme_field = $('select[name="params[theme_mobile]"]').parents('.field');

        $version_field.insertAfter($theme_field);
    })(jQuery);
</script><?php }} ?>