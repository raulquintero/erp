<?php



$app->get('/maintenance', 'Bundles\MainBundle\Controllers\Maintenance\InfoController:index');

$app->group('/maintenance', function () use ($app) {
    $app->get('/info', 'Bundles\MainBundle\Controllers\Maintenance\InfoController:index');
});
