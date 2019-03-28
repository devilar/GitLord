<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 00:16:03
         compiled from "/home/c/cl36655/public_html/wa-system/signup/templates/form.html" */ ?>
<?php /*%%SmartyHeaderCode:3494773225c7af293b581f0-77734884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd57c0a89920275ed7d22ba12028b327cf2c2b34' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/signup/templates/form.html',
      1 => 1541778477,
      2 => 'file',
    ),
    '5975c70b6cdce9acf30bd76a2acaa405ccaaf306' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/signup/templates/oauth_adapters.html',
      1 => 1541667629,
      2 => 'file',
    ),
    '84896189dad8eeef5c0e95b66a1bb1047f001c57' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/signup/templates/confirmation_block.inc.html',
      1 => 1541667629,
      2 => 'file',
    ),
    '6bd0107de310a1d5bb1d59ad6212a0a110b42faf' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/signup/templates/onetime_password_field.inc.html',
      1 => 1548766579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3494773225c7af293b581f0-77734884',
  'function' => 
  array (
    'input_name' => 
    array (
      'parameter' => 
      array (
        'field_id' => '',
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'url' => 0,
    'show_title' => 0,
    'show_oauth_adapters' => 0,
    'auth_config' => 0,
    'field_id' => 0,
    'params' => 0,
    'renderer' => 0,
    '_button_caption' => 0,
    'is_onetime_password_auth_type' => 0,
    'login_url' => 0,
    'is_need_confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7af293bae049_62025651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7af293bae049_62025651')) {function content_5c7af293bae049_62025651($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">

    <?php if (!empty($_smarty_tpl->tpl_vars['show_title']->value)){?>
        <h1 class="wa-signup-form-title">Регистрация</h1>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['show_oauth_adapters']->value)){?>
        <?php /*  Call merged included template "./oauth_adapters.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./oauth_adapters.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3494773225c7af293b581f0-77734884');
content_5c7af293b62209_66352112($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./oauth_adapters.html" */?>
    <?php }?>

    <section class="wa-signup-form-fields js-signup-form-fields">
        <?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['field_id'] = new Smarty_Variable;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['auth_config']->value['fields'])===null||$tmp==='' ? array() : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['field_id']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
            <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderField($_smarty_tpl->tpl_vars['field_id']->value,$_smarty_tpl->tpl_vars['params']->value);?>

        <?php } ?>

        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCaptcha();?>


        <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderServiceAgreement();?>

    </section>

    <section class="wa-signup-form-actions js-signup-form-actions">
        <div class="wa-uncaught-errors" style="display: none;"></div>

        <div class="wa-buttons-wrapper">
            <?php $_smarty_tpl->tpl_vars['_button_caption'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['auth_config']->value['params']['button_caption'])===null||$tmp==='' ? _w('Sign Up') : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['_button_caption'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['_button_caption']->value, ENT_QUOTES, 'UTF-8', true), null, 0);?>
            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['_button_caption']->value;?>
">
            <i class="icon16 loading wa-loading" style="display: none;"></i>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?>
            <div class="wa-done-signup-buttons-wrapper">
                <button class="wa-done-signup-button">Готово</button>
                <i class="wa-confirm-signup-button-icon icon16 loading" style="display: none;"></i>
            </div>
        <?php }?>

        <div class="wa-login-url">
            Уже регистрировались? <a href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
" data-type="login">Вход</a>
        </div>
    </section>

    <?php if ($_smarty_tpl->tpl_vars['is_need_confirm']->value){?>
        <?php /*  Call merged included template "./confirmation_block.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./confirmation_block.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3494773225c7af293b581f0-77734884');
content_5c7af293b992d0_14584836($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./confirmation_block.inc.html" */?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?>
        <?php /*  Call merged included template "./onetime_password_field.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./onetime_password_field.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3494773225c7af293b581f0-77734884');
content_5c7af293ba44e5_32963416($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./onetime_password_field.inc.html" */?>
    <?php }?>

</form>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 00:16:03
         compiled from "/home/c/cl36655/public_html/wa-system/signup/templates/oauth_adapters.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7af293b62209_66352112')) {function content_5c7af293b62209_66352112($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['auth_adapters'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->authAdapters(true), null, 0);?><?php if ($_smarty_tpl->tpl_vars['auth_adapters']->value){?><section class="wa-adapters-section"><?php $_smarty_tpl->tpl_vars['linked_adapters'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['other_adapters'] = new Smarty_variable(array(), null, 0);?><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['auth_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['wa']->value->user(((string)$_smarty_tpl->tpl_vars['a']->value->getId())."_id")){?><?php $_smarty_tpl->createLocalArrayVariable('linked_adapters', null, 0);
