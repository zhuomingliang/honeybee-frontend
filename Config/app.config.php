<?php

define('TEMPLATE_NAME', 'default');


$databases['default']['default'] = array(
  'driver'   => 'pgsql',
  'database' => 'wanpai_hk',
  'username' => 'postgres',
  'password' => '123456',
  'host'     => 'localhost',
  'port'	 => '6432'
);


/*
  $databases['default']['slave'][] = array(
  'driver' => 'mysql',
  'database' => 'drupaldb2',
  'username' => 'username',
  'password' => 'secret',
  'host' => 'dbserver2',
);

$databases['default']['slave'][] = array(
  'driver' => 'mysql',
  'database' => 'drupaldb3',
  'username' => 'username',
  'password' => 'secret',
  'host' => 'dbserver3',
);

$databases['extra']['default'] = array(
  'driver' => 'sqlite',
  'database' => 'files/extradb.sqlite',
);
 */
?>