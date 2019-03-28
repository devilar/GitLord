<?php /* Smarty version Smarty-3.1.14, created on 2019-03-02 20:54:45
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsRegions.html" */ ?>
<?php /*%%SmartyHeaderCode:21363050975c7ac36570e5a9-00951055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd78485da851cfcc81af1507c620b4a2db9eef402' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/settings/SettingsRegions.html',
      1 => 1548766579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21363050975c7ac36570e5a9-00951055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_url' => 0,
    'country' => 0,
    'countries' => 0,
    'c' => 0,
    'selected' => 0,
    'regions' => 0,
    'r' => 0,
    'wa_app_url' => 0,
    '_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac36577ffc1_25781600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac36577ffc1_25781600')) {function content_5c7ac36577ffc1_25781600($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_title'] = new Smarty_variable("Страны и регионы — ".((string)$_smarty_tpl->tpl_vars['wa']->value->accountName(false)), null, 0);?>
<div class="s-regions-settings-page blank block double-padded" id="s-regions-settings-page">
    <h1 class="s-page-header">Страны и регионы</h1>
    <div class="s-regions-settings-fields-block">
        <form action="?module=settingsRegions">
            <div class="field">
                <div class="name">
                    Страна
                </div>
                <div class="value no-shift">
                    <i class="icon16 overhanging" style="background: url('<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/country/<?php echo $_smarty_tpl->tpl_vars['country']->value['iso3letter'];?>
.gif') no-repeat; top: 3px;"></i>
                    <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(false, null, 0);?>
                    <select class="js-country-selector">
                        <?php if (!$_smarty_tpl->tpl_vars['country']->value['iso3letter']){?>
                            <option value="">Выберите страну</option>
                        <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value['name']){?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['iso3letter'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if (!$_smarty_tpl->tpl_vars['selected']->value&&$_smarty_tpl->tpl_vars['c']->value['iso3letter']===$_smarty_tpl->tpl_vars['country']->value['iso3letter']){?> selected <?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(true, null, 0);?> <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php }else{ ?>
                                <option disabled></option>
                            <?php }?>
                        <?php } ?>
                    </select>
                    <a href="javascript:void(0)" style="position:relative; top:0; left:5px;" title="Дублировать в начале списка">
                        <input class="js-contry-fav-input" type="hidden" name="country_fav" value="<?php echo ifset($_smarty_tpl->tpl_vars['country']->value['fav_sort'],'');?>
">
                        <i class="icon16 star<?php if ($_smarty_tpl->tpl_vars['country']->value['fav_sort']===null){?>-empty<?php }?> js-country-fav-icon"></i>
                    </a>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['country']->value['iso3letter']){?>
                <input type="hidden" name="country" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['iso3letter'], ENT_QUOTES, 'UTF-8', true);?>
">
                <div class="field">
                    <div class="name">
                        Регионы
                    </div>
                    <div class="value no-shift">
                        <table class="js-regions-table zebra">
                            <thead>
                            <tr>
                                <th>Название региона</th>
                                <th>Код региона</th>
                                <th class="min-width"></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['regions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                                    <tr data-orig-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
">
                                        <td><input type="text" name="region_names[]" placeholder="Название региона" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></td>
                                        <td><input type="text" name="region_codes[]" placeholder="Код региона" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['code'], ENT_QUOTES, 'UTF-8', true);?>
"></td>
                                        <td class="min-width"><a class="nowrap" href="javascript:void(0)">
                                                <?php if ($_smarty_tpl->tpl_vars['r']->value['fav_sort']===null){?>
                                                    <input type="hidden" name="region_favs[]" value="">
                                                    <i class="icon16 fav star-empty" title="Дублировать в начале списка"></i>
                                                <?php }else{ ?>
                                                    <input type="hidden" name="region_favs[]" value="<?php echo ifset($_smarty_tpl->tpl_vars['r']->value['fav_sort'],'');?>
">
                                                    <i class="icon16 fav star" title="Дублировать в начале списка"></i>
                                                <?php }?>
                                                <i class="icon16 no"></i>
                                            </a></td>
                                    </tr>
                                    <?php }
if (!$_smarty_tpl->tpl_vars['r']->_loop) {
?>
                                    <tr class="empty-stub">
                                        <td colspan="3">
                                            <em class="grey">Для этой страны не определено ни одного региона (штата, провинции).</em>
                                        </td>
                                    </tr>
                                <?php } ?>

                                <tr class="white">
                                    <td colspan="3"><a href="javascript:void(0)" class="js-add-region-link inline-link"><i class="icon16 add"></i><b><i>Добавить регион</i></b></a></td>
                                </tr>

                                
                                <tr class="hidden highlighted just-added js-template-new">
                                    <td><input type="text" name="region_names[]" value="" placeholder="Название региона"></td>
                                    <td><input type="text" name="region_codes[]" value="" placeholder="Код региона"></td>
                                    <td class="min-width"><a href="javascript:void(0)">
                                        <input type="hidden" name="region_favs[]" value="">
                                        <i class="icon16" style="background: none;"></i>
                                        <i class="icon16 no"></i>
                                    </a></td>
                                </tr>

                                
                                <tr class="gray hidden highlighted js-template-deleted">
                                    <td class="bold strike insert-name-here"></td>
                                    <td><em class="small">Нажмите на кнопку «Сохранить», чтобы подтвердить удаление.</em></td>
                                    <td class="min-width"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            <?php }?>

            <div class="s-form-buttons">
                <div class="s-footer-actions js-footer-actions">
                    <input class="button green js-submit-button" type="submit" name="" value="Сохранить">
                    <span class="s-hidden">
                        <span style="margin: 0 4px;">или</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
webasyst/settings/regions/" class="js-cancel">отмена</a>
                    </span>
                    <i class="icon16 loading s-loading" style="display: none;"></i>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    (function($) {
        new WASettingsRegions({
            $wrapper: $("#s-regions-settings-page"),
            country_iso3letter: '<?php echo $_smarty_tpl->tpl_vars['country']->value['iso3letter'];?>
',
            locales: {
                'confirm_region_not_saved': 'Регионы не сохранены. Покинуть эту страницу без сохранения?'

            }
        });
        $.wa.setTitle(<?php echo json_encode($_smarty_tpl->tpl_vars['_title']->value);?>
);
    })(jQuery);
</script><?php }} ?>