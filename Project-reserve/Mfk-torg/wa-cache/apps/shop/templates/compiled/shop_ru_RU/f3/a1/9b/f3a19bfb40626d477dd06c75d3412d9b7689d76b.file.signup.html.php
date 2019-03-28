<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 00:16:03
         compiled from "/home/c/cl36655/public_html/wa-data/public/site/themes/default/signup.html" */ ?>
<?php /*%%SmartyHeaderCode:9425726505c7af293ae7bf2-53886227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3a19bfb40626d477dd06c75d3412d9b7689d76b' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/site/themes/default/signup.html',
      1 => 1431678454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9425726505c7af293ae7bf2-53886227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmed_email' => 0,
    'contact' => 0,
    'email_confirmation_hash' => 0,
    'wa' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7af293b19662_87688380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7af293b19662_87688380')) {function content_5c7af293b19662_87688380($_smarty_tpl) {?><div id="page" role="main" class="wa-signup-form">

    <?php if (!empty($_smarty_tpl->tpl_vars['confirmed_email']->value)){?>
    
        <h1>Спасибо!</h1>
        <p>Вы успешно подтвердили ваш email-адрес.</p>
        
    <?php }elseif(!empty($_smarty_tpl->tpl_vars['contact']->value)){?>
    
        <h1>Спасибо!</h1>
        <p>Вы зарегистрировались.</p>

        <?php if (!empty($_smarty_tpl->tpl_vars['email_confirmation_hash']->value)){?>
            <p><em>Ссылка на подтверждение регистрации была отправлена вам по электронной почте. Пожалуйста, щелкните по этой ссылке, чтобы подтвердить регистрацию и авторизоваться на сайте.</em></p>
        <?php }?>
        
    <?php }else{ ?>
    
        <h1>Регистрация</h1>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->authAdapters();?>

        <?php echo $_smarty_tpl->tpl_vars['wa']->value->signupForm($_smarty_tpl->tpl_vars['errors']->value);?>

        
    <?php }?>
    
</div><?php }} ?>