<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 21:56:08
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/forgotpassword/backend/form.html" */ ?>
<?php /*%%SmartyHeaderCode:4589625945c7ad1c84015d8-81150052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c711bafdbddf7d580951ed85128a3a6d4cb1681' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/forgotpassword/backend/form.html',
      1 => 1542209647,
      2 => 'file',
    ),
    'c464501f30df46de3c8ce75a91562637c44dd878' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/helpers.inc.html',
      1 => 1541667629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4589625945c7ad1c84015d8-81150052',
  'function' => 
  array (
    'show_messages' => 
    array (
      'parameter' => 
      array (
        'messages' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'show_field_errors' => 
    array (
      'parameter' => 
      array (
        'errors' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
    'show_uncaught_errors' => 
    array (
      'parameter' => 
      array (
        'errors' => 
        array (
        ),
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'login_caption' => 0,
    'errors' => 0,
    'data' => 0,
    'renderer' => 0,
    '_value' => 0,
    'login_placeholder' => 0,
    'code_placeholder' => 0,
    'login_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ad1c843c2c0_05290080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ad1c843c2c0_05290080')) {function content_5c7ad1c843c2c0_05290080($_smarty_tpl) {?><?php /*  Call merged included template "./../../helpers.inc.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./../../helpers.inc.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '4589625945c7ad1c84015d8-81150052');
content_5c7ad1c8406c27_47514617($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./../../helpers.inc.html" */?>

<form action="" method="post">

    <div class="field" data-field-id="login">
        <div class="name"><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['login_caption']->value)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</div>
        <div class="value">

            <?php $_smarty_tpl->tpl_vars['_errors'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['errors']->value['login'])===null||$tmp==='' ? array() : $tmp), null, 0);?>
            <?php $_smarty_tpl->tpl_vars['_value'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['data']->value['login'])===null||$tmp==='' ? '' : $tmp), null, 0);?>

            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['renderer']->value->getInputName('login');?>
" class="wa-login-text-input"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                   autocomplete="off"
                   placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login_placeholder']->value, ENT_QUOTES, 'UTF-8', true);?>
">

            <div class="wa-edit-login-link-wrapper">
                <a class="wa-edit-login-link" href="javascript:void(0)">Изменить</a>
            </div>

        </div>
    </div>

    <div class="field wa-field-confirmation-code" data-field-id="confirmation_code">
        <div class="name">
            Код
        </div>
        <div class="value">
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['renderer']->value->getInputName('confirmation_code');?>
"
                   class="wa-login-text-input" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code_placeholder']->value, ENT_QUOTES, 'UTF-8', true);?>
">

            <div class="wa-confirmation-code-input-message"></div>
            <div class="wa-send-again-confirmation-code-link-wrapper" style="display: none">
                <a href="javascript:void(0);" class="wa-send-again-confirmation-code-link">Выслать еще раз</a>
                <i class="wa-send-again-confirmation-code-link-loading icon16 loading" style="display: none;"></i>
            </div>

        </div>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCaptcha();?>


    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderMessages();?>


    <div class="field wa-field-submit">
        <div class="value wa-submit">

            <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderUncaughtErrors();?>


            <input type="submit" value="Восстановление пароля" class="button green wa-recovery-button">
            <input type="submit" value="Подтвердить и сменить пароль" class="button gray wa-confirm-button">

            <a href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
" class="wa-remember-now-link" data-type="login">Я вспомнил пароль!</a>
        </div>
    </div>

    <div class="field wa-back-to-login-page-link-wrapper" style="display: none">
        <a href="<?php echo $_smarty_tpl->tpl_vars['login_url']->value;?>
" data-type="login">Вернуться на страницу входа</a>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['renderer']->value->renderCsrf();?>


</form>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 21:56:08
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/helpers.inc.html" */ ?>
<?php if ($_valid && !is_callable('content_5c7ad1c8406c27_47514617')) {function content_5c7ad1c8406c27_47514617($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_show_messages')) {
    function smarty_template_function_show_messages($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['show_messages']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div class="wa-info-messages" <?php if (!$_smarty_tpl->tpl_vars['messages']->value){?>style="display: none;"<?php }?>>
        <?php  $_smarty_tpl->tpl_vars['group_messages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_messages']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_messages']->key => $_smarty_tpl->tpl_vars['group_messages']->value){
$_smarty_tpl->tpl_vars['group_messages']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group_messages']->key;
?>
            <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                <div class="wa-info-msg" data-group-id="<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
            <?php } ?>
        <?php } ?>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_show_field_errors')) {
    function smarty_template_function_show_field_errors($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['show_field_errors']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
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


<?php if (!function_exists('smarty_template_function_show_uncaught_errors')) {
    function smarty_template_function_show_uncaught_errors($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['show_uncaught_errors']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <div class="wa-uncaught-errors" <?php if (!$_smarty_tpl->tpl_vars['errors']->value){?>style="display: none;"<?php }?>>
        <?php  $_smarty_tpl->tpl_vars['_errors'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_errors']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_errors']->key => $_smarty_tpl->tpl_vars['_errors']->value){
$_smarty_tpl->tpl_vars['_errors']->_loop = true;
?>
            <?php smarty_template_function_show_field_errors($_smarty_tpl,array('errors'=>$_smarty_tpl->tpl_vars['_errors']->value));?>

        <?php } ?>
    </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php }} ?>