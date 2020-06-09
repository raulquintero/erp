<?php

$app->get('/productos/{category}','Bundles\StoreBundle\Controllers\Store\CatalogueController:show');
$app->get('/producto/{productId}','Bundles\StoreBundle\Controllers\Store\ProductController:show');
