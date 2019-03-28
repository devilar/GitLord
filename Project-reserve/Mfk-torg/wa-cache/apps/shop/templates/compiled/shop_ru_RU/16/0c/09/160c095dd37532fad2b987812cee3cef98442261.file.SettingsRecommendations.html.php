<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:40:55
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsRecommendations.html" */ ?>
<?php /*%%SmartyHeaderCode:13954840405c9ccee7d9be05-87779352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '160c095dd37532fad2b987812cee3cef98442261' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsRecommendations.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13954840405c9ccee7d9be05-87779352',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'types' => 0,
    'type_id' => 0,
    'type' => 0,
    'categories' => 0,
    'c' => 0,
    'wa_url' => 0,
    'wa_app_static_url' => 0,
    'wa' => 0,
    'features' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9ccee7dfc5f3_37659129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9ccee7dfc5f3_37659129')) {function content_5c9ccee7dfc5f3_37659129($_smarty_tpl) {?><div class="blank block double-padded s-settings-form float-left">

    <h1 style="margin-bottom: 1.3em;">Автоматическая подборка рекомендуемых товаров</h1>

    <h2 class="black">Перекрестные продажи (Cross-selling)</h2>

    <p class="gray">Перекрестные продажи (cross-selling) — это методика предложения покупателям дополнительных товаров, каким-то образом связанных или часто использующихся совместно. В Shop-Script механизм перекрестных продаж использует информацию о том, что заказывали другие покупатели. Shop-Script анализирует, какие товары наиболее вероятно могут быть куплены вместе с данным товаром, на основании того, что покупали ранее другие посетители магазина. Перечень рекомендуемых товаров формируется в зависимости от текущего содержимого корзины покупателя.</p>

    <div class="fields cross-selling">
        <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_smarty_tpl->tpl_vars['type_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
 $_smarty_tpl->tpl_vars['type_id']->value = $_smarty_tpl->tpl_vars['type']->key;
?>
        <div class="field" data-type-id="<?php echo $_smarty_tpl->tpl_vars['type_id']->value;?>
">
            <div class="name">
                <?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon']);?>
<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
            </div>
            <div class="value no-shift">
                <div class="float-left s-ibutton-checkbox">
                    <ul class="menu-h">
                        <li><input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['type']->value['cross_selling']){?> checked<?php }?> class="i-button-mini"></li>
                        <li><span class="status <?php if (!$_smarty_tpl->tpl_vars['type']->value['cross_selling']){?> s-off<?php }?>"><?php if ($_smarty_tpl->tpl_vars['type']->value['cross_selling']){?>Вкл<?php }else{ ?>Выкл<?php }?></span></li>
                    </ul>
                </div>

                <div class="field-settings float-left"<?php if (!$_smarty_tpl->tpl_vars['type']->value['cross_selling']){?> style="display:none"<?php }?>>
                    <select>
                        <option value="alsobought" <?php if (!$_smarty_tpl->tpl_vars['type']->value['cross_selling']||$_smarty_tpl->tpl_vars['type']->value['cross_selling']=='alsobought'){?>selected<?php }?>>Автоматический (на основании того, что другие покупатели заказывали вместе с данным товаром)</option>
                        <optgroup label="Случайно выбранные товары из категории">
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <option value="category/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value['cross_selling']=="category/".((string)$_smarty_tpl->tpl_vars['c']->value['id'])){?>selected<?php }?>><?php echo str_repeat("&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['c']->value['depth']);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                        <?php } ?>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <?php }
if (!$_smarty_tpl->tpl_vars['type']->_loop) {
?>
            <p><em>Для настройки рекомендаций создайте хотя бы один тип товаров.</em></p>
        <?php } ?>

    </div>
    <div class="clear-left"></div>
</div>

<div class="blank block double-padded s-settings-form">

    <h2>Схожие и альтернативные товары (Upselling)</h2>
    <p class="gray">Эта методика стимулирует заказ более дорогих товаров или похожих альтернативных моделей с другими характеристиками (upselling). В Shop-Script соответствующий механизм предлагает покупателям посмотреть и приобрести похожие и/или альтернативные виды товаров. Список похожих товаров формируется в зависимости от того, какой товар покупатель просматривает в данный момент или просматривал недавно, либо на основании параметров фильтра, настроенных индивидуально для каждого типа продукции.</p>

    <div class="fields upselling">
        <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value){
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
        <div class="field" data-type-id="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
">
            <div class="name">
                <?php echo shopHelper::getIcon($_smarty_tpl->tpl_vars['type']->value['icon']);?>
<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
            </div>
            <div class="value s-ibutton-checkbox">
                <ul class="menu-h">
                    <li><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['type']->value['upselling']){?> checked<?php }?> class="i-button-mini"></li>
                    <li><span class="status<?php if (!$_smarty_tpl->tpl_vars['type']->value['upselling']){?> s-off<?php }?>"><?php if ($_smarty_tpl->tpl_vars['type']->value['upselling']){?>Вкл<?php }else{ ?>Выкл<?php }?></span></li>
                </ul>
            </div>
            <div class="value field-settings"<?php if (!$_smarty_tpl->tpl_vars['type']->value['upselling']){?> style="display:none"<?php }?>>
                <div class="small">
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value['upselling_html'])===null||$tmp==='' ? '' : $tmp);?>

                    <a href="javascript:void(0)" class="customize inline-link"><b><i>Настроить</i></b></a>
                </div>
            </div>
        </div>
        <?php }
if (!$_smarty_tpl->tpl_vars['type']->_loop) {
?>
            <p><em>Для настройки рекомендаций создайте хотя бы один тип товаров.</em></p>
        <?php } ?>
    </div>

    <div class="clear"></div>

</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.slider.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/recommendations.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript">
    document.title = '<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName(false);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr(("Рекомендации").(" — ").($_tmp1), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
    $.settings.recommendationsInit({
        features: <?php echo json_encode($_smarty_tpl->tpl_vars['features']->value);?>
,
        data: <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>

    });
</script>
<?php }} ?>