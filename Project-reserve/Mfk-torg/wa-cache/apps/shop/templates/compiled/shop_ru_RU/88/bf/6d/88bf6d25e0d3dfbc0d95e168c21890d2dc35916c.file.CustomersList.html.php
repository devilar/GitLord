<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 22:38:06
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/CustomersList.html" */ ?>
<?php /*%%SmartyHeaderCode:4111933525c880a9ec069e8-33585790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88bf6d25e0d3dfbc0d95e168c21890d2dc35916c' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/CustomersList.html',
      1 => 1551193711,
      2 => 'file',
    ),
    'fd38f53d03ba35a55036491c9c35d7a3ebc04665' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/include.top_fields.html',
      1 => 1551193711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4111933525c880a9ec069e8-33585790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'query' => 0,
    'category_id' => 0,
    'filter_id' => 0,
    'customers' => 0,
    'c' => 0,
    'cc' => 0,
    'wa' => 0,
    'wa_url' => 0,
    'offset' => 0,
    'count' => 0,
    'total_count' => 0,
    'in_lazy_process' => 0,
    'customers_list' => 0,
    'lazy_load_block' => 0,
    'backend_customers_list' => 0,
    '_' => 0,
    'title' => 0,
    'cols' => 0,
    'col_id' => 0,
    'col_name' => 0,
    'order' => 0,
    'hash_start' => 0,
    'lazy_loading_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c880a9ed1d880_07426747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c880a9ed1d880_07426747')) {function content_5c880a9ed1d880_07426747($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_wa_date')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/modifier.wa_date.php';
?><?php $_smarty_tpl->tpl_vars['query'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['query']->value)===null||$tmp==='' ? '' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['category_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['category_id']->value)===null||$tmp==='' ? null : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['filter_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter_id']->value)===null||$tmp==='' ? null : $tmp), null, 0);?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', "customers_list", null); ob_start(); ?>
    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
        <tr class="s-customer" data-customer-id="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
            <td class="min-width valign-top s-userpic">
                <a href="#/id/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['photo'], ENT_QUOTES, 'UTF-8', true);?>
" class="userpic"></a>
            </td>
            <td class="align-left">
                <h3 class="large name">
                    <a href="#/id/<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php  $_smarty_tpl->tpl_vars['cc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc']->key => $_smarty_tpl->tpl_vars['cc']->value){
$_smarty_tpl->tpl_vars['cc']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['cc']->value['icon']){?>
                                <?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->icon16($_smarty_tpl->tpl_vars['cc']->value['icon']);?>

                            <?php }?>
                        <?php } ?>
                    </a>
                </h3>

                <?php /*  Call merged included template "./include.top_fields.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./include.top_fields.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('top'=>$_smarty_tpl->tpl_vars['c']->value['top'],'similar_contacts'=>$_smarty_tpl->tpl_vars['c']->value['similar_contacts'],'need_other_values'=>false), 0, '4111933525c880a9ec069e8-33585790');
content_5c880a9ec551d7_06262500($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./include.top_fields.html" */?>

                <p>
                    <?php if (!empty($_smarty_tpl->tpl_vars['c']->value['address']['country'])){?>
                        <i class="icon16 country" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/img/country/<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['c']->value['address']['country']), ENT_QUOTES, 'UTF-8', true);?>
.gif');"></i>
                    <?php }?>
                    <?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['c']->value['address']['city']), ENT_QUOTES, 'UTF-8', true);?>
<?php if (!empty($_smarty_tpl->tpl_vars['c']->value['address']['city'])&&!empty($_smarty_tpl->tpl_vars['c']->value['address']['region'])){?>,<?php }?>
                    <?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['c']->value['address']['region_formatted'],ifset($_smarty_tpl->tpl_vars['c']->value['address']['region'],'')), ENT_QUOTES, 'UTF-8', true);?>

                    <span class="hint"><?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['c']->value['address']['zip']), ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars(ifset($_smarty_tpl->tpl_vars['c']->value['address']['street']), ENT_QUOTES, 'UTF-8', true);?>
