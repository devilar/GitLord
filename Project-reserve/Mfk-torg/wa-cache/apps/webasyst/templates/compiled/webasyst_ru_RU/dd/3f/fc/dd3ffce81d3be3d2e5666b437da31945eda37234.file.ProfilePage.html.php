<?php /* Smarty version Smarty-3.1.14, created on 2019-03-12 00:52:53
         compiled from "/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/profile/ProfilePage.html" */ ?>
<?php /*%%SmartyHeaderCode:12406634095c86d8b58a0603-96328030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd3ffce81d3be3d2e5666b437da31945eda37234' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/webasyst/templates/actions/profile/ProfilePage.html',
      1 => 1540900318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12406634095c86d8b58a0603-96328030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'top' => 0,
    'top_field' => 0,
    'wa' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c86d8b58e9b58_61346004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c86d8b58e9b58_61346004')) {function content_5c86d8b58e9b58_61346004($_smarty_tpl) {?>
<div class="t-profile-page">
    <div class="t-profile block double-padded">
        <div class="profile image144px">
            <div class="image">
                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getPhoto2x(96);?>
" class="userpic t-userpic">
                <div class="wa-contact-photo-buttons">
                    <div class="photo-change-link">
                        <a href="javascript:void(0)">Изменить фото</a>
                    </div>
                </div>
            </div>
            <div class="details">
                <h1>
                    <span class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <span class="contact-name"><?php echo htmlspecialchars(waContactNameField::formatName($_smarty_tpl->tpl_vars['user']->value,true), ENT_QUOTES, 'UTF-8', true);?>
</span>
                    <span class="hint">@<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                </h1>
                <?php if (!$_smarty_tpl->tpl_vars['user']->value['is_company']){?>
                    <p class="jobtitle-company">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['jobtitle']){?>
                            <span class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['jobtitle'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['jobtitle']&&$_smarty_tpl->tpl_vars['user']->value['company']){?>
                            <span class="at">в</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['company']){?>
                            <span class="company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['company'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <?php }?>
                    </p>
                <?php }?>

                <ul class="menu-v compact" id="contact-info-top">
                    <?php  $_smarty_tpl->tpl_vars['top_field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['top_field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['top_field']->key => $_smarty_tpl->tpl_vars['top_field']->value){
$_smarty_tpl->tpl_vars['top_field']->_loop = true;
?>
                        <li class="top-field-<?php echo $_smarty_tpl->tpl_vars['top_field']->value['id'];?>
"><?php if ($_smarty_tpl->tpl_vars['top_field']->value['id']!='im'){?><?php if ($_smarty_tpl->tpl_vars['top_field']->value['icon']){?><i class="icon16 <?php echo $_smarty_tpl->tpl_vars['top_field']->value['id'];?>
"></i><?php }?><?php }?><?php echo $_smarty_tpl->tpl_vars['top_field']->value['value'];?>
</li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->contactProfileTabs($_smarty_tpl->tpl_vars['user']->value['id']);?>


</div>

<script>jQuery(function($){ "use strict";

    var $contact_info_top = $('#contact-info-top');
    var $wrapper = $contact_info_top.closest('.t-profile-page');

    // When data in Contact Info tab is saved, update the block above calendar
    var $profile_tabs_iframes = $wrapper.find('.t-profile-tabs-iframes');
    $profile_tabs_iframes.on('contact_saved', function(evt, data) {
        // Name, title, company, job title
        var $h1 = $wrapper.find('.profile .details h1').first();
        $h1.children('.contact-name:first').text(data.name);
        $h1.children('.title:first').text(data.title);

        var $work = $h1.closest('.details').find('.jobtitle-company');
        $work.children('.company').text(data.company);
        $work.children('.title').text(data.jobtitle);
    });
    $profile_tabs_iframes.on('top_fields_updated', function(evt, top) {
        // common fields like email, phone and im
        var html = '';
        for (var j = 0; j < top.length; j++) {
            var f = top[j];
            var icon = f.id != 'im' ? (f.icon ? '<i class="icon16 ' + f.id + '"></i>' : '') : '';
            html += '<li>' + icon + f.value + '</li>';
        }
        $contact_info_top.html(html);
    });


    $.wa.loadFiles({
        "<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.dialog.js?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
": typeof $.fn.waDialog !== 'function'
    }).then(function(){

        // When photo editor dialog changes something, update the contact photo
        $wrapper.on('photo_updated photo_deleted', function(evt, data) {
            $wrapper.find('.t-userpic').attr('src', data.url);
        });

        // Open photo editor when user clicks on "Change photo" link
        $wrapper.find('.photo-change-link a').click(function() {
            $('#contact-photo-crop-dialog').remove();
            $('<div id="contact-photo-crop-dialog">').appendTo($wrapper).waDialog({
                'class': 'large',
                url: "?module=profile&action=photo",
                onLoad: function(d) {
                    // move buttons where appropriate
                    var $dialog = $(this);
                    $dialog.find('.dialog-buttons-gradient').append($dialog.find('.dialog-content-indent .buttons'));
                }
            });
        });

    });

});</script><?php }} ?>