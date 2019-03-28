<?php
return array (
  'contacts' => 
  array (
    'id' => 'contacts',
    'name' => 'Контакты',
    'icon' => 
    array (
      48 => 'wa-apps/contacts/img/contacts.png',
      96 => 'wa-apps/contacts/img/contacts96.png',
      24 => 'wa-apps/contacts/img/contacts.png',
      16 => 'wa-apps/contacts/img/contacts.png',
    ),
    'rights' => true,
    'analytics' => true,
    'version' => '1.1.6',
    'critical' => '1.1.0',
    'vendor' => 'webasyst',
    'system' => false,
    'csrf' => true,
    'plugins' => true,
    'frontend' => true,
    'routing_params' => 
    array (
      'private' => true,
    ),
    'build' => 20,
    'img' => 'wa-apps/contacts/img/contacts.png',
  ),
  'installer' => 
  array (
    'id' => 'installer',
    'name' => 'Инсталлер',
    'description' => 'Install new apps from the Webasyst Store',
    'icon' => 
    array (
      48 => 'wa-apps/installer/img/installer.png',
      96 => 'wa-apps/installer/img/installer96.png',
      24 => 'wa-apps/installer/img/installer.png',
      16 => 'wa-apps/installer/img/installer.png',
    ),
    'mobile' => false,
    'version' => '1.10.10',
    'critical' => '1.10.10',
    'system' => true,
    'vendor' => 'webasyst',
    'csrf' => true,
    'build' => 380,
    'img' => 'wa-apps/installer/img/installer.png',
  ),
  'site' => 
  array (
    'id' => 'site',
    'name' => 'Сайт',
    'icon' => 
    array (
      96 => 'wa-apps/site/img/site96.png',
      48 => 'wa-apps/site/img/site.png',
      24 => 'wa-apps/site/img/site24.png',
      16 => 'wa-apps/site/img/site16.png',
    ),
    'sash_color' => '#49a2e0',
    'frontend' => true,
    'version' => '2.5.5',
    'critical' => '2.5.0',
    'vendor' => 'webasyst',
    'system' => true,
    'rights' => true,
    'plugins' => true,
    'themes' => true,
    'pages' => true,
    'auth' => true,
    'csrf' => true,
    'my_account' => true,
    'build' => 171,
    'img' => 'wa-apps/site/img/site.png',
  ),
  'shop' => 
  array (
    'id' => 'shop',
    'name' => 'Магазин',
    'description' => 'Shop-Script is a robust shopping cart software that allows you to quickly establish your own online store and sell online.',
    'icon' => 
    array (
      16 => 'wa-apps/shop/img/shop16.png',
      24 => 'wa-apps/shop/img/shop24.png',
      48 => 'wa-apps/shop/img/shop48.png',
      96 => 'wa-apps/shop/img/shop96.png',
    ),
    'sash_color' => '#27bf52',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'my_account' => true,
    'version' => '8.3.0',
    'critical' => '8.0.0',
    'vendor' => 'webasyst',
    'csrf' => true,
    'payment_plugins' => 
    array (
      'taxes' => true,
    ),
    'shipping_plugins' => 
    array (
      'desired_date' => true,
      'draft' => true,
      'ready' => true,
      'cancel' => true,
      'taxes' => true,
      'custom_fields' => true,
      'dimensions' => false,
    ),
    'sms_plugins' => true,
    'license' => 'commercial',
    'build' => 7,
    'img' => 'wa-apps/shop/img/shop48.png',
  ),
  'blog' => 
  array (
    'id' => 'blog',
    'name' => 'Блог',
    'icon' => 
    array (
      16 => 'wa-apps/blog/img/blog16.png',
      24 => 'wa-apps/blog/img/blog24.png',
      48 => 'wa-apps/blog/img/blog.png',
      96 => 'wa-apps/blog/img/blog96.png',
    ),
    'sash_color' => '#f0b100',
    'rights' => true,
    'frontend' => true,
    'auth' => true,
    'themes' => true,
    'plugins' => true,
    'pages' => true,
    'mobile' => true,
    'version' => '1.4.1',
    'critical' => '1.4.1',
    'vendor' => 'webasyst',
    'csrf' => true,
    'my_account' => true,
    'routing_params' => 
    array (
      'blog_url_type' => 1,
    ),
    'build' => 24,
    'img' => 'wa-apps/blog/img/blog.png',
  ),
  'webasyst' => 
  array (
    'id' => 'webasyst',
    'name' => 'Вебасист',
    'prefix' => 'webasyst',
    'version' => '1.10.10',
    'critical' => '1.10.10',
    'vendor' => 'webasyst',
    'csrf' => true,
    'header_items' => 
    array (
      'settings' => 
      array (
        'icon' => 
        array (
          24 => 'wa-content/img/wa-settings/settings-24.png',
          48 => 'wa-content/img/wa-settings/settings-48.png',
          96 => 'wa-content/img/wa-settings/settings-96.png',
          384 => 'wa-content/img/wa-settings/settings-384.png',
        ),
        'name' => 'Настройки',
        'link' => 'settings',
        'rights' => 'backend',
        'img' => 'wa-content/img/wa-settings/settings-48.png',
      ),
    ),
    'build' => 380,
    'icon' => 
    array (
    ),
  ),
);
