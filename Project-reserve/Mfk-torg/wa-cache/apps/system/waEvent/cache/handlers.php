<?php
return array (
  'plugins' => 
  array (
    'shop' => 
    array (
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
    ),
  ),
  'handlers' => 
  array (
    'mailer' => 
    array (
      'recipients.form' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/recipients\\.form/',
          'file' => 'mailer.recipients.form.handler.php',
          'class' => 'contactsMailerRecipientsFormHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'contacts' => 
    array (
      'contacts_collection' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'contactsContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'shopContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'delete' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'contactsContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'shopContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        2 => 
        array (
          'app_id' => 'blog',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'blogContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'merge' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/merge/',
          'file' => 'contacts.merge.handler.php',
          'class' => 'shopContactsMergeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'regex' => '/merge/',
          'file' => 'contacts.merge.handler.php',
          'class' => 'blogContactsMergeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'links' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'shopContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'blog',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'blogContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'profile.tab' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'shopContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'explore' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/explore/',
          'file' => 'contacts.explore.handler.php',
          'class' => 'shopContactsExploreHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'shop' => 
    array (
      'backend_customers_list' => 
      array (
        0 => 
        array (
          'app_id' => 'contacts',
          'regex' => '/backend_customers_list/',
          'file' => 'shop.backend_customers_list.handler.php',
          'class' => 'contactsShopBackend_customers_listHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_category_dialog' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimages',
          'regex' => '/backend_category_dialog/',
          'class' => 'shopCategoryimagesPlugin',
          'method' => 
          array (
            0 => 'backendCategoryDialog',
          ),
        ),
      ),
      'category_save' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimages',
          'regex' => '/category_save/',
          'class' => 'shopCategoryimagesPlugin',
          'method' => 
          array (
            0 => 'categorySave',
          ),
        ),
      ),
      'frontend_category' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimages',
          'regex' => '/frontend_category/',
          'class' => 'shopCategoryimagesPlugin',
          'method' => 
          array (
            0 => 'frontendCategory',
          ),
        ),
      ),
      'category_delete' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimages',
          'regex' => '/category_delete/',
          'class' => 'shopCategoryimagesPlugin',
          'method' => 
          array (
            0 => 'categoryDelete',
          ),
        ),
      ),
      'routing' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimages',
          'regex' => '/routing/',
          'class' => 'shopCategoryimagesPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'fcart',
          'regex' => '/routing/',
          'class' => 'shopFcartPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'backtop',
          'regex' => '/routing/',
          'class' => 'shopBacktopPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'listfeatures',
          'regex' => '/routing/',
          'class' => 'shopListfeaturesPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'smartsearch',
          'regex' => '/routing/',
          'class' => 'shopSmartsearchPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
      ),
      'backend_products' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'categoryimages',
          'regex' => '/backend_products/',
          'class' => 'shopCategoryimagesPlugin',
          'method' => 
          array (
            0 => 'backendProducts',
          ),
        ),
      ),
      'frontend_head' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'fcart',
          'regex' => '/frontend_head/',
          'class' => 'shopFcartPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'backtop',
          'regex' => '/frontend_head/',
          'class' => 'shopBacktopPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        2 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sovetnik',
          'regex' => '/frontend_head/',
          'class' => 'shopSovetnikPlugin',
          'method' => 
          array (
            0 => 'headProduct',
          ),
        ),
        3 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'listfeatures',
          'regex' => '/frontend_head/',
          'class' => 'shopListfeaturesPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
        4 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'smartsearch',
          'regex' => '/frontend_head/',
          'class' => 'shopSmartsearchPlugin',
          'method' => 
          array (
            0 => 'frontendHead',
          ),
        ),
      ),
      'frontend_footer' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'fcart',
          'regex' => '/frontend_footer/',
          'class' => 'shopFcartPlugin',
          'method' => 
          array (
            0 => 'frontendFooter',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sovetnik',
          'regex' => '/frontend_footer/',
          'class' => 'shopSovetnikPlugin',
          'method' => 
          array (
            0 => 'footerProduct',
          ),
        ),
      ),
      'frontend_header' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'backtop',
          'regex' => '/frontend_header/',
          'class' => 'shopBacktopPlugin',
          'method' => 
          array (
            0 => 'frontendHeader',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'sovetnik',
          'regex' => '/frontend_header/',
          'class' => 'shopSovetnikPlugin',
          'method' => 
          array (
            0 => 'headerProduct',
          ),
        ),
      ),
    ),
    'site' => 
    array (
      'update.route' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/update\\.route/',
          'file' => 'site.update.route.handler.php',
          'class' => 'shopSiteUpdateRouteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.after/',
          'file' => 'site.route_save.after.handler.php',
          'class' => 'shopSiteRoute_saveAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.before' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.before/',
          'file' => 'site.route_save.before.handler.php',
          'class' => 'shopSiteRoute_saveBeforeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_delete.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_delete\\.after/',
          'file' => 'site.route_delete.after.handler.php',
          'class' => 'shopSiteRoute_deleteAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'webasyst' => 
    array (
      'settings_sidebar' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/settings_sidebar/',
          'file' => 'webasyst.settings_sidebar.handler.php',
          'class' => 'shopWebasystSettings_sidebarHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
  ),
);
