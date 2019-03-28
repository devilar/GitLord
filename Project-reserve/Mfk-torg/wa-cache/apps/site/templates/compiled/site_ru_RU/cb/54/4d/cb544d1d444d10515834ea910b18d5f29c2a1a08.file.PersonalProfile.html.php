<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:40:09
         compiled from "/home/c/cl36655/public_html/wa-apps/site/templates/actions/personal/PersonalProfile.html" */ ?>
<?php /*%%SmartyHeaderCode:2824254715c8f4b595a50f8-03310778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb544d1d444d10515834ea910b18d5f29c2a1a08' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/site/templates/actions/personal/PersonalProfile.html',
      1 => 1541667628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2824254715c8f4b595a50f8-03310778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile_disabled' => 0,
    'auth_app' => 0,
    'fields' => 0,
    'field' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4b595e1cc7_13500406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4b595e1cc7_13500406')) {function content_5c8f4b595e1cc7_13500406($_smarty_tpl) {?><div class="block double-padded">
<h1>Мой профиль</h1>

<?php if (!empty($_smarty_tpl->tpl_vars['profile_disabled']->value)){?>
    <div id="s-app-disabled">
        <p class="red"><em><i class="icon10 no top-padded"></i> <?php echo sprintf('Страница управления профилем на этом сайте недоступна, так как личный кабинет приложения «<strong>%s</strong>», отвечающего за функциональность форм регистрации и авторизации на этом сайте, отключен. Для включения страницы управления профилем необходимо либо включить <a href="#/personal/app/%s/">личный кабинет приложения «%s»</a>, либо <a href="%s">в настройках авторизации</a> выбрать другое приложения, которое будет отвечать за функциональность форм регистрации и авторизации на этом сайте.',$_smarty_tpl->tpl_vars['auth_app']->value['name'],$_smarty_tpl->tpl_vars['auth_app']->value['id'],$_smarty_tpl->tpl_vars['auth_app']->value['name'],'#/personal/settings/configure-app');?>
</em></p>
    </div>
<?php }else{ ?>
<h5 class="heading">Поля формы настройки профиля</h5>
<form id="s-personal-profile-save" method="post" action="?module=personal&action=profileSave">

    <div class="s-personal-field-list">
        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
            <label for="id-<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
">
                <input type="checkbox" id="id-<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
" name="personal_fields[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['checked']){?> checked<?php }?>/>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

            </label>
        <?php } ?>
    </div>

    <input type="hidden" name="domain" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['domain']->value)===null||$tmp==='' ? '' : $tmp);?>
"/>
    <input class="button green" type="submit" value="Сохранить">
    <i class="icon16 loading" style="display: none;"></i>
    <span class="save-msg-icon" style="display: none;"><i class="icon16 yes after-button"></i>Сохранено</span>

</form>

<script>
    $('#s-personal-profile-save').submit(function () {
        var f = $(this),
                $saved_msg = f.find('.save-msg-icon'),
                $loading = f.find('.loading');
        $loading.show();
        $.post(f.attr('action'), f.serialize(), function () {
            $loading.hide();
            $saved_msg.fadeIn( 500 ).delay( 500).fadeOut( 500 );
        }, 'json');
        return false;
    });
</script>
<?php }?>
</div><?php }} ?>