<?php

$app->get('/app/{appId}', 'Bundles\FrontBundle\Controllers\Home\HomeController:app');
$app->get('/schedule', 'Bundles\FrontBundle\Controllers\Schedule\ScheduleController:index');


