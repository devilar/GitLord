<?php /* Smarty version Smarty-3.1.14, created on 2019-03-21 14:35:31
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/DialogCategories.html" */ ?>
<?php /*%%SmartyHeaderCode:3216368615c937703259081-01140222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685ef4bab67dc534c9809e5a410523f758290f96' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/DialogCategories.html',
      1 => 1543322182,
      2 => 'file',
    ),
    '104a158a47156aac3c1f030d2a374584232336c8' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/include.categories.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3216368615c937703259081-01140222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9377032b7468_75657683',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9377032b7468_75657683')) {function content_5c9377032b7468_75657683($_smarty_tpl) {?><div class="dialog width600px height500px" id="s-categories">
    <div class="dialog-background"></div>
    <form method="post" action="?module=products&action=addToCategories">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Категории <span class="gray" style="display:none;">(0)</span></h1>
                
                <ul class="menu-v with-icons">
                
                    <li class="bottom-padded">
                        <label>
                            <i class="icon16 folder"></i><input type="checkbox" name="new_category" value="1"> 
                            <span class="name">Новая категория:</span>
                        </label>
                        <input name="new_category_name" value="" style="margin-top: -5px;">
                    </li>
                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)){?>
                        <?php /*  Call merged included template "./include.categories.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./include.categories.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3216368615c937703259081-01140222');
content_5c93770328cd57_94395911($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.categories.html" */?>
                    <?php }?>

                </ul>
                
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <input type="submit" value="Сохранить" class="button green">
                <i class="icon16 loading"></i>
                или <a class="cancel" href="#">отмена</a>
            </div>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

    </div>
    </form>
</div>
<script type="text/javascript">
    (function() {
        var d = $('#s-categories');
        d.find('input[name=new_category_name]').bind('keydown', function() {
            d.find('input[name=new_category]').attr('checked', true);
        });
    })();
</script><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-21 14:35:31
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/include.categories.html" */ ?>
<?php if ($_valid && !is_callable('content_5c93770328cd57_94395911')) {function content_5c93770328cd57_94395911($_smarty_tpl) {?><!-- categories begin -->
<?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)){?>

    <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable(-1, null, 0);?>

    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

      <?php if ($_smarty_tpl->tpl_vars['category']->value['depth']<$_smarty_tpl->tpl_vars['depth']->value){?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['name'] = "end-category";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['depth']->value-$_smarty_tpl->tpl_vars['category']->value['depth']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total']);
?>
                </li>
            </ul>
        <?php endfor; endif; ?>
        <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['depth'], null, 0);?>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['category']->value['depth']==$_smarty_tpl->tpl_vars['depth']->value){?>
          </li>
          <li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['category']->value['depth']>$_smarty_tpl->tpl_vars['depth']->value){?>
          <ul class="menu-v with-icons">
              <li>
              <?php $_smarty_tpl->tpl_vars['depth'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['depth'], null, 0);?>
      <?php }?>

        <label>
            <i class="icon16 folder"></i><input type="checkbox" name="category_id[]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
            <span class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
        </label>

    <?php } ?>

    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['name'] = "end-category";
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['depth']->value+1) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["end-category"]['total']);
?>
          </li>
        </ul>
    <?php endfor; endif; ?>
<?php }?>
<!-- categories end --><?php }} ?>