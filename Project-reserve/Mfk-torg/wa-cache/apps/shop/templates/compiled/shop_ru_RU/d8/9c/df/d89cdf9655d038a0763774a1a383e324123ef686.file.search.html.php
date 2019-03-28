<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 20:12:06
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/search.html" */ ?>
<?php /*%%SmartyHeaderCode:21143572385c7c0ae6cc04b4-38473670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd89cdf9655d038a0763774a1a383e324123ef686' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/search.html',
      1 => 1431678453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21143572385c7c0ae6cc04b4-38473670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'frontend_search' => 0,
    '_' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7c0ae6cedd14_16982424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7c0ae6cedd14_16982424')) {function content_5c7c0ae6cedd14_16982424($_smarty_tpl) {?><h1 class="category-name">
    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

</h1>

<!-- plugin hook: 'frontend_search' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_search']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
<?php if (!$_smarty_tpl->tpl_vars['products']->value){?>
    Не найдено ни одного товара.
<?php }else{ ?>
    <div id="product-list">
    <?php echo $_smarty_tpl->getSubTemplate ('list-thumbs.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
<?php }?><?php }} ?>