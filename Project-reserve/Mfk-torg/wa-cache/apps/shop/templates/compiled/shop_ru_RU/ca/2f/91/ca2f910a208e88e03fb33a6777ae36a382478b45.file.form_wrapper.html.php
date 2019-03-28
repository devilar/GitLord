<?php /* Smarty version Smarty-3.1.14, created on 2019-03-03 00:16:03
         compiled from "/home/c/cl36655/public_html/wa-system/signup/templates/form_wrapper.html" */ ?>
<?php /*%%SmartyHeaderCode:11836556235c7af293c75054-48326312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca2f910a208e88e03fb33a6777ae36a382478b45' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/signup/templates/form_wrapper.html',
      1 => 1548766579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11836556235c7af293c75054-48326312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'include_css' => 0,
    'include_js' => 0,
    'class_id' => 0,
    'is_onetime_password_auth_type' => 0,
    'is_need_confirm' => 0,
    '_classes' => 0,
    'timeout' => 0,
    '_timeout' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'wrapper_id' => 0,
    'form' => 0,
    '_resources' => 0,
    'namespace' => 0,
    '_locale' => 0,
    'url' => 0,
    'need_redirects' => 0,
    'contact_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7af293cb9077_42107333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7af293cb9077_42107333')) {function content_5c7af293cb9077_42107333($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['include_css'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['include_css']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['include_js'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['include_js']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>

<?php $_smarty_tpl->tpl_vars['class_id'] = new Smarty_variable('wa-signup-form-wrapper', null, 0);?>
<?php $_smarty_tpl->tpl_vars['wrapper_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class_id']->value), null, 0);?>


<?php $_smarty_tpl->tpl_vars['_classes'] = new Smarty_variable(array($_smarty_tpl->tpl_vars['class_id']->value), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?>
    <?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = 'wa-is-onetime-password-auth-type';?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['is_need_confirm']->value){?>
    <?php $_smarty_tpl->createLocalArrayVariable('_classes', null, 0);
$_smarty_tpl->tpl_vars['_classes']->value[] = 'wa-is-need-confirm';?>
<?php }?>
<?php $_smarty_tpl->tpl_vars['_classes'] = new Smarty_variable(join($_smarty_tpl->tpl_vars['_classes']->value," "), null, 0);?>

<?php $_smarty_tpl->tpl_vars['_timeout'] = new Smarty_variable(intval((($tmp = @$_smarty_tpl->tpl_vars['timeout']->value)===null||$tmp==='' ? 0 : $tmp)), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['_timeout']->value<=0){?><?php $_smarty_tpl->tpl_vars['_timeout'] = new Smarty_variable(60, null, 0);?><?php }?>

<?php $_smarty_tpl->tpl_vars['_locale'] = new Smarty_variable(array('required'=>_ws('Field is required'),'onetime_password_required'=>_ws('Enter a confirmation code to complete signup'),'confirmation_code_required'=>_ws('Enter a confirmation code to complete signup'),'captcha_required'=>_ws('Captcha is required'),'sent_by_email'=>_ws('(sent by email)'),'sent_by_sms'=>_ws('(sent in SMS)')), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['include_css']->value&&!$_smarty_tpl->tpl_vars['include_js']->value){?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/signup/signup.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" type="text/css"/>
<?php }?>

<div class="<?php echo $_smarty_tpl->tpl_vars['_classes']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['wrapper_id']->value;?>
" style="visibility: hidden;">

    
    <?php echo $_smarty_tpl->tpl_vars['form']->value;?>


    <?php if ($_smarty_tpl->tpl_vars['include_js']->value){?>

        
        <?php $_smarty_tpl->tpl_vars['_resources'] = new Smarty_variable(array(array('id'=>"wa-content-signup-js",'type'=>"js",'uri'=>((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-content/js/signup/signup.js?v=".((string)$_smarty_tpl->tpl_vars['wa']->value->version()))), null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['include_css']->value){?>
            <?php $_smarty_tpl->createLocalArrayVariable('_resources', null, 0);
$_smarty_tpl->tpl_vars['_resources']->value[] = array('id'=>"wa-content-signup-css",'type'=>"css",'uri'=>((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-content/css/signup/signup.css?v=".((string)$_smarty_tpl->tpl_vars['wa']->value->version()));?>
        <?php }?>

        <script>
            ( function($) { "use strict";
                load(<?php echo json_encode($_smarty_tpl->tpl_vars['_resources']->value);?>
).then(init);

                function load(sources) {
                    var deferred = $.Deferred();

                    loader(sources).then( function() {
                        deferred.resolve();
                    }, function(bad_sources) {
                        if (console && console.error) {
                            console.error("Error loading resource", bad_sources);
                        }
                        deferred.reject(bad_sources);
                    });

                    return deferred.promise();

                    function loader(sources) {
                        var deferred = $.Deferred(),
                            counter = sources.length;

                        var bad_sources = [];

                        $.each(sources, function(i, source) {
                            switch (source.type) {
                                case "css":
                                    loadCSS(source).then(onLoad, onError);
                                    break;
                                case "js":
                                    loadJS(source).then(onLoad, onError);
                                    break;
                            }
                        });

                        return deferred.promise();

                        function loadCSS(source) {
                            var deferred = $.Deferred(),
                                promise = deferred.promise();

                            var $link = $("#" + source.id);
                            if ($link.length) {
                                promise = $link.data("promise");

                            } else {
                                $link = $("<link />", {
                                    id: source.id,
                                    rel: "stylesheet"
                                }).appendTo("head")
                                    .data("promise", promise);

                                $link
                                    .on("load", function() {
                                        deferred.resolve(source);
                                    }).on("error", function() {
                                    deferred.reject(source);
                                });

                                $link.attr("href", source.uri);
                            }

                            return promise;
                        }

                        function loadJS(source) {
                            var deferred = $.Deferred(),
                                promise = deferred.promise();

                            var $script = $("#" + source.id);
                            if ($script.length) {
                                promise = $script.data("promise");

                            } else {
                                var script = document.createElement("script");
                                document.getElementsByTagName("head")[0].appendChild(script);

                                $script = $(script)
                                    .attr("id", source.id)
                                    .data("promise", promise);

                                $script
                                    .on("load", function() {
                                        deferred.resolve(source);
                                    }).on("error", function() {
                                    deferred.reject(source);
                                });

                                $script.attr("src", source.uri);
                            }

                            return promise;
                        }

                        function onLoad(source) {
                            counter -= 1;
                            watcher();
                        }

                        function onError(source) {
                            bad_sources.push(source);
                            counter -= 1;
                            watcher();
                        }

                        function watcher() {
                            if (counter === 0) {
                                if (!bad_sources.length) {
                                    deferred.resolve();
                                } else {
                                    deferred.reject(bad_sources);
                                }
                            }
                        }
                    }
                }

                function init() {
                    new WaSignup({
                        $wrapper: $("#<?php echo $_smarty_tpl->tpl_vars['wrapper_id']->value;?>
").removeAttr("style"),
                        namespace: <?php echo json_encode($_smarty_tpl->tpl_vars['namespace']->value);?>
,
                        locale: <?php echo json_encode($_smarty_tpl->tpl_vars['_locale']->value);?>
,
                        timeout: <?php echo json_encode($_smarty_tpl->tpl_vars['_timeout']->value);?>
,
                        url: <?php echo json_encode($_smarty_tpl->tpl_vars['url']->value);?>
,
                        is_onetime_password_auth_type: <?php echo json_encode($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value);?>
,
                        is_need_confirm: <?php echo json_encode($_smarty_tpl->tpl_vars['is_need_confirm']->value);?>
,
                        need_redirects: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['need_redirects']->value)===null||$tmp==='' ? '' : $tmp));?>
,
                        contact_type: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['contact_type']->value)===null||$tmp==='' ? '' : $tmp));?>

                    });
                }
            })(jQuery);
        </script>

    <?php }?>
</div>
<?php }} ?>