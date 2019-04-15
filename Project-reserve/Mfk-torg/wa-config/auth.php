<?php
return array (
  'mfk-torg.ru' => 
  array (
    'params' => 
    array (
      'button_caption' => 'Регистрация',
    ),
    'fields' => 
    array (
      'firstname' => 
      array (
        'caption' => 'Имя',
        'placeholder' => '',
      ),
      'lastname' => 
      array (
        'caption' => 'Фамилия',
        'placeholder' => '',
      ),
      'company' => 
      array (
        'caption' => 'Компания',
        'placeholder' => '',
      ),
      'email' => 
      array (
        'caption' => 'Email',
        'placeholder' => '',
        'required' => true,
      ),
      'password' => 
      array (
        'caption' => 'Пароль',
        'placeholder' => '',
        'required' => true,
      ),
      'phone' => 
      array (
        'caption' => 'Телефон',
        'placeholder' => '',
      ),
    ),
    'auth' => true,
    'app' => 'shop',
    'signup_captcha' => true,
    'verification_channel_ids' => 
    array (
      0 => '1',
    ),
    'signup_confirm' => false,
  ),
);
