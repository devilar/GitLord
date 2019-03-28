<?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 10:51:24
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/backend/BackendStorefronts.html" */ ?>
<?php /*%%SmartyHeaderCode:1721587375c7cd8fcaa45c3-93861486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '219a6e07373eee86998a648d4a59150886cc4e21' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/backend/BackendStorefronts.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1721587375c7cd8fcaa45c3-93861486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7cd8fcad02e0_95679185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7cd8fcad02e0_95679185')) {function content_5c7cd8fcad02e0_95679185($_smarty_tpl) {?><div class="sidebar right15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>
<div class="sidebar left15px">
    <div class="block s-nolevel2-sidebar"></div>
</div>

<div class="content right15px left15px s-nolevel2-box" id="s-storefronts-content" <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('design')){?>data-design="1"<?php }?> <?php if ($_smarty_tpl->tpl_vars['wa']->value->userRights('pages')){?>data-pages="1"<?php }?>>
    <div class="block double-padded s-settings-form">
        Загрузка...
        <i class="icon16 loading"></i>
    </div>

    <div class="clear"></div>
    <!-- settings placeholder -->
</div>

<div class="clear"></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/storefronts.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
    $.storefronts.init();
</script><?php }} ?>