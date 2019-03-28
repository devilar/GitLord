<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 00:16:03
         compiled from "/home/c/cl36655/public_html/wa-system/signup/templates/captcha.html" */ ?>
<?php /*%%SmartyHeaderCode:2994797955c7af293c518b5-18836403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1707006c56d0f7c0c4b49b063bce1e212495aef2' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/signup/templates/captcha.html',
      1 => 1541667629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2994797955c7af293c518b5-18836403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_invisible' => 0,
    'real_class' => 0,
    'errors' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7af293c59bd1_67910036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7af293c59bd1_67910036')) {function content_5c7af293c59bd1_67910036($_smarty_tpl) {?><div class="<?php if (!$_smarty_tpl->tpl_vars['is_invisible']->value){?>wa-field <?php }?>wa-captcha-field" data-type="<?php echo $_smarty_tpl->tpl_vars['real_class']->value;?>
">
    <?php if (!$_smarty_tpl->tpl_vars['is_invisible']->value){?>
        <div class="wa-name">Антиспам-защита *</div>
    <?php }?>
    <div class="wa-value">
        <?php echo $_smarty_tpl->tpl_vars['object']->value->getHtml($_smarty_tpl->tpl_vars['errors']->value,true);?>

    </div>
</div><?php }} ?>