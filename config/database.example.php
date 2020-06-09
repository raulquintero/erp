<?php

return [
  		// default db connection settings
    'dev' => [
        'driver' => 'mysql',
        'host' => DEV_SERVER,
        'database' => 'store',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => ''
    ],
    'prod' => [
        'driver' => 'mysql',
        'host' => PROD_SERVER,
        'database' => 'store',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => ''
    ],

];