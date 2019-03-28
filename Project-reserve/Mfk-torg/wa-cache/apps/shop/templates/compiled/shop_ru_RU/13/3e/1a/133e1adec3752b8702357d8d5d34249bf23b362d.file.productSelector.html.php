<?php /* Smarty version Smarty-3.1.14, created on 2019-03-11 12:56:22
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/includes/productSelector.html" */ ?>
<?php /*%%SmartyHeaderCode:19171954875c8630c6c3a045-52160061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '133e1adec3752b8702357d8d5d34249bf23b362d' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/includes/productSelector.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19171954875c8630c6c3a045-52160061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hash' => 0,
    'hints' => 0,
    'sets' => 0,
    'set' => 0,
    'types' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8630c6ca1335_52769965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8630c6ca1335_52769965')) {function content_5c8630c6ca1335_52769965($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_print_tree')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/function.wa_print_tree.php';
?>
<div class="field">
    <div class="name">
        <?php echo _wd('shop',"Select products");?>

    </div>
    <?php $_smarty_tpl->tpl_vars['hash'] = new Smarty_variable(shopImportexportHelper::parseHash($_smarty_tpl->tpl_vars['hash']->value), null, 0);?>
    <div class="value">
        <div class="sidebar left200px">
            <ul class="menu-v">
                <li>
                    <label class="black"><input type="radio" value="" name="hash"<?php if (empty($_smarty_tpl->tpl_vars['hash']->value['type'])){?> checked="checked"<?php }?>> <?php echo _wd('shop',"All products");?>
</label>
                </li>
                <li<?php if ($_smarty_tpl->tpl_vars['hash']->value['type']!='id'){?> style="display: none;"<?php }?>>
                    <label class="black"><input type="radio" value="id" name="hash"<?php if ($_smarty_tpl->tpl_vars['hash']->value['type']=='id'){?> checked="checked"<?php }?>>
                        <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['product_ids'])===null||$tmp==='' ? '' : $tmp);?>
" name="product_ids"> <span data-text="<?php echo htmlspecialchars(_wd('shop',"Selected products (%d)"), ENT_QUOTES, 'UTF-8', true);?>
"><?php if ($_smarty_tpl->tpl_vars['hash']->value['type']=='id'){?><?php ob_start();?><?php echo _wd('shop',"Selected products (%d)");?>
<?php $_tmp1=ob_get_clean();?><?php echo sprintf($_tmp1,$_smarty_tpl->tpl_vars['hash']->value['count']);?>
<?php }else{ ?><?php ob_start();?><?php echo htmlspecialchars(_wd('shop',"Selected products (%d)"), ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php echo sprintf($_tmp2,'0');?>
<?php }?></span></label>
                </li>
                <li<?php if ($_smarty_tpl->tpl_vars['hash']->value['type']!='category'&&empty($_smarty_tpl->tpl_vars['hash']->value['data']['categories'])){?> style="display: none;"<?php }?>>
                    <label class="black"><input type="radio" value="category" name="hash"<?php if ($_smarty_tpl->tpl_vars['hash']->value['type']=='category'){?> checked="checked"<?php }?>>
                        <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['category_ids'])===null||$tmp==='' ? '' : $tmp);?>
" name="category_ids">
                        <span data-text="<?php echo htmlspecialchars(_wd('shop','Categories'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(_wd('shop','Categories'), ENT_QUOTES, 'UTF-8', true);?>
</span>
                        
                    </label>
                </li>
                <li>
                    <label class="black"><input type="radio" value="set" name="hash"<?php if ($_smarty_tpl->tpl_vars['hash']->value['type']=='set'){?> checked="checked"<?php }?>> <?php echo _wd('shop',"Sets");?>
</label>
                </li>
                <li>
                    <label class="black"><input type="radio" value="type" name="hash"<?php if ($_smarty_tpl->tpl_vars['hash']->value['type']=='type'){?> checked="checked"<?php }?>> <?php echo _wd('shop',"Product types");?>
</label>
                </li>
            </ul>
        </div>
        <div class="value js-hash-values js-hash-" style="width: 400px;">
            <div class="bordered-left" style="padding-left: 20px;">
                <?php if (!empty($_smarty_tpl->tpl_vars['hints']->value['all'])){?><br/><span class="small"><?php echo $_smarty_tpl->tpl_vars['hints']->value['all'];?>
</span><?php }?>
            </div>
        </div>

        <div class="value js-hash-values js-hash-set" style="width: 400px;">
            <div class="bordered-left" style="padding-left: 20px;">
                <ul class="menu-v with-icons">
                    <?php  $_smarty_tpl->tpl_vars['set'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['set']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['set']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['set']->key => $_smarty_tpl->tpl_vars['set']->value){
$_smarty_tpl->tpl_vars['set']->_loop = true;
 $_smarty_tpl->tpl_vars['set']->index++;
 $_smarty_tpl->tpl_vars['set']->first = $_smarty_tpl->tpl_vars['set']->index === 0;
?>
                        <li>
                            <label title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                                <span class="count"><?php echo $_smarty_tpl->tpl_vars['set']->value['count'];?>
</span>
                                <i class="icon16 <?php if ($_smarty_tpl->tpl_vars['set']->value['type']==shopSetModel::TYPE_DYNAMIC){?>funnel<?php }else{ ?>ss set<?php }?>"></i>
                                <input type="radio" name="set_id" value="<?php echo $_smarty_tpl->tpl_vars['set']->value['id'];?>
"<?php if (($_smarty_tpl->tpl_vars['set']->first&&empty($_smarty_tpl->tpl_vars['hash']->value['set_id']))||($_smarty_tpl->tpl_vars['hash']->value['set_id']==$_smarty_tpl->tpl_vars['set']->value['id'])){?> checked="checked"<?php }?>>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                            </label>
                        </li>
                    <?php } ?>
                </ul>
                <?php if (!empty($_smarty_tpl->tpl_vars['hints']->value['set'])){?><br/><span class="small"><?php echo $_smarty_tpl->tpl_vars['hints']->value['set'];?>
</span><?php }?>
            </div>
        </div>
        <div class="value js-hash-values js-hash-type" style="width: 400px;">
            <div class="bordered-left" style="padding-left: 20px;">
                <ul class="menu-v with-icons">
                    <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['type']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->index++;
 $_smarty_tpl->tpl_vars['type']->first = $_smarty_tpl->tpl_vars['type']->index === 0;
?><?php if ($_smarty_tpl->tpl_vars['type']->value['count']){?>
                        <li>
                            <label>
                                <span class="count"><?php echo $_smarty_tpl->tpl_vars['type']->value['count'];?>
</span>
                                <?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon']);?>

                                <input type="radio" name="type_id" value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
" <?php if (($_smarty_tpl->tpl_vars['type']->first&&empty($_smarty_tpl->tpl_vars['hash']->value['type_id']))||($_smarty_tpl->tpl_vars['hash']->value['type_id']==$_smarty_tpl->tpl_vars['type']->value['id'])){?> checked="checked"<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                            </label>
                        </li>
                    <?php }?><?php } ?>
                </ul>
                <?php if (!empty($_smarty_tpl->tpl_vars['hints']->value['type'])){?><br/><span class="small"><?php echo $_smarty_tpl->tpl_vars['hints']->value['type'];?>
</span><?php }?>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['hash']->value['type']=='id'){?>
        <div class="value js-hash-values js-hash-id" style="width: 400px;">
            <div class="bordered-left" style="padding-left: 20px;">
                <a href="?action=products#/products/hash=<?php echo rawurlencode("id/".((string)$_smarty_tpl->tpl_vars['hash']->value['product_ids']));?>
" target="_blank"><?php echo htmlspecialchars(_wd('shop','%d product','%d products',$_smarty_tpl->tpl_vars['hash']->value['count']), ENT_QUOTES, 'UTF-8', true);?>
<i class="icon16 new-window"></i></a>
                <?php if (!empty($_smarty_tpl->tpl_vars['hints']->value['id'])){?><br/><span class="small"><?php echo $_smarty_tpl->tpl_vars['hints']->value['id'];?>
</span><?php }?>
            </div>
        </div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['hash']->value['data']['categories'])||!empty($_smarty_tpl->tpl_vars['hints']->value['category'])){?>
        <div class="value js-hash-values js-hash-category" style="width: 400px;">
            <div class="bordered-left" style="padding-left: 20px;">
                <?php if (!empty($_smarty_tpl->tpl_vars['hash']->value['data']['categories'])){?>
                <?php echo smarty_function_wa_print_tree(array('tree'=>$_smarty_tpl->tpl_vars['hash']->value['data']['categories'],'elem'=>'<label><i class="icon16 folder"></i><input type="radio" name="category_ids" data-selected=":selected" value=":id"/> :name</label>','class'=>"menu-v with-icons"),$_smarty_tpl);?>

                <?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['hints']->value['category'])){?><br/><span class="gray"><?php echo $_smarty_tpl->tpl_vars['hints']->value['category'];?>
</span><?php }?>
            </div>
        </div>
        <?php }?>
    </div>
    <div class="clear-left"></div>
</div><?php }} ?>