<?php /* Smarty version Smarty-3.1.14, created on 2019-03-25 10:49:27
         compiled from "/home/c/cl36655/public_html/wa-apps/installer/templates/actions/settings/Settings.html" */ ?>
<?php /*%%SmartyHeaderCode:8242893965c988807708899-81146561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b7b328a3ef2f24f4d84ca273201ec59b2f95e6c' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/installer/templates/actions/settings/Settings.html',
      1 => 1541168106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8242893965c988807708899-81146561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_backend_url' => 0,
    'version' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c988807738552_62364228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c988807738552_62364228')) {function content_5c988807738552_62364228($_smarty_tpl) {?><div class="shadowed">
    <div class="i-white-core-content">
        <div class="block double-padded">
            <div class="fields">
                <div class="field-group">
                    <div class="field">
                        <div class="name">
                            Системные настройки
                        </div>
                        <div class="value">
                            <?php echo sprintf('<a href="%s">Управляйте системными настройками в приложении «Настройки»</a>.',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."webasyst/settings/");?>

                        </div>
                    </div>
                    <div class="field">
                        <div class="name">
                            Версия Вебасиста
                        </div>
                        <div class="value no-shift"><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</div>
                    </div>
                </div>
                <div class="field-group">
                    <div class="field">
                        <div class="name" style="margin-top: 8px;">
                            Очистить кеш
                        </div>
                        <div class="value">
                            <input type="button" class="button gray" name="clear_cache" value="Очистить кеш">
                            <span id="installer-cache-state" style="display: none;"><!-- state placeholder --></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.installer_settings.init();
    });
</script><?php }} ?>