<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 21:00:02
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/page.html" */ ?>
<?php /*%%SmartyHeaderCode:17300730845c7ac4a2ce5637-40905522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca787d85b641b67a956d98b7a056ae02985baea8' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/page.html',
      1 => 1482055212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17300730845c7ac4a2ce5637-40905522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'wa' => 0,
    'subpages' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac4a2d01768_57757516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac4a2d01768_57757516')) {function content_5c7ac4a2d01768_57757516($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</h1>
<br />
<?php $_smarty_tpl->tpl_vars['subpages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->pages($_smarty_tpl->tpl_vars['page']->value['id']), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['subpages']->value){?>
    <ul class="sub-links">
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></li>
        <?php } ?>
    </ul>
<?php }?>

<div id="page" role="main">
    <?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

</div><?php }} ?>