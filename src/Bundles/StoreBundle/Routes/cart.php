<?php

// $app->get('/api/users', 'Api\Controllers\Users\UsersController:getAll');


$app->get('/cart/add/product/{id}', 'Bundles\StoreBundle\Controllers\Store\CartController:addItem');

