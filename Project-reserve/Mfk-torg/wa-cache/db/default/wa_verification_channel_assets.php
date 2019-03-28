<?php
return array (
  'id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'autoincrement' => 1,
  ),
  'channel_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
  ),
  'address' => 
  array (
    'type' => 'varchar',
    'params' => '64',
    'null' => 0,
  ),
  'contact_id' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
  'name' => 
  array (
    'type' => 'varchar',
    'params' => '64',
    'null' => 0,
  ),
  'value' => 
  array (
    'type' => 'text',
  ),
  'expires' => 
  array (
    'type' => 'datetime',
  ),
  'tries' => 
  array (
    'type' => 'int',
    'params' => '11',
    'null' => 0,
    'default' => '0',
  ),
);
