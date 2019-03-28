<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:44
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsField.html" */ ?>
<?php /*%%SmartyHeaderCode:21444683785c7ac364017f88-05894774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6373dc4218602a402b4ea6507d009686e90a2636' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsField.html',
      1 => 1548766579,
      2 => 'file',
    ),
    '557e7de7a89749cc88625ebcf20de45a4e12e1b2' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsFieldRow.inc.html',
      1 => 1540900318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21444683785c7ac364017f88-05894774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'fields' => 0,
    'field' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac364065079_69569854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac364065079_69569854')) {function content_5c7ac364065079_69569854($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Поля контакта — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.sortable.min.js"></script>
<div class="s-field-settings-page blank block double-padded" id="s-field-settings-page">
    <h1 class="s-page-header">Поля контакта</h1>
    <div class="s-field-settings-fields-block">
        <div class="s-field-constructor">
            <div class="fieldset wa-main-fields">
                
                <div class="fields">
                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value['main']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <div class="field">
                            <div class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="value">
                                <span class="<?php if ($_smarty_tpl->tpl_vars['field']->value['pStatus']==='disabled'){?>hint<?php }else{ ?>small bold<?php }?>">персона</span>
                                <span class="<?php if ($_smarty_tpl->tpl_vars['field']->value['cStatus']==='disabled'){?>hint<?php }else{ ?>small bold<?php }?>">компания</span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="s-main-fields-label gray">
                <p>Главные поля контактов нельзя изменять и удалять.</p>
            </div>

            <div class="block not-padded fieldset wa-other-fields">
                
                <div class="s-new-field">
                    <a href="javascript:void(0);" class="js-edit-field-link bold no-underline inline-link">
                        <i class="icon16 add"></i>Новое поле
                    </a>
                </div>

                
                <div class="fields js-other-fields">
                    <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value['other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                        <?php /*  Call merged included template "./SettingsFieldRow.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsFieldRow.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>$_smarty_tpl->tpl_vars['field']->value), 0, '21444683785c7ac364017f88-05894774');
content_5c7ac364054df0_30405789($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsFieldRow.inc.html" */?>
                    <?php } ?>
                </div>
            </div>
            <div class="clear-left"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function($) {
        new WASettingsField({
            '$wrapper': $('#s-field-settings-page')
        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:44
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsFieldRow.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7ac364054df0_30405789')) {function content_5c7ac364054df0_30405789($_smarty_tpl) {?><div data-id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" class="field">
    <div class="name">
        <i class="icon16 sort"></i>
        <a href="javascript:void(0);" class="js-edit-field-link" data-id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a>
    </div>
    <div class="value">
        <?php if ($_smarty_tpl->tpl_vars['field']->value['disabled']){?>
            <span class="red small">выключено</span>
        <?php }else{ ?>
            <span class="<?php if ($_smarty_tpl->tpl_vars['field']->value['pStatus']==='disabled'){?>hint<?php }else{ ?>small bold<?php }?>">персона</span>
            <span class="<?php if ($_smarty_tpl->tpl_vars['field']->value['cStatus']==='disabled'){?>hint<?php }else{ ?>small bold<?php }?>">компания</span>
        <?php }?>
    </div>
</div><?php }} ?>