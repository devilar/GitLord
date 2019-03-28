<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:15:30
         compiled from "/home/c/cl36655/public_html/wa-system/captcha/recaptcha/templates/recaptcha.html" */ ?>
<?php /*%%SmartyHeaderCode:20591709105c8f4592e91290-50945559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebedbe8dd2c66ca8949ec84ebf31ff5423fd7451' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/captcha/recaptcha/templates/recaptcha.html',
      1 => 1542030228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20591709105c8f4592e91290-50945559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sitekey' => 0,
    'wrapper_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4592e98623_53816443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4592e98623_53816443')) {function content_5c8f4592e98623_53816443($_smarty_tpl) {?>
<script>
    (function() {

        

        window.onloadWaRecaptchaCallback = function() {
            var sitekey = <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['sitekey']->value)===null||$tmp==='' ? '' : $tmp));?>
;
            if (!window.grecaptcha) return;
            $('.g-recaptcha:not(.initialized)').each(function() {
                var wrapper = $(this).addClass('initialized');
                var widget_id = grecaptcha.render(wrapper[0], { sitekey: sitekey });
                wrapper.siblings('.wa-captcha-refresh, wa-captcha-img').click(function() {
                    try {
                        grecaptcha.reset(widget_id);
                        $(window).trigger('wa_recaptcha_loaded');
                    } catch (e) {
                        console.log('Unable to reset WA ReCaptcha widget id =', widget_id);
                        console.log(e);
                    }
                    return false;
                });
            });
            $(window).trigger('wa_recaptcha_loaded');
        };

        $(function() {
            if (window.grecaptcha) {
                window.onloadWaRecaptchaCallback();
            } else {
                $.getScript("https://www.google.com/recaptcha/api.js?render=explicit&onload=onloadWaRecaptchaCallback");
            }
        });
    })();
</script>
<div class="<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 wa-recaptcha">
    <a class="wa-captcha-refresh wa-captcha-img" style="display:none;"></a>
    <div class="g-recaptcha"></div>
</div>
<?php }} ?>