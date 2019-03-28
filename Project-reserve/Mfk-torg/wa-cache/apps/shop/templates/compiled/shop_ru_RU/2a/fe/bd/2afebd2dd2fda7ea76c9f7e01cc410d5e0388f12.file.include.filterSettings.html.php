<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 22:38:06
         compiled from "/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/include.filterSettings.html" */ ?>
<?php /*%%SmartyHeaderCode:15378473955c880a9ed2a765-43250643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2afebd2dd2fda7ea76c9f7e01cc410d5e0388f12' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-apps/shop/templates/actions/customers/include.filterSettings.html',
      1 => 1543322182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15378473955c880a9ed2a765-43250643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter_id' => 0,
    'filter' => 0,
    'is_admin' => 0,
    'groups' => 0,
    'group_id' => 0,
    'group' => 0,
    'icons' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c880a9ed5e896_35522164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c880a9ed5e896_35522164')) {function content_5c880a9ed5e896_35522164($_smarty_tpl) {?><?php if (!is_callable('smarty_function_wa_action')) include '/home/c/cl36655/public_html/wa-system/vendors/smarty-plugins/function.wa_action.php';
?><div id="s-filter-settings" style="display: none">

    <?php if ($_smarty_tpl->tpl_vars['filter_id']->value){?>
        <div class="float-right block half-padded">
            <ul class="menu-h">
                <li>
                    <a href="javascript:void(0);" id="s-delete-filter"><i class="icon16 delete"></i>Удалить фильтр</a>
                </li>
            </ul>
        </div>
    <?php }?>

    <form action="?module=customers&action=filterSave&id=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['filter']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
" method="post">
        <div class="fields form">
            <div class="field-group">
                <div class="field">
                    <div class="name">
                        Название фильтра
                    </div>
                    <div class="value bold">
                        <input type="text" class="large long" name="filter[name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Название фильтра">
                    </div>
                </div>
                <div class="field">
                    <div class="name">
                        Кому виден
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['is_admin']->value){?>

                        <div class="value no-shift s-ibutton-checkbox">
                            <ul class="menu-h">
                                <li><label for="s-filter-visibility"><span class="s-unselected">Только мне</span></label></li>
                                <li><input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['filter']->value['contact_id']<=0){?> checked="checked"<?php }?> id="s-filter-visibility"></li>
                                <li><label for="s-filter-visibility"><span>Всем пользователям</span></label></li>
                            </ul>
                        </div>

                        <!-- PUBLIC FILTER details -->
                        <div class="value no-shift">
                            <p class="small">
                                Только выбранной группе пользователей:
                                <select name="filter[contact_id]">
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['filter']->value['contact_id']==0){?> selected="selected"<?php }?>>Всем пользователям</option>
                                    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['group_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['group_id']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                                        <option value="-<?php echo $_smarty_tpl->tpl_vars['group_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['filter']->value['contact_id']==-$_smarty_tpl->tpl_vars['group_id']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php } ?>
                                </select>
                            </p>
                        </div>
                    <?php }else{ ?>
                        <div class="value no-shift">
                            Только мне <i class="icon10 lock-bw"></i>
                        </div>
                    <?php }?>
                </div>
                <div class="field">
                    <div class="name">
                        Иконка
                    </div>
                    <div class="value">
                        <ul class="menu-h js-icon-templates s-filter-icon">
                            <?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value){
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
                                <li class="<?php if (($_smarty_tpl->tpl_vars['filter']->value['icon']==$_smarty_tpl->tpl_vars['icon']->value)){?> selected<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="#" data-icon="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon16 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8', true);?>
"></i></a></li>
                            <?php } ?>
                            <input type="hidden" name="filter[icon]" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['icon'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
                        </ul>

                    </div>
                </div>
            </div>

            <div class="s-order-customer-details">
                <?php echo smarty_function_wa_action(array('app'=>"shop",'module'=>"customers",'action'=>"searchForm",'hash'=>(($tmp = @$_smarty_tpl->tpl_vars['filter']->value['hash'])===null||$tmp==='' ? '' : $tmp),'just_fields'=>true,'container_id'=>'s-customers-filter-hash-form'),$_smarty_tpl);?>

            </div>

            <div class="field">
                <div class="value">
                    <input type="hidden" name="filter[hash]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['filter']->value['hash'])===null||$tmp==='' ? '' : $tmp);?>
">
                    <input type="submit" class="button green submit" value="Сохранить">
                    или <a class="cancel" href="#">отмена</a>

                </div>
            </div>

        </div>

        <div class="clear-both"></div>

    </form>
</div>

<script>
    $(function() {

        var init = function(container) {

            (function(checkbox) {
                var duration = 0;
                var wrapper = checkbox.closest('div.value');
                var related = wrapper.next('div.value');
                var label_only_me = wrapper.find('li span').first();
                var label_everybody = wrapper.find('li span').last();
                checkbox.change(function () {
                    if (this.checked) {
                        related.find(':input').prop('disabled', false);
                        related.slideDown(duration);
                        label_everybody.removeClass('s-unselected');
                        label_only_me.addClass('s-unselected');
                    } else {
                        related.find(':input').prop('disabled', true);
                        related.slideUp(duration);
                        label_everybody.addClass('s-unselected');
                        label_only_me.removeClass('s-unselected');
                    }
                }).change().iButton({
                    labelOn: '',
                    labelOff: '',
                    className: 'mini'
                });
            })($('#s-filter-visibility'));

            (function(icons) {
                icons.on('click', 'li a', function() {
                    icons.find('.selected').removeClass();
                    $(this).closest('li').addClass('selected');
                    icons.find('[name="filter[icon]"]').val($(this).data('icon'));
                    return false;
                });
                if (!icons.find('.selected').length) {
                    icons.find('li:first a').click();
                } else {
                    icons.find('.selected a').click();
                }
            })($('.s-filter-icon', container));

            (function(form) {
                form.submit(function() {
                    var form = $(this);
                    var filter_hash_form = $('#s-customers-filter-hash-form');
                    $('[name="filter[hash]"]').val(filter_hash_form.getHash());
                    $.post(form.attr('action'), form.serialize(), function(r) {
                        if (r.status === 'ok') {
                            // update sidebar
                            var filter = r.data.filter;
                            var filters = $('#s-customer-filters');
                            if (r.data.filter_id) {
                                filters.trigger('update', [filter]);
                            } else {
                                filters.trigger('add', [filter]);
                            }
                        }
                        container.trigger('afterSubmit', [r]);
                    }, 'json');
                    return false;
                });
            })($('form', container));

            <?php if ($_smarty_tpl->tpl_vars['filter_id']->value){?>
                (function(delete_filter_link) {
                    delete_filter_link.click(function() {
                        if (confirm('Удалить фильтр поиска покупателей?')) {
                            $.post('?module=customers&action=filterDelete', {
                                id: '<?php echo $_smarty_tpl->tpl_vars['filter_id']->value;?>
'
                            }, function(r) {
                                if (r && r.status === 'ok') {
                                    $('#s-customer-filters').trigger('delete', ['<?php echo $_smarty_tpl->tpl_vars['filter_id']->value;?>
']);
                                    $.wa.setHash('#/all/');
                                }
                            }, 'json');
                        }
                        return false;
                    });
                })($('#s-delete-filter'));
            <?php }?>
        };

        $('#s-filter-settings').bind('init', function() {
            if (!$(this).data('inited')) {
                init($(this));
                $(this).data('inited', 1);
            }
        });



    });
</script><?php }} ?>