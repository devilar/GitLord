<?php
return array (
  'categoryimages' => 
  array (
    'name' => 'Изображения для категорий',
    'description' => 'Загрузка и вывод изображений для категорий',
    'vendor' => '851416',
    'version' => '2.0.6',
    'img' => 'wa-apps/shop/plugins/categoryimages/img/icon.png',
    'icon' => 
    array (
      16 => 'img/icon.png',
    ),
    'shop_settings' => true,
    'handlers' => 
    array (
      'backend_category_dialog' => 'backendCategoryDialog',
      'category_save' => 'categorySave',
      'frontend_category' => 'frontendCategory',
      'category_delete' => 'categoryDelete',
      'routing' => 'routing',
      'backend_products' => 'backendProducts',
    ),
    'id' => 'categoryimages',
    'app_id' => 'shop',
    'custom_settings' => true,
  ),
  'fcart' => 
  array (
    'name' => 'Плавающая корзина',
    'description' => 'Плавающая корзина с списком товаров',
    'img' => 'wa-apps/shop/plugins/fcart/img/fcart.png',
    'version' => '1.0',
    'vendor' => 965055,
    'shop_settings' => true,
    'frontend' => true,
    'icons' => 
    array (
      16 => 'img/fcart.png',
    ),
    'handlers' => 
    array (
      'frontend_head' => 'frontendHead',
      'frontend_footer' => 'frontendFooter',
      'routing' => 'routing',
    ),
    'id' => 'fcart',
    'app_id' => 'shop',
    'custom_settings' => true,
  ),
  'backtop' => 
  array (
    'name' => 'Кпопка вверх',
    'description' => 'Кнопка прокрутки страницы вверх, полный комплект настроек',
    'img' => 'wa-apps/shop/plugins/backtop/img/Backtop.png',
    'version' => '1.1.1',
    'vendor' => 965055,
    'shop_settings' => true,
    'frontend' => true,
    'icons' => 
    array (
      16 => 'img/Backtop.png',
    ),
    'handlers' => 
    array (
      'frontend_header' => 'frontendHeader',
      'frontend_head' => 'frontendHead',
      'routing' => 'routing',
    ),
    'id' => 'backtop',
    'app_id' => 'shop',
    'custom_settings' => true,
  ),
  'sovetnik' => 
  array (
    'name' => 'Блокировка Яндекс.Советника',
    'description' => 'Блокирует появление подсказок Яндекс.Советника',
    'img' => 'wa-apps/shop/plugins/sovetnik/img/logo.png',
    'version' => '1.2.7',
    'vendor' => 1023936,
    'handlers' => 
    array (
      'frontend_head' => 'headProduct',
      'frontend_header' => 'headerProduct',
      'frontend_footer' => 'footerProduct',
    ),
    'id' => 'sovetnik',
    'app_id' => 'shop',
  ),
  'listfeatures' => 
  array (
    'name' => 'Характеристики в списках товаров',
    'description' => 'Отображает характеристики товаров в списках и категориях.',
    'vendor' => 817747,
    'version' => '2.4.1',
    'img' => 'wa-apps/shop/plugins/listfeatures/img/listfeatures16.png',
    'shop_settings' => true,
    'frontend' => true,
    'handlers' => 
    array (
      'frontend_head' => 'frontendHead',
      'routing' => 'routing',
    ),
    'id' => 'listfeatures',
    'app_id' => 'shop',
    'custom_settings' => true,
  ),
  'smartsearch' => 
  array (
    'name' => 'Умный поиск',
    'description' => 'Автодополнение при поиске товаров в строке поиска',
    'vendor' => '985310',
    'version' => '1.0.2',
    'img' => 'wa-apps/shop/plugins/smartsearch/img/smartsearch.png',
    'shop_settings' => true,
    'frontend' => true,
    'handlers' => 
    array (
      'frontend_head' => 'frontendHead',
      'routing' => 'routing',
    ),
    'id' => 'smartsearch',
    'app_id' => 'shop',
    'custom_settings' => true,
  ),
);
