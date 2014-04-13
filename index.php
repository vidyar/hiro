<?php

namespace Infor;

ini_set('display_errors', 'stderr');

require 'vendor/autoload.php';
require 'serviceConfig.php';

$serviceContainer = new Hiro\ServiceContainer($serviceConfig);

$serviceContainer->router->route($_SERVER['REQUEST_URI']);

//$user = $c->user->getById($c->request->get('id'));
//var_dump($user);