</span>
                </p>
            </td>
            <td><?php echo waCurrency::format('%0{h}',$_smarty_tpl->tpl_vars['c']->value['total_spent'],$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['c']->value['affiliate_bonus']>=0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['c']->value['affiliate_bonus'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['c']->value['number_of_orders'];?>
</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['c']->value['last_order_id']){?>
                    <a href="?action=orders#/order/<?php echo $_smarty_tpl->tpl_vars['c']->value['last_order_id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['wa']->value->shop->orderId($_smarty_tpl->tpl_vars['c']->value['last_order_id']);?>
</a>
                    <span class="hint"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['c']->value['last_order_datetime'],"humandate");?>
</span>
                <?php }else{ ?>
                    <span class="hint">&mdash;</span>
                <?php }?>
            </td>
            <td><?php echo smarty_modifier_wa_date($_smarty_tpl->tpl_vars['c']->value['create_datetime']);?>
</td>
        </tr>
    <?php } ?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


<?php $_smarty_tpl->_capture_stack[0][] = array('default', "lazy_load_block", null); ob_start(); ?>
    <div class="block half-padded">
        <br>
        <div class="lazyloading-progress-string"><?php echo _w('%d contact','%d contacts',min($_smarty_tpl->tpl_vars['offset']->value+$_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['total_count']->value));?>
&nbsp;<?php echo sprintf(_w('of %d'),$_smarty_tpl->tpl_vars['total_count']->value);?>
</div><br>
        <a href="javascript:void(0);" class="lazyloading-link" <?php if ($_smarty_tpl->tpl_vars['count']->value>=$_smarty_tpl->tpl_vars['total_count']->value){?>style="display:none;"<?php }?>>Показать еще</a>
        <span class="lazyloading-progress" style="display:none">
            <i class="icon16 loading"></i> Загрузка <span class="lazyloading-chunk"><?php echo _w('%d contact','%d contacts',min($_smarty_tpl->tpl_vars['total_count']->value-$_smarty_tpl->tpl_vars['offset']->value-$_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['count']->value));?>