$_smarty_tpl->tpl_vars['linked_adapters']->value[] = $_smarty_tpl->tpl_vars['a']->value;?><?php }else{ ?><?php $_smarty_tpl->createLocalArrayVariable('other_adapters', null, 0);
$_smarty_tpl->tpl_vars['other_adapters']->value[] = $_smarty_tpl->tpl_vars['a']->value;?><?php }?><?php } ?><?php if ($_smarty_tpl->tpl_vars['other_adapters']->value){?><div class="wa-section-header">Через соцсети</div><ul class="wa-adapters-list"><?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['other_adapters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value->getId(), null, 0);?><?php $_smarty_tpl->tpl_vars['_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value->getName(), null, 0);?><li><a href="<?php echo $_smarty_tpl->tpl_vars['a']->value->getUrl();?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_id']->value, ENT_QUOTES, 'UTF-8', true);?>
"><img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" src="<?php echo $_smarty_tpl->tpl_vars['a']->value->getIcon();?>
"/></a></li><?php } ?></ul><div class="wa-section-divider"><span class="wa-text">или</span></div><?php }?></section><?php }?><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 00:16:03
         compiled from "/home/c/cl36655/public_html/wa-system/signup/templates/confirmation_block.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7af293b992d0_14584836')) {function content_5c7af293b992d0_14584836($_smarty_tpl) {?>
<?php if (!function_exists('smarty_template_function_input_name')) {
    function smarty_template_function_input_name($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['input_name']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
]<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div class="wa-signup-form-confirmation-block" style="display: none;">

    <div class="wa-confirmation-code-sent-message"></div>

    <div class="wa-field wa-field-confirmation-code" data-is-required="1" data-field-id="confirmation_code">
        <div class="wa-name">
            Проверочный код
        </div>
        <div class="wa-value">
            <input name="<?php smarty_template_function_input_name($_smarty_tpl,array('field_id'=>'confirmation_code'));?>
" type="text">
            <div class="wa-confirmation-code-input-message"></div>
            <div class="wa-send-again-confirmation-code-link-wrapper" style="display: none">
                <a href="javascript:void(0);" class="wa-send-again-confirmation-code-link">Выслать еще раз</a>
                <i class="wa-send-again-confirmation-code-link-loading icon16 loading" style="display: none;"></i>
            </div>
        </div>
    </div>

    <div class="wa-confirm-signup-button-wrapper">
        <button class="wa-confirm-signup-button">Подтвердить регистрацию</button>
        <i class="wa-confirm-signup-button-icon icon16 loading" style="display: none;"></i>
    </div>

</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 00:16:03
         compiled from "/home/c/cl36655/public_html/wa-system/signup/templates/onetime_password_field.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7af293ba44e5_32963416')) {function content_5c7af293ba44e5_32963416($_smarty_tpl) {?>
<?php if (!function_exists('smarty_template_function_input_name')) {
    function smarty_template_function_input_name($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['input_name']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?><?php echo $_smarty_tpl->tpl_vars['namespace']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['field_id']->value;?>
]<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div class="wa-field wa-field-onetime-password" data-is-required="1" data-field-id="onetime_password" style="display: none;">
    <div class="wa-name">
        Одноразовый пароль

        
        <?php if ($_smarty_tpl->tpl_vars['is_email_channel_available']->value&&$_smarty_tpl->tpl_vars['is_sms_channel_available']->value){?>
            <span class="wa-onetime-password-transport-message"></span>
        <?php }?>
    </div>
    <div class="wa-value">
        <input name="<?php smarty_template_function_input_name($_smarty_tpl,array('field_id'=>'onetime_password'));?>
" type="text">
        <div class="wa-onetime-password-input-message"></div>
        <div class="wa-send-again-onetime-password-link-wrapper" style="display: none">
            <a href="javascript:void(0);" class="wa-send-again-onetime-password-link js-send-onetime-password-trigger">Выслать еще раз</a>
            <i class="wa-send-again-onetime-password-link-loading icon16 loading js-send-onetime-password-loading" style="display: none;"></i>
        </div>
    </div>
</div>
<?php }} ?>