<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 00:18:43
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/plugins/categoryimages/templates/actions/backend/BackendFilebrowser.html" */ ?>
<?php /*%%SmartyHeaderCode:1641777275c86d0b3d59e21-23673150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee2b00d9268917b945f6064a1b7661bcd9fe03f' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/plugins/categoryimages/templates/actions/backend/BackendFilebrowser.html',
      1 => 1551549257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1641777275c86d0b3d59e21-23673150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'wa_url' => 0,
    'wa_backend_url' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c86d0b3d9f2b0_31909252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c86d0b3d9f2b0_31909252')) {function content_5c86d0b3d9f2b0_31909252($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['categories']->value){?>
<div class="content blank catim-filebrowser">
    <div class="block double-padded">
        <div class="catim-first-header-line">
            <img class="catim-cat-title-img" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/shop/plugins/categoryimages/img/filebrowser_ico.png" alt="filebrowser-ico">
            <div class="catim-cat-title">Изображения категорий</div>
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
shop?action=plugins#/categoryimages/" class="catim-settings-link">Настройки</a>
        </div>

        <div class="catim-second-header-line">
            <div class="catim-search-box-wrapper">
                <input type="text" class="catim-search-box" placeholder="Введите название категории">
                <div class="catim-search-box-magnifier-wrapper">
                    <div class="catim-search-box-magnifier">
                        &#9906;
                    </div>
                    <i class="icon16 loading catim-search-box-loading"></i>
                </div>
            </div>
            <button class="catim-show-all-btn">Раскрыть все</button>
            <button class="catim-mass-del-btn">Удалить все</button>
            <label class='ios-switch-mass-box catim-tooltip' title="Изменить стандартный вывод для всех">
                <input class='ios-switch-mass green' type='checkbox'>
                <div><div></div></div>
            </label>
        </div>

        <ul id="catim-categories-first-list" class="catim-categories-list">
            <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
            <li class="catim-list-category">
                <div class="catim-folder-box <?php echo $_smarty_tpl->tpl_vars['cat']->value['catClass'];?>
"><!--
                  --><div class="catim-folder-pic-place">
                        <img class="catim-cat-pic <?php echo $_smarty_tpl->tpl_vars['cat']->value['catClass'];?>
" <?php echo $_smarty_tpl->tpl_vars['cat']->value['featherlight'];?>
 src="<?php echo $_smarty_tpl->tpl_vars['cat']->value['picPath'];?>
" alt=""/>
                        <i class="icon16 loading catim-filebrowser-loading"></i>
                    </div><!--
                 --><div class="catim-folder-title-place">
                        <span class="catim-cat-folder-title <?php echo $_smarty_tpl->tpl_vars['cat']->value['arrow'];?>
" data-cat-id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</span>
                    </div><!--
                 --><div class="catim-folder-buttons-block">
                        <input class='catim-folder-btn-file <?php echo $_smarty_tpl->tpl_vars['cat']->value['catClass'];?>
' data-cat-id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" type='file' id='category-image-<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
' />
                        <label for='category-image-<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
' class='catim-folder-btn-file-label <?php echo $_smarty_tpl->tpl_vars['cat']->value['catClass'];?>
'>
                            Добавить
                        </label>
                        <button class="catim-folder-del-btn <?php echo $_smarty_tpl->tpl_vars['cat']->value['catClass'];?>
" data-cat-id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
">Удалить</button>
                        <label class='ios-switch-box <?php echo $_smarty_tpl->tpl_vars['cat']->value['catClass'];?>
 catim-tooltip' title="Стандартный вывод">
                            <input data-cat-id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['cat']->value['checked'];?>
 class='ios-switch green' type='checkbox'>
                            <div><div></div></div>
                        </label>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>

<input id="hidden-didnt-match-text" type="hidden" value="По данному запросу ничего не найдено">
<input id="hidden-show-all-hide-btn-text" type="hidden" value="Скрыть">
<input id="hidden-show-all-btn-text" type="hidden" value="Раскрыть все">
<input id="hidden-del-btn-text" type="hidden" value="Удалить">
<input id="hidden-or-text" type="hidden" value="или">
<input id="hidden-cancel-btn-text" type="hidden" value="Отменить">
<input id="hidden-del-msg" type="hidden" value="Вы уверены что хотите удалить все изображения?">
<input id="url-prefix" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
">
<input id="backend-url-prefix" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
">


<?php }else{ ?>
    <div class="content blank">
        <div class="block double-padded">
            <p class="hint align-center">Вы еще не создали ни одной категории товаров</p>
        </div>
    </div>
<?php }?><?php }} ?>