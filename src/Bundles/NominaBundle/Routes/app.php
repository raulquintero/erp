<?php

$app->get('/nomina', 'Bundles\NominaBundle\Controllers\Home\HomeController:index');
$app->group('/nomina', function () use ($app) {
    require 'generate.php';
    require 'employees.php';
});