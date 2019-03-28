<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 21:56:08
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/forgotpassword/backend/form_wrapper.html" */ ?>
<?php /*%%SmartyHeaderCode:14901815115c7ad1c848aa53-46647768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fea0d225ccb96b6f421470ca3e9f72174b4f7723' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/forgotpassword/backend/form_wrapper.html',
      1 => 1547561773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14901815115c7ad1c848aa53-46647768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'include_js' => 0,
    'include_css' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'class_id' => 0,
    'classes' => 0,
    'wrapper_id' => 0,
    'renderer' => 0,
    'html' => 0,
    'namespace' => 0,
    'errors' => 0,
    'messages' => 0,
    '_locale' => 0,
    'is_json_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ad1c84aedc9_13061925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ad1c84aedc9_13061925')) {function content_5c7ad1c84aedc9_13061925($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['include_js'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['include_js']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['include_css'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['include_css']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['include_js']->value){?>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/login/forgotpassword-backend-form.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<?php }?>

<?php $_smarty_tpl->tpl_vars['class_id'] = new Smarty_variable('wa-forgotpassword-wrapper', null, 0);?>
<?php $_smarty_tpl->tpl_vars['wrapper_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class_id']->value), null, 0);?>

<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['class_id']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['include_js']->value){?>
    <?php $_smarty_tpl->createLocalArrayVariable('classes', null, 0);
$_smarty_tpl->tpl_vars['classes']->value[] = 'js-backend-auth-form';?>
<?php }?>

<?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(join(' ',$_smarty_tpl->tpl_vars['classes']->value), null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['wrapper_id']->value;?>
">
    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderTitle();?>

    <?php echo $_smarty_tpl->tpl_vars['html']->value;?>

</div>

<?php if ($_smarty_tpl->tpl_vars['include_js']->value){?>
    <?php $_smarty_tpl->tpl_vars['_locale'] = new Smarty_variable(array('required'=>_ws('Field is required'),'login_required'=>_ws('Login is required'),'password_required'=>_ws('Password can not be empty.'),'login_page'=>_ws('Back to login page'),'captcha_required'=>_ws('Captcha is required'),'confirmation_code_required'=>_ws('Enter a confirmation code to complete the operation.')), null, 0);?>

    <script>
        ( function($) { "use strict";
            new WaBackendForgotPassword({
                $wrapper: $("#<?php echo $_smarty_tpl->tpl_vars['wrapper_id']->value;?>
"),
                namespace: <?php echo json_encode($_smarty_tpl->tpl_vars['namespace']->value);?>
,
                errors: <?php echo json_encode($_smarty_tpl->tpl_vars['errors']->value);?>
,
                messages: <?php echo json_encode($_smarty_tpl->tpl_vars['messages']->value);?>
,
                locale: <?php echo json_encode($_smarty_tpl->tpl_vars['_locale']->value);?>
,
                is_json_mode: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['is_json_mode']->value)===null||$tmp==='' ? false : $tmp));?>

            });
        })(jQuery);
    </script>
<?php }?>
<?php }} ?>