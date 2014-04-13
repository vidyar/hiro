<?php

$serviceConfig = [
    'db' => [
        'class' => 'Infor\Hiro\Db',
        'arguments' => ['sqlite:///var/www/alcohol.gruszka.info/codiad/workspace/php-tests/db.sqlite']
    ],
    'request' => [
    	'class' => 'Infor\Hiro\Request',
    ],
    'response' => [
    	'class' => 'Infor\Hiro\Response',
    ],
    'router' => [
    	'class' => 'Infor\Hiro\Router',
        'calls' => ['request', 'response'],
    ],
    'storage' => [
        'class' => 'Infor\Hiro\CookieStorage', 
        'arguments' => ['cookie_xyz'],
    ],
    'user' => [
        'class' => 'Infor\Hiro\User', 
        'calls' => ['storage', 'db'],
    ],
];
