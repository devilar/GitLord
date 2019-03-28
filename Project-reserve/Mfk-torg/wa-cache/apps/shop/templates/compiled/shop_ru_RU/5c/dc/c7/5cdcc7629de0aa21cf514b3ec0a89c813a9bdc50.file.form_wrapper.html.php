<?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 14:25:55
         compiled from "/home/c/cl36655/public_html/wa-system/login/templates/setpassword/frontend/form_wrapper.html" */ ?>
<?php /*%%SmartyHeaderCode:12598248145c7d0b438da5c4-41974673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cdcc7629de0aa21cf514b3ec0a89c813a9bdc50' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-system/login/templates/setpassword/frontend/form_wrapper.html',
      1 => 1542964716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12598248145c7d0b438da5c4-41974673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'include_js' => 0,
    'include_css' => 0,
    'wa_url' => 0,
    'wa' => 0,
    'class_id' => 0,
    'wrapper_id' => 0,
    'html' => 0,
    '_resources' => 0,
    'namespace' => 0,
    'errors' => 0,
    'messages' => 0,
    '_locale' => 0,
    'is_json_mode' => 0,
    'need_redirects' => 0,
    'hash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7d0b43910480_47926446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7d0b43910480_47926446')) {function content_5c7d0b43910480_47926446($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['include_js'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['include_js']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['include_css'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['include_css']->value)===null||$tmp==='' ? false : $tmp), null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['include_css']->value&&!$_smarty_tpl->tpl_vars['include_js']->value){?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/login/frontend/set-password.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" type="text/css"/>
<?php }?>

<?php $_smarty_tpl->tpl_vars['class_id'] = new Smarty_variable('wa-set-password-form-wrapper', null, 0);?>
<?php $_smarty_tpl->tpl_vars['wrapper_id'] = new Smarty_variable(uniqid($_smarty_tpl->tpl_vars['class_id']->value), null, 0);?>

<div class="<?php echo $_smarty_tpl->tpl_vars['class_id']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['wrapper_id']->value;?>
">

    <?php echo $_smarty_tpl->tpl_vars['html']->value;?>


</div>

<?php if ($_smarty_tpl->tpl_vars['include_js']->value){?>

    <?php $_smarty_tpl->tpl_vars['_locale'] = new Smarty_variable(array('password_required'=>'Пароль не может быть пустым','not_match'=>'Пароли не совпадают','captcha_required'=>'Капча обязательна'), null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars['_resources'] = new Smarty_variable(array(array('id'=>"wa-content-setpassword-frontend-form-js",'type'=>"js",'uri'=>((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-content/js/login/setpassword-frontend-form.min.js?v=".((string)$_smarty_tpl->tpl_vars['wa']->value->version()))), null, 0);?>


    <?php if ($_smarty_tpl->tpl_vars['include_css']->value){?>

        <?php $_smarty_tpl->createLocalArrayVariable('_resources', null, 0);
$_smarty_tpl->tpl_vars['_resources']->value[] = array('id'=>"wa-content-setpassword-frontend-form-css",'type'=>"css",'uri'=>((string)$_smarty_tpl->tpl_vars['wa_url']->value)."wa-content/css/login/frontend/set-password.css?v=".((string)$_smarty_tpl->tpl_vars['wa']->value->version()));?>

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
                new WaFrontendSetPassword({
                    $wrapper: $("#<?php echo $_smarty_tpl->tpl_vars['wrapper_id']->value;?>
"),
                    namespace: <?php echo json_encode($_smarty_tpl->tpl_vars['namespace']->value);?>
,
                    errors: <?php echo json_encode($_smarty_tpl->tpl_vars['errors']->value);?>
,
                    messages: <?php echo json_encode($_smarty_tpl->tpl_vars['messages']->value);?>
,
                    locale: <?php echo json_encode($_smarty_tpl->tpl_vars['_locale']->value);?>
,
                    is_json_mode: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['is_json_mode']->value)===null||$tmp==='' ? false : $tmp));?>
,
                    need_redirects: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['need_redirects']->value)===null||$tmp==='' ? false : $tmp));?>
,
                    hash: <?php echo json_encode((($tmp = @$_smarty_tpl->tpl_vars['hash']->value)===null||$tmp==='' ? '' : $tmp));?>

                });
            }

        })(jQuery);
    </script>
<?php }?>
<?php }} ?>