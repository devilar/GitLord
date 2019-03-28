<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 00:16:03
         compiled from "/home/c/cl36655/public_html/wa-system/signup/templates/field.html" */ ?>
<?php /*%%SmartyHeaderCode:11802256355c7af293bb7b15-66814346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58cb2ae90ea0f72468d9be3f160cc78515702a1' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/signup/templates/field.html',
      1 => 1549545515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11802256355c7af293bb7b15-66814346',
  'function' => 
  array (
    'signup_render_errors' => 
    array (
      'parameter' => 
      array (
        'errors' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'input_name' => 
    array (
      'parameter' => 
      array (
        'field_id' => '',
      ),
      'compiled' => '',
    ),
    'signup_render_onetime_password_edit_link' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'signup_render_wrapped' => 
    array (
      'parameter' => 
      array (
        'field_id' => '',
        'parent_field_id' => '',
        'ext' => '',
        'caption' => '',
        'html' => '',
        'class' => '',
        'required' => false,
      ),
      'compiled' => '',
    ),
    'signup_password_confirm_field' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'signup_render_field_html' => 
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
    'signup_render_field' => 
    array (
      'parameter' => 
      array (
        'field' => 
        array (
        ),
        'is_sub_field' => false,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'namespace' => 0,
    'field_id' => 0,
    '_wrapper_class' => 0,
    '_wrapper_id' => 0,
    'caption' => 0,
    'class' => 0,
    'parent_field_id' => 0,
    'required' => 0,
    'ext' => 0,
    'html' => 0,
    'is_onetime_password_auth_type' => 0,
    'params' => 0,
    'placeholder' => 0,
    'need_placeholders' => 0,
    '_html' => 0,
    'classes' => 0,
    'attrs' => 0,
    'field' => 0,
    '_field' => 0,
    'is_hidden' => 0,
    'is_sub_field' => 0,
    '_field_id' => 0,
    'sub_fields' => 0,
    '_params' => 0,
    '_is_hidden' => 0,
    '_parent_field_id' => 0,
    'is_composite' => 0,
    '_fields' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7af293c2cbe5_83870201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7af293c2cbe5_83870201')) {function content_5c7af293c2cbe5_83870201($_smarty_tpl) {?>
<?php if (!function_exists('smarty_template_function_signup_render_errors')) {
    function smarty_template_function_signup_render_errors($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['signup_render_errors']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
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



<?php if (!function_exists('smarty_template_function_input_name')) {
    function smarty_template_function_input_name($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['input_name']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
]<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_signup_render_onetime_password_edit_link')) {
    function smarty_template_function_signup_render_onetime_password_edit_link($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['signup_render_onetime_password_edit_link']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <?php $_smarty_tpl->tpl_vars['_wrapper_class'] = new Smarty_variable('wa-send-onetime-password-edit-link-wrapper', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['_wrapper_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['_wrapper_class']->value), null, 0);?>

    <div class="<?php echo $_smarty_tpl->tpl_vars['_wrapper_class']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['_wrapper_id']->value;?>
" style="display: none;">
        <a href="javascript:void(0);" class="wa-send-onetime-password-edit-link">
            <i class="wa-send-onetime-password-edit-icon"></i> Редактировать
        </a>
    </div>

    <script>
        
        $(function () {
            var $wrapper = $('#<?php echo $_smarty_tpl->tpl_vars['_wrapper_id']->value;?>
'),
                $field = $wrapper.closest('.wa-field-email');

            if ($field.length <= 0) {
                $field = $wrapper.closest('.wa-field-phone')
            }

            var $input = $field.find('input[type=text]');

            $wrapper.insertAfter($input);
        })
    </script>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_signup_render_wrapped')) {
    function smarty_template_function_signup_render_wrapped($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['signup_render_wrapped']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <?php $_smarty_tpl->tpl_vars['caption'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['caption']->value, ENT_QUOTES, 'UTF-8', true), null, 0);?>

    <div class="wa-field wa-field-<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
 <?php echo (($tmp = @$_smarty_tpl->tpl_vars['class']->value)===null||$tmp==='' ? '' : $tmp);?>
" data-field-id="<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
"
         data-parent-field-id="<?php echo $_smarty_tpl->tpl_vars['parent_field_id']->value;?>
"
         data-is-required="<?php if ($_smarty_tpl->tpl_vars['required']->value){?>1<?php }?>"
         data-ext="<?php echo $_smarty_tpl->tpl_vars['ext']->value;?>
">
        <div class="wa-name"><?php echo $_smarty_tpl->tpl_vars['caption']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['required']->value){?>*<?php }?></div>
        <div class="wa-value">
            <?php echo $_smarty_tpl->tpl_vars['html']->value;?>


            <?php if ($_smarty_tpl->tpl_vars['field_id']->value==='email'&&$_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?>
                <?php smarty_template_function_signup_render_onetime_password_edit_link($_smarty_tpl,array());?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['field_id']->value==='phone'&&$_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?>
                <?php smarty_template_function_signup_render_onetime_password_edit_link($_smarty_tpl,array());?>

            <?php }?>

            <?php smarty_template_function_signup_render_errors($_smarty_tpl,array('errors'=>$_smarty_tpl->tpl_vars['errors']->value));?>

        </div>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_signup_password_confirm_field')) {
    function smarty_template_function_signup_password_confirm_field($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['signup_password_confirm_field']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_html", null); ob_start(); ?>
        <?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['params']->value['password_confirm_placeholder'])===null||$tmp==='' ? '' : $tmp), null, 0);?>
        <?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8', true), null, 0);?>
        <?php if (!$_smarty_tpl->tpl_vars['need_placeholders']->value){?>
            <?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <input type="password" name="<?php smarty_template_function_input_name($_smarty_tpl,array('field_id'=>'password_confirm'));?>
" <?php if ($_smarty_tpl->tpl_vars['placeholder']->value){?>placeholder="<?php echo $_smarty_tpl->tpl_vars['placeholder']->value;?>
"<?php }?>>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_signup_render_wrapped($_smarty_tpl,array('field_id'=>'password_confirm','caption'=>'Подтвердите пароль','html'=>$_smarty_tpl->tpl_vars['_html']->value,'required'=>true));?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_signup_render_field_html')) {
    function smarty_template_function_signup_render_field_html($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['signup_render_field_html']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <?php $_smarty_tpl->tpl_vars['attrs'] = new Smarty_variable(array(), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['params']->value['classes'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['errors']->value){?>
        <?php $_smarty_tpl->createLocalArrayVariable('classes', null, 0);
$_smarty_tpl->tpl_vars['classes']->value[] = 'wa-error';?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['classes'] = new Smarty_variable(join(' ',$_smarty_tpl->tpl_vars['classes']->value), null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('attrs', null, 0);
$_smarty_tpl->tpl_vars['attrs']->value[] = "class=\"".((string)$_smarty_tpl->tpl_vars['classes']->value)."\"";?>

    <?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['params']->value['placeholder'])===null||$tmp==='' ? '' : $tmp), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['placeholder']->value, ENT_QUOTES, 'UTF-8', true), null, 0);?>

    <?php if (!$_smarty_tpl->tpl_vars['need_placeholders']->value){?>
        <?php $_smarty_tpl->tpl_vars['placeholder'] = new Smarty_variable('', null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->createLocalArrayVariable('attrs', null, 0);
$_smarty_tpl->tpl_vars['attrs']->value[] = "placeholder=\"".((string)$_smarty_tpl->tpl_vars['placeholder']->value)."\"";?>

    <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['disabled'])===null||$tmp==='' ? false : $tmp)){?>
        <?php $_smarty_tpl->createLocalArrayVariable('attrs', null, 0);
$_smarty_tpl->tpl_vars['attrs']->value[] = 'disabled="disabled"';?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['attrs'] = new Smarty_variable(join(' ',$_smarty_tpl->tpl_vars['attrs']->value), null, 0);?>

    <?php echo $_smarty_tpl->tpl_vars['field']->value->getHtml($_smarty_tpl->tpl_vars['params']->value,$_smarty_tpl->tpl_vars['attrs']->value);?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (!function_exists('smarty_template_function_signup_render_field')) {
    function smarty_template_function_signup_render_field($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['signup_render_field']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>

    <?php $_smarty_tpl->tpl_vars['_field_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_field']->value->getId(), null, 0);?>

    <?php $_smarty_tpl->tpl_vars['_is_hidden'] = new Smarty_variable($_smarty_tpl->tpl_vars['is_hidden']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['_params'] = new Smarty_variable($_smarty_tpl->tpl_vars['params']->value, null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['is_sub_field']->value){?>
        <?php $_smarty_tpl->tpl_vars['_params'] = new Smarty_variable($_smarty_tpl->tpl_vars['sub_fields']->value[$_smarty_tpl->tpl_vars['_field_id']->value]['params'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['_is_hidden'] = new Smarty_variable($_smarty_tpl->tpl_vars['sub_fields']->value[$_smarty_tpl->tpl_vars['_field_id']->value]['is_hidden'], null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->_capture_stack[0][] = array('default', "_html", null); ob_start(); ?>
        <?php smarty_template_function_signup_render_field_html($_smarty_tpl,array('field'=>$_smarty_tpl->tpl_vars['field']->value,'params'=>$_smarty_tpl->tpl_vars['_params']->value));?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if (!$_smarty_tpl->tpl_vars['_is_hidden']->value){?>
        <?php $_smarty_tpl->tpl_vars['_parent_field_id'] = new Smarty_variable(null, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['is_sub_field']->value){?>
            <?php $_smarty_tpl->tpl_vars['_parent_field_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['_params']->value['parent'], null, 0);?>
        <?php }?>

        <?php smarty_template_function_signup_render_wrapped($_smarty_tpl,array('field_id'=>$_smarty_tpl->tpl_vars['_field_id']->value,'caption'=>(($tmp = @$_smarty_tpl->tpl_vars['_params']->value['caption'])===null||$tmp==='' ? '' : $tmp),'html'=>$_smarty_tpl->tpl_vars['_html']->value,'parent_field_id'=>$_smarty_tpl->tpl_vars['_parent_field_id']->value,'ext'=>(($tmp = @$_smarty_tpl->tpl_vars['_params']->value['ext'])===null||$tmp==='' ? '' : $tmp),'required'=>(($tmp = @$_smarty_tpl->tpl_vars['_params']->value['required'])===null||$tmp==='' ? false : $tmp)));?>


        <?php if ($_smarty_tpl->tpl_vars['_field_id']->value==='password'){?>
            <?php smarty_template_function_signup_password_confirm_field($_smarty_tpl,array());?>

        <?php }?>

    <?php }else{ ?>
        <?php echo $_smarty_tpl->tpl_vars['_html']->value;?>

    <?php }?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>




<?php if ($_smarty_tpl->tpl_vars['is_composite']->value){?>
    <?php $_smarty_tpl->tpl_vars['_fields'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value->getFields(), null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['_fields'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['field']->value), null, 0);?>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_field']->key => $_smarty_tpl->tpl_vars['_field']->value){
$_smarty_tpl->tpl_vars['_field']->_loop = true;
?>
    <?php smarty_template_function_signup_render_field($_smarty_tpl,array('field'=>$_smarty_tpl->tpl_vars['_field']->value,'is_sub_field'=>$_smarty_tpl->tpl_vars['is_composite']->value));?>

<?php } ?>
<?php }} ?>