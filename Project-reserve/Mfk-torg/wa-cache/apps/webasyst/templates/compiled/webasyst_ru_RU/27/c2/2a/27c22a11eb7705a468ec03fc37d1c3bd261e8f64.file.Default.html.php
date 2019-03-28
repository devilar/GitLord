<?php /* Smarty version Smarty-3.1.14, created on 2019-03-04 10:51:21
         compiled from "/home/c/cl36655/public_html/wa-widgets/traffic/templates/Default.html" */ ?>
<?php /*%%SmartyHeaderCode:3948265095c7cd8f9cd4692-52912298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27c22a11eb7705a468ec03fc37d1c3bd261e8f64' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-widgets/traffic/templates/Default.html',
      1 => 1443175450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3948265095c7cd8f9cd4692-52912298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'city' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7cd8f9d22434_00015790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7cd8f9d22434_00015790')) {function content_5c7cd8f9d22434_00015790($_smarty_tpl) {?><style>
    .map-canvas-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .map-canvas-wrapper .map-canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .wa-no-traffic { margin: 15px 10px; font-weight: normal; }

    .widget-2x1 .wa-no-traffic { margin: 30px 55px; }
    .widget-2x2 .wa-no-traffic { margin: 70px 35px; }
</style>

<div class="map-canvas-wrapper">
    <div class="map-canvas" id="s-traffic-map-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" title="<?php echo htmlspecialchars(sprintf('%s traffic',$_smarty_tpl->tpl_vars['city']->value), ENT_QUOTES, 'UTF-8', true);?>
"></div>
</div>



    
        
        
        
        
            

            
                
                        
                        
                        
                    

                
                
                        
                        
                        
                        
                    
                
                
                
                

                
                
                    
                

                
                

                
                
                
            

            
            
                
                
                    
                        
                            
                        
                    
                        
                        
                    
                
                
                    
                        
                        
                            
                        
                            
                        
                    
                    
                        
                    
                
            
            
        
    


<script>
    ( function($) {

        var href = "//api-maps.yandex.ru/2.1/?lang=ru_RU",
            canvas_id = "s-traffic-map-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
",
            tries = 3;
        
        var initMap = function() {
            var myGeoCoder = ymaps.geocode(<?php echo json_encode($_smarty_tpl->tpl_vars['city']->value);?>
);

            var errorHandler = function() {
                if (tries > 0) {
                    setTimeout( function() {
                        tries--;
                        initMap();
                    }, 700 - tries * 100);
                } else {
                    <?php $_smarty_tpl->tpl_vars['msg'] = new Smarty_variable(sprintf('Информация о пробках в городе <strong>%s</strong> не найдена. Проверьте правильность написания города в профиле вашего пользователя.',(($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['city']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '(неизвестный город)' : $tmp)), null, 0);?>
                    $('#s-traffic-map-<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
').html('<h5 class="align-center hint wa-no-traffic"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h5>');
                }
            };

            myGeoCoder.then(
                function(res) {
                    var geo = res.geoObjects.get(0);
                    if (geo) {

                        var coordinates = geo.geometry.getCoordinates();
                        renderYMap(coordinates);

                    } else {

                        errorHandler();

                    }
                },
                function () {
                    errorHandler();
                }
            );
        };

        var renderYMap = function(center) {
            var myMap = new ymaps.Map(canvas_id, {
                center: ( center || [36.090857, 28.08148] ),
                zoom: 10,
                controls: []
            });

            // Создадим элемент управления "Пробки".
            var trafficControl = new ymaps.control.TrafficControl({
                state: {
                    // Отображаются пробки "Сейчас".
                    providerKey: 'traffic#actual',
                    // Начинаем сразу показывать пробки на карте.
                    trafficShown: true
                }
            });

            // Добавим контрол на карту.
            myMap.controls.add(trafficControl);
            // Получим ссылку на провайдер пробок "Сейчас" и включим показ инфоточек.
            trafficControl.getProvider('traffic#actual').state.set('infoLayerShown', true);

            // Создаем панель поиска
            var searchControl = new ymaps.control.SearchControl({
                provider: 'yandex#map'
            });

            // добавляем панель на карту в нужную позицию
            myMap.controls.add(searchControl, {
                left: '40px',
                top: '10px'
            });

            // добавляем zoom панель на карту и дизейблим zoom по скролу
            myMap.controls.add('zoomControl', {
                left: 5,
                top: 75
            });

            myMap.behaviors.disable("scrollZoom");
        };

        if (typeof ymaps == "undefined") {
            $.getScript(href, function() {
                ymaps.ready(initMap);
            });
        } else {
            ymaps.ready(initMap);
        }
        
    })(jQuery);
</script><?php }} ?>