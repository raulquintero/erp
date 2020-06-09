<?php

$app->group('/modules', function () use ($app) {
    $app->get('/store','Bundles\FrontBundle\Controllers\Modules\ModulesController:index');
});