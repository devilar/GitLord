<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 22:19:29
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/login/frontend/field.html" */ ?>
<?php /*%%SmartyHeaderCode:12951725105c7ad7413733d0-00457493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f7a8240efafb20d43133a34bdb273bbed5662b0' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/login/frontend/field.html',
      1 => 1549545515,
      2 => 'file',
    ),
    'f48f4e84844baabee381528fd0a34e863e2cf065' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/login/frontend/confirmation_block.inc.html',
      1 => 1542350613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12951725105c7ad7413733d0-00457493',
  'function' => 
  array (
    'render_errors' => 
    array (
      'parameter' => 
      array (
        'errors' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'render_wrapped' => 
    array (
      'parameter' => 
      array (
        'field_id' => '',
        'caption' => '',
        'html' => '',
        'class' => '',
      ),
      'compiled' => '',
    ),
    'render_field_html' => 
    array (
      'parameter' => 
      array (
        'field' => 
        array (
        ),
        'params' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'render_field' => 
    array (
      'parameter' => 
      array (
        'field' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'caption' => 0,
    'is_onetime_password_auth_type' => 0,
    'field_id' => 0,
    'class' => 0,
    '_style' => 0,
    'is_email_channel_available' => 0,
    'is_sms_channel_available' => 0,
    'html' => 0,
    'is_need_confirm' => 0,
    'onetime_password_url' => 0,
    'params' => 0,
    'clz' => 0,
    '_field_id' => 0,
    'classes' => 0,
    'need_placeholders' => 0,
    'is_onetime_password_field' => 0,
    '_placeholder' => 0,
    'attrs' => 0,
    'field' => 0,
    '_params' => 0,
    'is_hidden' => 0,
    '_caption' => 0,
    '_html' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ad7413dad44_98262232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ad7413dad44_98262232')) {function content_5c7ad7413dad44_98262232($_smarty_tpl) {?>
<?php if (!function_exists('smarty_template_function_render_errors')) {
    function smarty_template_function_render_errors($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['render_errors']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <em class="wa-error-msg"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</em>
    <?php } ?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_render_wrapped')) {
    function smarty_template_function_render_wrapped($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['render_wrapped']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <?php $_smarty_tpl->tpl_vars['caption'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'UTF-8', true), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['_style'] = new Smarty_variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value&&$_smarty_tpl->tpl_vars['field_id']->value==='password'){?>
        <?php $_smarty_tpl->tpl_vars['_style'] = new Smarty_variable('display:none;', null, 0);?>
        <?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable(((string)(($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp))." wa-field-onetime-password", null, 0);?>
    <?php }?>

    <div class="wa-field wa-field-<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp);?>
" data-field-id="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
" style="<?php echo $_smarty_tpl->tpl_vars['_style']->value;?>
">
        <div class="wa-name">
            <?php echo $_smarty_tpl->tpl_vars['caption']->value;?>


            
            <?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value&&$_smarty_tpl->tpl_vars['field_id']->value==='password'&&$_smarty_tpl->tpl_vars['is_email_channel_available']->value&&$_smarty_tpl->tpl_vars['is_sms_channel_available']->value){?>
                <span class="wa-onetime-password-transport-message"></span>
            <?php }?>

        </div>
        <div class="wa-value">

            <?php echo $_smarty_tpl->tpl_vars['html']->value;?>


            <?php if ($_smarty_tpl->tpl_vars['is_need_confirm']->value&&$_smarty_tpl->tpl_vars['field_id']->value==='login'){?>
                <div class="wa-edit-login-link-wrapper" style="display: none;">
                    <a href="javascript:void(0);" class="wa-edit-login-link">
                        <i class="wa-edit-login-link-icon"></i>
                        Изменить
                    </a>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value&&$_smarty_tpl->tpl_vars['field_id']->value==='password'){?>
                <div class="wa-onetime-password-input-message"></div>
                <div class="wa-send-again-onetime-password-link-wrapper" style="display: none">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['onetime_password_url']->value;?>
" class="wa-send-again-onetime-password-link">Выслать еще раз</a>
                    <i class="wa-send-again-onetime-password-link-loading icon16 loading" style="display: none;"></i>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value&&$_smarty_tpl->tpl_vars['field_id']->value==='login'){?>
                <div class="wa-send-onetime-password-edit-link-wrapper" style="display: none;">
                    <a href="javascript:void(0);" class="wa-send-onetime-password-edit-link">
                        <i class="wa-send-onetime-password-edit-icon"></i>
                        Редактировать
                    </a>
                </div>
            <?php }?>

            <?php if (!empty($_smarty_tpl->tpl_vars['params']->value['forgotpassword_url'])){?>
                <a class="wa-login-forgotpassword-url" href="<?php echo $_smarty_tpl->tpl_vars['params']->value['forgotpassword_url'];?>
" data-type="forgotpassword">Забыли пароль?</a>
            <?php }?>

            <?php smarty_template_function_render_errors($_smarty_tpl,array('errors'=>$_smarty_tpl->tpl_vars['errors']->value));?>

        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['is_need_confirm']->value&&$_smarty_tpl->tpl_vars['field_id']->value==='login'&&$_smarty_tpl->tpl_vars['is_sms_channel_available']->value){?>
        <?php /*  Call merged included template "./confirmation_block.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./confirmation_block.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '12951725105c7ad7413733d0-00457493');
content_5c7ad74139b875_87077129($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./confirmation_block.inc.html" */?>
    <?php }?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_render_field_html')) {
    function smarty_template_function_render_field_html($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['render_field_html']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['attrs'] = new Smarty_variable(array(), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(array(), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['clz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['clz']->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['params']->value['classes'])===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['clz']->key => $_smarty_tpl->tpl_vars['clz']->value){
$_smarty_tpl->tpl_vars['clz']->_loop = true;
?>
        <?php $_smarty_tpl->createLocalArrayVariable('classes', null, 0);
$_smarty_tpl->tpl_vars['classes']->value[] = htmlspecialchars($_smarty_tpl->tpl_vars['clz']->value, ENT_QUOTES, 'UTF-8', true);?>
    <?php } ?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value){?>
        <?php $_smarty_tpl->createLocalArrayVariable('classes', null, 0);
$_smarty_tpl->tpl_vars['classes']->value[] = 'wa-error';?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value&&$_smarty_tpl->tpl_vars['_field_id']->value==='password'){?>
        <?php $_smarty_tpl->createLocalArrayVariable('classes', null, 0);
$_smarty_tpl->tpl_vars['classes']->value[] = 'wa-onetime-password';?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(join(' ',$_smarty_tpl->tpl_vars['classes']->value), null, 0);?>

    <?php $_smarty_tpl->createLocalArrayVariable('attrs', null, 0);
$_smarty_tpl->tpl_vars['attrs']->value[] = "class=\"".((string)$_smarty_tpl->tpl_vars['classes']->value)."\"";?>

    <?php $_smarty_tpl->tpl_vars['is_onetime_password_field'] = new Smarty_variable($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value&&$_smarty_tpl->tpl_vars['_field_id']->value==='password', null, 0);?>

    <?php $_smarty_tpl->tpl_vars['_placeholder'] = new Smarty_variable('', null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['need_placeholders']->value&&!$_smarty_tpl->tpl_vars['is_onetime_password_field']->value){?>
        <?php $_smarty_tpl->tpl_vars['_placeholder'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['params']->value['placeholder'])===null||$tmp==='' ? '' : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_placeholder'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['_placeholder']->value, ENT_QUOTES, 'UTF-8', true), null, 0);?>
    <?php }?>


    <?php $_smarty_tpl->createLocalArrayVariable('attrs', null, 0);
$_smarty_tpl->tpl_vars['attrs']->value[] = "placeholder=\"".((string)$_smarty_tpl->tpl_vars['_placeholder']->value)."\"";?>

    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['disabled'])===null||$tmp==='' ? false : $tmp)){?>
        <?php $_smarty_tpl->createLocalArrayVariable('attrs', null, 0);
$_smarty_tpl->tpl_vars['attrs']->value[] = 'disabled="disabled"';?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['attrs'] = new Smarty_variable(join(' ',$_smarty_tpl->tpl_vars['attrs']->value), null, 0);?>

    <?php echo $_smarty_tpl->tpl_vars['field']->value->getHtml($_smarty_tpl->tpl_vars['params']->value,$_smarty_tpl->tpl_vars['attrs']->value);?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_render_field')) {
    function smarty_template_function_render_field($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['render_field']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->tpl_vars['_field_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value->getId(), null, 0);?><?php $_smarty_tpl->tpl_vars['_params'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value, null, 0);?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_html", null); ob_start(); ?><?php smarty_template_function_render_field_html($_smarty_tpl,array('field'=>$_smarty_tpl->tpl_vars['field']->value,'params'=>$_smarty_tpl->tpl_vars['_params']->value));?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (!$_smarty_tpl->tpl_vars['is_hidden']->value){?><?php $_smarty_tpl->tpl_vars['_caption'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['_params']->value['caption'])===null||$tmp==='' ? '' : $tmp), null, 0);?><?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value&&$_smarty_tpl->tpl_vars['_field_id']->value==='password'){?><?php $_smarty_tpl->tpl_vars['_caption'] = new Smarty_variable(_ws('One-time password'), null, 0);?><?php }?><?php smarty_template_function_render_wrapped($_smarty_tpl,array('field_id'=>$_smarty_tpl->tpl_vars['_field_id']->value,'caption'=>$_smarty_tpl->tpl_vars['_caption']->value,'html'=>$_smarty_tpl->tpl_vars['_html']->value,'ext'=>(($tmp = @$_smarty_tpl->tpl_vars['_params']->value['ext'])===null||$tmp==='' ? '' : $tmp)));?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_html']->value;?>
<?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>




<?php smarty_template_function_render_field($_smarty_tpl,array('field'=>$_smarty_tpl->tpl_vars['field']->value));?>

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 22:19:29
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/login/frontend/confirmation_block.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7ad74139b875_87077129')) {function content_5c7ad74139b875_87077129($_smarty_tpl) {?><div class="wa-signup-form-confirmation-block" style="display: none;">

    <div class="wa-confirmation-code-sent-message"></div>

    <div class="wa-field wa-field-confirmation-code" data-is-required="1" data-field-id="confirmation_code">
        <div class="wa-name">
            Проверочный код
        </div>
        <div class="wa-value">
            <input name="<?php echo $_smarty_tpl->tpl_vars['renderer']->value->getInputName('confirmation_code');?>
" type="text">
            <div class="wa-confirmation-code-input-message"></div>
            <div class="wa-send-again-confirmation-code-link-wrapper" style="display: none">
                <a href="javascript:void(0);" class="wa-send-again-confirmation-code-link">Выслать еще раз</a>
                <i class="wa-send-again-confirmation-code-link-loading icon16 loading" style="display: none;"></i>
            </div>
        </div>
    </div>

</div>
<?php }} ?>