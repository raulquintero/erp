<?php


$app->get('/nomina/empleados.html','Bundles\ApiBundle\Controllers\UserController:users');
$app->map(['GET','POST'],'/users/datatable','Bundles\ApiBundle\Controllers\UserController:usersDatatable');



