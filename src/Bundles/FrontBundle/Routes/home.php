<?php

$app->get('/', 'Bundles\FrontBundle\Controllers\Home\HomeController:index')->setName('home');
$app->get('/ubicaciones', 'Bundles\FrontBundle\Controllers\HomeController:locations')->setName('locations');


