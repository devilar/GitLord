<?php /* Smarty version Smarty-3.1.14, created on 2019-03-20 11:27:21
         compiled from "/home/c/cl36655/public_html/wa-data/public/shop/themes/default/product.page.html" */ ?>
<?php /*%%SmartyHeaderCode:281496245c91f969cfdf79-63421449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4be52d986cfca9771cd047c6225a236f28869b7' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/shop/themes/default/product.page.html',
      1 => 1486447523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281496245c91f969cfdf79-63421449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'product' => 0,
    'wa' => 0,
    'reviews_total_count' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c91f969d22231_74561728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c91f969d22231_74561728')) {function content_5c91f969d22231_74561728($_smarty_tpl) {?><article>

    <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
    
    <!-- product page navigation -->
    <nav>
        <ul class="product-nav">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value);?>
">Обзор</a></li>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'reviews');?>
">Отзывы</a>
                <span class="hint" itemprop="reviewCount"><?php echo $_smarty_tpl->tpl_vars['reviews_total_count']->value;?>
</span>
            </li>
            <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <li<?php if ($_smarty_tpl->tpl_vars['page']->value['id']==$_smarty_tpl->tpl_vars['p']->value['id']){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->productUrl($_smarty_tpl->tpl_vars['product']->value,'page',array('page_url'=>$_smarty_tpl->tpl_vars['p']->value['url']));?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            <?php } ?>
        </ul>
    </nav>
    
    <div class="product-info">
        <?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

    </div>

</article><?php }} ?>