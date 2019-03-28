<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 21:56:08
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/forgot/ForgotPassword.html" */ ?>
<?php /*%%SmartyHeaderCode:2711294675c7ad1c83b1023-68250490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef08d1365c5d474d9fbbc7da7af59c9ac4ac5e70' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/forgot/ForgotPassword.html',
      1 => 1541667629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2711294675c7ad1c83b1023-68250490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class_id' => 0,
    'wrapper_id' => 0,
    'renderer' => 0,
    'sent' => 0,
    'messages' => 0,
    'login_url' => 0,
    '_html' => 0,
    'data' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ad1c83f1bf0_00451661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ad1c83f1bf0_00451661')) {function content_5c7ad1c83f1bf0_00451661($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['class_id'] = new Smarty_variable('wa-backend-forgotpassword-form-wrapper', null, 0);?>
<?php $_smarty_tpl->tpl_vars['wrapper_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class_id']->value), null, 0);?>
<div class="<?php echo $_smarty_tpl->tpl_vars['class_id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['wrapper_id']->value;?>
">

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->setTitle("Восстановление пароля");?>


    <?php if (!empty($_smarty_tpl->tpl_vars['sent']->value)){?>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->setMessages($_smarty_tpl->tpl_vars['messages']->value);?>


        <?php $_smarty_tpl->_capture_stack[0][] = array('default', '_html', null); ob_start(); ?>
            <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderTitle();?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
">Вернуться на страницу входа</a>
            <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderMessages();?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->wrap($_smarty_tpl->tpl_vars['_html']->value,array('include_css'=>true));?>


    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->render($_smarty_tpl->tpl_vars['data']->value,$_smarty_tpl->tpl_vars['errors']->value,$_smarty_tpl->tpl_vars['messages']->value);?>

    <?php }?>

</div>
<?php }} ?>