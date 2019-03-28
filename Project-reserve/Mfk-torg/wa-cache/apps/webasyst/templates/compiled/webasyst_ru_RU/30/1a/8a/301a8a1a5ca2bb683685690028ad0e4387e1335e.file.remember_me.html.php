<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:55:56
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/login/backend/remember_me.html" */ ?>
<?php /*%%SmartyHeaderCode:1035849225c7ac3aca9c1e1-41515490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '301a8a1a5ca2bb683685690028ad0e4387e1335e' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/login/backend/remember_me.html',
      1 => 1541778477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1035849225c7ac3aca9c1e1-41515490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_api_oauth' => 0,
    'is_onetime_password_auth_type' => 0,
    'input_name' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac3acaa28d8_59188662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac3acaa28d8_59188662')) {function content_5c7ac3acaa28d8_59188662($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
<div class="field field-remember-me"<?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?> style="display:none;"<?php }?>>
    <div class="value">
        <label>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="0">
            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['checked']->value){?>checked="checked"<?php }?>> Запомнить меня
        </label>
    </div>
</div>
<?php }?>
<?php }} ?>