<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:18:51
         compiled from "/home/c/cl36655/public_html/wa-system/captcha/phpcaptcha/templates/captcha2.html" */ ?>
<?php /*%%SmartyHeaderCode:7111074445c8f465b88ea63-44970917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47313f4b3ecfb4a3eea4731adae4ff7e803529d8' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/captcha/phpcaptcha/templates/captcha2.html',
      1 => 1542367849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7111074445c8f465b88ea63-44970917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wrapper_class' => 0,
    'input_name' => 0,
    'error_class' => 0,
    'captcha_url' => 0,
    'refresh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f465b8bae93_90789370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f465b8bae93_90789370')) {function content_5c8f465b8bae93_90789370($_smarty_tpl) {?><div class="<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
">
    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" class="wa-captcha-input<?php echo $_smarty_tpl->tpl_vars['error_class']->value;?>
" autocomplete="off" placeholder="Введите код с изображения">
    <div class="wa-captcha-code">
        <div class="wa-captcha-img-wrapper">
            <img class="wa-captcha-img" src="<?php echo $_smarty_tpl->tpl_vars['captcha_url']->value;?>
" alt="CAPTCHA" title="<?php echo $_smarty_tpl->tpl_vars['refresh']->value;?>
">
        </div>
        <div class="wa-captcha-refresh-wrapper">
            <a href="javascript:void(0);" class="wa-captcha-refresh">
                <i class="wa-captcha-refresh-icon"></i>
                <span class="wa-captcha-refresh-text">Обновить код</span>
            </a>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 .wa-captcha-img').on('load', function () {
                $(window).trigger('wa_captcha_loaded');
            });

            $('div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 .wa-captcha-refresh, div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
 .wa-captcha-img').click(function () {
                var $wrapper = $(this).parents('div.<?php echo $_smarty_tpl->tpl_vars['wrapper_class']->value;?>
'),
                    $input = $wrapper.find('.wa-captcha-input'),
                    $img = $wrapper.find('.wa-captcha-img'),
                    src = $img.attr('src');

                if ($img.length) {
                    $img.css('opacity', '0.5').attr('src', src.replace(/\?.*$/, '?rid=' + Math.random()));
                    $img.one('load', function () {
                        $img.css('opacity', '');
                        $(window).trigger('wa_captcha_loaded');
                        $input.val('').focus();
                    });
                }

                return false;
            });
        });
    </script>
</div><?php }} ?>