<?php

$app->get('/timeclock','Bundles\TimeClockBundle\Controllers\TimeClock\TimeClockController:index');
$app->group('/timeclock', function () use ($app) {
});