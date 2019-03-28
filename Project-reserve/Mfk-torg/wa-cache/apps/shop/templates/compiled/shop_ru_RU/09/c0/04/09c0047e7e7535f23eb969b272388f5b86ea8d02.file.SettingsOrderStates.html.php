<?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:40:59
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsOrderStates.html" */ ?>
<?php /*%%SmartyHeaderCode:3352720665c9cceeb41b520-09322738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09c0047e7e7535f23eb969b272388f5b86ea8d02' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsOrderStates.html',
      1 => 1548948065,
      2 => 'file',
    ),
    'c326bd71cf32241245ece1c98dd4dbe7055642c3' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsOrderStatesActionTemplateHelp.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3352720665c9cceeb41b520-09322738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'states' => 0,
    'id' => 0,
    'info' => 0,
    's' => 0,
    'buttons' => 0,
    'b' => 0,
    'icons' => 0,
    'icon' => 0,
    'state_icon' => 0,
    'actions' => 0,
    'a' => 0,
    'action_icons' => 0,
    'pattern_id' => 0,
    'pattern_info' => 0,
    'edit_actions_map' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c9cceeb53bb10_58584806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9cceeb53bb10_58584806')) {function content_5c9cceeb53bb10_58584806($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/live.dragndrop.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/order_states.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css" type="text/css" />


<div class="sidebar left200px s-settings-order-states">
    <div class="s-inner-sidebar">
        <ul class="menu-v stack with-icons">
            <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
            <li class="dr <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['info']->value['id']){?>selected<?php }?>" id="state-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <a href="#/orderStates/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/" style="<?php echo $_smarty_tpl->tpl_vars['s']->value->getStyle();?>
">
                    <i class="icon16 sort count"></i>
                    <i class="<?php echo $_smarty_tpl->tpl_vars['s']->value->getOption('icon');?>
"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>

                </a>
            </li>
            <?php } ?>
            <li class="top-padded small <?php if ($_smarty_tpl->tpl_vars['info']->value['id']=='new_state'){?>selected<?php }?> s-add-state" id="state-new_state">
                <a href="#/orderStates/new_state/">
                    <i class="icon10 add"></i>Новый статус заказа
                </a>
            </li>
            <li class="top-padded small">
                <a href="https://support.webasyst.ru/shop-script/8699/order-workflow/" target="_blank">
                    <i class="icon10 info"></i>О статусах и действиях с заказами
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="content left200px s-settings-form blank bordered-left">
    <div class="block double-padded">
        <?php if (!$_smarty_tpl->tpl_vars['info']->value['original']){?>
            <div class="float-right">
                <ul class="menu-h">
                    <li><a href="?module=settings&action=orderStateDelete" id="s-delete-state"><i class="icon16 delete"></i>Удалить статус</a></li>
                </ul>
            </div>
        <?php }?>
        <h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h1>
    </div>
    <div class="s-workflow-action-buttons-preview">
        <ul class="menu-h s-workflow-action-buttons s-order-actions" style="margin-top: 20px;">
            <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value){
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['b']->key;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</li>
            <?php } ?>
        </ul>
    </div>
    <div class="block double-padded">
        <div class="fields form">
            <form id="s-save-order-state" method="post" action="?module=settings&action=orderStateSave&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">

              <div class="field-group">
                <div class="field">
                    <div class="name">
                        Название статуса
                    </div>
                    <div class="value">
                        <input type="text" name="name" class="bold" value="<?php if ($_smarty_tpl->tpl_vars['info']->value['id']!='new_state'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php }?>">
                    </div>
                </div>

                <?php if (!$_smarty_tpl->tpl_vars['info']->value['original']){?>
                    <div class="field">
                        <div class="name">
                            ID статуса
                        </div>
                        <div class="value">
                            <?php if ($_smarty_tpl->tpl_vars['info']->value['id']!='new_state'){?>
                                <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            <?php }else{ ?>
                                <input type="text" name="new_id" class="small" value="" id="c-state-id">
                            <?php }?>
                        </div>
                    </div>
                <?php }?>

                <div class="field">
                    <div class="name">
                        Оформление
                    </div>
                    <div class="value">
                        #<input type="text" name="style[color]" value="<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['options']['style']['color'])){?><?php echo mb_strtolower(substr($_smarty_tpl->tpl_vars['info']->value['options']['style']['color'],'1'), 'UTF-8');?>
<?php }?>" id="s-color" class="short">
                        <span class="s-color-replacer" id="s-color-replacer">
                            <i class="icon16 color" style="background: #<?php echo mb_strtolower(substr($_smarty_tpl->tpl_vars['info']->value['options']['style']['color'],'1'), 'UTF-8');?>
;"></i>
                        </span>
                        <div id="s-colorpicker" style="display:none;"></div>
                        <br><br>

                        <label><input type="checkbox" name="style[font-weight]" <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['options']['style']['font-weight'])){?>checked="checked"<?php }?> value="bold"> <strong>Жирный</strong></label>
                        <label><input type="checkbox" name="style[font-style]"   <?php if (!empty($_smarty_tpl->tpl_vars['info']->value['options']['style']['font-style'])){?>checked="checked"<?php }?> value="italic"> <em>Курсив</em></label>
                    </div>
                </div>
                <div class="field">
                    <div class="name">
                        Иконка
                    </div>
                    <div class="value">
                        <ul class="menu-h s-icons">
                            <?php $_smarty_tpl->tpl_vars['state_icon'] = new Smarty_variable('', null, 0);?>
                            <?php if (isset($_smarty_tpl->tpl_vars['info']->value['options']['icon'])){?>
                                <?php $_smarty_tpl->tpl_vars['state_icon'] = new Smarty_variable(str_replace('icon16 ss ','',$_smarty_tpl->tpl_vars['info']->value['options']['icon']), null, 0);?>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value){
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
                                <li data-icon="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['icon']->value==$_smarty_tpl->tpl_vars['state_icon']->value){?>class="selected"<?php }?>>
                                    <a href="#"><i class="icon16 ss <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                  <?php if ($_smarty_tpl->tpl_vars['info']->value['payment_allowed']!==null){?>
                  <div class="field">
                      <div class="name">Доступность возможности оплаты</div>
                      <div class="value no-shift">
                          <label>
                              <input type="checkbox" name="payment_allowed" value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['payment_allowed']){?> checked="checked"<?php }?>>
                              покупатели могут оплачивать заказы в этом статусе в личном кабинете
                          </label>
                      </div>
                  </div>
                  <?php }?>
                <div class="field">
                    <div class="name">
                        Доступные действия
                    </div>
                    <div class="s-order-allowed-actions">
                        <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['a']->key;
?>
                            <?php if (empty($_smarty_tpl->tpl_vars['a']->value['internal'])){?>
                            <div class="value no-shift s-order-action<?php if (!in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['info']->value['actions'])){?> unsortable<?php }?>"
                                    data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                                    data-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
                                    data-description="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['options']['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                                    data-state="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['state'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                                    data-link="<?php if (!empty($_smarty_tpl->tpl_vars['a']->value['options'])&&!empty($_smarty_tpl->tpl_vars['a']->value['options']['position'])){?>1<?php }?>"
                                    data-border_color="<?php if (!empty($_smarty_tpl->tpl_vars['a']->value['options'])&&!empty($_smarty_tpl->tpl_vars['a']->value['options']['border_color'])){?><?php echo $_smarty_tpl->tpl_vars['a']->value['options']['border_color'];?>
<?php }else{ ?>dddddd<?php }?>"
                                    data-extends="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['extends'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                                    data-icon="<?php if (!empty($_smarty_tpl->tpl_vars['a']->value['options'])&&!empty($_smarty_tpl->tpl_vars['a']->value['options']['icon'])){?><?php echo $_smarty_tpl->tpl_vars['a']->value['options']['icon'];?>
<?php }?>"
                                 title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['a']->value['options']['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
"
                            >
                                <label>
                                    <i class="icon16 sort"<?php if (!in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['info']->value['actions'])){?> style="display: none;"<?php }?>></i>
                                    <input type="checkbox" name="action[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if (in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['info']->value['actions'])){?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['id']->value=='create'){?>disabled="disabled"<?php }?>>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['a']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <span class="hint"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['id']->value, 'UTF-8');?>
</span>
                                </label>
                                <?php if (empty($_smarty_tpl->tpl_vars['a']->value['original'])){?>
                                    <a href="javascript:void(0)" class="inline-link small s-edit-action" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>
                                <?php }elseif($_smarty_tpl->tpl_vars['id']->value=='message'){?>
                                    <a href="javascript:void(0)" class="inline-link small s-edit-action" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="s-edit-message-action"><i class="icon10 edit"></i><b><i>редактировать</i></b></a>
                                <?php }?>
                            </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                    <br>

                    
                    <div class="value no-shift s-new-action" style="display:none" title="">
                        <div class="block double-padded s-new-action-details">
                            <div class="float-right hidden s-delete-action">
                                <ul class="menu-h">
                                    <li><a href="#"><i class="icon16 delete"></i>Удалить действие</a></li>
                                </ul>
                            </div>
                            <input type="checkbox" name="new_action[0]" checked="checked" disabled="disabled">
                            <input type="text" name="new_action_name[0]" value="" placeholder="Название действия" disabled="disabled" class="bold">
                            <input type="hidden" name="new_action_id[0]" value="" disabled="disabled" class="short">
                            <div class="fields form width100px">
                                <div class="field">
                                    <textarea name="new_action_description[0]" placeholder="Введите подсказку, видимую только в бекенде, о том, что делает ваше действие и для чего его нужно выполнять."></textarea>
                                </div>
                                <div class="field">
                                    <div class="name">Установить статус заказа</div>
                                    <div class="value no-shift">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['states']->value)){?>
                                            <select name="new_action_state[0]" disabled="disabled">
                                                <option value="">Не менять статус заказа</option>
                                                <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['s']->value->getName(), ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                <?php } ?>
                                            </select>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="name">Оформление</div>
                                    <div class="value no-shift">
                                        <label>
                                            <input type="radio" name="new_action_link[0]" checked="checked" value="" class="s-action-button"> Кнопка
                                        </label>
                                        #<input type="text" name="new_action_border_color[0]" class="s-color short" value="ddd">
                                        <span class="s-color-replacer">
                                            <i class="icon16 color" style="background: #ddd;"></i>
                                        </span>
                                        <div class="s-colorpicker" style="display:none;"></div>
                                    </div>
                                    <div class="value no-shift">
                                        <label>
                                            <input type="radio" name="new_action_link[0]" value="1" class="s-action-link"> Ссылка
                                            <input type="hidden" name="new_action_icon[0]" class="s-action-icon" value="">
                                        </label>
                                    </div>
                                    <div class="value no-shift s-action-icons" style="display:none;">
                                        <ul class="menu-h">
                                            <?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['action_icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value){
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
                                                <li data-icon="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                                    <a href="#"><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
"></i></a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="name">Поведение</div>
                                    <div class="value no-shift">
                                        <label><input name="new_action_extends[0]" type="radio" value="" checked>&nbsp;по умолчанию</label>
                                    </div>
                                    <?php  $_smarty_tpl->tpl_vars['pattern_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pattern_info']->_loop = false;
 $_smarty_tpl->tpl_vars['pattern_id'] = new Smarty_Variable;
 $_from = shopWorkflow::getExtendsActions(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pattern_info']->key => $_smarty_tpl->tpl_vars['pattern_info']->value){
$_smarty_tpl->tpl_vars['pattern_info']->_loop = true;
 $_smarty_tpl->tpl_vars['pattern_id']->value = $_smarty_tpl->tpl_vars['pattern_info']->key;
?>

                                    <div class="value no-shift">
                                        <label><input name="new_action_extends[0]" type="radio" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pattern_id']->value, ENT_QUOTES, 'UTF-8', true);?>
">&nbsp;<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['pattern_info']->value['name'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pattern_id']->value : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</label>
                                        <span class="hint"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['pattern_id']->value, 'UTF-8');?>
</span>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['pattern_info']->value['options']['description'])){?>
                                        <span class="hint"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pattern_info']->value['options']['description'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <?php }?>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="field">
                                    <div class="name">Уведомления</div>
                                    <div class="value no-shift s-new-action-hint">
                                        Email- и SMS-уведомления о действиях с заказами настраиваются в разделе «<a href="?action=settings#/notifications/" class="nowrap">Настройки → Уведомления</a>».
                                    </div>
                                </div>
                            </div>
                            <div class="clear-both"></div>
                        </div>
                    </div>

                    
                    <?php if (!empty($_smarty_tpl->tpl_vars['actions']->value['message'])){?>
                        <div id="s-message-action-editor" class="value no-shift" style="display:none">
                            <div class="block double-padded s-new-action-details">
                                <div class="fields form width100px">
                                    <div class="field">
                                        <div class="name">Шаблон</div>
                                        <div class="value no-shift">
                                            <textarea name="action_options[message][template]" style="width:100%;"><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['actions']->value['message']['options']['template']), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                        </div>
                                        <div class="value no-shift">
                                            <div class="float-right">
                                                <a href="javascript:void(0)" class="inline-link template-vars-link"><i class="icon16 script"></i><b><i>Шпаргалка</i></b><i class="icon10 darr-tiny"></i></a>
                                            </div>
                                            <div class="clear-both"></div>
                                        </div>
                                        <div class="hidden template-vars-wrapper">
                                            <?php /*  Call merged included template "./SettingsOrderStatesActionTemplateHelp.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./SettingsOrderStatesActionTemplateHelp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '3352720665c9cceeb41b520-09322738');
content_5c9cceeb52b0d8_53664371($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./SettingsOrderStatesActionTemplateHelp.html" */?>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    <?php }?>

                    <div class="value no-shift">
                        <a href="#" class="inline-link" id="s-add-action">
                            <i class="icon16 add"></i><b><i>Добавить новое действие</i></b>
                        </a>
                    </div>
                </div>
              </div>

              <div class="field-group">
                <div class="field">
                    <div class="value">
                        <input type="submit" class="button green" value="Сохранить"  id="s-settings-order-states-submit">
                        <i class="icon16 loading" style="display:none;"></i>
                        <i class="icon16 yes" style="display:none;"></i>
                        <i class="icon16 no" style="display:none;"></i>
                    </div>
                </div>
              </div>
              <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

            </form>
        </div>
    </div>
    <div class="clear"></div>
