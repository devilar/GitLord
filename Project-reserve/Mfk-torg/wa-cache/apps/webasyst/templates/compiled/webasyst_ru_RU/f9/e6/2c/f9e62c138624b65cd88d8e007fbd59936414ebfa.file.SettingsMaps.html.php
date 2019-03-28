<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:01
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsMaps.html" */ ?>
<?php /*%%SmartyHeaderCode:12368566715c7ac37547c506-81090702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9e62c138624b65cd88d8e007fbd59936414ebfa' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsMaps.html',
      1 => 1548766579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12368566715c7ac37547c506-81090702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'map_adapters' => 0,
    '_adapter' => 0,
    '_adapter_id' => 0,
    'selected_map_adapter' => 0,
    '_adapter_settings' => 0,
    'wa_backend_url' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac37549ae09_19746255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac37549ae09_19746255')) {function content_5c7ac37549ae09_19746255($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Настройки карт — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<div class="s-maps-settings-page blank block double-padded" id="s-maps-settings-page">
    <h1 class="s-page-header">Настройки карт</h1>
    <div class="s-description">Выберите картографический сервис для отображения онлайн-карт.</div>
    <div class="s-maps-settings-fields-block">
        <form action="?module=settingsMapsSave">

            <div class="field-group">
                <div class="field">
                    <div class="name">Сервис карт</div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['map_adapters']->value)){?>
                        <?php  $_smarty_tpl->tpl_vars['_adapter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_adapter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['map_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_adapter']->key => $_smarty_tpl->tpl_vars['_adapter']->value){
$_smarty_tpl->tpl_vars['_adapter']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['_adapter_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getId(), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['_adapter_settings'] = new Smarty_variable($_smarty_tpl->tpl_vars['_adapter']->value->getSettingsHtml(array('namespace'=>'map_settings')), null, 0);?>
                            <div class="value no-shift">
                                <label>
                                    <input type="radio" name="map_adapter" <?php if ($_smarty_tpl->tpl_vars['_adapter_id']->value==$_smarty_tpl->tpl_vars['selected_map_adapter']->value){?>checked<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['_adapter_id']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['_adapter']->value->getName();?>

                                </label>
                                <?php if (!empty($_smarty_tpl->tpl_vars['_adapter_settings']->value)){?>
                                    <div class="js-map-adapter-settings" data-adapter-id="<?php echo $_smarty_tpl->tpl_vars['_adapter_id']->value;?>
" style="display: none;">
                                        <?php echo $_smarty_tpl->tpl_vars['_adapter_settings']->value;?>

                                    </div>
                                <?php }?>
                            </div>
                        <?php } ?>
                    <?php }else{ ?>
                        Нет доступных сервисов карт
                    <?php }?>
                </div>
            </div>

            <div class="s-form-buttons">
                <div class="s-footer-actions js-footer-actions">
                    <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                    <span class="s-hidden">
                        <span style="margin: 0 4px;">или</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
webasyst/settings/maps/" class="js-cancel">отмена</a>
                    </span>
                    <i class="icon16 loading s-loading" style="display: none;"></i>
                </div>
            </div>

        </form>
    </div>
</div>
<script type="text/javascript">
    (function($) {
        new WASettingsMaps({
            $wrapper: $("#s-maps-settings-page")
        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script><?php }} ?>