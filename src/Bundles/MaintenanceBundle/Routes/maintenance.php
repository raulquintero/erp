<?php


$app->get('/maintenance/menues/show/{id}','Bundles\MaintenanceBundle\Controllers\Menu\MenuController:show')->setName('showMenus');
$app->get('/maintenance/menu/form/{id}','Bundles\MaintenanceBundle\Controllers\Menu\MenuController:form')->setName('showFormMenu');
$app->get('/maintenance/menu/delete/{id}','Bundles\MaintenanceBundle\Controllers\Menu\MenuController:delete')->setName('deleteMenu');
$app->post('/maintenance/menu/save/{id}','Bundles\MaintenanceBundle\Controllers\Menu\MenuController:save')->setName('saveMenu');
