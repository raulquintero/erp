<?php

$app->get('/view', 'Bundles\LoggerViewerBundle\Controllers\HomeController:index');
$app->get('/view/{type}', 'Bundles\LoggerViewerBundle\Controllers\HomeController:index');