</div>
<script type="text/javascript">
    $.wa.locale = $.extend($.wa.locale || {}, {
        "Order action will be deleted. Are you sure?": "Действие будет удалено. Вы уверены?"
    });
    document.title = "Статусы заказов — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    $.settings.orderStatesInit({
        id: "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
",
        edit_actions_map: <?php echo json_encode($_smarty_tpl->tpl_vars['edit_actions_map']->value);?>

    });
</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-28 16:40:59
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/settings/SettingsOrderStatesActionTemplateHelp.html" */ ?>
<?php if ($_valid && !is_callable('content_5c9cceeb52b0d8_53664371')) {function content_5c9cceeb52b0d8_53664371($_smarty_tpl) {?><div class="block s-cheatsheet">
    <div class="fields">
        
        <!-- ORDER -->
        <div class="field">
            <div class="name bold">
                &#123;$order&#125;
            </div>
            <div class="value no-shift">
                Массив с информацией о заказе
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.id&#125;
            </div>
            <div class="value no-shift">
                Номер заказа
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.currency&#125;
            </div>
            <div class="value no-shift">
                Валюта заказа (ISO3-код)
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.items&#125;
            </div>
            <div class="value no-shift">
                Массив с информацией о заказанных товарах
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name" style="padding-left: 32px;">
                &#123;$order.items[].price&#125;
            </div>
            <div class="value no-shift">
                Цена товара
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name" style="padding-left: 32px;">
                &#123;$order.items[].quantity&#125;
            </div>
            <div class="value no-shift">
                Количество заказанных единиц
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name" style="padding-left: 32px;">
                &#123;$order.items[].download_link&#125;
            </div>
            <div class="value no-shift">
                Ссылка на файл цифрового товара (для артикула)
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.discount&#125;
            </div>
            <div class="value no-shift">
                Размер скидки (в валюте заказа)
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.tax&#125;
            </div>
            <div class="value no-shift">
                Размер налога (в валюте заказа)
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.shipping&#125;
            </div>
            <div class="value no-shift">
                Стоимость доставки (в валюте заказа)
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.total&#125;
            </div>
            <div class="value no-shift">
                Итого (в валюте заказа)
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.comment&#125;
            </div>
            <div class="value no-shift">
                Комментарий покупателя к заказу
            </div>
        </div>

        <!-- ORDER.PARAMS -->
        <div class="field">
            <div class="name bold">
                &#123;$order.params&#125;
            </div>
            <div class="value no-shift">
                Массив с дополнительными параметрами заказа
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.shipping_name&#125;
            </div>
            <div class="value no-shift">
                Название выбранного способа доставки
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.shipping_description&#125;
            </div>
            <div class="value no-shift">
                Описание выбранного способа доставки
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.payment_name&#125;
            </div>
            <div class="value no-shift">
                Название выбранного способа оплаты
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.payment_description&#125;
            </div>
            <div class="value no-shift">
                Описание выбранного способа оплаты
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.auth_pin&#125;
            </div>
            <div class="value no-shift">
                4-символьный цифровой код доступа к информационной странице (только для незарегистрированных покупателей)
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.storefront&#125;
            </div>
            <div class="value no-shift">
                Домен и путь к витрине Shop-Script, на которой был оформлен заказ
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.ip&#125;
            </div>
            <div class="value no-shift">
                IP-адрес покупателя на момент формирования заказа
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.user_agent&#125;
            </div>
            <div class="value no-shift">
                Значение «User-Agent» покупателя на момент создания заказа
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.<br>shipping_est_delivery&#125;
            </div>
            <div class="value no-shift">
                Строка с информацией о приблизительном времени доставки (если определена)
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params.tracking_number&#125;
            </div>
            <div class="value no-shift">
                Идентификатор доставки заказа (если определен)
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$order.params. … &#125;
            </div>
            <div class="value no-shift">
                Список параметров заказа может быть различным в зависимости от настроек обработки заказов и их статусов.
            </div>
        </div>

        <!-- CUSTOMER -->
        <div class="field">
            <div class="name bold">
                &#123;$customer&#125;
            </div>
            <div class="value no-shift">
                Массив информации о покупателе
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$customer.name&#125;
            </div>
            <div class="value no-shift">
                Полное имя покупателя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$customer.firstname&#125;
            </div>
            <div class="value no-shift">
                Имя покупателя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$customer.lastname&#125;
            </div>
            <div class="value no-shift">
                Фамилия покупателя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$customer->get('email', 'default')&#125;
            </div>
            <div class="value no-shift">
                Email-адрес покупателя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$customer->get('phone', 'default')&#125;
            </div>
            <div class="value no-shift">
                Номер телефона покупателя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$customer. … &#125;
            </div>
            <div class="value no-shift">
                Список доступных полей контакта определяется в бекенде магазина: «Настройки &rarr; Оформление заказа &rarr; Контактная информация».
            </div>
        </div>

        <!-- USER -->
        <div class="field">
            <div class="name bold">
                &#123;$user&#125;
            </div>
            <div class="value no-shift">
                Массив данных пользователя бекенда (менеджера), который отправляет сообщение
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$user.name&#125;
            </div>
            <div class="value no-shift">
                Полное имя пользователя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$user.firstname&#125;
            </div>
            <div class="value no-shift">
                Имя пользователя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$user.lastname&#125;
            </div>
            <div class="value no-shift">
                Фамилия пользователя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$user->get('email', 'default')&#125;
            </div>
            <div class="value no-shift">
                Email пользователя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$user->get('phone', 'default')&#125;
            </div>
            <div class="value no-shift">
                Телефон пользователя
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$user. … &#125;
            </div>
            <div class="value no-shift">
                Список доступных полей контакта определяется в бекенде магазина: «Настройки &rarr; Оформление заказа &rarr; Контактная информация».
            </div>
        </div>
        
        <!-- SHOP SETTINGS -->
        <div class="field">
            <div class="name bold">
                &#123;$wa->shop->settings('name')&#125;
            </div>
            <div class="value no-shift">
                Название магазина, заданное в общих настройках
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$wa->shop->settings('phone')&#125;
            </div>
            <div class="value no-shift">
                Номер телефона магазина
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$wa->shop->settings('email')&#125;
            </div>
            <div class="value no-shift">
                Основной email магазина
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$workhour_days&#125;
            </div>
            <div class="value no-shift">
                Дни работы магазина, например, Пн—Пт
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$workhour_from&#125;
            </div>
            <div class="value no-shift">
                Начало рабочего дня, например, 10:00
            </div>
        </div>
        <div class="field s-sub-field">
            <div class="name">
                &#123;$workhour_to&#125;
            </div>
            <div class="value no-shift">
                Конец рабочего дня, например, 19:00
            </div>
        </div>

    </div>
    <div class="clear-both"></div>
</div>
<?php }} ?>