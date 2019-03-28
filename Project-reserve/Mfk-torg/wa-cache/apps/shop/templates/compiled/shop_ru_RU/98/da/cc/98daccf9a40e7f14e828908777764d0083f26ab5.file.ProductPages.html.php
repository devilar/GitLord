<?php /* Smarty version Smarty-3.1.14, created on 2019-03-11 20:52:28
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductPages.html" */ ?>
<?php /*%%SmartyHeaderCode:1918447285c86a05cc413d2-52753385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98daccf9a40e7f14e828908777764d0083f26ab5' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/product/ProductPages.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1918447285c86a05cc413d2-52753385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'pages' => 0,
    'p' => 0,
    'product_id' => 0,
    'page_id' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c86a05cc7fe76_09015603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c86a05cc7fe76_09015603')) {function content_5c86a05cc7fe76_09015603($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/live.dragndrop.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/product/pages.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" type="text/javascript"></script>

<div class="s-pages">
    <div class="sidebar left250px s-internal-sidebar" style="min-height: 300px;">
        <div class="block block-pages">
          <ul class="menu-v collapsible with-icons">
            <li class="drag-newposition"></li>
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['p']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['p']->index++;
 $_smarty_tpl->tpl_vars['p']->first = $_smarty_tpl->tpl_vars['p']->index === 0;
?>
                <li class="dr <?php if ($_smarty_tpl->tpl_vars['p']->first){?>selected<?php }?>" id="page-<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
">
                    <a class="s-page-link" href="#/product/<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
/edit/pages/<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
/">
                        <i class="icon16 notebook"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <span class="hint">/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <?php if ($_smarty_tpl->tpl_vars['p']->value['status']==shopProductPagesModel::STATUS_DRAFT){?> <span class="s-page-draft">черновик</span><?php }?>
                    </a>
                </li>
                <li class="drag-newposition"></li>
            <?php } ?>
            <li class="top-padded selected s-add-page"><a class="s-page-link small" href="#/product/<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
/edit/pages"><i class="icon10 add"></i>Новая страница</a></li>
          </ul>
          <div class="block top-padded align-center">
            <p class="hint">Подстраницы позволяют дополнить информацию о товаре сопутствующим материалом, таким как руководства, фотографии, обзоры и т. п.</p>
          </div>
        </div>
    </div>
    <div id="s-page-container" class="content bordered-left blank left250px shadowed">
        <div  class="block double-padded">
            Загрузка... <i class="icon16 loading"></i>
        </div>
        <div class="clear"></div>
    </div>

<script type="text/javascript">
    $.product_pages.init({
        container: '.s-product-form.pages',
        product_id: <?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
,
        page_id: '<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
',
        count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>

    });
    $.wa.locale['New page'] = 'Новая страница';
</script>

</div><?php }} ?>