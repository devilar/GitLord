<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 22:38:06
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/CustomersSearchForm.html" */ ?>
<?php /*%%SmartyHeaderCode:3750580125c880a9eddf013-21561553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25fb419c3b61db4ea6221282400fc7311b16b372' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/CustomersSearchForm.html',
      1 => 1548948065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3750580125c880a9eddf013-21561553',
  'function' => 
  array (
    'select' => 
    array (
      'parameter' => 
      array (
        'n' => '',
        'o' => 
        array (
        ),
        'd' => '',
        'with_empty' => true,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'n' => 0,
    'with_empty' => 0,
    'o' => 0,
    'e' => 0,
    'v' => 0,
    'd' => 0,
    'hash' => 0,
    'primary_currency' => 0,
    'payment_methods' => 0,
    'shipping_methods' => 0,
    'coupons' => 0,
    'product_name' => 0,
    'referers' => 0,
    'storefronts' => 0,
    'utm_campagns' => 0,
    'address_fields' => 0,
    'field' => 0,
    'wa' => 0,
    'container_id' => 0,
    'fields' => 0,
    'buttons' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c880a9ee9efe2_69300897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c880a9ee9efe2_69300897')) {function content_5c880a9ee9efe2_69300897($_smarty_tpl) {?><style>
    span.field { display: block; }
    span.field > span { display: block; }
    .s-clear-radio { display: none; }
</style>

<?php if (!function_exists('smarty_template_function_select')) {
    function smarty_template_function_select($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['select']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
    <select name=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['n']->value)===null||$tmp==='' ? '' : $tmp);?>
>
        <?php if ($_smarty_tpl->tpl_vars['with_empty']->value){?>
            <option value=""></option>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['o']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['e']->value['id'])){?><?php $_smarty_tpl->tpl_vars['v'] = new Smarty_variable($_smarty_tpl->tpl_vars['e']->value['id'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['v'] = new Smarty_variable($_smarty_tpl->tpl_vars['e']->value, null, 0);?><?php }?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['d']->value){?>selected="selected"<?php }?>>
                <?php if (isset($_smarty_tpl->tpl_vars['e']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
<?php }?>
            </option>
        <?php } ?>
    </select>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php $_smarty_tpl->_capture_stack[0][] = array('default', "buttons", null); ob_start(); ?>
    <div class="field buttons">
        <div class="value submit">
            <input type="submit" class="button green s-ignored" value="Поиск">
        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', "fields", null); ob_start(); ?>
    <div class="fields form">
        <div class="field-group">
            <div class="field">
                <div class="name">
                    Сумма заказов
                </div>
                <div class="value">

                    <?php if (isset($_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum'])){?>
                        от <input name="app.orders_total_sum.from" value="<?php if (isset($_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['val'])){?><?php if (is_array($_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['val'])){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['val'][0])===null||$tmp==='' ? '' : $tmp);?>
<?php }elseif(($_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['op']=='>=')){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['val'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?><?php }?>" type="text" class="numerical short s-total-spent-from" placeholder="0">
                        до <input name="app.orders_total_sum.to" value="<?php if (isset($_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['val'])){?><?php if (is_array($_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['val'])){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['val'][1])===null||$tmp==='' ? '' : $tmp);?>
<?php }elseif(($_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['op']=='<=')){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum']['val'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?><?php }?>" type="text" class="numerical short s-total-spent-to" placeholder="&infin;">
                    <?php }else{ ?>
                        от <input name="app.total_spent.from" value="<?php if (isset($_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['val'])){?><?php if (is_array($_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['val'])){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['val'][0])===null||$tmp==='' ? '' : $tmp);?>
<?php }elseif(($_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['op']=='>=')){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['val'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?><?php }?>" type="text" class="numerical short s-total-spent-from" placeholder="0">
                        до <input name="app.total_spent.to" value="<?php if (isset($_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['val'])){?><?php if (is_array($_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['val'])){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['val'][1])===null||$tmp==='' ? '' : $tmp);?>
<?php }elseif(($_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['op']=='<=')){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['total_spent']['val'])===null||$tmp==='' ? '' : $tmp);?>
<?php }?><?php }?>" type="text" class="numerical short s-total-spent-to" placeholder="&infin;">
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['primary_currency']->value;?>

                </div>
                <div class="value small">
                    <label>
                        <input type="checkbox" <?php if (!isset($_smarty_tpl->tpl_vars['hash']->value['app']['orders_total_sum'])){?>checked="checked"<?php }?> class="s-customer-only-paid-orders"> Учитывать только оплаченные заказы
                    </label>
                </div>
            </div>
            <div class="field">
                <div class="name">
                    Количество заказов
                </div>
                <div class="value">

                    <?php smarty_template_function_select($_smarty_tpl,array('n'=>"app.number_of_orders.op",'o'=>array('>=','<='),'d'=>(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['number_of_orders']['op'])===null||$tmp==='' ? '' : $tmp),'with_empty'=>false));?>

                    <input name="app.number_of_orders.val" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['number_of_orders']['val'])===null||$tmp==='' ? '' : $tmp);?>
" class="numerical short" placeholder="0">
                </div>
            </div>

            <div class="field">
                <div class="name">
                    Последний заказ
                </div>
                <div class="value no-shift">
                    <?php $_smarty_tpl->_capture_stack[0][] = array("_last_order_options", null, null); ob_start(); ?>
                        <select name="app.last_order_datetime" data-op="<=" id="s-customers-order-datetime-select">
                            <option></option>
                            <option value="-30d" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['last_order_datetime']['val'])===null||$tmp==='' ? '' : $tmp)=='-30d'){?>selected="selected"<?php }?>>30 дней</option>
                            <option value="-90d" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['last_order_datetime']['val'])===null||$tmp==='' ? '' : $tmp)=='-90d'){?>selected="selected"<?php }?>>90 дней</option>
                            <option value="-180d" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['last_order_datetime']['val'])===null||$tmp==='' ? '' : $tmp)=='-180d'){?>selected="selected"<?php }?>>180 дней</option>
                            <option value="-365d" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['last_order_datetime']['val'])===null||$tmp==='' ? '' : $tmp)=='-365d'){?>selected="selected"<?php }?>>365 дней</option>
                            <option value=":enter_date" <?php if (shopCustomersCollectionPreparator::isDate((($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['last_order_datetime']['val'])===null||$tmp==='' ? array() : $tmp))){?>selected="selected"<?php }?>>Ввести дату...</option>
                        </select>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                    <?php echo sprintf('<span>Более %s назад</span>',Smarty::$_smarty_vars['capture']['_last_order_options']);?>

                    <div id="s-customers-last-order-period" class="hidden">
                        <input type="text" class="s-customer-datepicker" name="app.last_order_datetime.val" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['last_order_datetime']['val'])===null||$tmp==='' ? '' : $tmp);?>
">
                        <?php smarty_template_function_select($_smarty_tpl,array('n'=>'app.last_order_datetime.op','o'=>array(array('id'=>'<=','name'=>_w('or earlier')),array('id'=>'>=','name'=>_w('or later'))),'d'=>(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['last_order_datetime']['op'])===null||$tmp==='' ? '' : $tmp),'with_empty'=>false));?>

                    </div>
                </div>
            </div>
            <div class="field">
                <div class="name">
                    Первый заказ
                </div>
                <div class="value">
                    <input type="text" class="s-customer-datepicker" name="app.first_order_datetime.val" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['first_order_datetime']['val'])===null||$tmp==='' ? '' : $tmp);?>
">
                    <?php smarty_template_function_select($_smarty_tpl,array('n'=>'app.first_order_datetime.op','o'=>array(array('id'=>'<=','name'=>_w('or earlier')),array('id'=>'>=','name'=>_w('or later'))),'d'=>(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['first_order_datetime']['op'])===null||$tmp==='' ? '' : $tmp),'with_empty'=>false));?>

                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['payment_methods']->value){?>
                <div class="field">
                    <div class="name">
                        Оплата
                    </div>
                    <div class="value no-shift">
                        <?php smarty_template_function_select($_smarty_tpl,array('n'=>'app.payment_method','o'=>$_smarty_tpl->tpl_vars['payment_methods']->value,'d'=>(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['payment_method']['val'])===null||$tmp==='' ? '' : $tmp)));?>

                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['shipping_methods']->value){?>
                <div class="field">
                    <div class="name">
                        Доставка
                    </div>
                    <div class="value no-shift">
                        <?php smarty_template_function_select($_smarty_tpl,array('n'=>'app.shipment_method','o'=>$_smarty_tpl->tpl_vars['shipping_methods']->value,'d'=>(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['shipment_method']['val'])===null||$tmp==='' ? '' : $tmp)));?>

                    </div>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['coupons']->value){?>
                <div class="field">
                    <div class="name">
                        Применили код купона
                    </div>
                    <div class="value no-shift">
                        <?php smarty_template_function_select($_smarty_tpl,array('n'=>"app.coupon",'o'=>$_smarty_tpl->tpl_vars['coupons']->value,'d'=>(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['coupon']['val'])===null||$tmp==='' ? '' : $tmp)));?>

                    </div>
                </div>
            <?php }?>
        </div>

        <h5 class="heading">
            Покупки
        </h5>
        <div class="field-group">

            <div class="field">
                <div class="name">Купили товар</div>
                <div class="value">
                    <input type="text" value="<?php if ((($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['product']['val'])===null||$tmp==='' ? '' : $tmp)&&!is_numeric((($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['product']['val'])===null||$tmp==='' ? '' : $tmp))){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['product']['val'])===null||$tmp==='' ? '' : $tmp);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
<?php }?>" placeholder="Начните печатать название товара или артикула" class="long"  id="s-customer-product" data-enter-ignore="1">
                    <input type="hidden" name="app.product" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['product']['val'])===null||$tmp==='' ? '' : $tmp);?>
" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['product']['val'])===null||$tmp==='' ? '' : $tmp)&&is_numeric((($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['product']['val'])===null||$tmp==='' ? '' : $tmp))){?>data-op="="<?php }else{ ?>data-op="*="<?php }?>>
                </div>
            </div>
            <div class="field">
                <div class="name">
                    Время покупки
                </div>
                <div class="value">
                    <div data-name="app.order_datetime" class="s-customer-period" data-op="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['order_datetime']['op'])===null||$tmp==='' ? '' : $tmp);?>
" data-val="<?php echo implode('--',(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['order_datetime']['val'])===null||$tmp==='' ? array() : $tmp));?>
"></div>
                </div>
            </div>

        </div>

        <h5 class="heading">
            Информация о клиенте
        </h5>
        <div class="field-group">
            <div class="field">
                <div class="name">Источник</div>
                <div class="value no-shift">
                    <?php smarty_template_function_select($_smarty_tpl,array('n'=>"app.referer",'o'=>$_smarty_tpl->tpl_vars['referers']->value,'d'=>(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['referer']['val'])===null||$tmp==='' ? '' : $tmp)));?>

                </div>
            </div>
            <div class="field">
                <div class="name">
                    Витрина
                </div>
                <div class="value no-shift">
                    <?php smarty_template_function_select($_smarty_tpl,array('n'=>"app.storefront",'o'=>$_smarty_tpl->tpl_vars['storefronts']->value,'d'=>(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['storefront']['val'])===null||$tmp==='' ? '' : $tmp)));?>

                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['utm_campagns']->value){?>
                <div class="field">
                    <div class="name">UTM-кампания</div>
                    <div class="value no-shift">
                        <?php smarty_template_function_select($_smarty_tpl,array('n'=>"app.utm_campaign",'o'=>$_smarty_tpl->tpl_vars['utm_campagns']->value,'d'=>(($tmp = @$_smarty_tpl->tpl_vars['hash']->value['app']['utm_campaign']['val'])===null||$tmp==='' ? '' : $tmp)));?>

                    </div>
                </div>
            <?php }?>
            <div class="field">
                <div class="name">
                    Адрес
                </div>
                <div class="value">
                    <p>
                        <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                            <span class="field">
                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                <?php echo $_smarty_tpl->tpl_vars['field']->value['html'];?>

                                <?php if ($_smarty_tpl->tpl_vars['field']->value['field_class']==='waContactBranchField'){?>
                                    <a href="javascript:void(0);" class="s-clear-radio hint inline-link"><b><i>очистить</i></b></a>
                                <?php }?>
                            </span>
                        <?php } ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->tpl_vars['container_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->param('container_id','s-customers-search-form'), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['wa']->value->param('just_fields')){?>
    <div class="block double-padded">
        <h1>Новый поиск</h1>
        <div class="s-order-customer-details">
            <form id="<?php echo $_smarty_tpl->tpl_vars['container_id']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['fields']->value;?>

                <?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>

            </form>
        </div>
    </div>
<?php }else{ ?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['container_id']->value;?>
">
        <?php echo $_smarty_tpl->tpl_vars['fields']->value;?>

    </div>
<?php }?>

<script>
    $(function() {
        (function(container) {
            var form = container;
            var buildHash = function() {
                var hash = { };
                $(':input', container).not('[type=submit]').not(':disabled')
                    .each(
                        function() {
                            var item = $(this);
                            if ((item.is(':radio') || item.is(':checkbox')) && !item.attr('checked')) {
                                return;
                            }
                            var value = (item.val() || '').trim();
                            if (!value) {
                                return;
                            }
                            var name = (item.attr('name') || '').trim();
                            name = name.replace('[', '.').replace(']', '');
                            if (!name) {
                                return;
                            }
                            if (name.slice(-3) === '.op') {
                                name = name.slice(0, -3);
                                hash[name] = hash[name] || { };
                                hash[name].op = value;
                                return;
                            } else if (name.slice(-4) === '.val') {
                                name = name.slice(0, -4);
                                hash[name] = hash[name] || { } ;
                                hash[name].val = value;
                            } else if (name.slice(-5) === '.from') {
                                name = name.slice(0, -5);
                                hash[name] = hash[name] || { };
                                hash[name].type = 'range';
                                hash[name].val = hash[name].val || { };
                                hash[name].val.from = value;
                            } else if (name.slice(-3) === '.to') {
                                name = name.slice(0, -3);
                                hash[name] = hash[name] || { };
                                hash[name].type = 'range';
                                hash[name].val = hash[name].val || { };
                                hash[name].val.to = value;
                            } else {
                                var op = '*=';
                                if (item.data('op')) {
                                    op = item.data('op');
                                } else if (item.is('select') || item.is(':radio') || item.is(':checkbox')) {
                                    op = '=';
                                }
                                if (name === 'contact_info.address.region') {
                                    value = (item.data('country') ? (item.data('country')  + ':') : '') + value;
                                }
                                hash[name] = {
                                    op: op, val: value
                                };
                            }
                        });
                var formatRange = function(key, el) {
                    if (el.val.from && el.val.to) {
                        return key + '=' + el.val.from + '--' + el.val.to;
                    }
                    if (el.val.from) {
                        return key + '>=' + el.val.from;
                    }
                    if (el.val.to) {
                        return key + '<=' + el.val.to;
                    }
                    return '';
                };
                var format = function(key, el) {
                    if (el.type === 'range') {
                        return formatRange(key, el);
                    }
                    return key + el.op + el.val;
                };
                var hash_ar = [];
                $.each(hash, function(key, el) {
                    if (el.val) {
                        el.val = format(key, el);
                        el.val = el.val.replace(/\//g, '\\/');// escape
                        hash_ar.push(el.val);
                    }
                });
                return hash_ar.join('&');
            };

            form.submit(function() {
                $.wa.setHash('search/' + buildHash());
                return false;
            })
            .find(':input').keydown(function(e) {
                if (e.keyCode === 13 && $(this).data('enter-ignore')) {
                    return false;
                }
            });

            // for use outside
            (function() {
                var fn = $.fn.getHash;
                $.fn.getHash = function() {
                    if (this.get(0) === container.get(0)) {
                        return buildHash();
                    } else if (typeof fn === 'function') {
                        return fn.call(this, arguments);
                    }
                };
            })();

            $('.s-customer-period', container).each(function() {
                makeChoosePeriodControl($(this));
            });
            $('.s-customer-datepicker', container).datepicker({
                dateFormat: 'yy-mm-dd'
            });

            $('.s-clear-radio', container).each(function() {
                var item = $(this);
                item.closest('.field')
                    .find('label:last').after(this).end()
                    .find(':radio').click(function() {
                        item.show();
                    });
            }).click(function() {
                $(this).hide().closest('.field').find(':radio').attr('checked', false);
                return false;
            });

            (function(selector) {
                var name = selector.attr('name');
                var handler = function() {
                    if (selector.val() === ':enter_date') {
                        $('#s-customers-last-order-period').show().find(':input').attr('disabled', false);
                        selector.attr('name', '').parent().hide();
                    } else {
                        $('#s-customers-last-order-period').hide().find(':input').attr('disabled', true);
                        selector.attr('name', name).parent().show();
                    }
                    return selector;
                };
                handler(selector).change(handler);
            })($('#s-customers-order-datetime-select'));

            (function(toggler) {
                var handler = function() {
                    if (toggler.is(':checked')) {
                        $('.s-total-spent-from').attr('name', 'app.total_spent.from');
                        $('.s-total-spent-to').attr('name', 'app.total_spent.to');
                    } else {
                        $('.s-total-spent-from').attr('name', 'app.orders_total_sum.from');
                        $('.s-total-spent-to').attr('name', 'app.orders_total_sum.to');
                    }
                    return toggler;
                };
                handler(toggler).click(handler);
            })($('.s-customer-only-paid-orders', container));

        })($('#<?php echo $_smarty_tpl->tpl_vars['container_id']->value;?>
'));

        function makeChoosePeriodControl(el)
        {
            var start_input = $('<input class="datepicker" style="width:111px;">');
            var end_input = $('<input class="datepicker" style="width:111px;">');
            var hidden_input = $('<input type="hidden" name="' + el.data('name') + '">');

            var init_val = el.data('val');
            var init_op = el.data('op');
            el.append(start_input).append(' &mdash; ').append(end_input).append(hidden_input);
            if (init_val) {
                init_val = init_val.split('--');
                if (init_val[0]) {
                    if (init_op === '=' || init_op === '>=') {
                        el.find('.datepicker:eq(0)').val(init_val[0]);
                    } else if (init_op === '<=') {
                        el.find('.datepicker:eq(1)').val(init_val[0]);
                    }
                }
                if (init_val[1]) {
                    el.find('.datepicker:eq(1)').val(init_val[1]);
                }
            }
            el.find('.datepicker')
                .change(function() {
                    var range = [];
                    if (start_input.datepicker('getDate')) {
                        range[0] = start_input.val();
                    }
                    if (end_input.datepicker('getDate')) {
                        range[1] = end_input.val();
                    }
                    if (range[0] && range[1]) {
                        hidden_input.data('op', '=').val(range.join('--'));
                    } else if (range[0]) {
                        hidden_input.data('op', '>=').val(range[0]);
                    } else if (range[1]) {
                        hidden_input.data('op', '<=').val(range[1]);
                    } else {
                        hidden_input.val('');
                    }
                })
                .datepicker({
                    dateFormat: 'yy-mm-dd'
                }).change();

        }

        (function(input) {
            var hidden = input.closest('.field').find('[type="hidden"]');
            input.autocomplete({
                source: '?action=autocomplete',
                minLength: 3,
                delay: 300,
                select: function (event, ui) {
                    hidden.data('op', '=').val(ui.item.id);
                }
            }).keypress(function(e) {
                setTimeout(function() {
                    hidden.data('op', '*=').val(input.val());
                }, 150);
            }).keyup(function(e) {
                if (!input.val()) {
                    hidden.data('op', '=').val('');
                }
            });
        })($('#s-customer-product'));

        // datepicker artifact fix
        $('#ui-datepicker-div').hide();

    });
</script>
<?php }} ?>