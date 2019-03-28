<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 01:45:31
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/DialogTypes.html" */ ?>
<?php /*%%SmartyHeaderCode:10362829545c86e50b9c1ae7-64520013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7adc0606da5a503cb288194415515f75c3974ff9' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/DialogTypes.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10362829545c86e50b9c1ae7-64520013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'types' => 0,
    'type' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c86e50ba06f83_64135223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c86e50ba06f83_64135223')) {function content_5c86e50ba06f83_64135223($_smarty_tpl) {?><div class="dialog width400px <?php if ($_smarty_tpl->tpl_vars['types']->value){?>height300px<?php }else{ ?>height150px<?php }?>" id="s-types">
    <div class="dialog-background"></div>
    <form method="post" action="?module=products&action=setTypes">
    <div class="dialog-window">
        <div class="dialog-content">
            <div class="dialog-content-indent">
                <h1>Изменить тип товара</h1>
                <p>Изменение типа товара может изменить статус публикации и права доступа к этому товару.</p>
                <ul class="menu-v with-icons">
                    <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                        <li>
                            <label>
                                <?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon']);?>
<input type="radio" name="type_id" value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
">
                                <span class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </label>
                        </li>
                    <?php }
if (!$_smarty_tpl->tpl_vars['type']->_loop) {
?>
                        <li>В вашем магазине отсутствуют типы товаров. Добавьте новый тип в настройках.</li>
                    <?php } ?>
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
</div><?php }} ?>