...</span>
        </span>
    </div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['in_lazy_process']->value){?>

    <div class="block double-padded" id="customers-list-wrapper">
        <table class="zebra s-customers">
            <tbody><?php echo $_smarty_tpl->tpl_vars['customers_list']->value;?>
</tbody>
        </table>
        <?php echo $_smarty_tpl->tpl_vars['lazy_load_block']->value;?>

    </div>

<?php }else{ ?>

    <div class="block double-padded" id="customers-list-wrapper">

        <div class="float-right" id="s-customers-list-menu">
            <ul class="menu-h">
                <?php if ($_smarty_tpl->tpl_vars['category_id']->value){?>
                    <li><a href="#/editcategory/<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
"><i class="icon16 edit"></i>Редактировать категорию</a></li>
                    <li><a href="javascript:void(0)" id="delete-category"><i class="icon16 delete"></i>Удалить</a></li>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['query']->value){?>
                    <li>
                        <a href="javascript:void(0);" id="s-customers-add-filter" class="inline-link"><i class="icon16 add"></i><b><i>Сохранить фильтр</i></b></a>
                    </li>
                    <li>
                        <a href="#/searchform/<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
/"><i class="icon16 edit-bw"></i>Изменить условия поиска</a>
                    </li>
                <?php }elseif($_smarty_tpl->tpl_vars['filter_id']->value){?>
                    <li>
                        <a href="javascript:void(0);" id="s-customers-edit-filter" class="inline-link"><i class="icon16 edit"></i><b><i>Редактировать фильтр</i></b></a>
                    </li>
                <?php }?>

                <!-- plugin hook: 'backend_customers_list.top_li' -->
                
                <?php if (!empty($_smarty_tpl->tpl_vars['backend_customers_list']->value)){?><?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_customers_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php if ((!empty($_smarty_tpl->tpl_vars['_']->value['top_li']))){?><li><?php echo $_smarty_tpl->tpl_vars['_']->value['top_li'];?>
</li><?php }?><?php } ?><?php }?>
            </ul>
        </div>

        <h1 class="s-header">
            <span class="s-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
        </h1>

        <?php if ($_smarty_tpl->tpl_vars['query']->value||$_smarty_tpl->tpl_vars['filter_id']->value){?>
            <?php echo $_smarty_tpl->getSubTemplate ("./include.filterSettings.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['customers']->value)){?>
            <table class="zebra s-customers">
                <thead><tr>
                    <th class="min-width"></th>
                    <?php  $_smarty_tpl->tpl_vars['col_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['col_name']->_loop = false;
 $_smarty_tpl->tpl_vars['col_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cols']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['col_name']->key => $_smarty_tpl->tpl_vars['col_name']->value){
$_smarty_tpl->tpl_vars['col_name']->_loop = true;
 $_smarty_tpl->tpl_vars['col_id']->value = $_smarty_tpl->tpl_vars['col_name']->key;
?>
                        <th<?php if ($_smarty_tpl->tpl_vars['col_id']->value=='name'){?> class="align-left"<?php }?>>
                            <a href="javascript:void(0)" class="sort-link" rel="<?php echo $_smarty_tpl->tpl_vars['col_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['col_name']->value;?>
</a>
                        </th>
                    <?php } ?>
                </tr></thead>
                <tbody><?php echo $_smarty_tpl->tpl_vars['customers_list']->value;?>
</tbody>
            </table>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['lazy_load_block']->value;?>


    </div>



    <script>(function() { "use strict";

        // Set up breadcrumbs
        $.customers.lastView = {
            title: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
",
            hash: $.customers.getHash()
        };
        $.storage.set('shop/customers/lastview', $.customers.lastView);

        // Sort links
        (function() {
            var a = $('.sort-link[rel="<?php echo htmlspecialchars(trim($_smarty_tpl->tpl_vars['order']->value,"!"), ENT_QUOTES, 'UTF-8', true);?>
"]');
            if (!a.length) {
                a = $('.sort-link[rel="name"]');
            }
            if ('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value, ENT_QUOTES, 'UTF-8', true);?>
' === '!'+a.attr('rel')) {
                a.append('<i class="icon10 darr-tiny"></i>');
            } else {
                a.append('<i class="icon10 uarr-tiny"></i>');
            }
            $('.sort-link').click(function() {
                var order = $(this).attr('rel');
                if (order == 'name') {
                    // First click sorts in ascending order
                    if (order == '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value, ENT_QUOTES, 'UTF-8', true);?>
') {
                        order = '!'+order;
                    }
                } else {
                    // First click sorts in descending order
                    if ('!'+order != '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value, ENT_QUOTES, 'UTF-8', true);?>
') {
                        order = '!'+order;
                    }
                }
                $.storage.set('shop/customers/sort_order', order);
                window.location.hash = '<?php echo $_smarty_tpl->tpl_vars['hash_start']->value;?>
'+order;
            });
        })();

        // Drag-and-drop customers into categories
        var draggable_params = {
            distance: 5,
            opacity: 0.75,
            handle: '.s-userpic img, .name',
            helper: function(event) {
                var cloned_tr = $(event.target).closest('tr').clone();
                cloned_tr.children().each(function() { $(this).width($(this).width()); });
                cloned_tr.children().slice(2).remove();
                return $('<div><table></table></div>').find('table').append(cloned_tr).end();
            }
        };

        $('#customers-list-wrapper table.s-customers tbody tr.s-customer').draggable(draggable_params);

        <?php if ($_smarty_tpl->tpl_vars['category_id']->value){?>
            // Update list count in sidebar
            $('#s-sidebar li[data-category-id="<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
"] .count').html('<?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
');

            // Delete category link
            $('#delete-category').click(function() {
                if (!confirm("Будет удалена категория покупателей (покупатели удалены не будут). Продолжить?")) {
                    return;
                }
                $('#s-sidebar li[data-category-id="<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
"]').remove();
                $.post('?module=customers&action=categoryEditor', { id: '<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
', 'delete': 1 });
                $('#s-content').html('<div class="triple-padded block">'+"Категория удалена."+'</div>');
            });
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['query']->value||$_smarty_tpl->tpl_vars['filter_id']->value){?>
            $('#s-customers-add-filter, #s-customers-edit-filter').click(function() {
                var header = $('#customers-list-wrapper').find('.s-header').hide();
                var menu = $('#s-customers-list-menu').hide();
                var hide = function() {
                    fs_block.slideUp(function() {
                        header.show();
                        menu.show();
                    });
                };
                var fs_block = $("#s-filter-settings");
                fs_block.slideDown(function() {
                    fs_block
                        .trigger('init')
                        .find('.cancel').click(function() {
                            hide();
                            return false;
                        }).end().bind('afterSubmit', function(e, r) {
                            hide();
                            if (r.status === 'ok') {
                                header.find('.s-title').text(r.data.filter.name);
                                if (!r.data.filter_id) {
                                    $.wa.setHash('#/filter/' + r.data.filter.id + '/');
                                } else {
                                    $.customers.redispatch();
                                }
                            }
                            return false;
                        });

                    // fix system region select !!feature!!
                    var region_select = fs_block.find('[name="contact_info.address[region]"]');
                    var val = region_select.data('val');
                    if (val) {
                        region_select.find('option[value="' + val + '"]').attr('selected', true);
                    }

                });

            });
        <?php }?>

        $.customers.initLazyLoad({
            url: '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['lazy_loading_url']->value)===null||$tmp==='' ? '' : $tmp);?>
',
            container: '#customers-list-wrapper',
            total_count: <?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
,
            count: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
,
            auto: true
        });

    })();</script>

<?php }?>

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 22:38:06
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/include.top_fields.html" */ ?>
<?php if ($_valid && !is_callable('content_5c880a9ec551d7_06262500')) {function content_5c880a9ec551d7_06262500($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['need_other_values'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['need_other_values']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['top']->value){?>

    <?php $_smarty_tpl->tpl_vars['customers_rights'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->userRights('customers'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars['_has_hidden_fields'] = new Smarty_variable(false, null, 0);?>

    <div class="s-customer-fields-section" id="js-customer-fields-section">
        <ul class="menu-v with-icons compact s-customer-top-field-list">
            <?php  $_smarty_tpl->tpl_vars['top_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top_field']->key => $_smarty_tpl->tpl_vars['top_field']->value){
$_smarty_tpl->tpl_vars['top_field']->_loop = true;
?>
                <li class="s-customer-top-field-default-value-item">
                    <?php if ($_smarty_tpl->tpl_vars['top_field']->value['id']!=='im'){?>
                        <i class="icon16 <?php echo $_smarty_tpl->tpl_vars['top_field']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['top_field']->value['is_confirmed']){?>-confirmed ss<?php }?>" <?php if ($_smarty_tpl->tpl_vars['top_field']->value['is_confirmed']){?>title="Подтвержден"<?php }?> />
                    <?php }?>

                    <?php echo $_smarty_tpl->tpl_vars['top_field']->value['default_value'];?>


                    <?php if ($_smarty_tpl->tpl_vars['top_field']->value['id']=='email'&&!empty($_smarty_tpl->tpl_vars['similar_contacts']->value['email']['count'])){?>
                        <span class="similar hint">
                            <span class="similar-hull">
                                <?php if ($_smarty_tpl->tpl_vars['customers_rights']->value){?><a href="?action=customers#/search/email=<?php echo urlencode($_smarty_tpl->tpl_vars['similar_contacts']->value['email']['value']);?>
" class="nowrap"><?php }?><i class="icon10 exclamation"></i><?php echo _w('%d more customer found with the same email address','%d more customers found with the same email address',$_smarty_tpl->tpl_vars['similar_contacts']->value['email']['count']);?>
<?php if ($_smarty_tpl->tpl_vars['customers_rights']->value){?></a><?php }?>
                            </span>
                            <span class="similar-short" title="Количество покупателей с таким же email-адресом">
                                <?php if ($_smarty_tpl->tpl_vars['customers_rights']->value){?><a href="?action=customers#/search/email=<?php echo urlencode($_smarty_tpl->tpl_vars['similar_contacts']->value['email']['value']);?>
" class="nowrap"><?php }?><i class="icon10 exclamation"></i><?php echo $_smarty_tpl->tpl_vars['similar_contacts']->value['email']['count'];?>
<?php if ($_smarty_tpl->tpl_vars['customers_rights']->value){?></a><?php }?>
                            </span>
                         </span>

                    <?php }elseif($_smarty_tpl->tpl_vars['top_field']->value['id']=='phone'&&!empty($_smarty_tpl->tpl_vars['similar_contacts']->value['phone']['count'])){?>
                        <span class="similar hint">
                            <span class="similar-hull">
                                <?php if ($_smarty_tpl->tpl_vars['customers_rights']->value){?><a href="?action=customers#/search/phone=<?php echo urlencode($_smarty_tpl->tpl_vars['similar_contacts']->value['phone']['value']);?>
" class="nowrap"><?php }?><i class="icon10 exclamation"></i><?php echo _w('%d more customer found with the same phone number','%d more customers found with the same phone number',$_smarty_tpl->tpl_vars['similar_contacts']->value['phone']['count']);?>
<?php if ($_smarty_tpl->tpl_vars['customers_rights']->value){?></a><?php }?>
                            </span>
                            <span class="similar-short" title="Количество покупателей с таким же номером телефона">
                                <?php if ($_smarty_tpl->tpl_vars['customers_rights']->value){?><a href="?action=customers#/search/phone=<?php echo urlencode($_smarty_tpl->tpl_vars['similar_contacts']->value['phone']['value']);?>
" class="nowrap"><?php }?><i class="icon10 exclamation"></i><?php echo $_smarty_tpl->tpl_vars['similar_contacts']->value['phone']['count'];?>
<?php if ($_smarty_tpl->tpl_vars['customers_rights']->value){?></a><?php }?>
                            </span>
                        </span>
                    <?php }?>
                </li>
            <?php } ?>

            <?php if ($_smarty_tpl->tpl_vars['need_other_values']->value){?>
                <?php  $_smarty_tpl->tpl_vars['top_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top_field']->key => $_smarty_tpl->tpl_vars['top_field']->value){
$_smarty_tpl->tpl_vars['top_field']->_loop = true;
?>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_field']->value['other_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <?php if (empty($_smarty_tpl->tpl_vars['_has_hidden_fields']->value)){?><?php $_smarty_tpl->tpl_vars['_has_hidden_fields'] = new Smarty_variable(true, null, 0);?><?php }?>

                        <li class="s-customer-top-field-other-value-item" style="display: none;">

                            <?php if ($_smarty_tpl->tpl_vars['top_field']->value['id']!=='im'){?>
                                <i class="icon16 <?php echo $_smarty_tpl->tpl_vars['top_field']->value['id'];?>
" />
                            <?php }?>

                            <?php echo $_smarty_tpl->tpl_vars['v']->value;?>

                        </li>
                    <?php } ?>
                <?php } ?>
            <?php }?>
        </ul>

        <?php if (!empty($_smarty_tpl->tpl_vars['_has_hidden_fields']->value)){?>
            <div class="s-fields-toggle">
                <a class="inline-link js-toggle-button" href="javascript:void(0);">
                    <i class="svg-icon size-10 arrow-toggle" style="padding: 0 7px 0 5px;">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 5">
                            <polyline style="fill:none; stroke: currentColor; stroke-linecap:round; stroke-linejoin:round;" points="0.5 0.5 4.5 4.5 8.5 0.5"/>
                        </svg>
                    </i>
                    <b><i>Больше контактных данных</i></b>
                </a>

                <script>
                    ( function($) {
                        var $wrapper = $("#js-customer-fields-section").removeAttr("id");
                        $wrapper.on("click", ".js-toggle-button", function(event) {
                            event.preventDefault();
                            $(this).closest(".s-fields-toggle").hide();
                            $wrapper.find(".s-customer-top-field-other-value-item").show();
                        });
                    })(jQuery);
                </script>
            </div>
        <?php }?>
    </div>
<?php }?>
<?php }} ?>