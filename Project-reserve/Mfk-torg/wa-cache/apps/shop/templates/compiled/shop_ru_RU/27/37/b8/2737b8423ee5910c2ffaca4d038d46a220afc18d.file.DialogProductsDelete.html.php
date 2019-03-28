<?php /* Smarty version Smarty-3.1.14, created on 2019-03-18 10:59:52
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/DialogProductsDelete.html" */ ?>
<?php /*%%SmartyHeaderCode:59984245c8f4ff8e13740-37321323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2737b8423ee5910c2ffaca4d038d46a220afc18d' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/dialog/DialogProductsDelete.html',
      1 => 1551193711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59984245c8f4ff8e13740-37321323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c8f4ff8e3e7c2_09915739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c8f4ff8e3e7c2_09915739')) {function content_5c8f4ff8e3e7c2_09915739($_smarty_tpl) {?><div class="dialog width400px height200px" id="s-product-list-delete-products-dialog" data-not-allowed-string="Невозможно удалить товары (%d), к которым у вас нет доступа.">
    <div class="dialog-background"></div>
    <form method="post" action="">
    <div class="dialog-window">
        <div class="dialog-content" style="height: auto;">
            <div class="dialog-content-indent">
                <h1>Удалить</h1>
                <p>
                    <strong class="red"><?php echo _w('%d product will be deleted without the ability to restore.','%d products will be deleted without the ability to restore.',$_smarty_tpl->tpl_vars['count']->value);?>
</strong>
                    При удалении товара все отчеты о его продажах, его данные о перекрестных продажах и связи с ранее оформленными заказами будут также удалены без возможности восстановления.
                </p>
            </div>
        </div>
        <div class="dialog-buttons">
            <div class="dialog-buttons-gradient">
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

                <input class="button red" type="submit" value="Удалить">
                <i class="icon16 loading"></i>
                или <a class="cancel" href="javascript:void(0);">отмена</a>
            </div>
        </div>
    </div>
    </form>
</div><?php }} ?>