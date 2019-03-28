<?php /* Smarty version Smarty-3.1.14, created on 2019-03-19 00:34:28
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/backend/BackendDefaultMobile.html" */ ?>
<?php /*%%SmartyHeaderCode:12023958885c900ee4bc7564-81575907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fccea5ee5aef997735c09a2206161fab757f49c6' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/backend/BackendDefaultMobile.html',
      1 => 1540900318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12023958885c900ee4bc7564-81575907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'wa_backend_url' => 0,
    'backend_url' => 0,
    'apps' => 0,
    'app_id' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c900ee4c2a556_22304952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c900ee4c2a556_22304952')) {function content_5c900ee4c2a556_22304952($_smarty_tpl) {?><!DOCTYPE html>
<html class="mobile">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0;" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-1.8.1.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-mobile/jquery.mobile-1.1.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/wa/wa-mobile-1.0.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/font/ruble/arial/fontface.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet" type="text/css">

    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/d3/d3.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.core.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/dashboard-mobile.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/wa/wa-1.3.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/dashboard/dashboard.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
">

    <script>
    var backend_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_backend_url']->value);?>
;

    ( function($) {

        <?php if ($_smarty_tpl->tpl_vars['wa']->value->isMobile()=='iphone'){?>
            $(document).on("click", "a", function(e) {
                e.preventDefault();
                location.href = $(this).attr("href");
            });
        <?php }?>

        var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
        if (pixelRatio > 1) {
            $(window).on("load", function() {
                $('#apps .wa-mobile-list-thumb img').each(function() {
                    if ($(this).data('src2')) {
                        $(this).attr('src', $(this).data('src2'));
                    }
                });
            });
        }
    })(jQuery);
    </script>
</head>
<body>
<div id="wa" class="wa-app-list" data-role="page">
    <div id="apps">
        <div data-role="header" data-position="inline">
            <a href="<?php echo $_smarty_tpl->tpl_vars['backend_url']->value;?>
?nomobile=1"  rel="external" data-role="button" data-iconpos="notext"  data-icon="mobile-desktop-only"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['backend_url']->value;?>
?action=logout" rel="external" data-icon="arrow-r" class="ui-btn-right">Выйти</a>
            <h1><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</h1>
        </div>

        <div class="d-mobile-toggle-wrapper">
            <div class="d-mobile-view-toggle">
                <span class="link-item d-mobile-show-apps is-active" id="d-mobile-show-apps">Приложения</span>
                <span class="link-item d-mobile-show-dashboard" id="d-mobile-show-dashboard">Виджеты</span>
            </div>
        </div>

        <div id="wa-mobile-apps-list" data-role="content" data-theme="d">
            <ul data-role="listview" class="wa-mobile-list-thumb" data-theme="d">
                <?php  $_smarty_tpl->tpl_vars['app'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['apps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app']->key => $_smarty_tpl->tpl_vars['app']->value){
$_smarty_tpl->tpl_vars['app']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app']->key;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['backend_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
" rel="external">
                        <?php if ($_smarty_tpl->tpl_vars['app']->value['img']){?><img <?php if (!empty($_smarty_tpl->tpl_vars['app']->value['icon'][96])){?>data-src2="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['icon'][96];?>
"<?php }?> src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['app']->value['img'];?>
" /><?php }?>
                        <h3<?php if (empty($_smarty_tpl->tpl_vars['app']->value['mobile'])){?> class="wa-only-desktop"<?php }?>><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</h3>
                    </a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="wa-mobile-dashboard-wrapper" id="wa-mobile-dashboard-wrapper" style="display: none;"></div>
    </div>
</div>
</body>
</html><?php }} ?>