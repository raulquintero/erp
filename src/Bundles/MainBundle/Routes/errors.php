<?php 

$app->get('/404.html', 'Bundles\MainBundle\Controllers\Errors\ErrorsController:notFound404')->setName('error');
